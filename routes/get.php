<?php
// Routes GET principales
$router->get('/', 'Controllers\\DashboardController@index');
$router->get('/citoyen', 'Controllers\\DashboardController@index');
$router->get('/citoyen/annuaire', 'Controllers\\AnnuaireController@index');
$router->get('/citoyen/formations', 'Controllers\\FormationController@index');
$router->get('/citoyen/networking', 'Controllers\\MessageController@index');
$router->get('/citoyen/produits', 'Controllers\\ProduitServiceController@index');
