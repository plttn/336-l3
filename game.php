<?php
    $card = ["imageName" => "",
            "score" => "",
            "suit" => "",
            "rank" => ""];
    //indexed array
    $deck = [];
    $player1 = ["imageName"=>"",
                "name" => ""];
    $player2 = ["imageName"=>"",
                "name" => ""];
    $player3 = ["imageName"=>"",
                "name" => ""];
    $player4 = ["imageName"=>"",
                "name" => ""];
    $table = [$player1, $player2, $player3, $player4];
    $hands = ["player" => null,
                "cards" => [],
                "score" => ""
            ];
    $game = ["players" => $table,
            "hands" => [],
            ];
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

<?php
$deck = array();
for ($i = 1; $i <= 52; $i++ ) {
  $deck[] = $i;
}
//print_r($deck);
shuffle($deck);
echo "<hr>";
print_r($deck);
$card = array_pop($deck);
echo $card;
$suit = array("clubs", "diamonds", "hearts", "spades");
$cardSuit = $suit[floor($card / 13)];
$randomCard = rand(1,13);
$cardValue = $card % 13;
if ($cardValue == 0) {
    $cardValue = 13;
}
echo "<img src=cards/$cardSuit/$cardValue.png>";
$deck = array();
for ($i =1; $i <=52; $i++){
    $deck[] =$i;
}
//shuffles the deck
shuffle($deck); 
echo "<hr>";

//prints the deck
print_r($deck); 

//takes the selected card from previous off deck
$card = array_pop($deck); 
echo $card;
$suit = array("clubs", "diamonds", "hearts", "spades");
$cardSuit = $suit[floor($card/13)];
$randomCard = rand(1,13);
$vardValues = $card % 13;
if($cardValue==0){
    $cardValue =13;
}

echo $player1;
echo $player2;
echo $player3;
echo $player4;
//echo "<img src=cards/$cardSuit/$cardValue.png>"
 ?>