<?php
    class Car {
        function Describe(){
            echo "It's a $this->year $this->make $this->model";
        }

        function __Construct($make, $model, $year){
            $this->make = $make;
            $this->model = $model;
            $this->year = $year;
        }
    }

    $lancer = new Car("Mitsubishi", "Lancer", "2009");
    $lancer->Describe();

    $fusion = new Car("Ford", "Fusion", "2007");
    $fusion->Describe();
?>