<?php 
    // $card = ["imageName" => "",
    //         "score" => "",
    //         "suit" => "",
    //         "rank" => ""];
    //indexed array
    $deck = [];

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
    var_dump($table);
?>
    </body>
</html>