<?php
require_once __DIR__ . '/categoria.php';

class Cuccia extends Prodotto
{
    private $dimensioni;
    function __construct($_nome, $_prezzo, Categoria $_categoria, $_dimensioni)
    {
        parent::__construct($_nome, $_prezzo, $_categoria);
        $this->setDimensioni($_dimensioni);
    }


    public function setDimensioni($_dimensioni)
    {
        $this->dimensioni = $_dimensioni;
    }

    public function getDimensioni()
    {
        return $this->dimensioni;
    }
}
