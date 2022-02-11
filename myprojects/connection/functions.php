<?php

include_once __DIR__.'/connection/init.php';

function url($url=' '){
    if($url ==' '){
        return BASE_URL;
    }else{
        return BASE_URL.$url;
    }
}

function get($key=' '){
    if($key == ' '){
        return $_GET;
    }else{
        return $_GET[$key];
    }
}

function post($key=' '){
    if($key == ' '){
        return $_POST;
    }else{
        return $_POST[$key];
    }
}

function request($key=' '){
    if($key == ' '){
        return $_REQUEST;
    }else{
        return $_REQUEST[$key];
    }
}

function files($key=' '){
    if($key == ' '){
        return $_FILES;
    }else{
        return $_FILES[$key];
    }
}