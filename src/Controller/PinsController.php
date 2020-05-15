<?php

namespace App\Controller;

use App\Entity\Pin;
use App\Repository\PinRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PinsController extends AbstractController
{
   
    /**
     * @Route("/", name="app_home", methods={"GET"})
     */
    public function index(PinRepository $repo) : Response
    {
        return $this->render('pins/index.html.twig', [
            'pins' => $repo->findAll()
        ]);
    }

    /**
     * @Route("/pins/create", name="app_pins_create", methods={"GET", "POST"})
     */
    public function create(Request $request, EntityManagerInterface $em) : Response
    {
        $this->createFormBuilder();
        
        return $this->render('pins/create.html.twig');
    }
}
