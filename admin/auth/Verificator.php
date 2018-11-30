<?php

namespace Util;

class Verificator {
    public static function verify($login, $pwd) {
        if($login === "admin" && $pwd === "admin") {
            return 1;
        }else {
            return 0;
        }
    }
}