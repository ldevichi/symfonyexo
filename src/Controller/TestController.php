<?php

namespace App\Controller;
use App\Entity\School;
use App\Repository\SchoolRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{

    private int $maValeur;
    public function __construct()
    {
        $this->maValeur = 10;
    }

    #[Route('/test/{id}', name: 'app_test')]
    public function index($id, SchoolRepository $schoolRepository): Response

    {
        var_dump($id);
        // $listSchool = $schoolRepository->findAll();
       //$oneSchool = $schoolRepository->findOneById(1);

       // dd($oneSchool);

       /* foreach($oneSchool->getClassrooms() as $row){
        dump($row)
       }
       die(); */

       $newSchool = new School();
       $newSchool->setName('jhgjhgjg');
       $newSchool->setAdresse('3 rue lando');
       $newSchool->setCity('Milano');
       $newSchool->setPostalCode('78520');

       $schoolRepository->save($newSchool, true);
       dd($newSchool);


        //$valeur = 5;
        return $this->render('test/index.html.twig', [
            'controller_name' => 'PAGE 1',
            'valeurPage' => $this->maValeur
        ]);
    }
    #[Route('/test_2/{id}', name: 'app_test_2')]
    public function page2($id): Response
    {
        //$valeur = 5;
        return $this->render('test/page2.html.twig', [
            'controller_name' => 'PAGE 2',
            'valeurPage' => $this->maValeur
        ]);
        var_dump($id);
    }
  

    #[Route('/okidoki/{id}', name: 'app_test_3')]
    public function page3($id): Response
    {
        //$valeur = 5;
        return $this->render('test/page3.html.twig', [
            'controller_name' => 'PAGE 3',
            'valeurPage' => $this->maValeur
        ]);
        var_dump($id);
    }
   
}
