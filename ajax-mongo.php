<?php
/**
 * Created by PhpStorm.
 * User: Hendrik
 * Date: 06.09.2016
 * Time: 10:43
 */
header('Access-Control-Allow-Origin: *');
include_once 'autoloader.php';


$function = $_GET['action'];

if(file_exists('ajax/' . $function . '.php')) {
    include_once 'ajax/' . $function . '.php';
    die($function::run());
}
else {
    die("-1");
}



/**
 * GetCollections (demo)
 * GetPosts
 * GetPostsByTag
 * GetPostByContent
 * CreatePost
 *
 *
 *
 *
 * Installation Linux und Windows + Einrichtung PHP (mongo lib) + PHP Backend
 */