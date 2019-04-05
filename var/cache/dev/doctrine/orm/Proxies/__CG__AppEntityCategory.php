<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Category extends \App\Entity\Category implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Category' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Category' . "\0" . 'nameCategory', '' . "\0" . 'App\\Entity\\Category' . "\0" . 'left', '' . "\0" . 'App\\Entity\\Category' . "\0" . 'right', '' . "\0" . 'App\\Entity\\Category' . "\0" . 'parent', '' . "\0" . 'App\\Entity\\Category' . "\0" . 'children', '' . "\0" . 'App\\Entity\\Category' . "\0" . 'slug', '' . "\0" . 'App\\Entity\\Category' . "\0" . 'posts'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Category' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Category' . "\0" . 'nameCategory', '' . "\0" . 'App\\Entity\\Category' . "\0" . 'left', '' . "\0" . 'App\\Entity\\Category' . "\0" . 'right', '' . "\0" . 'App\\Entity\\Category' . "\0" . 'parent', '' . "\0" . 'App\\Entity\\Category' . "\0" . 'children', '' . "\0" . 'App\\Entity\\Category' . "\0" . 'slug', '' . "\0" . 'App\\Entity\\Category' . "\0" . 'posts'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Category $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getNameCategory(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNameCategory', []);

        return parent::getNameCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setNameCategory(string $nameCategory): \App\Entity\Category
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNameCategory', [$nameCategory]);

        return parent::setNameCategory($nameCategory);
    }

    /**
     * {@inheritDoc}
     */
    public function getLeft(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLeft', []);

        return parent::getLeft();
    }

    /**
     * {@inheritDoc}
     */
    public function setLeft(int $left): \App\Entity\Category
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLeft', [$left]);

        return parent::setLeft($left);
    }

    /**
     * {@inheritDoc}
     */
    public function getRight(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRight', []);

        return parent::getRight();
    }

    /**
     * {@inheritDoc}
     */
    public function setRight(int $right): \App\Entity\Category
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRight', [$right]);

        return parent::setRight($right);
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParent', []);

        return parent::getParent();
    }

    /**
     * {@inheritDoc}
     */
    public function setParent($parent): \App\Entity\Category
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParent', [$parent]);

        return parent::setParent($parent);
    }

    /**
     * {@inheritDoc}
     */
    public function getChildren()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChildren', []);

        return parent::getChildren();
    }

    /**
     * {@inheritDoc}
     */
    public function setChildren($children): \App\Entity\Category
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChildren', [$children]);

        return parent::setChildren($children);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', []);

        return parent::getSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlug(string $slug): \App\Entity\Category
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', [$slug]);

        return parent::setSlug($slug);
    }

    /**
     * {@inheritDoc}
     */
    public function getPosts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPosts', []);

        return parent::getPosts();
    }

    /**
     * {@inheritDoc}
     */
    public function setPosts($posts): \App\Entity\Category
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPosts', [$posts]);

        return parent::setPosts($posts);
    }

}
