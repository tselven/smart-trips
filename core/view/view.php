<?php
namespace Core\View;

class View {
    public function button($text,$style = "padding:10px;border:0;",$class = '') {
        echo "<button class='{$class}' style='{$style}'>{$text}</button>";
    }
    public function link($text,$url = "#",$style = null,$class = null){
        echo "<a class='{$class}' href='{$url}' style='{$style}'>{$text}</a>";
    }
}