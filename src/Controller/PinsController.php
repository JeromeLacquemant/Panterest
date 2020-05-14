<?php

namespace App\Controller;

use App\Entity\Pin;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PinsController extends AbstractController
{
    /**
     * @Route("/pins", name="pins")
     */
    public function index()
    {
        $pin = new Pin;

        dd($pin);

        return $this->render('pins/index.html.twig');
    }
}
