<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نموذج تواصل</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .contact-form {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 350px;
        }
    </style>
</head>
<body>

    <div class="contact-form">
        <h4 class="text-center">تواصل معنا</h4>

        <?php if (isset($_GET['error']) && $_GET['error'] == 'email') { ?>
            <div class="alert alert-danger">يرجى إدخال بريد إلكتروني صالح!</div>
        <?php } elseif (isset($_GET['success'])) { ?>
            <div class="alert alert-success">تم إرسال رسالتك بنجاح!</div>
        <?php } ?>

        <form action="save_message.php" method="POST">
            <div class="mb-3">
                <input type="text" name="name" class="form-control" placeholder="الاسم" required>
            </div>
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="البريد الإلكتروني" required>
            </div>
            <div class="mb-3">
                <textarea name="message" class="form-control" placeholder="اكتب رسالتك..." rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">إرسال</button>
        </form>
    </div>

</body>
</html>
