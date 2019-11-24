<?php

    session_start();
    
    require('config/connexion.php');
    require('controllers/admin.php');
    require('controllers/photo.php');
    require('controllers/artist.php');
    
    if(isset($_GET['page'])) {
        switch($_GET['page']) {
            case "admin":
                homeAdmin();
                break;
            case "addPhoto":
                addPhoto();
                break;
            case "artist":
                artistList();
                break;
            case "oneArtist":
                photoByArtist();
                break;
            case "cmdAjax":
                getRandomRow();
                break;
            case "disconnect":
                disconnect();
                break;
            default:
                displayPhoto();  
        }
        
    } else {
        displayPhoto();
    }