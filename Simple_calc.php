<?php
$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['num1'], $_POST['num2'], $_POST['operation'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    switch ($operation) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            $result = ($num2 != 0) ? $num1 / $num2 : "خطأ: لا يمكن القسمة على صفر!";
            break;
        default:
            $result = "عملية غير صحيحة!";
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>آلة حاسبة</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .calculator {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h4 class="text-center">آلة حاسبة</h4>
        <form action="" method="POST">
            <div class="mb-3">
                <input type="number" name="num1" class="form-control" placeholder="الرقم الأول" required>
            </div>
            <div class="mb-3">
                <select name="operation" class="form-control" required>
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">×</option>
                    <option value="/">÷</option>
                </select>
            </div>
            <div class="mb-3">
                <input type="number" name="num2" class="form-control" placeholder="الرقم الثاني" required>
            </div>
            <div class="mb-3">
                <input type="text" value="<?= htmlspecialchars($result) ?>" class="form-control" readonly placeholder="الناتج">
            </div>
            <button type="submit" class="btn btn-primary w-100">احسب</button>
        </form>
    </div>
</body>
</html>
