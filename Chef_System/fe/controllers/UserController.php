

<?php
function ValidateContactForm()
{ 
    
    // Script responsible for validating the contact information and then sending the data to be controller.
    ?>
<script>
$(document).ready(function() {
    $('#contact-form').submit(function(event) {
        event.preventDefault();

        var name = $('#name').val();
        var surname = $('#surname').val();
        var email = $('#email').val();
        var subject = $('#subject').val();
        var message = $('#message').val();

        if (name.trim() == '') {
            var errorMessage = $('<p>', {
                    class: 'alert alert-danger',
                    role: 'alert',
                    text: 'Please enter firstname.',
                    style: 'background-color: red; color: white;'
                });
                    $('.Error-Message').empty().append(errorMessage);
                    return;
        }
        if (surname.trim() == '') {
            var errorMessage = $('<p>', {
                    class: 'alert alert-danger',
                    role: 'alert',
                    text: 'Please enter surname.',
                    style: 'background-color: red; color: white;'
                });
                    $('.Error-Message').empty().append(errorMessage);
                    return;
        }
        if (email.trim() == '') {
            var errorMessage = $('<p>', {
                    class: 'alert alert-danger',
                    role: 'alert',
                    text: 'Please enter email.',
                    style: 'background-color: red; color: white;'
                });
                    $('.Error-Message').empty().append(errorMessage);
                    return;
        }
        if (subject.trim() == '') {
            var errorMessage = $('<p>', {
                    class: 'alert alert-danger',
                    role: 'alert',
                    text: 'Please enter subject.',
                    style: 'background-color: red; color: white;'
                });
                    $('.Error-Message').empty().append(errorMessage);
                    return;
        }
        if (message.trim() == '') {
            var errorMessage = $('<p>', {
                    class: 'alert alert-danger',
                    role: 'alert',
                    text: 'Please enter message body.',
                    style: 'background-color: red; color: white;'
                });
                    $('.Error-Message').empty().append(errorMessage);
                    return;
        }
        $.ajax({
            type: "POST",
            url: "../../be/controllers/UserControllers.php",
            data: $(this).serialize(),
            action: "CONTACT",
            success: function(response) {
                $('.Error-Message').empty();
                $("#responseMsg").html(response);
                console.log(response
                    );
                if (response.trim() === "success") {
                    const successText = document.getElementById("successText");
                    successText.innerText = "We recived your message. Thank you!";
                    successText.style.display = "block";
                    $('#contact-form')[0].reset();
                    setTimeout(function() {
                        successText.style.display = "none";
                        modal.style.s = "none";
                        location.reload();
                    }, 3000);
                }
            },
            error: function(xhr, status, error) {
                console.error("Ajax request failed:", error);
            }
        });
    });
});

</script>

<?php 
    }
?>

