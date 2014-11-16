<?php

namespace Argidomin\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


use Doctrine\ORM\EntityManager;

class WebController extends Controller
{
    protected $em;
    protected $container;

    public function __construct(EntityManager $em, $container)
    {
        $this->em = $em;
        $this->container = $container;

    }

    public function getWebActivaAction()
    {

        return $this->em->getRepository('AppBundle:Web')
                    ->getEmpresaActiva();

    }



}
