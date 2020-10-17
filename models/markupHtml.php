<?php

class markupHtml {
    public $text = "";

    public $pattern = [
        "/#(.+)+\n/",
        "/-(.+)+\n/",
        "/\*(?!\*)(.[^\*]+)\*(?!\*)/",
        "/_(.+)+_/",
        "/```(.+)+```/",
        "/\/\/(.+)+\/\//",
        "/\/img:(.+)\n/",
        "/\/a:(.+):(.+)\//"
    ];
    
    public $replacement = [
        '<h3 class="articleListTitle">$1</h3>',
        "<p class='articleListElement'>$1</p>",
        "<i>$1</i>",
        "<u>$1</u>",
        "<code>$1</code>",
        "<b>$1</b>",
        "<img src='portfolioV4/$1' class='articleImage'/>",
        "<a href='$1'>$2</a>"
    ];

    public function __construct($str) {
        $this->text = $str;
        $this->link();
        $this->italic();
        $this->listTitle();
        $this->listElement();
        //$this->bold(); //Wont Work
        $this->underline();
        $this->code();
    }

    public function listTitle() {
        $this->text = preg_replace("/#(.+)+\n/",'<h3 class="articleListTitle">$1</h3>',$this->text);
    }
    
    public function listElement() {
        $this->text = preg_replace("/-(.+)+\n/","<p class='articleListElement'>$1</p>", $this->text);
    }

    public function italic() {
        $this->text = preg_replace("/\*(?!\*)(.[^\*]+)\*(?!\*)/","<i>$1</i>",$this->text);
    }

    public function bold() {
        $this->text = preg_replace("/\/\/(.+)\/\//","<b>$1</b>",$this->text);
    }

    public function underline() {

        $this->text = preg_replace("/_(.+)+_/","<u>$1</u>",$this->text);
    }

    public function code() {

        $this->text = preg_replace("/```(.+)+```/","<code>$1</code>",$this->text);
    }

    public function image() {
        $this->text = preg_replace("/\/img:(.+)\n/","<img src='portfolioV4/$1' class='articleImage'/>",$this->text);
    }

    public function link() {
        $this->text = preg_replace("/\/a~(.+)~(.+)\//","<a class='oui' href='$1'>$2</a>",$this->text);
    }
}
