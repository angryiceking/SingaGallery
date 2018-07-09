$(document).ready(function(){
    $('#login').submit(function(e){
        e.preventDefault();
        $.ajax({
            url: 'index.php/login',
            type: 'POST',
            data: $(this).serialize(),
            success:function(msg){
                 
            }
          });
    });
});