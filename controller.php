<?php

class Quanco{
    public $color;
    public $name;
    public $locationX;
    public $locationY;

    public function move(){

    }

    function set_name($name) {
        $this->name = $name;
      }
      function get_name() {
        return $this->name;
      }
      function set_color($color) {
        $this->color = $color;
      }
      function get_color() {
        return $this->color;
      }
      function set_locationX($locationX) {
        $this->locationX = $locationX;
      }
      function get_locationX() {
        return $this->locationX;
      }
      function set_locationY($locationY) {
        $this->locationY = $locationY;
      }
      function get_locationY() {
        return $this->locationY;
      }


}
class Xe extends Quanco {
    public function(){

    }
}

class Ma extends Quanco{
    public function(){

    }
}

class Tinh extends Quanco{
    public function(){

    }
}

class Hau extends Quanco{
    public function(){

    }
}

class Tuong extends Quanco{
    public function(){

    }
}

class Tot extends Quanco{
    public function(){

    }
}
?>