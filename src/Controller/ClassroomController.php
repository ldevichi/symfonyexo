<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClassroomController extends AbstractController
{
    #[Route('/classroom', name: 'app_classroom')]
    public function index(ClassroomRepository $classroomrepository): Response
    {

        $listClassrooms->$classroomrepository->findAll();

        return $this->render('classroom/index.html.twig', [
            'listClassroom' => $listClassroom
        ]);
    }
}
