<?php 
require 'model/BlogManager.php';

function index(){

  $articles = getAll();
  $controller = $GLOBALS['controller'];

   require 'views/blog/index.php';

}


function lastArticles(){

    $controller = $GLOBALS['controller'];
    $title = ' Je suis une variable ';
    require 'views/blog/lastArticles.php';
    
 
}

function article($id){


}
