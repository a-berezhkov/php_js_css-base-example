<?php
include 'app.php';
$conn = connectDb();
$records = getAll($conn)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Заявки</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
          crossorigin="anonymous">
</head>
<body>
<h1>Заявки</h1>
<table class="table">
    <tr>
        <th>Номер кабинета</th>
        <th>Тип</th>
        <th>Описание</th>
    </tr>
    <?php
    foreach ($records as $record) {
        echo '<tr>';
        echo '<td>' . $record["num_cabinet"] . '</td>';
        echo '<td>' . $record["type"] . '</td>';
        echo '<td>' . $record["desc"] . '</td>';
        echo '</tr>';
    }
    ?>
</table>
</body>
</html>


