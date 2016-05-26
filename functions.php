<?php
    function checkForClickBait() {
          $clickBait = ($_POST["click_headline"] );
          $a = array(
            "scientists",
            "scientist",
            "doctors",
            "doctor",
            "hate",
            "stupid",
            "weird",
            "trick",
            "shocked me",
            "shocking",
            "you'll never believe",
            "hack",
            "epic",
            "unbelievable"
          );
          $b = array(
            "so-called scientists",
            "so-called scientist",
            "so-called doctors",
            "so-called doctor",
            "aren't threatened by",
            "average",
            "completely normal",
            "ineffective",
            "method",
            "is no different from others",
            "you wont really be suprised by",
            "slightly improve",
            "boring",
            "normal"
            );
            $honest = str_replace($a, $b, $clickBait);

            return array($clickBait, $honest);
        }
        function displayHonestHeadline( $x, $y ){
            echo "<strong class='text-danger'>Orignal Headline</strong> <h4>".ucwords($x)."</h4><h4>";
            echo "<strong class='text-success'>Honest Headline</strong> <h4>".ucwords($y)."</h4>";
        }
        ?>