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

class Cani extends Categoria
{
}

class Gatti extends Categoria
{
}

// categorie
$categoriaCani = new Cani("Cani");
$categoriaGatti = new Gatti("Gatti");
