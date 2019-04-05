<?php

namespace App\Service;

use Mgilet\NotificationBundle\Entity\NotificationInterface;
use Mgilet\NotificationBundle\Model\Notification as NotificationModel;
use Doctrine\ORM\EntityManager;
use Mgilet\NotificationBundle\Twig\NotificationExtension;

class SendNotification extends NotificationModel implements NotificationInterface
{

}