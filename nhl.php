<?php

  // Person
  // //////
  
  class Person {
    public $name;
    public $birthyear;
    public $manager;
    public $salary;

    // I am the equivalent of a class method in Ruby: self.method_name
    public static $species = "human";

    public function __construct($name) {
      $this->name = $name;
    }
  }

  class Player extends Person {
    public $number;
    public $team;
    public $handedness; // Shoots left or right
    public $position;

  }

  $player = new Person();
  $general_manager 

  // Groups
  // //////

  class Group {
  }

  $team = new Group();

?>