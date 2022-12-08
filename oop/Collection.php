<?php
namespace Caoson\Oop;
use  Caoson\Oop\QuestionsList;
use  Caoson\Oop\Question;

interface Collection
{
    public function all(): array;
    
    public function filter($callback): QuestionsList;

    public function first(): Question | NULL;

    public function last(): Question | NULL;
    
    public function map($callback): QuestionsList;

    public function push($value): void;

    public function add($value): array;
    
    public function sortBy($type = "DESC"): void;

    public function saveJson($path): string ;
}
?>