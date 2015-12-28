<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 22.12.15
 * Time: 10:12
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Sub_catagory")
 */
class SubCat
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\Column(type="integer",name="category_id")
     */
    protected $catId;
    /**
     * @ORM\Column(type="string",name="sub_name")
     */
    protected $name;
    /**
     * @ORM\Column(type="string")
     */
    protected $atribute;

    /**
     * @ORM\Column(type="string")
     */
    protected $picture;

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
    public function getCatId()
    {
        return $this->catId;
    }

    /**
     * @param mixed $catId
     */
    public function setCatId($catId)
    {
        $this->catId = $catId;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAtribute()
    {
        return $this->atribute;
    }

    /**
     * @param mixed $atribute
     */
    public function setAtribute($atribute)
    {
        $this->atribute = $atribute;
    }

    public function findByCatId($catId){
        if($this->catId==$catId)
            return $this;
    }

}