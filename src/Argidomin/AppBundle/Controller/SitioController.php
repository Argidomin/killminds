<?php

namespace Argidomin\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class SitioController extends Controller
{
    public function webMantenimientoAction()
    {
        return $this->render('::mantenimiento.html.twig');
    }
}
