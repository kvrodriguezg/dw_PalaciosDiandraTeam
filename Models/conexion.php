<?php

function Conectarse()
{
    if (!($link = mysqli_connect("localhost", "root", ""))) {
        echo "Error 1";
        exit();
    }
    if (!(mysqli_select_db($link, "bdddiandrapalacios"))) {
        echo "Error 2";
        exit();
    }
    return $link;
}
