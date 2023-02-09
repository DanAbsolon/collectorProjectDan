<?php

function displayBooks($books) {
    $htmlOutput = ''; 
    foreach ($books as $book) {
        if (isset($book['authorFirstName']) 
        && isset($book['authorSecondName'])
        && isset($book['bookTitle'])
        && isset($book['textType'])
        && isset($book['genre'])
        && isset($book['yearPublished'])
        && isset($book['authorInspiration'])
        && isset($book['authorFirstName'])
        && isset($book['keyQuote'])
        && isset($book['languageWrittenIn'])
        && isset($book['link'])
        && isset($book['extra']) 
        && $book['authorFirstName']
        && $book['authorSecondName']
        && $book['bookTitle']
        && $book['textType']
        && $book['genre']
        && $book['yearPublished']
        && $book['authorInspiration']
        && $book['authorFirstName']
        && $book['keyQuote']
        && $book['languageWrittenIn']
        && $book['link']
        && $book['extra']) {
            if (substr($book['authorSecondName'], -1) == "s") {
                $possessiveMarker = "'";
            } else {
                $possessiveMarker = "'s";
            }    
            $image = $book['extra'];
            $link = $book['link'];
            $htmlOutput .= "<section tabindex='0'>"
            . "<h2>" 
            . $book['bookTitle'] 
            . "</h2>"
            . "<p tabindex='0' class='quote'>&#8220" 
            . $book['keyQuote'] 
            . "&#8221</p>"
            . "<p tabindex='0'><span class='bookTitle'>" 
            . $book['bookTitle'] 
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
            . "<img src=$image alt='author image'>"
            . "</section>";
        } else {
            throw new Exception('It appears that one or more of the fields entered are null or empty in the database.');
        }
    }
    return $htmlOutput;
} 
