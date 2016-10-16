<?php

function title(){
    $configs = include('config.php');
    $title= $configs['name'].' - '; // page name - home
    switch( $_SERVER['SCRIPT_NAME'] ){
        case '/dmitry/index.php':
            $title = $title.'Home';
            break;
        case '/dmitry/about.php':
            $title = $title.'about';
            break;
        case '/dmitry/services.php':
            $title = $title.'services';
            break;
        case '/dmitry/typography.php':
            $title = $title.'typography';
            break;
        case '/dmitry/button.php':
            $title = $title.'button';
            break;
        case '/dmitry/portfolio.php':
            $title = $title.'portfolio';
            break;
        case '/dmitry/price.php':
            $title = $title.'price';
            break;
        case '/dmitry/blog.php':
            $title = $title.'blog';
            break;
        case '/dmitry/contact.php':
            $title = $title.'contact';
            break;
        default :
            $title = $title.'404 page';
            break;
    }
    return $title;

}