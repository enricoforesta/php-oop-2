<?php
class Categoria
{
    public $nome;
    public $icona;

    function __construct($_nome, $_icona)
    {
        $this->nome = $_nome;
        $this->icona = $_icona;
    }
};

// categorie
$categoriaCani = new Categoria("Cani", '<i class="fa-solid fa-dog"></i>');
$categoriaGatti = new Categoria("Gatti", '<i class="fa-solid fa-cat"></i>');
