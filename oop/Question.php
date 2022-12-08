<?php
namespace Caoson\Oop;

class Question implements \JsonSerializable{
    public int $stt;
    public string $title;
    public string $content;
    public string $answer;

    public function __construct(int $stt, string $title, string $content, string $answer)
    {
        $this->stt = $stt;
        $this->title = $title;
        $this->content = $content;
        $this->answer = $answer;
    }

    public function __toString() {
        return "<b>".$this->stt . "." . $this->title . "? </b>" . $this->content . " " . $this->answer;
    }

    public function jsonSerialize(): mixed
    {
        return [
            'stt' => $this->stt,
            'title' => $this->title,
            'content' => $this->content,
            'answer' => $this->answer,
        ];
    }

}
?>