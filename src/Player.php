<?php
    class Player
    {
        private $name;
        private $is_human;
        private $hand;
        private $books;

        function __construct($name, $is_human=false)
        {
            $this->name = $name;
            $this->is_human = $is_human;
            $this->hand = array();
            $this->books = array();
        }
        function getName()
        {
            return $this->name;
        }
        function getIsHuman()
        {
            return $this->is_human;
        }
        function getHand()
        {
            return $this->hand;
        }
        function getBooks()
        {
            return $this->books;
        }
        function goFish()
        {
            array_push($this->hand, Game::deal());
        }
        function numberOfBooks()
        {
            return count($this->hand);
        }

        //+++++++++++++
        //not built yet
        function inquire($player, $card_type)
        {
            return false;
        }
        function surrender($card)
        {
            return false;
        }

        function pushHand($newCard)
        {
            array_push($this->hand, $newCard);
        }
    }
 ?>
