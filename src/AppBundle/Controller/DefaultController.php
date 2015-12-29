<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Product;
class DefaultController extends Controller
{
    /**
     * @Route("/test/{subId}")
     */
    public function getProductAction($subId){
        $repo = $this->getDoctrine()->getRepository('AppBundle:Product');
        $product  = $repo->findBySubId($subId);
        $result = array();
        for($i=  0; $i<count($product);$i++) {
            // print_r($product[$i]->getInfo());
            $data = array(
                "id" => $product[$i]->getId(),
                "name" => $product[$i]->getTest(),
                "info" => $product[$i]->getInfo(),
                "price" => $product[$i]->getPrice(),
                "picture" => $product[$i]->getPicture(),
                "subId" => $product[$i]->getSubId()
            );
            array_push($result, $data);
        }

        $response = new Response(json_encode(array("response"=>$result)));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

}
