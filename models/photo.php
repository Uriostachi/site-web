<?php 
//models

function getDbSize() {
    $query = connexion() -> prepare('SELECT * FROM photo');
    $query -> execute();
    
    return $query -> rowCount();
};

function insertPhoto($name, $src, $idArtist) {
    $query = connexion() -> prepare('INSERT INTO photo (name, src, idArtist) VALUES (?, ?, ?)');
    
    $test = $query -> execute(array($name, $src, $idArtist));
    
    return $test;
}

function getPhotoBySrc($src) {
    $query = connexion() -> prepare('SELECT * FROM photo WHERE src = ?');
    
    $query -> execute(array($src));
    
    $photo = $query -> fetch();
    
    return $photo;
}

function getPhotoById($id) {
    $query = connexion() -> prepare('SELECT * FROM photo WHERE id = ?');
    
    $query -> execute(array($id));
    
    $photo = $query -> fetch();
    
    return $photo;
}

