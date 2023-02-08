<?php

require '../functions.php';

use PHPUnit\Framework\TestCase;

class TestDisplayBooks extends TestCase
{
	public function testSuccessDisplayBooks()
	{
        $example = [
            ['authorFirstName' => 'authorFirstName', 
            'authorSecondName' => 'authorSecondName', 
            'bookTitle' => 'bookTitle', 
            'textType' => 'textType',
            'genre' => 'genre',
            'yearPublished' => 'yearPublished',
            'authorInspiration' => 'authorInspiration',
            'keyQuote' => 'keyQuote',
            'languageWrittenIn' => 'languageWrittenIn',
            'subjectMatter' => 'subjectMatter',
            'link'=>'link',
            'extra'=>'#']
        ];
        $expectedOutput = "<section tabindex='0'>"
        . "<h2>" 
        . 'bookTitle' 
        . "</h2>"
        . "<p tabindex='0' class='quote'>&#8220" 
        . 'keyQuote' 
        . "&#8221</p>"
        . "<p tabindex='0'><span class='bookTitle'>" 
        . 'bookTitle'
        . "</span> is a " 
        . 'textType' 
        . " of the "
        . 'genre'
        . " genre"
        . ", written by "
        . 'authorFirstName' 
        . " "
        . 'authorSecondName' 
        . " in " 
        . 'languageWrittenIn' 
        . " and published in "
        . 'yearPublished' 
        . ". "
        . 'authorSecondName'
        . "'s" 
        . " inspiration for the "
        . 'textType' 
        . " was "
        . 'authorInspiration' 
        . ".</p>"
        . "<img src=# alt='author image'>"
        . "<p><a class='good-reads-link' href=link target='_blank'><i class='fab fa-goodreads'></i></a></p>"
        . "</section>";
        $actualOutput = displayBooks($example);
        $this->assertEquals($expectedOutput, $actualOutput);
    }
}