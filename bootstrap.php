<?php

use App\Providers\ServicesProvider;
use App\Setup;

// Ajout du fichier env.php pour les constantes global

require_once('env.php');
// Ajout du fichier helpers.php pour disposé des fonctions helper
require_once('helpers.php');

// Setup de l'application
Setup::init();

//Chargement des services providers
ServicesProvider::register();
