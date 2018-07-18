<?php
function prettyTime($string){
    $time = strtotime($string);

    return date('g:ia M jS Y ', $time);
}

function sqlNow()
{
    return date('Y-m-d H:i:s');
}