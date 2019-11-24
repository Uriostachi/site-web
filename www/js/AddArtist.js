

function displayForm() {
    if($('#artist').val() == 'new') {
        
        $('#artistPlace').append('<input type="text" name="firstName" placeholder="firstName"/><input type="text" name="lastName" placeholder="lastName"/><input type="text" name="pexels" placeholder="pexels link"/>');
        
    } else {
        $('#artistPlace').empty();
    }
}

$(function(){
   $('#artist').on('change', displayForm); 
});

