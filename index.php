<?php
// L’e-commerce vende prodotti per gli animali.
// I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
// L’utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
// Il pagamento avviene con la carta di credito, che non deve essere scaduta.
// BONUS:
// Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).



require_once __DIR__ . '/istanze/cibo.php';
require_once __DIR__ . '/istanze/cucce.php';
require_once __DIR__ . '/istanze/giochi.php';
require_once __DIR__ . '/istanze/user.php';

$gioco1 = new Toy('chicco', '22', 'medium');
$cuccia1 = new Cucce('bed dog', '20', 'circolare');
$alimento1 = new Food('trainer', '10', '2023-01-01');

$utente1 = new User();
$utente1 -> addCart($gioco1);
$utente1 -> addCart($cuccia1);
$utente1 -> addCart($alimento1);
var_dump($utente1);

