<?php
include 'app.php';
$conn = connectDb();
if ($_POST && create($conn)) {

    $message = "Данные успешно добавлены";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Форма заявок</title>
    <link href="css/app.css"   rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
          crossorigin="anonymous">
    <script src="js/app.js"></script>
</head>

<script>
    alert("hello");
</script>

<body>
<h1>Форма заявок</h1>
<?php
if ($message) {
    echo '<div class="alert alert-primary" role="alert">' . $message . '</div>';
}
?>

<form action="index.php" method="post">

    <label for="num-cabinet">Номер кабинета</label>
    <input type="text" name="numCabinet" id="num-cabinet" class="form-control">
    <br>
    <label for="type">Тип проблемы</label>
    <select name="type" id="type" class="form-select">
        <option>Поломка оборудования</option>
        <option>Настройка оборудования</option>
        <option>Чернила для принтера</option>
    </select>
    <br>
    <label for="desc">Описание</label>
    <textarea name="desc" id="desc" class="form-control"> </textarea>

    <button type="submit" class="btn btn-primary">Отправить!</button>
</form>
</body>
</html>
