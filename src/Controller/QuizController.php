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
        return $this->render('quiz/index.html.twig');
    }


}