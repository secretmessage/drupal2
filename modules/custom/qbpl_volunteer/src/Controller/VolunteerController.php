<?php
namespace Drupal\qbpl_volunteer\Controller;

use Drupal\Core\Controller\ControllerBase;

class VolunteerController extends ControllerBase
{
    public function content()
    {
        $apple = 'steve jobs';
        return array(
        '#theme' => 'qbpl_volunteer',
        '#title' => 'this is the controller function content\'s title',
        '#apple' => $apple,
        );
    }
    public function welcome()
    {
        $apple = 'steve jobs';
        return array(
        '#theme' => 'qbpl_volunteer',
        '#title' => 'this is the controller function welcome title',
        '#apple' => $apple,
        );
    }

    public function welcomeBack()
    {
        $apple = 'steve jobs';
        return array(
        '#theme' => 'qbpl_volunteer',
        '#title' => 'this is the controller function welcome back title',
        '#apple' => $apple,
        );
    }
}
