<html>
  <head>
    <title>An Array of Friends</title>
  </head>
  <body>
    <p>
      <?php  // This is the starting command for PHP programming
        $friends = array("Alex", "Austin", "Daniel"); // This is an array
        echo "My best friend is " . $friends[1]; // The first element starts at 0
        // This is acceptable: $friends{1}
      ?>  // This is the ending mrk for PHP programming
      <?php
        $myName = "Tyler"; // This is a string variable with my name
        if ($myName == "Simon") { // This is an if/elseif/else 
          echo "My name is Simon"; // Prints out this string
        } elseif ($myName == "Danny") {
          echo "My name is Danny";
        } else {
          echo "My name is " . $myName; // This is a way of concatenating two strings
        }
      ?>
      <?php
        $items = 8;
        switch($items) { // The alternative method is switch($items):
          case (1): // There can be text here or not
          case (2):
          case (3):
          case (4):
          case (5):
            echo "The number of items is between 1 and 5";
            break;
          case (6):
          case (7):
          case (8):
          case (9):
          case (10):
            echo "The number of items is between 6 and 10";
            break;
          default:
            echo "The number of item is greater than 10";
            break;
        } // For the alternative way, it needs to be endswitch;
      ?>
      <?php
        $languages = array("HTML/CSS", "JavaScript", "PHP", "Python", "Ruby");
        foreach($languages as $lang) { // This is a for-each loop 
          print "<p>$lang</p>";
        }
        unset($languages); //Deletes the whole array
        unset($languages[3]); //Deletes "Python" from the array
      ?>
    </p>
  </body>
</html>
