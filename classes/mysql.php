<?php

/**
 * Created by PhpStorm.
 * User: erikp
 * Date: 05.04.2017
 * Time: 10:28
 */
class mysql
{
    var $conn = false;
    var $host = false;
    var $user = false;
    var $pass = false;
    var $dbname = false;

    function __construct($h, $u, $p, $dn)
    {
        $this->host = $h;
        $this->user = $u;
        $this->pass = $p;
        $this->dbname = $dn;
        $this->connect();
    }

    function connect(){
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->dbname);
        if(mysqli_connect_error()){
            echo 'Viga andmebaasiga ühendamisega';
            exit;
        }
    }
}