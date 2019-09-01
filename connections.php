<?php

class Connectt{

  static public function conectar(){

    $link = new PDO("mysql:host=localhost;dbname=juanamaq_hme_db", "juanamaq_hace_user", "Jm/2019@");


    $link->exec("set names utf8");

    return $link;
  }
}
