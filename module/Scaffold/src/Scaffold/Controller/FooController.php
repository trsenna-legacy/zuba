<?php

namespace Scaffold\Controller;

use Scaffold\Model\Foo;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class FooController extends AbstractActionController
{
    public function indexAction()
    {
        $foos = array();
        foreach ( range( 1, 6 ) as $id ) {
            $foos[ ] = Foo::buildFromId( $id );
        }

        return new ViewModel( array(
            'foos' => $foos,
        ) );
    }

    public function showAction()
    {
        $foo = Foo::buildFromId(
            $this->params()->fromQuery( 'id' )
        );

        return new ViewModel( array(
            'foo' => $foo
        ) );
    }

    public function destroyAction()
    {
        $foo = Foo::buildFromId(
            $this->params()->fromQuery( 'id' )
        );

        return new ViewModel( array(
            'foo' => $foo
        ) );
    }
}
