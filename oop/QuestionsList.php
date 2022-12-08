<?php
namespace Caoson\Oop;

use Caoson\Oop\Collection;

class QuestionsList implements Collection {
    
    protected static $listsQuestion = [];
    
    public function __construct($listsQuestion = [])
    {
        self::$listsQuestion = $listsQuestion;
    }

    public static function parse($path): QuestionsList {
        $contents = file_get_contents($path);
        $contents = strip_tags($contents);
        $contents = str_replace( ["---", "```javascript", "```"], "", $contents );
        $arr = explode("######",$contents);
        array_shift($arr);
        foreach ($arr as $questions) {
            [$question, $answer]  = explode("####", $questions);
            try {
                [$item, $content] = explode('?', $question);
                [$stt, $title] = explode('.', $item, 2);
            } catch (\Exception $e) {
                [$stt, $title, $content] = explode('.', $question);
            }
            self::$listsQuestion[] = new Question(trim($stt), trim($title), trim($content), trim($answer));
        }
        return new static(self::$listsQuestion);
    }
    
    public function show(): void {
        foreach (self::$listsQuestion as $val) {
            echo "<pre>";
            echo $val;
            echo "</pre>";
        }
    }

    public function all(): array {
        $data = [];
        foreach (self::$listsQuestion as $val) {
            $data[] = $val;
        }
        return $data;
    }

    public function first(): Question | NULL {
        return self::$listsQuestion[0] ?? NULL;
    }

    public function last(): Question | NULL {
        return self::$listsQuestion[count(self::$listsQuestion) - 1] ?? NULL;
    }

    public function push($value): void {
        array_push(self::$listsQuestion, $value);
    }

    public function add($value): array {
        array_push(self::$listsQuestion, $value);
        return self::$listsQuestion;
    }

    public function map($callback): QuestionsList  {
        self::$listsQuestion = array_map($callback, self::$listsQuestion);
        return $this;
    }

    public function filter($callback): QuestionsList  {
        self::$listsQuestion = array_filter(self::$listsQuestion, $callback);
        return $this;
    }

    public function sortBy($type = "DESC"): void {
        if($type == "DESC") {
            rsort(self::$listsQuestion);
        } else if($type == "ASC") {
            sort(self::$listsQuestion);
        } else {
            echo "lỗi xác định kiểu <br>";
        }
    }

    public function saveJson($path): string {
        $json_data = json_encode(self::all(), JSON_UNESCAPED_UNICODE);
        file_put_contents($path, $json_data);
        return $json_data;
    }
}
?>