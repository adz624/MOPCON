<?php
header("HTTP/1.1 302 Redirect");

if('test.mopcon.net' == strtolower($_SERVER['HTTP_HOST'])) {
    header("Location: /2013/");
} else {
    header("Location: http://test.mopcon.net/2013/");
}

