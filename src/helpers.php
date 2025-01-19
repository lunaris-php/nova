<?php

    function fetchArgs(array $args) {
        $parsed = [];
        if(count($args) > 0) {
            foreach($args as $arg) {
                if(strpos($arg, '=') !== false) {
                    [$key, $value] = explode('=', $arg, 2);
                    $parsed[$key] = $value;
                }
            }
        }
        return $parsed;
    }