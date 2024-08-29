<?php

class pedidosContr extends Pedidos
{

    private $totalprice;
    private $userid;


    public function __construct($totalprice = "", $userid = "")
    {
        $this->totalprice = $totalprice;
        $this->userid = $userid;
    }

    /**Setters and getters */
    public function setTotalprice($totalprice)
    {
        $this->totalprice = $totalprice;
    }
    public function getTotalprice()
    {
        return $this->totalprice;
    }
    public function setUserid($userid)
    {
        $this->userid = $userid;
    }
    public function getUserid()
    {
        return $this->userid;
    }

    /*** */

    public function newPedido()
    {

        //validation user id?

        //setPedido to DB
        if ($this->setPedido($this->totalprice, $this->userid)) {

            header("Location: ../view/mispedidos.php?error=FailedStmt");
            exit();
        }
    }

    public function allPedidos()
    {

        $res = $this->getPedidos($this->userid);
        return $res;
    }
}
