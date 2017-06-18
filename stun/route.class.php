<?php

    class Route{

        public function routes(){
            $url = $_SERVER['REQUEST_URI'];
            $url = explode($url);
            print_r(explode($url));
        }

    }
