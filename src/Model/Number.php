<?php
    namespace Challenge\Model;

    class Number{
        private $number;

        public function __construct($pNumber){
            $this->number = $pNumber;
        }

        public function multiple(){
            $display = array('BHUT', 'IT', 'BHUT TI');
            if ($this->number % 3 == 0 || $this->number % 5 == 0){
                return $display[($this->number % 3 == 0 && $this->number % 5 >= 1) + (($this->number % 3 == 0 && $this->number % 5 == 0) *2)];
            }
            return $this->number;
        }

    }