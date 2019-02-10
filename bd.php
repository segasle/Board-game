<?php

/*
global $bd;

if ( empty( $bd ) ) {
    $bd = mysqli_connect( 'localhost', '', '', 'Board_game' );
    mysqli_set_charset( $bd, 'utf8' );
}*/
require 'rb.php';
    R::setup( 'mysql:host=localhost;dbname=Board_game',
        '', '' );