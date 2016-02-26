<?php 
//1) Each player gets the "right amount" of cards to get close to 42 (20pts)
//2) The cards are not duplicated (15pts)
//3) The total points per player is displayed properly (15pts)
//4) The winner(s) is(are) displayed properly with the earned points (15pts)
//5) Players pictures are displayed RANDOMLY (10pts)
//6) Your contribution in GitHub is similar to your teammates (15pts)
//7) There is an external CSS file with 10 rules (10pts)
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Silverjack Game</title>
    <h1>Silverjack Game</h1>
  </head>

  <body bgcolor="#E6E6FA"> <!--setting the backround color-->
    <form action="game.php" method="POST">
      <div>
        <label>Player 1:</label><input type="text" name="p1" />
      </div>
      <div>
        <label>Player 2:</label><input type="text" name="p2" />
      </div>
      <div>
        <label>Player 3:</label><input type="text" name="p3" />
      </div>
      <div>
        <label>Player 4:</label><input type="text" name="p4" />
      </div>
      <input type="submit" name="GO!">
    </form>
  </body>
</html>
 
 