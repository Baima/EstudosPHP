<?php

function teste($callback)
{
    $callback();

}

test(function()
{
    echo "terminou!";
});

?>