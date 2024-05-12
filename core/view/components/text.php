<?php
namespace Core\View;

class Text extends View{
    function __construct($text,$tag = "p",$style = null,$class = null){
        echo "<{$tag} class='{$class}' style='{$style}'>{$text}</{$tag}>";
    }
}