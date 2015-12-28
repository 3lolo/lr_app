<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 21.12.15
 * Time: 14:36
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="Product")
 */
class Product
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**+
     * @ORM\Column(type="string", name="nameProduct")
     */
    protected $prodName;
    /**
     * @ORM\Column(type="string")
     */
    protected $info;
    /**
     * @ORM\Column(type="string")
     */
    protected $price;

    /**
     * @ORM\Column(type="string")
     */
    protected $picture;

    /**
     * @ORM\Column(name="subId" ,type="integer" )
     */
    protected $subId;

    /**
     * @ORM\Column(type="string" )
     */
    protected $test;

    /**
     * @return mixed
     */
    public function getTest()
    {
        return $this->test;
    }

    /**
     * @param mixed $test
     */
    public function setTest($test)
    {
        $this->test = $test;
    }




    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getProdName()
    {
        return $this->prodName;
    }

    /**
     * @param mixed $prodName
     */
    public function setProdName($prodName)
    {
        $this->prodName = $prodName;
    }

    /**
     * @return mixed
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * @param mixed $info
     */
    public function setInfo($info)
    {
        $this->info = $info;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param mixed $picture
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    /**
     * @return mixed
     */
    public function getSubId()
    {
        return $this->subId;
    }

    /**
     * @param mixed $subId
     */
    public function setSubId($subId)
    {
        $this->subId = $subId;
    }





    public  function findBySubId($id){
        if($this->subId == $id)
            return this;
    }

}