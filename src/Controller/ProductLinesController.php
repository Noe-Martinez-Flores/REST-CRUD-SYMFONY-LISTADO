<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductLinesController extends AbstractController
{
    
    //public function index(): Response
    //{
    //    return $this->render('ProductLines/productLines.html.twig');
    //}

    public function getProductLines (){
        $em = $this->getDoctrine()->getManager();
        $query = $em-> createQuery ('SELECT   p.productLine ,p.textDescription  ,p.htmlDescription ,p.image   FROM App:Productlines p' );
        $listProdcutLines = $query -> getResult();

        return $this->render('ProductLines/productLines.html.twig',['lista'=>$listProdcutLines]);
    }
}
