<?php 
  $family = ["alice","bob"];
  $kids = [];
  array_push($kids, "eve", "chuck");
  
  array_splice($kids, 1,0, "dave");
  
  //var_dump($kids);
  
  for ($i = 0; $i < count($kids); $i++) {
     //array_push($family, $kids[$i]);
  }
  
  // var_dump($family);
  
  $extendedFamily = ["uncle" => "elcnu",
                      "aunt" => "tnua",
                      "cousin" => "nisuoc",];
                      
  unset($extendedFamily['aunt']);
  // var_dump($extendedFamily);
  
  $extendedFamily["stepuncle"] = "elcnupets";
  // var_dump($extendedFamily);
  
  foreach ($extendedFamily as $value) {
    //var_dump($value);
    //echo "</br>";
  }
  
  $family[] = $kids;
  echo($family[0][1]);

?>