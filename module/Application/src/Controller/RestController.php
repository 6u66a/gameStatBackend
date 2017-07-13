<?php
/**
 * Created by PhpStorm.
 * User: haller
 * Date: 12.07.2017
 * Time: 08:57
 */

namespace Application\Controller;


use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\ViewModel;

class RestController extends AbstractRestfulController
{
    public function indexAction()
    {
        return new ViewModel();
    }
}