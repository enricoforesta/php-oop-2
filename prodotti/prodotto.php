<?php
class Prodotto
{
    protected $nome;
    protected $prezzo;
    protected $categoria;
    protected $tipo;

    function __construct($_nome, $_prezzo,  $_categoria)
    {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->categoria = $_categoria->getCategoria();
        $this->tipo = get_class($this);
    }
}
class Cibo extends Prodotto
{
    protected $scadenza;
    function __construct($_nome, $_prezzo, $_categoria, $_scadenza)
    {
        parent::__construct($_nome, $_prezzo, $_categoria);
        $this->scadenza = $_scadenza;
    }
}

class Gioco extends Prodotto
{
    protected $materiale;
    function __construct($_nome, $_prezzo, $_categoria, $_materiale)
    {
        parent::__construct($_nome, $_prezzo, $_categoria);
        $this->materiale = $_materiale;
    }
}

class Cuccia extends Prodotto
{
    protected $dimensioni;
    function __construct($_nome, $_prezzo, $_categoria, $_dimensioni)
    {
        parent::__construct($_nome, $_prezzo, $_categoria);
        $this->dimensioni = $_dimensioni;
    }
}
require_once __DIR__ . '/dbProdotti.php';
