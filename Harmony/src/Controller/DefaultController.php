<?php
/**
 * Created by PhpStorm.
 * User: Adriaan
 * Date: 29-1-2019
 * Time: 12:21
 */

namespace App\Controller;

use http\Env\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints as Assert;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     * @Assert\Image(
     *
     *     minHeight="225",
     *     maxHeight="225",
     *     minWidth="1800",
     *     maxWidth="1800"
     * )
     */
    public function index()
    {
        $headerafbeelding = $this->afbeelding();
        return $this->render('view/index.html.twig', ['headerafbeelding' => $headerafbeelding,]);
    }

    public function afbeelding()
    {
        return new Response("<img src='images/header.png'");
    }
}