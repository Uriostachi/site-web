<?php
//models

function getAdminByEmail($email) {
    $query = connexion() -> prepare('SELECT * FROM admin WHERE email = ?');
    
    $query -> execute(array($email));
    
    $admin = $query -> fetch();
    
    return $admin;
}