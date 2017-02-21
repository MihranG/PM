/**
 * Created by 91gas on 2/21/2017.
 */
$('document').ready(function(){

    $('#loginForm').on("submit", function (event) {
        var data = $('#loginForm').serialize();
        console.log(data);

        $.ajax({
            type: 'POST',
            url: 'ajax.php',
            data: data,

            success: function (data2) {
                var result = JSON.parse(data2);

                if (result.status == "error") {
                    var error_message = result.errors.join('<br>');
                    $('#logInError').show();
                    $('#logInError').html(error_message);
                } else {
                    $('#logInError').hide();
                    $('#logInSuccess').show();

                    window.setTimeout(function () {
                        location.href = '/content.php';
                    }, 3000);
                }
                console.log(data , data2);
            }
        });

        event.preventDefault();
        return false;
    });
















})