<?php
$player1hand = array();
$player2hand = array();
$player3hand = array();
$player4hand = array();
$deck = array();
//trying the following line
$playerImage= array ("assets/playerImages/cow.jpg","assets/playerImages/dog.jpg","assets/playerImages/goat.jpg", "assets/playerImages/hippo.jpg", "assets/playerImages/owl.jpg", "assets/playerImages/pig.jpg");
shuffle($playerImage);




for ($i = 1; $i <= 52; $i++ ) {
  $deck[] = $i;
}
//print_r($deck);
shuffle($deck);
for ($i = 0; $i <= rand(4,6); $i++) {
  $player1hand[] = array_pop($deck);
}
for ($i = 0; $i <= rand(4,6); $i++) {
  $player2hand[] = array_pop($deck);
}
for ($i = 0; $i <= rand(4,6); $i++) {
  $player3hand[] = array_pop($deck);
}
for ($i = 0; $i <= rand(4,6); $i++) {
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
  $playerArray = array("1" => get_score(1), "2" => get_score(2), "3" => get_score(3), "4" => get_score(4));
  asort($playerArray);
  $playerArray = array_reverse($playerArray, true);
  $winnerKey = array();
  
  foreach ($playerArray as $key => $value){
    if ($playerArray[$key] <= 42) {
      // this is the winning score
      $winnerScore = $playerArray[$key];
      break;  
    }
  }
  $winnerKey = array_keys($playerArray, $winnerScore);
  return $winnerKey;
}

function get_image($imageNumber) {
    global $playerImage;
    echo '<img src="' . $playerImage[$imageNumber] . '" alt="alt" style="width:72px;height:96px>"';
};

function build_player_array(){
  $array = array();
  array_push($array, $_POST["p1"]);
  array_push($array, $_POST["p2"]);
  array_push($array, $_POST["p3"]);
  array_push($array, $_POST["p4"]);
  return $array;
  
}

?>
 
 <!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <title>Silverjack</title>
        
    </head>
    <body>
        <h1>Silverjack</h1>
<?php
    $playerNameArray = build_player_array();
    
    echo $playerNameArray[0], " ";
    get_Image(0);
    show_hand(1);
    echo "&nbsp;&nbsp;&nbsp;&nbsp;";
    echo get_score(1);
    echo " points!";
    echo "<br />";
    
    echo $playerNameArray[1], " ";
    get_image(1);
    show_hand(2);
    echo "&nbsp;&nbsp;&nbsp;&nbsp;";
    echo get_score(2);
    echo " points!";
    echo "<br />";
    
    echo $playerNameArray[2], " ";
    get_image(2);
    show_hand(3);
    echo "&nbsp;&nbsp;&nbsp;&nbsp;";
    echo get_score(3);
    echo " points!";
    echo "<br />";
    
    echo $playerNameArray[3], " ";
    get_image(3);
    show_hand(4);
    echo "&nbsp;&nbsp;&nbsp;&nbsp;";
    echo get_score(4);
    echo " points!";
    echo "<br />";
   
   // print the winners name
   echo "Winner is player ";
    $winnerArray = get_winner();
    foreach ($winnerArray as $value) {
      echo $playerNameArray[$value-1];
    }
   ?>
<!DOCTYPE html>
<html>
    <form action="index.php" method="POST">
      <input type="Submit" name="Restart" value="Restart the Game">
    </form>
</html>

    </body>
</html>
<!-- hidden inputs with values of $_POST(names)-->