<?php
//controllers

require('models/admin.php');

function homeAdmin() {
    if(isset($_POST['mail']) and isset($_POST['password'])) {
        
        $infos = getAdminByEmail($_POST['mail']);
        
        if($infos) {
            if(password_verify($_POST['password'], $infos['password'])) {
                $_SESSION['admin']['id'] = $infos['id'];
                $_SESSION['admin']['firstName']  = $infos['firstName'];
                $_SESSION['admin']['lastName']  = $infos['lastName'];
                
                $template = 'admin/home.php';
            } else {
                $error = 'unable to connect';
                $template = 'admin/home.php';
            }
        } else {
            $error = 'unable to connect';
            $template = 'admin/home.php';
        }
       
    } else {
        $template = 'admin/home.php';
    }
    require('www/layout.php');
}

function isAdmin() {
    if(isset($_SESSION['admin'])) {
        return true;
    } else {
        return false;
    }
}

function disconnect() {

    session_unset();
    session_destroy();
    
    header('Location: index.php');
}