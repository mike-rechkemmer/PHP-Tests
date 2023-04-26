<?php

    //Variables
    $age = 34;
    $double_age = $age * 2;
    $name = "Joe";
    $first_letter = 'J';

    //Array
    $colors = array( 'black', 'gray', 'white' );
    
    echo '<p>The color you chose is '.$colors[0].'.</p>';

    $colors[] = 'yellow'; //adds a color to colors

    //Associated Array
    $home_towns = array(
        'GL' => 'Grasslands',
        'OS' => 'Oceanscape',
        'SV' => 'Spooksville',
    );

    echo '<pre>';
    print_r( $home_towns );
    echo '</pre>';

    echo '<p>Your hometown is '.$home_towns['SV'].'!</p>';

    //Multidimensional Array
    $partner = array(
        'Banana Man' => array(
            'name' => 'Banana Man',
            'strength' => 40,
            'intelligence' => 5,
            'power' => 'Banana Blaster',
            'power-descriptor' => 'a banana peel that fires mini bananas from a long distance',
        ),
        'Fox boy' => array(
            'name' => 'Fox boy',
            'strength' => 20,
            'intelligence' => 50,
            'power' => 'Scent Detector',
            'power-descriptor' => 'a snout that can sniff the tracks of it\'s enemy',
        ),
        'Cool Girl' => array(
            'name' => 'Cool Girl',
            'strength' => 20,
            'intelligence' => 25,
            'power' => 'Sunglasses at Dawn',
            'power-descriptor' => 'when the sun in their eyes, beams can be reflected blinding their enemies',
        ),
    );

    echo '<pre>';
    print_r( $partner );
    echo '</pre>';

    echo '<p>Your partner is '.$partner['Fox boy']['name'].'.</p>';
    echo '<p>Their power is '.$partner['Fox boy']['power'].' - '.$partner['Fox boy']['power-descriptor'].'.</p>';

    //Constants
    echo "Hello, $name"; //double quotes are slower to process than single quotes
    echo '</br>';
    echo 'Hello, '. $name.'!'; //. is a concat
    echo '</br>';
    echo 'Welcome to '.$name.'\'s World!'; //escape quote
    echo '</br>';
    echo "\n This is a new line in the HTML -- not in the render.";
    echo '</br>';
    echo $name.'\'s Nickname is "Silly Goose"';
    // Single quote will display the the variable name echo 'Hello, $name';

    echo '</br></br>';

    echo 'The current year is: ';
    define('YEAR', 2023);
    echo YEAR;

    echo '</br></br>';

    /* Multiline Comment 
    This will show your age
    and double it*/
    echo 'You are ';
    echo $age;
    echo ' years old!';
    echo '</br>';
    echo 'Double your age is ';
    echo $double_age;
?>