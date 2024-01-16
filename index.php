<?php
class Categoria
{
    protected $nome;

    function __construct($_nome)
    {
        $this->nome = $_nome;
    }
    function setCategoria($_nome)
    {
        $this->nome = $_nome;
    }
    function getCategoria()
    {
        return $this->nome;
    }
}

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
class Cani extends Categoria
{
}

class Gatti extends Categoria
{
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
// categorie
$categoriaCani = new Cani("Cani");
$categoriaGatti = new Gatti("Gatti");

// prodotti cibi
$croccantiniCani = new Cibo("Croccantini", "9.99€", $categoriaCani, 2024);
$croccantiniGatti = new Cibo("Croccantini", "9.99€", $categoriaGatti, 2028);

//prodotti giochi
$giocoCani = new Gioco("Osso", "5.99€", $categoriaCani, "Plastica");
$giocoGatti = new Gioco("Gomitolo", "2.99€", $categoriaGatti, "Lana");

// prodotti cucce
$cucciaCane = new Cuccia("casetta", "50,85€", $categoriaCani, "150x120cm");
$cucciaGatto = new Cuccia("casetta", "50,85€", $categoriaGatti, "150x120cm");

// stampa cibi
var_dump($croccantiniCani);
var_dump($croccantiniGatti);

//stampa giochi
var_dump($giocoCani);
var_dump($giocoGatti);

// stampa cucce
var_dump($cucciaCane);
var_dump($cucciaGatto);
