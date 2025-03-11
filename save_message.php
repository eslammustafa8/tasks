<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);


    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: contact_form.php?error=email");
        exit;
    }

    $formatted_message = "الاسم: $name\nالبريد الإلكتروني: $email\nالرسالة:\n$message\n----------------------\n";

    file_put_contents("messages.txt", $formatted_message, FILE_APPEND);

    header("Location: contact_form.php?success=1");
    exit;
}

?>
