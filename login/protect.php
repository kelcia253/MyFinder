<?php
session_start();


if(!isset($_SESSION['nome'])){
    die("Você não pode acessar esta página porque não está logado.");
}
?>