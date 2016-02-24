<?php
    $card = ["imageName" => "",
            "score" => "",
            "suit" => "",];
    //indexed array


    $deck = [];

    //diamonds
    $suitName = "diamonds";
    for ($i=1; $i <= 13; $i++) {
        $card["imageName"] = "/Labs/336-l3/assets/cards/" . $suitName . $i . ".png";
        $card["score"] = $i;
        $card["suit"] = $suitName;
        array_push($deck, $card);
    }

    //clubs
    $suitName = "clubs";
    for ($i=1; $i <= 13; $i++) {
        $card["imageName"] = "/Labs/336-l3/assets/cards/" . $suitName . $i . ".png";
        $card["score"] = $i;
        $card["suit"] = $suitName;
        array_push($deck, $card);
    }

    //hearts
    $suitName = "hearts";
    for ($i=1; $i <= 13; $i++) {
        $card["imageName"] = "/Labs/336-l3/assets/cards/" . $suitName . $i . ".png";
        $card["score"] = $i;
        $card["suit"] = $suitName;
        array_push($deck, $card);
    }

    //spades
    $suitName = "spades";
    for ($i=1; $i <= 13; $i++) {
        $card["imageName"] = "/Labs/336-l3/assets/cards/" . $suitName . $i . ".png";
        $card["score"] = $i;
        $card["suit"] = $suitName;
        array_push($deck, $card);
    }




    $player1 = ["imageName"=>"",
                "name" => $_POST["p1"]];
    $player2 = ["imageName"=>"",
                "name" => $_POST["p2"]];
    $player3 = ["imageName"=>"",
                "name" => $_POST["p3"]];
    $player4 = ["imageName"=>"",
                "name" => $_POST["p4"]];

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
    var_dump($deck);
    var_dump($table);
?>
    </body>
</html>
