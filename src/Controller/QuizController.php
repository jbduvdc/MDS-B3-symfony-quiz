<?php
// src/Controller/QuizController.php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class QuizController extends AbstractController
{
    #[Route('/quiz/', name: 'quiz_home')]
    public function home(): Response
    {
        $name = "Jean-Bite";

        
        return $this->render('quiz/index.html.twig', [
            'name' => $name
        ]);
    }

    #[Route('/quiz/{qqchose}', name: 'quiz_home')]
    public function single_quiz($qqchose): Response
    {
        return $this->render('quiz/single.html.twig', [
            'qqchose' => $qqchose
        ]);
    }


}