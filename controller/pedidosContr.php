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
        // Insertar pedido y obtener el ID del nuevo pedido
        $pedidoId = $this->setPedido($this->totalprice, $this->userid);

        // Verificar si se obtuvo un ID válido
        if ($pedidoId === false) {
            error_log("Fallo al insertar o devolver el id del pedido.");
            header("Location: ../view/mispedidos.php?error=FailedStmtPedido");
            exit();
        }

        return $pedidoId;
    }

    public function allPedidos()
    {
        $res = $this->getPedidos($this->userid);
        return $res;
    }

    public function singlePedido($pedidoId)
    {
        $res = $this->getSinglePedido($pedidoId);
        return $res;
    }
}
