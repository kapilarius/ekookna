<?php

namespace App\Controller;

use App\Entity\Przystanek;
use App\Form\FormularzType;
use App\Repository\PrzystanekRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
     * @Route("/zgloszenie", name="zgloszenie.")
     */
class ZgloszenieController extends AbstractController
{
    /**
     * @Route("/", name="start")
     */
    public function index(): Response
    {
        return $this->render('zgloszenie/index.html.twig');
        
    }
    /**
     * @Route("/stworz", name="stworz")
     * @param Request $request
     * 
     */
    public function stworzZgloszenie (Request $request)
    {
        //stworz nowe zgłoszenie
        $zgloszenie = new Przystanek;
        $formularz = $this->createForm(FormularzType::class,$zgloszenie);
        $formularz->handleRequest($request);
        if ($formularz->isSubmitted()){
        //komunikacja z bazadanych
        $kdb = $this->getDoctrine()->getManager();
        $kdb->persist($zgloszenie);
        $kdb->flush();
        return $this->redirect($this->generateUrl('zgloszenie.admin'));
        }

        
       
        return $this->render('zgloszenie/stworz.html.twig', [
            'formularz'=>$formularz->createView()
        ]);
    }
    /**
     * @Route("/admin", name="admin")
     * @param PrzystanekRepository $MagazynPrzystanek
     */
    public function wyswietlAdmin(PrzystanekRepository $MagazynPrzystanek)
    {
        $zgloszenie = $MagazynPrzystanek->findAll();
       return $this->render('zgloszenie/admin.html.twig', [
            'zgloszenie' => $zgloszenie,
        ]);
        
    }
    /**
     * @Route("/wiecej/{id}", name="wiecej")
     * @param PrzystanekRepository $MagazynPrzystanek
     */
    public function wyswietlWiecej($id, PrzystanekRepository $MagazynPrzystanek)
    {
        $zgloszenie = $MagazynPrzystanek->find($id);
       return $this->render('zgloszenie/wiecej.html.twig', [
            'zgloszenie' => $zgloszenie,
        ]);
        
    }
    
}
