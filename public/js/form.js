$(document).ready(function () {

    $(".form_Up").submit(function () {
        var dados = jQuery(this).serialize();
        
        
        $.ajax({
            url: 'CarrinhoControler.php',
            cache: false,
            data:dados,
            type: "POST",
             
            success: function (msg) {
                console.log(msg);

            }

        });

        return false;
    });
});
