<?php
require_once __DIR__ . '/categoria.php';

class Gioco extends Prodotto
{
    private $materiale;
    function __construct($_nome, $_prezzo, Categoria $_categoria, $_materiale)
    {
        parent::__construct($_nome, $_prezzo, $_categoria);
        $this->setMateriale($_materiale);
    }

    public function setMateriale($_materiale)
    {
        $this->materiale = $_materiale;
    }

    public function getMateriale()
    {
        return $this->materiale;
    }
}
