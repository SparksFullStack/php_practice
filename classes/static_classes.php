<?php
    class Person {
        static $name = "Charlie";

        function readName(){
            echo "Hi there, " . Person::$name;
        }
    }


    echo Person::$name;
    Person::readName();
?>