$(document).ready(function(){
    $('#login').submit(function(e){
        e.preventDefault();
        $.ajax({
            url: 'index.php/admin/login',
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'text',
            success:function(msg){
                console.log(msg);
                if (msg == 'true') {
                    window.location.href = "admin/dash";
                }
                else {
                    alert('wrong password');
                }
            }
        });
    });
});