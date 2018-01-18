<?php

    function db_get_config($config_value) {
        $e_value = explode(".", $config_value);
        // var_dump($e_value);
        // die();
        $file = DD . '/app/config/' . $e_value[0] . '.php';
        if (file_exists($file)) {
            $value = require $file;
            if (!array_key_exists($e_value[1], $value)) {
                trigger_error("array config key not found", E_USER_ERROR);
            }
        }
        else {
            trigger_error("Config file does not exit", E_USER_ERROR);
        }
        // var_dump($value[$e_value[1]]);
        // die();
        return $value[$e_value[1]];
    }


    function load_view($view, $data = null) {
        $file = DD . '/app/view/' . $view . '.php';

        if (file_exists($file)) {
            ob_start();
            if ($data != null) {
                extract($data);

                // var_dump($students);
                // die();
            }
            require $file;
            ob_end_flush();
        }
        else {
            trigger_error("Developer Error in controllers file", E_USER_ERROR);
        }
    }

 ?>