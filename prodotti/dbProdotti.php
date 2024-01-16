<?php
// prodotti cibi
$croccantiniCani = new Cibo("Croccantini", "9.99€", $categoriaCani, 2024);
$croccantiniGatti = new Cibo("Croccantini", "9.99€", $categoriaGatti, 2028);

//prodotti giochi
$giocoCani = new Gioco("Osso", "5.99€", $categoriaCani, "Plastica");
$giocoGatti = new Gioco("Gomitolo", "2.99€", $categoriaGatti, "Lana");

// prodotti cucce
$cucciaCane = new Cuccia("casetta", "50,85€", $categoriaCani, "150x120cm");
$cucciaGatto = new Cuccia("casetta", "50,85€", $categoriaGatti, "150x120cm");
