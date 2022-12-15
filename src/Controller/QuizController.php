<?php
// src/Controller/QuizController.php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class QuizController extends AbstractController
{
    #[Route('/quiz', name: 'quiz_home')]
    public function home(): Response
    {
        $quizzes = [
            ['category' => 'film', 'title' => 'Harry Potter'],
            ['category' => 'culture', 'title' => 'Les vins']
        ];

        
        return $this->render('quiz/index.html.twig', [
            'quizzes' => $quizzes
        ]);
    }

    #[Route('/quiz/{qqchose}', name: 'quiz_single')]
    public function single_quiz($qqchose): Response
    {
        return $this->render('quiz/single.html.twig', [
            'qqchose' => $qqchose
        ]);
    }


}