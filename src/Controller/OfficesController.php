<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OfficesController extends AbstractController
{
   
    public function getOffices (){
        $em = $this->getDoctrine()->getManager();
        //$listOffices = $em->getRepository("App:Offices")->findAll();

        $query = $em-> createQuery ('SELECT  o.officeCode , o.city, o.phone, o.addressLine1 , o.addressLine2,  o.state, o.country,o.postalCode , o.territory  FROM App:Offices o' );
        $listOffices = $query -> getResult();

        return $this->render('Offices/offices.html.twig',['lista'=>$listOffices]);
    }
    
}
