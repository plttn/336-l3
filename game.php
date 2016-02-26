<?php

$player1hand = array();
$player2hand = array();
$player3hand = array();
$player4hand = array();


$deck = array();
for ($i = 1; $i <= 52; $i++ ) {
  $deck[] = $i;
}
//print_r($deck);
shuffle($deck);

for ($i = 1; $i <= rand(4,6); $i++) {
  $player1hand[] = array_pop($deck);
}
for ($i = 1; $i <= rand(4,6); $i++) {
  $player2hand[] = array_pop($deck);
}
for ($i = 1; $i <= rand(4,6); $i++) {
  $player3hand[] = array_pop($deck);
}
for ($i = 1; $i <= rand(4,6); $i++) {
  $player4hand[] = array_pop($deck);
}

var_dump($player1hand);




for ($i = 0; $i < count(${"player" . 1 . "hand"}); $i++) {
    //prints the hand
    
    $cardSuit;

    $suits = array("clubs", "diamonds", "hearts", "spades");
    
    $cardSuitValue = floor(${"player" . 1 . "hand"}[$i]/13);
    if ((${"player" . 1 . "hand"}[$i]/13) == floor(${"player" . 1 . "hand"}[$i]/13)) {
        $cardSuitValue = $cardSuitValue - 1;
    }
    
    $cardSuit = $suits[$cardSuitValue];
    
    $cardValue = ${"player" . 1 . "hand"}[$i] % 13;
    if($cardValue==0){
        $cardValue = 13;
    }
    echo "<img src=assets/cards/". $cardSuit . "/" . $cardValue . ".png>";
}


 ?>
 
 <!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
<?php
?>
    </body>
</html>
