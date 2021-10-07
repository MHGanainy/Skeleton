<?php

namespace App\Controller;

use CustomerManagementFrameworkBundle\CustomerProvider\CustomerProviderInterface;
use Pimcore\Controller\FrontendController;
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
        return new Response('done');
    }

    /**
     * @Route("/cu",name="cu")
     */
    public function cu(CustomerProviderInterface $customerProvider)
    {
        $newCustomer = $customerProvider->create([
            'firstname' => 'john',
            'lastname' => 'doe',
            'email' => 'a@a.com',
            'active' => true,
            'password' => '12345',
            'roles' => ["ROLE_USER"]
        ]);

        $newCustomer->save();

        return new Response('done');
    }
}
