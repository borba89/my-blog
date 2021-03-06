<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\AdminBundle\Annotation;

use JMS\DiExtraBundle\Annotation\MetadataProcessorInterface;
use JMS\DiExtraBundle\Metadata\ClassMetadata;
use Sonata\AdminBundle\Admin\AbstractAdmin as AdminClass;
use Sonata\AdminBundle\Controller\CRUDController;

/**
 * Use annotations to define admin classes.
 *
 * @Annotation
 * @Target("CLASS")
 */
class Admin implements MetadataProcessorInterface
{
    /**
     * Service id - autogenerated per default.
     *
     * @var string
     */
    public $id;

    /**
     * Admin class.
     *
     * @var string
     */
    public $class;

    /**
     * Data storage.
     *
     * @var string
     */
    public $managerType = 'orm';

    /**
     * @var string
     */
    public $pagerType;

    /**
     * @var string
     */
    public $persistFilters;

    /**
     * Admin group with fallback to class.
     *
     * @var string
     */
    public $group;

    /**
     * Icon for admin group default is '<i class="fa fa-folder"></i>'.
     *
     * @var string
     */
    public $icon;

    /**
     * Admin label with fallback to class.
     *
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $baseControllerName = CRUDController::class;

    /**
     * @var string
     */
    public $translationDomain;

    /**
     * @var bool
     */
    public $showInDashboard = true;

    /**
     * @var bool
     */
    public $keepOpen = false;

    /**
     * @var bool
     */
    public $onTop = false;

    public function processMetadata(ClassMetadata $metadata)
    {
        $this->generateFallback($this->class);
        $this->validate();

        $tag = [
            'manager_type' => $this->managerType,
            'group' => $this->group,
            'label' => $this->label,
            'show_in_dashboard' => $this->showInDashboard,
            'icon' => $this->icon,
            'pager_type' => $this->pagerType,
            'persist_filters' => $this->persistFilters,
            'keep_open' => $this->keepOpen,
            'on_top' => $this->onTop,
        ];

        $tag = array_filter($tag, function ($v) {
            return null !== $v;
        });

        if (!empty($this->id)) {
            $metadata->id = $this->id;
        }

        $metadata->tags['sonata.admin'][] = $tag;
        $metadata->arguments = [$this->id, $this->class, $this->baseControllerName];

        if ($this->translationDomain) {
            $metadata->methodCalls[] = ['setTranslationDomain', [$this->translationDomain]];
        }
    }

    private function validate(): void
    {
        if (!$this->showInDashboard) {
            return;
        }

        if (empty($this->group) || empty($this->label)) {
            throw new \LogicException(
                sprintf(
                    'Unable to generate admin group and label for class %s.',
                    $this->class
                )
            );
        }
    }

    /**
     * Set group and label from class name it not set.
     */
    private function generateFallback($name): void
    {
        if (empty($name)) {
            return;
        }

        if (preg_match(AdminClass::CLASS_REGEX, $name, $matches)) {
            if (empty($this->group)) {
                $this->group = $matches[3];
            }

            if (empty($this->label)) {
                $this->label = $matches[5];
            }
        }
    }
}
