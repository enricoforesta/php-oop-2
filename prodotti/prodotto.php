<?php
class Prodotto
{
    public $nome;
    public $prezzo;
    public $categoria;
    public $tipo;

    function __construct($_nome, $_prezzo, Categoria $_categoria)
    {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->categoria = $_categoria;
        $this->tipo = get_class($this);
    }
}
class Cibo extends Prodotto
{
    public $scadenza;
    function __construct($_nome, $_prezzo, $_categoria, $_scadenza)
    {
        parent::__construct($_nome, $_prezzo, $_categoria);
        $this->scadenza = $_scadenza;
    }
}

class Gioco extends Prodotto
{
    public $materiale;
    function __construct($_nome, $_prezzo, $_categoria, $_materiale)
    {
        parent::__construct($_nome, $_prezzo, $_categoria);
        $this->materiale = $_materiale;
    }
}

class Cuccia extends Prodotto
{
    public $dimensioni;
    function __construct($_nome, $_prezzo, $_categoria, $_dimensioni)
    {
        parent::__construct($_nome, $_prezzo, $_categoria);
        $this->dimensioni = $_dimensioni;
    }
}
require_once __DIR__ . '/dbProdotti.php';
