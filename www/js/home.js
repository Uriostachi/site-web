var dataId = 0;

function getRandom(min, max) {
    return Math.floor((Math.random() * (max - min + 1)) + min) ;
}

function callGetRow() {
    for(var i = 1; i < 5; i++) {
        getRow();
    }
}

function getRow() {
    $.getJSON('index.php', 'page=cmdAjax', display);
}

function display(data) {
    $('.home').append(makeRow(data));
}

function makeRow(data) {
    dataId++;
    return `<div class=slider data-id=${dataId}>${data}</div>`;
}



function getOneRow() {
     $.getJSON('index.php', 'page=cmdAjax', updateRow);
}

function updateRow(data) {
    var id = getRandom(1, 4);
    $(`*[data-id=${id}]`).html(data);
    
    $(`*[data-id=${id}]`).css('opacity','0.5')
    .animate({
        opacity : '1'
    }, 2000, 'linear');

}

function addPhotoEvent() {
    $(document).on("mouseenter", '.homePhoto', function (event) {
      $(this).addClass("photoOver");
    });
    $(document).on("mouseleave", '.homePhoto', function (event) {
        $(this).removeClass("photoOver");
    });
}


function isMouseOut() {
    var isOver = true;
   
    $('.home').on('mouseleave', (function () { isOver = true; }));
    return isOver;
}


$(function() {
    callGetRow();
    addPhotoEvent();

    setInterval(function() {
        getOneRow();
    }, 5000);

});