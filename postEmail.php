<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Post Email</title>
</head>
<body>

    <?php
        $myEmailAddress = "levodopa@hotmail.com";
        $subject = "Question for me!";

        $name = $_POST['Name'];
        $email = $_POST['Email'];
        $message = $_POST['Message'];
        $header = "from: $name <$email>";

        mail($myEmailAddress, $subject, $message, $header);

    ?>
    <p>Thanks for asking.</p>

</body>
</html>