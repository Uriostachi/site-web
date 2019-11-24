<?php
// controllers

require('models/photo.php');

function displayPhoto() {
    $template = 'www/home.php';
    require('www/layout.php');
}

function checkAndUploadPhoto($exist) {
    $img = $_FILES['img']['name'];
    $uploadDir = 'www/img/';
    $uploadFile = $uploadDir . basename($img);
    move_uploaded_file($_FILES['img']['tmp_name'], $uploadFile);
    
    $try = insertPhoto($_POST['name'], $img, $_POST['artist']);
    $output = [];
    if($try) {
        
        $output['message'] = 'photo has been added';
        if(isset($exist)) {
            $output['message'] = $exist . '<br>' . $output['message'];
        }

        $output['template'] = 'www/admin/home.php';
    } else {
        $output['message'] = 'something went wrong';
        $output['template'] = 'www/admin/home.php';
    }
    return $output;
}


function addPhoto() {
    if(isAdmin()) {
        if(isset($_POST['submit'])) {
            if($_POST['artist'] == 'new') {
                $artistInsert = checkAndinsertArtist($_POST['firstName'], $_POST['lastName'], $_POST['pexels']);

                $exist = $artistInsert['exist'];
                $_POST['artist'] = $artistInsert['artist'];
            }
            
            if(!getPhotoBySrc($_FILES['img']['name'])) {
                $photoUpload = checkAndUploadPhoto($exist);

                $message = $photoUpload['message'];
                $template = $photoUpload['template'];
            } else {
                $message = 'SRC of file already exits please change it and try again';
                $template = 'www/admin/home.php';
            }
            
        } else {
            $artists = getArtists();
            $template = 'www/admin/addPhoto.php';
        }
        require('www/layout.php');
    } else {
        header('Location: index.php');
    }
}


function getRandomRow() {
    $size = getDbSize();
    $row = '';
    $chosenPhoto = [];
    
    while(count($chosenPhoto) < 4) {
        $photo = getPhotoById(rand(1, getDbSize()));
        
        if(!in_array($photo['id'], $chosenPhoto)) {
            $row .= '<div class="slide"><img class="homePhoto" src=www/img/' . $photo['src'] . '></div>';
            array_push($chosenPhoto, $photo['id']);
        }
    }
    
    echo json_encode($row);
}


