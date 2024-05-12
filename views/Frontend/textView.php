<?php

use Core\View\View;
use Core\View\Button;
use Core\View\Text;
echo "<h1>{$name}</h1>";

new Button(
    text: "save"
    
);
new Text(
    text: "Save Settings"
);

$view = new View(
    type : ""
);

$view->button(
    text: "Hello World",
    style: "background-color:red;color:white",
);
$view->link(
    text:"click here"
);
?>
<html>
    <script type="text/javascript" src="src/js/api.js"></script>
</html>