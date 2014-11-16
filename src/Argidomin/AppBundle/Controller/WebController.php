<?php

namespace Argidomin\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

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

    public function getWebActiva()
    {

        return $this->em->getRepository('AppBundle:Web')
                    ->getEmpresaActiva();

    }



}
