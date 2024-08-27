<?php

class productContr extends Products
{

    private $category;
    private $name;
    private $color;
    private $price;
    private $photo;
    private $description;

    public function __construct($category = null, $name = null, $color = null, $price = null, $photo = null, $description = null)
    {
        $this->category = $category;
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->photo = $photo;
        $this->description = $description;
    }

    /**Setters and getters */
    public function setcategory($category)
    {
        $this->category = $category;
    }
    public function getcategory()
    {
        return $this->category;
    }

    public function setname($name)
    {
        $this->name = $name;
    }
    public function getname()
    {
        return $this->name;
    }

    public function setcolor($color)
    {
        $this->color = $color;
    }
    public function getcolor()
    {
        return $this->color;
    }

    public function setprice($price)
    {
        $this->price = $price;
    }
    public function getprice()
    {
        return $this->price;
    }

    public function setphoto($photo)
    {
        $this->photo = $photo;
    }
    public function getphoto()
    {
        return $this->photo;
    }

    public function setdescription($description)
    {
        $this->description = $description;
    }
    public function getdescription()
    {
        return $this->description;
    }
    /*** */



    //traer la lista de productos separados por tipo
    public function allShirtsList()
    {

        $res = $this->getShirts();
        return $res;
    }
    public function allTotebagsList()
    {

        $res = $this->getTotebags();
        return $res;
    }
    //traer un producto llamado por id
    public function getProductById($productId)
    {

        $res = $this->getSingleProduct($productId);
        return $res;
    }
}
