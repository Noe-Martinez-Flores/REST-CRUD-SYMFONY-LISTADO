<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmployeesController extends AbstractController
{
    
    //public function index(): Response
    //{
    //    return $this->render('Employees/employees.html.twig');
    //}

    public function getEmployees()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em-> createQuery ('SELECT  e.employeeNumber, e.lastName, e.firstName , e.extension , e.email ,e.jobTitle  FROM App:Employees e' );
        $listEmployee = $query -> getResult();
        return $this->render('Employees/employees.html.twig',['lista'=>$listEmployee]);
    }
}
