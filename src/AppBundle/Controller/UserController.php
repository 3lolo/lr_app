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
        $res  = $this->uniqAction($email,$phone);
        if(empty($res)) {
            $user = new User();
            $user = $this->setUser($user,$name, $password, $phone, $email, $city, $street, $dom, $flat);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $response = new Response(json_encode(array('response' => "true")));
            $response->headers->set('Content-Type', 'application/json');
        }
        else {
            $response =new Response(json_encode(array('response'=>$res)));
        }

        return $response;
    }

    /**
     * @Route("/getUser/{email}/{password}")
     */
    public function getAction($email,$password)
    {
        $response = new Response();
        $urepo = $this->getDoctrine()->getRepository('AppBundle:User');
        $users = $urepo->findByEmail($email);
        for($i=0;$i<count($email);$i++) {
            $user = $users[$i];
            if ($user->getPassword() == $password) {
                $data = array(
                    "id" => $user->getId(),
                    "name" => $user->getName(),
                    "password" => $user->getPassword(),
                    "phone" => $user->getPhone(),
                    "email" => $user->getEmail(),
                    "city" => $user->getCity(),
                    "street" => $user->getStreet(),
                    "dom" => $user->getDom(),
                    "flat" => $user->getFlat());
                $response = new Response(json_encode($data));
                $response->headers->set('Content-Type', 'application/json');
            }
        }
        return $response;
    }
    private  function uniqAction($mail,$phone)
    {
        $json = array();

        $mrepo = $this->getDoctrine()->getRepository('AppBundle:User');

        $res = $mrepo->findByEmail($mail);
        if (!empty($res))
            $json['email'] = $mail;

        $res = $mrepo->findByPhone($phone);
        if (!empty($res))
            $json['phone'] = $phone;

        return $json;
    }

    private function setUser($user,$name, $password, $phone, $email, $city, $street, $dom, $flat){
        $user->setName($name);
        $user->setPassword($password);
        $user->setPhone($phone);
        $user->setEmail($email);
        $user->setCity($city);
        $user->setStreet($street);
        $user->setDom($dom);
        $user->setFlat($flat);
        return $user;
    }

}
