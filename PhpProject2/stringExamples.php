 <!-- Working through example of *Programming PHP* by Kevin Tatroe, Peter MacIntyre, and Rasmus Lerdorf -->
<html>
    <head>
        <meta charset="UTF-8">
        <title>String Examples</title>
    </head>
    <body>
        <?php

            $amount1 = "zero";
            $frame1 = "There was $amount1 of wind before 2pm and 3pm.<br/>";
            echo $frame1;
            $amount2 = "3";
            $frame2a = "There was {$amount2} knots of wind before 3pm and 4pm.<br/>";
            echo $frame2a;
            $frame2b = "There was {{$amount2}} knots of wind before 3pm and 4pm.<br/>";
            echo $frame2b;
            $frame3 = 'There was $amount1 of wind before 2pm and 3pm.<br/>'; //The interpolation won't work b/c of the single quotes.  The NetBeans highlighting reinforces that.
            echo $frame3;
            $frame4 = 'There was {$amount2} knots of wind before 3pm and 4pm.<br/>'; //The interpolation won't work b/c of the single quotes.  The NetBeans highlighting reinforces that.
            echo $frame4;
            
//            $jjgrey =<<< Mofro
//            You know you know 
//            you know you know
//            you know you know
//            what I'm talking about.
//            Mofro;
//            echo $jjgrey;
//            printf(<<< Template
//            %s is %d years old.
//            Template
//            , "Fred", 35);
//            $dialogue = <<< NoMore
//            "It's not going to happen!" she fumed
//            NoMore;
//            echo $dialogue;

            echo "1-", "First", "second", "third", "<br/>";
            echo "2-" . "First" . "second" . "third" . "<br/>";
            print("3-First second third <br/>");
            printf("4-%s %s %s %s", "First", "second", "third", "<br/>");
            $append5 = sprintf("5-%s %s %s %s", "First", "second", "third", "<br/>");
            echo $append5;
                
            $thisRiver = array('Track2'=>'Somebody Else', 'Track3'=>'Tame a Wild One', 'Track4'=>'99 Shades of Crazy');
            print_r($thisRiver);
            var_dump($thisRiver);
            echo '<br/>';
            class P {
                var $name = 'nat';
                var $sound = 'puh puh pee';
                var $region = null;
                var $county = false;
            }
            $p = new P;
            print_r($p);
            var_dump($p);
            
            $v = 'Victory';
            for( $i=0; $i < strlen($v); $i++ ) {
                printf("The %dth character of {$v} is %s<br/>", $i, $v{$i});
            }
            
            echo "<br/>Printing special characters.  Click on the 'View source' in a browser for more details of what is and isn't converted.";
            $a = "aeioü & AÉIOU<br/>";
            $a_htmlentities = htmlentities($a);
            $a_htmlspecialchars= htmlspecialchars($a);
            echo $a;
            echo $a_htmlentities;
            echo $a;
            echo $a;
            echo $a_htmlspecialchars;
            echo $a;
             
            $translationTable1 = get_html_translation_table(HTML_ENTITIES);
            echo $translationTable1 . "<br/>";
            $reverseTranslation = array_flip($translationTable1);
            echo strtr($a_htmlentities, $reverseTranslation);
        ?>
    </body>
</html>
