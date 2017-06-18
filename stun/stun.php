<?php

    class App{

        public static function run(){
            include('route.class.php');
            $new = new route();
            $new = $new -> routes();
        }

    }
