<?php
require_once __DIR__ . '/dbProdotti.php';
require_once __DIR__ . '/categoria.php';

class Prodotto
{
    private $nome;
    private $prezzo;
    private $categoria;
    private $tipo;

    function __construct($_nome, $_prezzo, Categoria $_categoria)
    {
        $this->set_Nome($_nome);
        $this->set_Prezzo($_prezzo);
        $this->set_Categoria($_categoria);
    }
    //Nome
    public function set_Nome($_nome)
    {
        $this->nome = $_nome;
    }

    public function get_Nome()
    {
        return $this->nome;
    }
    //Prezzo
    public function set_Prezzo($_prezzo)
    {
        $this->prezzo = $_prezzo;
    }

    public function get_Prezzo()
    {
        return $this->prezzo;
    }
    // categoria
    public function set_Categoria($_categoria)
    {
        $this->categoria = $_categoria;
    }

    public function get_Categoria()
    {
        return $this->categoria;
    }
    //Tipo
    public function set_Tipo($_tipo)
    {
        $this->tipo = get_class($_tipo);
    }

    public function get_Tipo()
    {
        return get_class($this);
    }
}
