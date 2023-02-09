<?php

require '../functions.php';

use PHPUnit\Framework\TestCase;

class functions extends TestCase
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
        // . "<p><a class='good-reads-link' href=link target='_blank'><i class='fab fa-goodreads'></i></a></p>"
        . "</section>";
        $actualOutput = displayBooks($example);
        $this->assertEquals($expectedOutput, $actualOutput);
    }
    public function testFailureEmptyArrayDisplayBooks() 
    {
        $example = [[]];
        $this->expectException(Exception::class);
        displayBooks($example); 
    }
    public function testFailureNullFirstNameDisplayBooks() 
    {
        $example = [
            ['authorFirstName' => null, 
            'authorSecondName' => 'authorSecondName', 
            'bookTitle' => 'bookTitle', 
            'textType' => 'textType',
            'genre' => 'genre',
            'yearPublished' => 'yearPublished',
            'authorInspiration' => 'authorInspiration',
            'keyQuote' => 'keyQuote',
            'languageWrittenIn' => 'languageWrittenIn',
            'link'=>'link',
            'extra'=>'#']
        ];
        $this->expectException(Exception::class);
        displayBooks($example); 
    }
    public function testFailureNullSecondNameDisplayBooks() 
    {
        $example = [
            ['authorFirstName' => 'authorFirstName', 
            'authorSecondName' => null, 
            'bookTitle' => 'bookTitle', 
            'textType' => 'textType',
            'genre' => 'genre',
            'yearPublished' => 'yearPublished',
            'authorInspiration' => 'authorInspiration',
            'keyQuote' => 'keyQuote',
            'languageWrittenIn' => 'languageWrittenIn',
            'link'=>'link',
            'extra'=>'#']
        ];
        $this->expectException(Exception::class);
        displayBooks($example); 
    }
    public function testFailureNullBookTitleDisplayBooks() 
    {
        $example = [
            ['authorFirstName' => 'authorFirstName', 
            'authorSecondName' => 'authorSecondName', 
            'bookTitle' => null, 
            'textType' => 'textType',
            'genre' => 'genre',
            'yearPublished' => 'yearPublished',
            'authorInspiration' => 'authorInspiration',
            'keyQuote' => 'keyQuote',
            'languageWrittenIn' => 'languageWrittenIn',
            'link'=>'link',
            'extra'=>'#']
        ];
        $this->expectException(Exception::class);
        displayBooks($example); 
    }
    public function testFailureNullTextTypeDisplayBooks() 
    {
        $example = [
            ['authorFirstName' => 'authorFirstName', 
            'authorSecondName' => 'authorSecondName', 
            'bookTitle' => 'bookTitle', 
            'textType' => null,
            'genre' => 'genre',
            'yearPublished' => 'yearPublished',
            'authorInspiration' => 'authorInspiration',
            'keyQuote' => 'keyQuote',
            'languageWrittenIn' => 'languageWrittenIn',
            'link'=>'link',
            'extra'=>'#']
        ];
        $this->expectException(Exception::class);
        displayBooks($example); 
    }
    public function testFailureNullGenreDisplayBooks() 
    {
        $example = [
            ['authorFirstName' => 'authorFirstName', 
            'authorSecondName' => 'authorSecondName', 
            'bookTitle' => 'bookTitle', 
            'textType' => 'textType',
            'genre' => null,
            'yearPublished' => 'yearPublished',
            'authorInspiration' => 'authorInspiration',
            'keyQuote' => 'keyQuote',
            'languageWrittenIn' => 'languageWrittenIn',
            'link'=>'link',
            'extra'=>'#']
        ];
        $this->expectException(Exception::class);
        displayBooks($example); 
    }
    public function testFailureNullYearPublishedDisplayBooks() 
    {
        $example = [
            ['authorFirstName' => 'authorFirstName', 
            'authorSecondName' => 'authorSecondName', 
            'bookTitle' => 'bookTitle', 
            'textType' => 'textType',
            'genre' => 'genre',
            'yearPublished' => null,
            'authorInspiration' => 'authorInspiration',
            'keyQuote' => 'keyQuote',
            'languageWrittenIn' => 'languageWrittenIn',
            'link'=>'link',
            'extra'=>'#']
        ];
        $this->expectException(Exception::class);
        displayBooks($example); 
    }
    public function testFailureNullAuthorInspirationDisplayBooks() 
    {
        $example = [
            ['authorFirstName' => 'authorFirstName', 
            'authorSecondName' => 'authorSecondName', 
            'bookTitle' => 'bookTitle', 
            'textType' => 'textType',
            'genre' => 'genre',
            'yearPublished' => 'yearPublished',
            'authorInspiration' => null,
            'keyQuote' => 'keyQuote',
            'languageWrittenIn' => 'languageWrittenIn',
            'link'=>'link',
            'extra'=>'#']
        ];
        $this->expectException(Exception::class);
        displayBooks($example); 
    }
    public function testFailureNullKeyQuoteDisplayBooks() 
    {
        $example = [
            ['authorFirstName' => 'authorFirstName', 
            'authorSecondName' => 'authorSecondName', 
            'bookTitle' => 'bookTitle', 
            'textType' => 'textType',
            'genre' => 'genre',
            'yearPublished' => 'yearPublished',
            'authorInspiration' => 'authorInspiration',
            'keyQuote' => null,
            'languageWrittenIn' => 'languageWrittenIn',
            'link'=>'link',
            'extra'=>'#']
        ];
        $this->expectException(Exception::class);
        displayBooks($example); 
    }
    public function testFailureNullLanguageWrittenInDisplayBooks() 
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
            'languageWrittenIn' => null,
            'link'=>'link',
            'extra'=>'#']
        ];
        $this->expectException(Exception::class);
        displayBooks($example); 
    }
    public function testFailureNullLinkDisplayBooks() 
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
            'link'=>null,
            'extra'=>'#']
        ];
        $this->expectException(Exception::class);
        displayBooks($example); 
    }
    public function testFailureNullExtraDisplayBooks() 
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
            'link'=>'link',
            'extra'=>null]
        ];
        $this->expectException(Exception::class);
        displayBooks($example); 
    }
    public function testFailureEmptyAuthorFirstNameDisplayBooks() 
    {
        $example = [
            ['authorFirstName' => '', 
            'authorSecondName' => 'authorSecondName', 
            'bookTitle' => 'bookTitle', 
            'textType' => 'textType',
            'genre' => 'genre',
            'yearPublished' => 'yearPublished',
            'authorInspiration' => 'authorInspiration',
            'keyQuote' => 'keyQuote',
            'languageWrittenIn' => 'languageWrittenIn',
            'link'=>'link',
            'extra'=>'extra']
        ];
        $this->expectException(Exception::class);
        displayBooks($example); 
    }
    public function testFailureEmptyAuthorSecondNameDisplayBooks() 
    {
        $example = [
            ['authorFirstName' => 'authorFirstName', 
            'authorSecondName' => '', 
            'bookTitle' => 'bookTitle', 
            'textType' => 'textType',
            'genre' => 'genre',
            'yearPublished' => 'yearPublished',
            'authorInspiration' => 'authorInspiration',
            'keyQuote' => 'keyQuote',
            'languageWrittenIn' => 'languageWrittenIn',
            'link'=>'link',
            'extra'=>'extra']
        ];
        $this->expectException(Exception::class);
        displayBooks($example); 
    }
    public function testFailureEmptyBookTitleDisplayBooks() 
    {
        $example = [
            ['authorFirstName' => 'authorFirstName', 
            'authorSecondName' => 'authorSecondName', 
            'bookTitle' => '', 
            'textType' => 'textType',
            'genre' => 'genre',
            'yearPublished' => 'yearPublished',
            'authorInspiration' => 'authorInspiration',
            'keyQuote' => 'keyQuote',
            'languageWrittenIn' => 'languageWrittenIn',
            'link'=>'link',
            'extra'=>'extra']
        ];
        $this->expectException(Exception::class);
        displayBooks($example); 
    }
    public function testFailureEmptyTextTypeDisplayBooks() 
    {
        $example = [
            ['authorFirstName' => 'authorFirstName', 
            'authorSecondName' => 'authorSecondName', 
            'bookTitle' => 'bookTitle', 
            'textType' => '',
            'genre' => 'genre',
            'yearPublished' => 'yearPublished',
            'authorInspiration' => 'authorInspiration',
            'keyQuote' => 'keyQuote',
            'languageWrittenIn' => 'languageWrittenIn',
            'link'=>'link',
            'extra'=>'extra']
        ];
        $this->expectException(Exception::class);
        displayBooks($example); 
    }
    public function testFailureEmptyGenreDisplayBooks() 
    {
        $example = [
            ['authorFirstName' => 'authorFirstName', 
            'authorSecondName' => 'authorSecondName', 
            'bookTitle' => 'bookTitle', 
            'textType' => 'textType',
            'genre' => '',
            'yearPublished' => 'yearPublished',
            'authorInspiration' => 'authorInspiration',
            'keyQuote' => 'keyQuote',
            'languageWrittenIn' => 'languageWrittenIn',
            'link'=>'link',
            'extra'=>'extra']
        ];
        $this->expectException(Exception::class);
        displayBooks($example); 
    }
    public function testFailureEmptyYearPublishedDisplayBooks() 
    {
        $example = [
            ['authorFirstName' => 'authorFirstName', 
            'authorSecondName' => 'authorSecondName', 
            'bookTitle' => 'bookTitle', 
            'textType' => 'textType',
            'genre' => 'genre',
            'yearPublished' => '',
            'authorInspiration' => 'authorInspiration',
            'keyQuote' => 'keyQuote',
            'languageWrittenIn' => 'languageWrittenIn',
            'link'=>'link',
            'extra'=>'extra']
        ];
        $this->expectException(Exception::class);
        displayBooks($example); 
    }
    public function testFailureEmptyAuthorInspirationDisplayBooks() 
    {
        $example = [
            ['authorFirstName' => 'authorFirstName', 
            'authorSecondName' => 'authorSecondName', 
            'bookTitle' => 'bookTitle', 
            'textType' => 'textType',
            'genre' => 'genre',
            'yearPublished' => 'yearPublished',
            'authorInspiration' => '',
            'keyQuote' => 'keyQuote',
            'languageWrittenIn' => 'languageWrittenIn',
            'link'=>'link',
            'extra'=>'extra']
        ];
        $this->expectException(Exception::class);
        displayBooks($example); 
    }
    public function testFailureEmptyKeyQuoteDisplayBooks() 
    {
        $example = [
            ['authorFirstName' => 'authorFirstName', 
            'authorSecondName' => 'authorSecondName', 
            'bookTitle' => 'bookTitle', 
            'textType' => 'textType',
            'genre' => 'genre',
            'yearPublished' => 'yearPublished',
            'authorInspiration' => 'authorInspiration',
            'keyQuote' => '',
            'languageWrittenIn' => 'languageWrittenIn',
            'link'=>'link',
            'extra'=>'extra']
        ];
        $this->expectException(Exception::class);
        displayBooks($example); 
    }
    public function testFailureEmptyLanguageWrittenInDisplayBooks() 
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
            'languageWrittenIn' => '',
            'link'=>'link',
            'extra'=>'extra']
        ];
        $this->expectException(Exception::class);
        displayBooks($example); 
    }
    public function testFailureEmptyLinkDisplayBooks() 
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
            'link'=>'',
            'extra'=>'extra']
        ];
        $this->expectException(Exception::class);
        displayBooks($example); 
    }
    public function testFailureEmptyExtraDisplayBooks() 
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
            'link'=>'link',
            'extra'=>'']
        ];
        $this->expectException(Exception::class);
        displayBooks($example); 
    }
}