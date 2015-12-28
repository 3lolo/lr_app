<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use AppBundle\Entity\User;
class UserController extends Controller
{

    /**
     * @Route("/addUser/{name}/{password}/{phone}/{email}/{city}/{street}/{dom}/{flat}")
     */
    public function addAction($name,$password,$phone,$email,$city,$street,$dom,$flat)
    {
        $id = $this->getAddress($city,$street,$dom,$flat);
        $result = $this->forward('AppBundle:Address:get', array(  "id"      =>  $id));


        $address = json_decode($result->getContent())->response;
        print_r($address->flat);
        $user = new User($name,$password,$phone,$email,$address);



        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        $response = new Response(json_encode(array('response' => "true")));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * @Route("/getUser/{email}/{password}")
     */
    public function getAction($email,$password)
    {
        $response = new Response();
        $urepo = $this->getDoctrine()->getRepository('AppBundle:User');
        $data = array('email'       =>  $email,
            'password'    =>  $password
        );
        $users = $urepo->findByEmail($email);
        for($i=0;$i<count($email);$i++) {
            $user = $users[$i];
            if ($user->getPassword() == $password) {
                //    $user = $user[0];
                $addres = $user->getAddress();
                $data = array("name" => $user->getName(),
                    "password" => $user->getPassword(),
                    "phone" => $user->getPhone(),
                    "email" => $user->getEmail(),
                    "city" => $addres->getCity(),
                    "street" => $addres->getStreet(),
                    "dom" => $addres->getDom(),
                    "flat" => $addres->getFlat());
                $response = new Response(json_encode($data));
                $response->headers->set('Content-Type', 'application/json');
            }
        }
        return $response;
    }

    private function getAddress($city,$street,$dom,$flat){
        $result = $this->forward('AppBundle:Address:check', array(  "city"      =>  $city,
                                                                    "street"    =>  $street,
                                                                    "dom"       =>  $dom,
                                                                    "flat"      =>  $flat));

        $id = json_decode($result->getContent())->response;
        //print_r($id);
        if($id == 0 ) {
            $result = $this->forward('AppBundle:Address:add', array("city"      =>  $city,
                                                                    "street"    =>  $street,
                                                                    "dom"       =>  $dom,
                                                                    "flat"      =>  $flat));
            $ar = json_decode($result->getContent());
            $id =$ar->response;
        }
        return $id;
    }

}
