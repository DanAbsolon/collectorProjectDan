<?php

require '../functions.php';

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

$expectedOutput =     
    "<section tabindex='0'>"
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
    


// function to find differences between two strings, from https://github.com/paulgb/simplediff/blob/master/php/simplediff.php

function diff($old, $new){
    $matrix = array();
    $maxlen = 0;
    foreach($old as $oindex => $ovalue){
        $nkeys = array_keys($new, $ovalue);
        foreach($nkeys as $nindex){
            $matrix[$oindex][$nindex] = isset($matrix[$oindex - 1][$nindex - 1]) ?
                $matrix[$oindex - 1][$nindex - 1] + 1 : 1;
            if($matrix[$oindex][$nindex] > $maxlen){
                $maxlen = $matrix[$oindex][$nindex];
                $omax = $oindex + 1 - $maxlen;
                $nmax = $nindex + 1 - $maxlen;
            }
        }   
    }
    if($maxlen == 0) return array(array('d'=>$old, 'i'=>$new));
    return array_merge(
        diff(array_slice($old, 0, $omax), array_slice($new, 0, $nmax)),
        array_slice($new, $nmax, $maxlen),
        diff(array_slice($old, $omax + $maxlen), array_slice($new, $nmax + $maxlen)));
}

function htmlDiff($old, $new){
    $ret = '';
    $diff = diff(preg_split("/[\s]+/", $old), preg_split("/[\s]+/", $new));
    foreach($diff as $k){
        if(is_array($k))
            $ret .= (!empty($k['d'])?"<del>".implode(' ',$k['d'])."</del> ":'').
                (!empty($k['i'])?"<ins>".implode(' ',$k['i'])."</ins> ":'');
        else $ret .= $k . ' ';
    }
    return $ret;
}

$functionOutput = displayBooks($example);

echo $functionOutput;

echo $expectedOutput;

echo htmlDiff($functionOutput,$expectedOutput);

if ($functionOutput == $expectedOutput) {
    echo 'yes';
} else {
    echo 'no';
}
