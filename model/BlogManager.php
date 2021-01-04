<?php

$articles = array(
    0 => array(
        'id' => 1,
        'titre' => 'Mon élevage de chèvre'
    ),
    1 => array(
        'id' => 2,
        'titre' => 'Mon élevage de poules'
    ),


    );


function getAll(){
    return $GLOBALS['articles'];
}

//Récupérer les infos d'un article via son ID
function get($id){
    return $GLOBALS['articles'][$id - 1];
}

// Insère un nouvel article en BDD
function set($array){


}
