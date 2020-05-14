<?php

namespace App\Controller;

use App\Entity\Pin;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PinsController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
    
    /**
     * @Route("/pins", name="pins")
     */
    public function index()
    {
        $pin = new Pin;
        $pin->setTitle('Title 2');
        $pin->setDescription('Description 2');

        $this->em->persist($pin);

        $this->em->flush();

        return $this->render('pins/index.html.twig');
    }
}
