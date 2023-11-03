<?php
require_once("config/database.php");

$page = isset($_GET['page']) ? $_GET['page'] : 'index';
switch ($page) {
    case 'create':
        require_once("view/create.php");
        break;
    case 'edit':
        require_once("view/edit.php");
        break;
    case 'delete':
        require_once('view/delete.php');
        break;
    default:
        require_once("view/index.php");
        break;
}