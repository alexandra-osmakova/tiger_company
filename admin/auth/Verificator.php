<?php

namespace Util;

class Verificator {
    public static function verify(string $login, string $pwd) : bool{
        if($login === "admin" && $pwd === "admin") {
            return 1;
        }else {
            return 0;
        }
    }
}