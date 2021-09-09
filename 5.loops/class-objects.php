<?php
    class Player {
        public $name;
        public $age;
        public $run = false;

        function set_name($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }
        function get_name() {
            return $this->name;
        }
        function run() {
            return $this->run = true;
        }
    }

    $p1 = new Player();
    $p1->set_name('mike', 18);
    echo $p1->get_name();
    echo '<br>';
    echo var_dump($p1->run());
    echo '<br>';

    $p2 = new Player();
    $p2->set_name('scott', 20);
    echo $p2->get_name();
    echo '<br>';
    echo var_dump($p2->run());
    echo '<br>';
?>