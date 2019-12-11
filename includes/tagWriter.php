<?php

    class Functions{

        public static function startTag($tagName){
            echo "<$tagName>";
        }

        public static function startTagwithClass($tagName,$tagClass){
            echo "<$tagName class=\"$tagClass\">";
        }

        public static function endTag($tagName){
            echo "</$tagName>";
        }
    }
?>