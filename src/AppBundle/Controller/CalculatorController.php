<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

/**
 * Description of CalculatorController
 *
 * @author Jorge
 */

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class CalculatorController extends Controller {
    
    public function indexAction($age) {
        $current_year = date('Y');
        
        return new Response('<html><body> Current year: ' . $current_year
                            . '<br> Year of birth: ' . ($current_year - $age)
                            . '</body></html>');
    }
    
}
