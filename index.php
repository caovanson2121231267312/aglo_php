<?php
require 'vendor/autoload.php';
use  Caoson\Oop\QuestionsList;
use  Caoson\Oop\Question;

function customError($errno, $errstr, $errfile, $errline) {
}
set_error_handler("customError");

$QuestionsList = new QuestionsList();
$data = QuestionsList::parse('question.md');

$getJson = $data->saveJson("question.json");
var_dump($data);
print_r($getJson);

$value = new Question("1", "2", "3", "4");
$data->push($value);

print_r($data->first());
print_r($data->last());
print_r($data->sortBy("DESC"));
print_r($data->sortBy("ASC"));
print_r($data->show());

var_dump($data->map(function ($question){
    return $question->stt . $question->title;
})->all());


var_dump($data->filter(function ($question){
    return $question->stt % 2 == 0;
})->all());

?>