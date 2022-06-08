<?php
$conn = connectDb();

/**
 * @return false|mysqli
 */
function connectDb()
{
    // Создаем соединение с базой данных
    $conn = new mysqli("localhost", "root", "", "db_demo");
    // Если не получилось - выводим ошибку
    if ($conn->connect_error) {
        return FALSE;
    }
    //Если успешно соединилсь, то возвращаем соединение
    return $conn;
}

/**
 * Получение всех записей
 *
 * @param $conn
 * @return array
 */
function getAll($conn)
{
    $result = $conn->query('SELECT * FROM request');
    $data = [];
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $data[] = [
                "num_cabinet" => $row["num_cabinet"],
                "type" => $row["type"],
                "desc" => $row["desc"],
            ];
        }
    }
    return $data;
}

/**
 * @param $conn
 * Для
 * @return true|false
 */
function create($conn)
{
    $numCabinet = $_POST["numCabinet"];
    $type = $_POST["type"];
    $desc = $_POST["desc"];
    $sql = "INSERT INTO request (`num_cabinet`, `type`, `desc`) VALUES ($numCabinet, '$type', $desc)";
    return $conn->query($sql);
}
