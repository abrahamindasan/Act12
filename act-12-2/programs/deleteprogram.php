<?php 
    require_once '../classes/program.class.php';
    session_start();
    if(isset($_SESSION['logged-in']) && $_SESSION['user_type'] == 'admin'){
        $program = new Program;
        $program->delete($_GET['id']);
        header('location: programs.php');
    }
?>