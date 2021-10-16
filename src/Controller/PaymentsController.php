<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PaymentsController extends AbstractController
{
    
    //public function index(): Response
    //{
    //    return $this->render('Payments/payments.html.twig');
    //}

    public function getPayments (){
        $em = $this->getDoctrine()->getManager();
        $query = $em-> createQuery ('SELECT   p.checkNumber ,p.amount ,p.paymentDate   FROM App:Payments p' );
        $listPayments = $query -> getResult();

        return $this->render('Payments/payments.html.twig',['lista'=>$listPayments]);
    }
}
