<?PHP
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $POST['message'];

$email_from = 'jarusp29@users.noreply.github.com';
$email_subject='New Form Submission';
$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                    "User Message: $message.\n";
?>