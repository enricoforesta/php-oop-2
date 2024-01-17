<?php
require_once __DIR__ . '/cibo.php';
require_once __DIR__ . '/gioco.php';
require_once __DIR__ . '/cuccia.php';
// prodotti cibi
$croccantiniCani = new Cibo("Croccantini Per Cani", "9.99€", $categoriaCani, 2024);
$croccantiniGatti = new Cibo("Croccantini Per Gatti", "19.99€", $categoriaGatti, 2028);

//prodotti giochi
$giocoCani = new Gioco("Osso", "5.99€", $categoriaCani, "Plastica");
$giocoGatti = new Gioco("Gomitolo", "2.99€", $categoriaGatti, "Lana");

// prodotti cucce
$cucciaCane = new Cuccia("Casetta Per Cani", "50,85€", $categoriaCani, "150x120cm");
$cucciaGatto = new Cuccia("Casetta Per Gatti", "55,85€", $categoriaGatti, "120x120cm");

//Array di prodotti
$tuttiProdotti = [
    $croccantiniCani,
    $croccantiniGatti,
    $giocoCani,
    $giocoGatti,
    $cucciaCane,
    $cucciaGatto
];
