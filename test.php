<?php
spl_autoload_register(function ($classname)  {
    $filename = __DIR__ . '/oop/' . $classname . '.php';
    echo $filename . "<br>";
    include $filename;
});

$question = new Question;
$conn = new DBConnection;
?>