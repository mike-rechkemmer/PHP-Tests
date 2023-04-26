<?php
//CHALLENGE: Print a story about a person who is going to a certain city to watch a movie with a friend where they select their favorite candy
// $name = "Georgie";
// $gender = "boy";
// $city = "Derry";
// $movie = "Stephen King's IT";
// $tickets = 2;
// $friend = "Bill";
// $candy = "Cotton Candy";

$name = $_GET['name'];
$gender = $_GET['gender'];
$city = $_GET['city'];
$movie = $_GET['movie'];
$tickets = $_GET['tickets'];
$friend = $_GET['friend'];
$candy = $_GET['candy'];

if ($name == ''){$name = 'Georgie';}
if ($gender == ''){$gender = 'boy';}
if ($city == ''){$city = 'Derry';}
if ($movie == ''){$movie = 'Stephen King\'s IT';}
if ($tickets == ''){$tickets = 2;}
if ($friend == ''){$friend = 'Bill';}
if ($candy == ''){$candy = 'Cotton Candy';}

?>

<html>
    <style>
    body {
        max-width: 1280px;
        margin: 0 auto;
        margin-top: 50px;
        padding: 0 60px;
        font-family: system-ui;
        color: #333;
        }
    .formContainer{
        background-color: #f3f3f3;
        padding: 2%;
        max-width: 400px;
        margin: 0 auto;
        }
    </style>
    <body>

<?php

echo '<h1>A Story about a '.ucfirst($gender).' named '.$name.'</h1>';
echo '<h2>Chapter 1...</h2>';
echo '<p>'.$name.' was a young '.$gender.' who decided they wanted to go see a movie. '.$name.' didn\'t want to see the movie alone, so they asked their sibiling, '.$friend.', if they wanted to go with them.';
echo '</br>'.$friend.' happily accepted, but proceeded to ask, "What movie would we go to?"';
echo '</br>'.$name.' thought carefully and blurted out, "I want to see the new movie, '.$movie.'! How does that sound?"';
echo '</br>'.$friend.' nodded and together they headed over to the movie theater in their city of '.$city.' where they\'ve spent their entire childhood.';
echo '</br>Once they arrived to the movies, '.$friend.' asked the clerk, "We\'ll take '.$tickets.' for the movie '.$movie.'.';
echo '</br>'.$name.' chimed in, "-and we\'ll take some '.$candy.'!"';
echo '</p>';

echo '<p><strong>The End</strong></p>';
?>

        <div class="formContainer">
<?php
echo '<h3>Want to rewrite the story?</h3>';

echo '<form action="challenge.php" method="get">';

echo '<label for="nameText">Name: </label>';
echo '<input type="text" name="name" value="'.$name.'"/></br></br>';

echo '<label for="nameText">Gender: </label>';
echo '<select name="gender">
<option selected hidden>'.ucfirst($gender).'</option>
<option value="boy">Boy</option>
<option value="girl">Girl</option>
<option value="person">Person</option>
<option value="robot">Robot</option>
</select>
</br></br>';

echo '<label for="cityText">City/Location: </label>';
echo '<input type="text" name="city" value="'.$city.'"/></br></br>';

echo '<label for="movieText">Movie Name: </label>';
echo '<input type="text" name="movie" value="'.$movie.'"/></br></br>';

echo '<label for="ticketsText">Ticket Amount: </label>';
echo '<input type="number" name="tickets" value="'.$tickets.'"/></br></br>';

echo '<label for="friendText">Friend\'s Name: </label>';
echo '<input type="text" name="friend" value="'.$friend.'"/></br></br>';

echo '<label for="candyText">Candy of Choice: </label>';
echo '<input type="text" name="candy" value="'.$candy.'"/></br></br>';

echo '<input type="submit" name="submit" value="Update Story" />';

echo '</form>';

echo '<form action="challenge.php"><input type="submit" name="reset" value="Reset" /></form>'

?>
        </div>
    </body>
</html>