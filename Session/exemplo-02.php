<?php
session_start();

echo $_SESSION['nome'];

unset($_SESSION['nome']);

?>