<?php
//controllers 

require('models/artist.php');


function artistList() {
    $artists = getArtists();
    $template = 'www/artist/artistList.php';
    require('www/layout.php');
}


function photoByArtist() {
    $infos = getPhotophotoByArtist($_GET['id']);
    $template = 'www/artist/photoByArtist.php';
    require('www/layout.php');
}


function checkAndinsertArtist($firstName, $lastName, $pexels) {
   
    if(!getArtistByLink($pexels)) {
        return  ['exist' => '', 'artist' => insertArtist($firstName, $lastName, $pexels)];

    } else {
        return ['exist' => 'artist allready in db, not added', 'artist' => getArtistByLink($pexels)['id']];
    }
        
    
}