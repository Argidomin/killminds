<?php
// src/Acme/DemoBundle/Admin/PostAdmin.php

namespace Argidomin\AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class WebAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->tab('Gestion de la web')
                ->with(' Datos Básicos',['class' => 'col-md-6',
                                         'description' => 'Indica los datos basicos de la web',])

                    ->add('nombreWeb','text',['label' => 'Nombre de la web',
                                              'help' => 'Indique el nombre de la pagina web',
                                              'required' => true])
                    ->add('slogan','text',['label' => 'Slogan de la web'])
                    ->add('estado','choice',['label' => 'Estado de la web',
                                             'choices' => [true => 'Activo',
                                                          false => 'En matenimiento'],
                                              'help'=>'En el caso de que la web no este activa,
                                                       se mostrara una pagina de mantenimiento'])
                ->end()
            ->end()

            ->tab('Redes Sociales y SEO')
                ->with('Redes Sociales',['class' => 'col-md-6',
                                         'description' => 'Indica los datos sociales',])
                    ->add('urlFacebook','url',['label'=>'Dirección del Facebook'])
                    ->add('urlTwitter','url',['label'=>'Dirección del Twitter'])

                    ->add('tagManager', 'textarea',['label' => 'Tag manager',
                                                    'help' => 'Introduzca el codigo que facilita Google Tag Manager'])
                ->end()
            ->end()

            ->tab('Datos de contacto')
                ->with('Datos de contacto',['class' => 'col-md-6',
                                            'description' => 'Indica los datos de contacto',])
                    ->add('telefonoContacto','text',['label' => 'Telefono de contacto'])
                    ->add('emailContacto','text',['label' => 'Email de contacto'])
                ->end()
            ->end()
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper

        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('nombreWeb')
        ;
    }
}
