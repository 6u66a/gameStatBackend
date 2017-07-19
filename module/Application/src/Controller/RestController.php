<?php
/**
 * Created by PhpStorm.
 * User: haller
 * Date: 12.07.2017
 * Time: 08:57
 */

namespace Application\Controller;

use Doctrine\ORM\EntityManager;
use Entities\User;
use Zend\Mvc\Controller\AbstractRestfulController;

class RestController extends AbstractRestfulController
{
    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em=$em;
    }

    public function getList()
    {
        return [
            'games' => $this->em->getRepository(User::class)->findAll(),
        ];
    }
}