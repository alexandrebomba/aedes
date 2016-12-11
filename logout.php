<?php

session_start();
session_destroy();// Destruindo a sessão

header('location: login.php');// Direcionando para a tela de login