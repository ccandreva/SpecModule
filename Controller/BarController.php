<?php

namespace Zikula\SpecModule\Controller;

use Symfony\Component\HttpFoundation\Request;
use Zikula\Core\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route; // used in annotations - do not remove
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method; // used in annotations - do not remove
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template; // used in annotations - do not remove
use Zikula\Core\Response\AdminResponse;

class BarController extends AbstractController
{
    /**
     * @Route("/admin/hello/{name}")
     * @param Request $request
     * @param string $name
     * @return array
     */
    public function indexAction(Request $request, $name = 'no name')
    {
        $request->attributes->set('_legacy', true); // forces template to render inside old theme
        return $this->render('ZikulaSpecModule:Bar:index.html.twig', array('name' => $name), new AdminResponse());
    }
}