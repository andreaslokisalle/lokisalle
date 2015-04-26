<?php

function getBdConnexion()
{
    include  './config/bdd.php';
    return new PDO("mysql:host=$db[host];dbname=$db[dbname]", $db['user'], $db['password'], array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
}
