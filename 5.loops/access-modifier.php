<?php 
    // Access modifiers in Php
    // 1. Public - can be accessed from anywhere
    // 2. Private - can only be accessed from within the class
    // 3. Protected - can be accessed from withing the class and from derived class

    // By default the properties and methods are treated as public
    // Private properties and methods can only be accessed by other member functions of the class
class Employee1 {

        public $name;
        public $salary;

        public function __construct($name, $sal) {
            $this->name = $name;
            $this->salary = $sal;
            $this->describe();
        }

        //Making it private will throw error as private members cannot be inherited
        protected function describe() {
            echo "<br> Name of the programmer is  $this->name  <br>";
            echo "<br> Salary received by $this->name is $this->salary <br>";
        }
    }

    class Coder extends Employee1 {
        public $lang = "Python";
        public function __construct($name, $lang, $salary)  {
            $this->name = $name;
            $this->lang = $lang;
            echo "<br> Language known to $this->name is $this->lang <br>";
            $this->salary = $salary;
            $this->describe();
        }
    }

    $p1 = new Employee1('Mike', 30000);
    $p2 = new Coder('Claire', 'NodeJS', 20000);
?>