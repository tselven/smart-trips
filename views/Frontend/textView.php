<?php

use Core\View\View;

$view = new View(
    
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