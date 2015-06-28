<?php

  // Person
  // //////
  
  class Person {
    public static $name;
    public static $birthyear;
    public static $manager;
    public static $salary;

    // "static" is the equivalent of a class method in Ruby: self.method_name
    public static $species = "human";

    public function __construct($name) {
      $this->name = $name;
    }
  }

  class Player extends Person {
    public static $number;
    public static $team;
    public static $handedness; // Shoots left or right
    public static $position;
  }

  $player1 = new Player("Bo Horvat");
  $person1 = new Person("Jim Benning");

  // Groups
  // //////

  class Group {
    public static $name;
    public static $leader;
  }

  class Team extends Group {
  }


  $team = new Group();

  echo "The species of a person is " . Person::$species . ".";
  echo "\n\n";
  echo "The first player's name is " . $player1->name . ".";
  echo "\n\n";
  echo "The first person's name is " . $person1->name . ".";
  echo "\n\n";
?>