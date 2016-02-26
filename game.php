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


function show_hand($playerNumber) {

    global ${"player". $playerNumber . "hand"};
    $currentPlayer = ${"player". $playerNumber . "hand"};
    for ($i = 0; $i < count($currentPlayer); $i++) {
        //prints the hand
        $cardSuit;
    
        $suits = array("clubs", "diamonds", "hearts", "spades");
        
        $cardSuitValue = floor($currentPlayer[$i]/13);
        if (($currentPlayer[$i]/13) == floor($currentPlayer[$i]/13)) {
            $cardSuitValue = $cardSuitValue - 1;
        }
        
        $cardSuit = $suits[$cardSuitValue];
        
        $cardValue = $currentPlayer[$i] % 13;
        if($cardValue==0){
            $cardValue = 13;
        }
        
        echo "<img src=assets/cards/". $cardSuit . "/" . $cardValue . ".png>";
    }  
}

function get_score($playerNumber){
    global ${"player". $playerNumber . "hand"};
    $currentPlayer = ${"player". $playerNumber . "hand"};
    $score = 0;
    
    for ($i = 0; $i < count($currentPlayer); $i++) {
      $cardValue = $currentPlayer[$i] % 13;
      if($cardValue==0){
          $cardValue = 13;
      }
      $score = $score + $cardValue;
    }
    return $score;
}

function get_winner() {
  $playerArray = array("1" => get_score(1),
                        "2" => get_score(2),
                        "3" => get_score(3),
                        "4" => get_score(4));
  asort($playerArray);
  $playerArray = array_reverse($playerArray, true);
  var_dump($playerArray);
  $winnerKey = array();
  

  foreach ($playerArray as $key => $value){
    if ($playerArray[$key] <= 42) {
      // this is the winning score
      $winnerScore = $playerArray[$key];
      break;  
    }
  }
  $winnerKey = array_keys($playerArray, $winnerScore);
  var_dump($winnerKey);
  return $winnerKey;
}



?>
 
 <!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
<?php show_hand(1);
      echo get_score(1);
      get_winner();
?>
    </body>
</html>
<!-- hidden inputs with values of $_POST(names)-->