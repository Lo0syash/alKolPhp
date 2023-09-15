<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="src/assets/css/main.css">
    <title>Document</title>
</head>
<body>

<?php

    if (isset($_POST['check'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        function checkForm($a, $b, $c) {
            if (empty($a) || empty($b) || empty($c)) {
                ?><script>alert('Поля не могут быть пустыми'); document.location= "?"</script><?
            }
            else if (!filter_var($a, FILTER_VALIDATE_EMAIL)) {
                ?><script>alert('Нужно вводить почту!'); document.location= "?"</script><?
            } else if (strlen($a) <= 4 || strlen($c) <= 4) {
                ?><script>alert('Минимум 4 символа'); document.location= "?"</script><?
            }
        }

        checkForm($name, $email, $phone);

    }

?>

    <div class="wrapper">
        <div class="container">
            <form method="post">
                <input type="text" name="name" placeholder="Имя">
                <input type="email" name="email" placeholder="Почта">
                <input type="tel" name="phone" placeholder="Номер телефона" maxlength="11">
                <input type="submit" name="check" value="Отправить">
            </form>
        </div>
    </div>
</body>
</html>