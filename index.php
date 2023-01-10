<?php
require 'includes/flight-master/flight/Flight.php';
// Load Smarty library
require 'includes/smarty-4.2.1/libs/Smarty.class.php';
require '../TP2/includes/pdo.php';

// Register Smarty as the view class
// Also pass a callback function to configure Smarty on load
Flight::register('view', 'Smarty', array(), function($smarty){
    $smarty->template_dir = './templates/';
    $smarty->compile_dir = './templates_c/';
    $smarty->config_dir = './config/';
    $smarty->cache_dir = './cache/';    
});

// La fonction Flight::map permet d'enregistrer une autre fonction
// La fonction Flight::render permet d'afficher un template en lui donnant un tableau associatif en paramètre
Flight::map('render', function($template, $data){
    Flight::view()->assign($data);
    Flight::view()->display($template);
});

// La fonction Flight::set permet d'enregistrer le PDO pour se connecter à la BD
Flight::set('db', $db);

require "routes/routes.php";
Flight::start();