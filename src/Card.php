<?php
    class Card()
    {
        private $suit;
        private $type;

        function __construct($suit, $type)
        {
            $this->suit = $suit;
            $this->type = $type;
        }

        function getSuit()
        {
            return $this->suit;
        }

        function getType()
        {
            return $this->type;
        }
        function getName()
        {
            return $this->type . " of " . $this->suit;
        }

    }
?>
