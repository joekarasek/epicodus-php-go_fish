<?php
    class Card()
    {
        private $suite;
        private $type;

        function __construct($suite, $type)
        {
            $this->suite = $suite;
            $this->type = $type;
        }

        function getSuite()
        {
            return $this->suite;
        }

        function getType()
        {
            return $this->type;
        }

    }
?>
