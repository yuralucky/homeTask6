<?php


namespace Hillel;


class Str
{
    public static function after($subject, $after)
    {
        if (strpos($subject, $after)) return substr($subject, strlen($after));
        return $subject;
    }

    public static function afterLast($subject='App\Http\Controllers\Controller',$after='sss')
    {
        if (strripos($subject, $after)) return substr($subject,strripos($subject, $after)+strlen($after));
        return $subject;
    }
}