<?php
session_start();
require_once ('config/db.php');

function is_Authenticated() {
  return isset($_SESSION['user_id']);
}

function is_admin() {
  return isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1;
}
?>