<?php
function isLocalhost($whitelist = ['127.0.0.1', '::1'])
{
    return in_array($_SERVER['REMOTE_ADDR'], $whitelist);
}

function get_base_url()
{
    if (isLocalhost())
        return '/start';
    else
        return '/';
}