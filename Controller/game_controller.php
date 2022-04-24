<?php

include_once ('Model/Game.php');
$_SESSION['errors'] = array();

/*-------------------------------
             REGISTER 
--------------------------------*/

if(isset($_POST['gameCreate']))
{

    // receive all input values from the form
    $gameName = htmlspecialchars($_POST['gameName']);
    $password = htmlspecialchars($_POST['gamePassword']);

    // form validation
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($gameName)) { array_push($_SESSION['errors'], "A name is required, game was not created"); }

    // Finally, register user if there are no errors in the form
    if ( count($_SESSION['errors']) == 0) 
    {
        Game::createGame($gameName, $password, $_SESSION['username']);
        header('location: ./game.php'); 
    }
    
}