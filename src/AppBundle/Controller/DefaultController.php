<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\User;
class DefaultController extends Controller
{
    /**
     * @Route("/test")
     */
    public function indexAction()
    {


        $array = json_decode('{"matches":[{"id":"477341104","segment":"Hello World!","translation":"Ciaso Mondo!","quality":"74","reference":"","usage-count":1,"subject":"All","created-by":"Matecat","last-updated-by":"Matecat","create-date":"2015-12-18 01:51:58","last-update-date":"2015-12-18 01:51:58","tm_properties":"","match":1},{"id":0,"segment":"Hello World!","translation":"Ciao Mondo!","quality":70,"reference":"Machine Translation provided by Google, Microsoft, Worldlingo or MyMemory customized engine.","usage-count":1,"subject":false,"created-by":"MT!","last-updated-by":"MT!","create-date":"2015-12-21 09:28:51","last-update-date":"2015-12-21 09:28:51","tm_properties":"","match":0.85}]}');
        // replace this example code with whatever you need

        $response = new Response(json_encode($array));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
/*
    /**
     * @Route("/getUser/{email}/{password}")
     */
    /*
    public function newAction($email,$password)
    {
        $user = $this->getDoctrine()
            ->getRepository('AppBundle:User')
            ->find(1);



        $result = array("name"      =>  "admin",
            "password"  =>  "admin",
            "phone"     =>  "123123",
            "email"     =>  "asdas",
            "city"      =>  "asdasd",
            "street"    =>  "asdasd",
            "dom"       =>  "3",
            "flat"      =>  "44");

        $response = new Response(json_encode(/*array('response' => $result));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
*/
    /*
    /**
     * @Route("/addUser/{name}/{password}/{phone}/{email}/{city}/{street}/{dom}/{flat}")
     */
/*

    public function addAction($name,$password,$phone,$email,$city,$street,$dom,$flat)
    {
        $user = new User();
        $user->setName($name);
        $user->setPassword($password);
        $user->setPhone($phone);
        $user->setEmail($email);

        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();


        //return $this->render('', array('name' => $name));
    }
*/
}
