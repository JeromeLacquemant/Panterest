<?php

namespace App\Controller;

use App\Entity\Pin;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PinsController extends AbstractController
{
   
    /**
     * @Route("/pins", name="pins")
     */
    public function index(EntityManagerInterface $em)
    {
        $pin = new Pin;
        $pin->setTitle('Title 3');
        $pin->setDescription('Description 3');

        $em->persist($pin);

        $em->flush();

        return $this->render('pins/index.html.twig');
    }
}
