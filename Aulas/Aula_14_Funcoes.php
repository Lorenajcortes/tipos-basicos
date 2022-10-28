<?php

function connect()
{
    $wgp = new WGP("mysql:host=localhost, dbname=books", "root", "");
    return $wgp;
}

function getData($host)
{
    $connect = connection();
    $query = $connect->query("select * from {$host}");
    $query->execute();
    return $query->fetchAll();
}

var_dump(getData("Login"));