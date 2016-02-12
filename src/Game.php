<?php
class Game {

    private $pool;
    private $players;
    private $active_player_index;

    function __construct($players)
    {
        $this->pool = array();
        $this->players = $players;
        $this->active_player_index = 0;

        $card_types = array('Ace','2','3','4','5','6','7','8','9','10','Jack','Queen','King');
        $card_suits = array('Hearts','Spades','Clubs','Diamonds');
        foreach($card_suits as $suit){
            foreach($card_types as $type){
                array_push($this->pool, new Card($suit, $type));
            }
        }
    }

    function checkGameState()
    {
        $books = 0;
        foreach($players as $player)
        {
            $books += $player->numberOfBooks();
        }
        if ($books == 13){
            return 'Game over';
        }
    }

    function updateActivePlayer()
    {
        if($this->active_player_index < count($this->players)-1){
            $this->active_player_index++;
        } else {
            $this->active_player_index = 0;
        }
    }

    function goFish()
    {
        $card_index = array_rand($this->pool);
        $card = array_splice($this->pool, $card_index, 1)[0];
        return $card;
    }

    function deal()
    {
        foreach ($this->players as $player) {
            $hand = $player->getHand();
            for($i = 0; $i < 7; $i++){
                $card = $this->goFish();
                $player->pushHand($card);
            } var_dump($player);
        }
    }

    // function populatePool()
    // {
    //     $this->pool = array();
    //     $card_types = array('Ace','2','3','4','5','6','7','8','9','10','Jack','Queen','King');
    //     $card_suits = array('Hearts','Spades','Clubs','Diamonds');
    //     foreach($card_suits as $suit){
    //         foreach($card_types as $type){
    //             array_push($this->pool, new Card($suit, $type));
    //         }
    //     }
    // }

    function save()
    {
        $_SESSION['game']= new Game(array(
			new Player('Joe', true),
			new Player('computer')
		));
        $_SESSION['game']->deal();
    }

    function getPlayers()
    {
        return $this->players;
    }
}
 ?>
