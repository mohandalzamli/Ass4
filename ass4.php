<?php
session_start();
$userRole = $_SESSION['role'];
$type = $_GET['type'];
if($type == 'admin' && $userRole != 'admin'){
    die("Access Denied! You don't have permission to view this report.");
}
if($type == 'admin'){
    echo "Admin Report Content";
} else {
    echo "User Report Content";
}
?>