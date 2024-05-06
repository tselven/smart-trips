<?php
namespace Core\View;

class Button extends View{
    function __construct($text,$style = null,$class = null){
        echo "<button class='{$class}' style='{$style}'>{$text}</button>";
    }
}