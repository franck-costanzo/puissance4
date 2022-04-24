<?php $title = "Lobby" ?>
<?php session_start(); ?>
<?php require_once('Model/User.php'); ?>
<?php require_once('Controller/user_controller.php'); ?>
<?php require_once('Controller/game_controller.php'); ?>


<?php   ob_start();  ?>

<div class="container mt-3">

    <div class="d-flex justify-content-center"><button class="btn btn-primary mt-2 mx-2 p-2 rounded-pill" id="createGame">Create Game</button></div>
    <div class="lobbyBoard border border-5 border-primary mt-5"></div>

</div>
<?php  $content=ob_get_clean(); ?>

<?php require ('View/layout.php'); ?>