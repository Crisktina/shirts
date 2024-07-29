<?php 

class ShopContr extends Shops{

    private $name;
    private $city;
    private $address;
    private $photo;


    public function __construct( $name= null, $city= null, $address= null, $photo= null){
        $this->name = $name;
        $this->city = $city;
        $this->address = $address;
        $this->photo = $photo;
    }

    /**Setters and getters */
    public function setname($name){
        $this->name = $name;
    }
    public function getname(){
        return $this->name;
    }
   
    public function setcity($city){
        $this->city = $city;
    }
    public function getcity(){
        return $this->city;
    }
    
    public function setaddress($address){
        $this->address = $address;
    }
    public function getaddress(){
       return $this->address;
    }

    public function setphoto($photo){
        $this->photo = $photo;
    }
    public function getphoto(){
       return $this->photo;
    }

    /*** */

   

    //traer user id de la base de datos comparando con user de la sessión para poder usuarlo en reservas
     public function allShopsList(){

         $res = $this->getShops();
        return $res;
     }
    
}