<?php
function fun(){
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $name = htmlspecialchars($_POST['name']);
    $surname = htmlspecialchars($_POST['surname']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Assuming you have a Controller class that takes care of the logic
    require_once 'UserController.php';  // include your controller file
    $controller = new Controller();

    // Call a method of the controller to handle the data
    $result = $controller->processContactForm($name, $surname, $email, $subject, $message);

    if ($result) {
        echo "Thank you! We have received your message.";
        document.getElementById("contact-form").submit();
    } else {
        echo "There was an error processing your request.";
    }
}


}
?>
