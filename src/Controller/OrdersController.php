<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrdersController extends AbstractController
{
    
    //public function index(): Response
    //{
     //   return $this->render('Orders/orders.html.twig');
    //}

    public function getOrders (){
        $em = $this->getDoctrine()->getManager();
        $query = $em-> createQuery ('SELECT  o.orderNumber, o.status ,  o.comments   FROM App:Orders o' );
        $listOrders = $query -> getResult();

        return $this->render('Orders/orders.html.twig',['lista'=>$listOrders]);
    }
}
