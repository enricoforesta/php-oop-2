<?php
require_once __DIR__ . '/categoria.php';
class Cibo extends Prodotto
{
    private $scadenza;
    function __construct($_nome, $_prezzo, Categoria $_categoria, $_scadenza)
    {
        parent::__construct($_nome, $_prezzo, $_categoria);
        $this->setScadenza($_scadenza);
    }

    public function setScadenza($_scadenza)
    {
        $this->scadenza = $_scadenza;
    }

    public function getScadenza()
    {
        return $this->scadenza;
    }
}
