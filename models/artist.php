<?php

function getArtists() {
    $query = connexion() -> prepare('SELECT * FROM artist');
    
    $query -> execute();
    
    $artists = $query -> fetchAll();
    
    return $artists;
}


function insertArtist($firstName, $lastName, $pexels) {
    $bdd = connexion();
    
    $query = $bdd -> prepare('INSERT INTO artist (firstName, lastName, pexelsLink) VALUES (?, ?, ?)');
    
    $query -> execute(array($firstName, $lastName, $pexels));
    
    return $bdd -> lastInsertId();
}

function getArtistByLink($link) {
    $query = connexion() -> prepare('SELECT * FROM artist WHERE pexelsLink = ?');
    $query -> execute(array($link));
    
    $artist = $query -> fetch();
    
    return $artist;
}

function getPhotophotoByArtist($idArtist) {
    $query = connexion() -> prepare('SELECT * FROM artist INNER JOIN photo ON artist.id = photo.idArtist WHERE idArtist = ?');
    
    $query -> execute(array($idArtist));
    
    $infos = $query -> fetchAll();
    
    return $infos;
}