<?php
    function isActiveRoute($route, $class_name = 'active') {
        return request()->is($route) ? $class_name : '';
    }
?>