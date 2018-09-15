<?php
require_once 'bdconnect.php'; 
 
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link)); 
$postcontent = $_POST ["text"]; 
if (isset($postcontent)) {
    $sql = mysql_query("INSERT INTO posts ('Name') 
                        VALUES ('$postcontent')");

    if ($sql) {
        echo "<p>Данные успешно добавлены в таблицу.</p>";
    } else {
        echo "<p>Произошла ошибка.</p>";
    }
}
mysqli_close($link);

?>