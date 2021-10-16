<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductsController extends AbstractController
{
    
    //public function index(): Response
    //{
    //    return $this->render('Products/products.html.twig');
    //}


    public function getProducts(){
        $em = $this->getDoctrine()->getManager();
        $query = $em-> createQuery ('SELECT   p.productCode  ,p.productName ,p.productScale ,p.productVendor ,p.productDescription ,p.quantityInStock ,p.buyPrice ,p.MSRP    FROM App:Products  p' );
        $listProducts = $query -> getResult();

        return $this->render('Products/products.html.twig',['lista'=>$listProducts]);
    }
}
