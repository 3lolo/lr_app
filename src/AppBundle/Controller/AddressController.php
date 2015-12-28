<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Address;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class AddressController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }

    /**
     * @Route("/getAddress/{id}")
     */
    public function getAction($id){
        $repo = $this->getDoctrine()->getRepository('AppBundle:Address');
        $result = $repo->findById($id);
        $data = array(  "id"        => $result[0]->getId(),
                        "city"      => $result[0]->getCity(),
                        "dom"       => $result[0]->getDom(),
                        "street"    => $result[0]->getStreet(),
                        "flat"      => $result[0]->getFlat());

        $result = array("response"  =>  $data);
        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * @Route("/addAddress/{city}/{street}/{dom}/{flat}")
     */
    public function addAction($city,$street,$dom,$flat){
        $address  =  new Address($city,$street,$dom,$flat);
        $em = $this->getDoctrine()->getManager();
        $em->persist($address);
        $em->flush();
        $qb = $em->createQueryBuilder();
        $qb->select('count(address.id)');
        $qb->from('AppBundle:address','address');

        $count = $qb->getQuery()->getSingleScalarResult();
        $result = array("response"  =>  $count);
        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * @Route("/checkAddress/{city}/{street}/{dom}/{flat}")
     */
    public function checkAction($city,$street,$dom,$flat){

        $result = array("response"  =>  $this->check($city,$street,$dom,$flat));
        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
    private function check($city,$street,$dom,$flat){
        $repo = $this->getDoctrine()->getRepository('AppBundle:Address');
        $address = $repo->findBy(array("city"=>$city,
                                        "dom" => $dom,
                                        "flat" => $flat));
        print_r($address);
        if (empty($address))
            return 0;
        else
            return $address[0]->getId();
    }


}
