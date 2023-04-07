<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(Security $security): Response
    {
        $user = $security->getUser();
        $isAuthenticated = $security->isGranted('IS_AUTHENTICATED_FULLY');

        return $this->render('homepage/index.html.twig', [
            'controller_name' => 'HomepageController',
            'isAuthenticated' => $isAuthenticated,
            'user' => $user,
        ]);
    }
}
