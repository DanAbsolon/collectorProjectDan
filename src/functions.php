<?php

$booksDb = connectToDb('booksDb');

$books = getAllBooks($booksDb);

function displayBooks($books) {
    $htmlOutput = ''; 
    foreach ($books as $book) {
        if (substr($book['authorSecondName'], -1) == "s") {
            $possessiveMarker = "'";
        } else {
            $possessiveMarker = "'s";
        }    
        $link = $book['link'];
        $htmlOutput .= "<section tabindex='0'>";
        $htmlOutput .= "<h2>" . $book['bookTitle'] . "</h2>";
        $htmlOutput .= "<p tabindex='0' class='quote'>&#8220" . $book['keyQuote'] . "&#8221</p>";
        $htmlOutput .= "<p tabindex='0'><span class='bookTitle'>" . $book['bookTitle'] 
            . "</span> is a " 
            . $book['textType'] 
            . " of the "
            . $book['genre']
            . " genre"
            . ", written by "
            . $book['authorFirstName'] 
            . " "
            . $book['authorSecondName'] 
            . " in " 
            . $book['languageWrittenIn'] 
            . " and published in "
            . $book['yearPublished'] 
            . ". "
            . $book['authorSecondName']
            . $possessiveMarker 
            . " inspiration for the "
            . $book['textType'] 
            . " was "
            . $book['authorInspiration'] 
            . ".</p>"
            . "<a class='goodreadsLink' href=$link target='_blank'><i class='fab fa-goodreads'></i></a>";
        $htmlOutput .= "</section>";
    }
    return $htmlOutput;
}
