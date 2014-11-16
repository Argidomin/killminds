<?php

namespace Argidomin\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class SitioController extends Controller
{
    public function webMantenimientoAction()
    {
        return $this->render('::mantenimiento.html.twig');
    }
}
