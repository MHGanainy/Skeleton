<?php

namespace App\Controller;

use CustomerManagementFrameworkBundle\CustomerProvider\CustomerProviderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Pimcore\Controller\FrontendController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AuthController extends FrontendController
{
    /**
     * @Route("/login",name="login")
     */
    public function login(Request $request,AuthenticationUtils $authenticationUtils)
    {
        $error = $authenticationUtils->getLastAuthenticationError();

        $lastEmail = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastEmail, 'error' => $error]);
    }

    /**
     * @Route("/logout",name="logout")
     */
    public function logout()
    {
        return $this->redirectToRoute("login");
    }

    /**
     * @Route("/register",name="register")
     */
    public function register(Request $request, CustomerProviderInterface $customerProvider)
    {
        $name = $request->get("_name");
        $email = $request->get("_email");
        $password = $request->get("_password");
        $roles = ["ROLE_USER"];

        $newCustomer = $customerProvider->create([
            'firstname' => $name,
            'email' => $email,
            'active' => true,
            'password' => $password,
            'roles' => $roles
        ]);

        $newCustomer->save();

        return $this->redirectToRoute("login");
    }

}
