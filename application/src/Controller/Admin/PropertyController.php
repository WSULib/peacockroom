<?php
namespace Omeka\Controller\Admin;

use Omeka\Mvc\Exception;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class PropertyController extends AbstractActionController
{
    public function showDetailsAction()
    {
        if (!$this->params('id')) {
            throw new Exception\NotFoundException;
        }

        $response = $this->api()->read('properties', $this->params('id'));

        $view = new ViewModel;
        $view->setTerminal(true);
        $view->setVariable('property', $response->getContent());
        return $view;
    }
}
