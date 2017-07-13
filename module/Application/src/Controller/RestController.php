<?php
/**
 * Created by PhpStorm.
 * User: haller
 * Date: 12.07.2017
 * Time: 08:57
 */

namespace Application\Controller;


use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;

class RestController extends AbstractRestfulController
{
    public function getList()
    {
        return new JsonModel(array(
            array('name' => 'test'),
            array('name' => 'second')
        ));
    }
}