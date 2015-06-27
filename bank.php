<?php

  class Person {
    var $name;
    var $gender;
    var $age;
    var $cash = 0;

    const CLASS_ORIGIN = "Person class.";

    function say_hi($receiver) {
      return 'Hello $receiver.';
    }

    function gain_money($amount) {
      $cash += $amount;
      echo "$name now has $cash";
    }

    function give_money($amount,$receiver) {

    }

  }

  class Account {
    var $owner;
    var $balance = 0;
    var $bank;
    var $name;

    const CLASS_ORIGIN = "Account class.";

    function deposit($amount) {
      $balance += $amount;
    }

    function transfer_out($amount,$receiver) {
      $balance -= $amount;
      $receiver += $amount;
      echo "The account named $name now has $balance";
    }
  }

$my_var = 'foobar';

echo "I am using DOUBLE quotes: $my_var \n";
echo 'I am using SINGLE quotes: $my_var'."\n";

?>