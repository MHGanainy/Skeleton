<?php

namespace App\Controller;

use CustomerManagementFrameworkBundle\CustomerProvider\CustomerProviderInterface;
use Pimcore\Controller\FrontendController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends FrontendController
{
    /**
     * @Template
     * @param Request $request
     * @return array
     */
    public function defaultAction(Request $request)
    {
        return [];
    }


    /**
     * @Route("/test",name="test_customer")
     */
    public function test()
    {
        xdebug_break();
        $u = $this->getUser();
        $s = $this->denyAccessUnlessGranted("ROLE_USER");
        return new Response('done');
    }
}
