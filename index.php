<?php
header("HTTP/1.1 302 Redirect");

if('mopcon.org' == strtolower($_SERVER['HTTP_HOST'])) {
    header("Location: /2014/");
} else {
    header("Location: http://mopcon.org/2014/");
}

