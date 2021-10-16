<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CustomersController extends AbstractController
{
    
    //public function index(): Response
    //{
    //    return $this->render('Customers/customers.html.twig');
    //}

    public function getCustomers()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em-> createQuery ('SELECT  c.customerNumber , c.customerName , c.contactLastName , c.contactFirstName , c.phone, c.addressLine1,c.addressLine2, c.city, c.state, c.postalCode, c.country, c.creditLimit  FROM App:Customers c' );
        $listCustomers = $query -> getResult();
        return $this->render('Customers/customers.html.twig',['lista'=>$listCustomers]);
    }
}
