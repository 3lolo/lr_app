<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Order;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Validator\Constraints\DateTime;

class CatalogController extends Controller
{
    /**
     * @Route("/getCatalog/")
     */
    public function getAction(){
        $repo = $this->getDoctrine()->getRepository('AppBundle:Category');
        $categories =$repo->findAll();
        $data = array();
        for($i = 0 ; $i<count($categories);$i++){
            $categories[$i]->getID();
            $d = array( "id"   =>  $categories[$i]->getID(),
                        "name" =>  $categories[$i]->getName(),
                        "pic"  =>  $categories[$i]->getPic()
                      );
            array_push($data,$d);
        }
        $response = new Response(json_encode(array("catalog"=>$data)));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
    /**
     * @Route("/getProduct/{subId}")
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


    /**
     * @Route("/getSub/{catId}")
     */
    public function getSubAction($catId){
        $repo = $this->getDoctrine()->getRepository('AppBundle:SubCat');
        $subCat = $repo->findByCatId($catId);
        $result = array();
        for($i=  0; $i<count($subCat);$i++){
            $data = array(
                "id"         =>  $subCat[$i]->getId(),
                "name"       =>  $subCat[$i]->getName(),
                "atribute"   =>  $subCat[$i]->getAtribute(),
                "picture"    =>  $subCat[$i]->getPicture(),
                "catId"      =>  $subCat[$i]->getCatId()
            );
            array_push($result,$data);
        }

        $response = new Response(json_encode(array("response"=>$result)));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * @Route("/addOrder/{user_id}/{product_id}/{count}")
     */
    public function addOrderAction($user_id,$product_id,$count){
        $em = $this->getDoctrine()->getManager();

        $date  = new \DateTime("now");
        $date = $date->format('d-m-Y');

        $sql = "INSERT INTO Ordered (userId, productId, date, countP) VALUES ('$user_id','$product_id','$date','$count')";
        $this->getQuery($sql);

        $product =  $this->getDoctrine()
        ->getRepository('AppBundle:Product')
        ->find($product_id);

        $user  =  $this->getDoctrine()
        ->getRepository('AppBundle:User')
        ->find($user_id);

        $name = $user->getName();
        $phone = $user->getPhone();
        $prod = $product->getTest();
        $city = $user->getCity();
        $street = $user->getStreet();
        $flat = $user->getFlat();
        $dom = $user->getDom();

        $message = "имя: $name\n телефон: $phone \n адрес: г.$city, ул.$street, д.$dom,кв.$flat \n, Продукт: $prod, колличество: $count \n Дата: $date";
        $this->sendEmailAction($message);
        $result = array("response"  =>  "true");
        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'application/json');

        return $response;

    }
    /**
     * @Route("/allProducts/")
     */
    public function allProductsAction(){
        $repo = $this->getDoctrine()->getRepository('AppBundle:Product');
        $product  = $repo->findAll();
        $result = array();
        for($i=  0; $i<count($product);$i++) {
            $data = array(
                "id" => $product[$i]->getId(),
                "name" => $product[$i]->getTest(),
                "info" => $product[$i]->getInfo(),
                "price" => $product[$i]->getPrice(),
                "picture" => $product[$i]->getPicture(),
                "subId" => $product[$i]->getSubId()
            );
            array_push($result,$data);
        }
        $response = new Response(json_encode(array("response"=>$result)));
        $response->headers->set('Content-Type', 'application/json');
        return $response;

    }

 private function getQuery($query){
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare($query);
        $statement->execute();
        //return $statement->fetchAll();
    }


    public function sendEmailAction($message){
    $message = \Swift_Message::newInstance()
        ->setSubject('Hello Email')
        ->setFrom('pozniack@gmail.com')
        ->setTo('69knocker@gmail.com')
        ->setBody($message);

    $this->get('mailer')->send($message);

}
}
