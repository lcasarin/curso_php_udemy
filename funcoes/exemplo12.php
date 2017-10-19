<?php
echo preg_replace_callback('~-([a-z])~', function ($match3) {
    return strtoupper($match3[1]);
}, 'hello-world');
// outputs helloWorld
$greet = function($name)
{
    printf("Hello %s\r\n", $name);
};

$greet('World');
$greet('PHP');
/*
because each OS have different ASCII chars for linebreak:
windows = \r\n
unix = \n
mac = \r 
*/
?>
