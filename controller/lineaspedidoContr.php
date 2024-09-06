<?php

class lineaspedidoContr extends Lineaspedido
{

    private $pedidoid;
    private $prodId;
    private $quantity;
    private $importPrice;


    public function __construct($pedidoid = '', $prodId = '', $quantity = '', $importPrice = '')
    {
        $this->pedidoid = $pedidoid;
        $this->prodId = $prodId;
        $this->quantity = $quantity;
        $this->importPrice = $importPrice;
    }

    /**Setters and getters */
    public function setPedidoid($pedidoid)
    {
        $this->pedidoid = $pedidoid;
    }
    public function getPedidoid()
    {
        return $this->pedidoid;
    }
    public function setProdId($prodId)
    {
        $this->prodId = $prodId;
    }
    public function getProdId()
    {
        return $this->prodId;
    }
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
    public function getQuantity()
    {
        return $this->quantity;
    }
    public function setImportPrice($importPrice)
    {
        $this->importPrice = $importPrice;
    }
    public function getImportPrice()
    {
        return $this->importPrice;
    }

    /*** */

    public function newLineaPedido()
    {
        // Intentar insertar las líneas del pedido
        if (!$this->setLineasPedido($this->pedidoid, $this->prodId, $this->quantity, $this->importPrice)) {
            error_log("Failed to insert lineaPedido.");
            header("Location: ../view/mispedidos.php?error=FailedStmtlinea");
            exit();
        }
    }
}
