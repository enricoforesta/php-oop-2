<?php
class Categoria
{
    private $nome;
    private $icona;

    function __construct($_nome, $_icona)
    {
        $this->setNome($_nome);
        $this->setIcona($_icona);
    }

    //Nome
    public function setNome($_nome)
    {
        $this->nome = $_nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    //icona
    public function setIcona($_icona)
    {
        $this->icona = $_icona;
    }

    public function getIcona()
    {
        return $this->icona;
    }
};

// categorie
$categoriaCani = new Categoria("Cani", '<i class="fa-solid fa-dog"></i>');
$categoriaGatti = new Categoria("Gatti", '<i class="fa-solid fa-cat"></i>');
