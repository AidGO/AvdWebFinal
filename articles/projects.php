<?php
$config = parse_ini_file('../config.ini', true);
$environment = $config['ENVIRONMENT'];
$URL_BASE = $config[$environment]['URL_BASE'];
define('URL_ROOT', "$URL_BASE");
define('APP_ROOT', dirname(__FILE__,2));

$data = 
[
    'pageTitle' => 'Projects',
    'articles' => 
    [
    [
      'title' => "Hangman Using GET",
      'content' => "This is a game of hangman I made for the final project of the class Introduction to Web Design. There is only one word, and the word is not hidden. Meaning that the word can be seen using inspect.",
      'languages' => "HTML, JavaScript",
      'link' => "https://cs.bemidjistate.edu/kx6868dj/Classes/hangmanProject/hangman.htm"
    ],
    [
        'title' => "Banking Website",
        'content' => "This is a collaberation projecte between Cayden and me. This project uses a login page and a transfer system using sessions.",
        'languages' => "CSS, PHP, HTML",
        'link' => "https://cs.bemidjistate.edu/vp1139go/banking/"
    ],
    [
        'title' => "My Homepage",
        'content' => "You are currently on my homepage. This is a work in progress, and I am planning to make it better in the future.",
        'languages' => "PHP, HTML, CSS",
        'link' => "https://cs.bemidjistate.edu/kx6868dj/"
    ],
    [
        'title' => "Arbo",
        'content' => "This project is currently a work in progress. This project is a mobile application that allows users to report types of trees that the app will show using google's map API. This project will be finished at the end of April.",
        'languages' => "Kotlin, SGML",
        'link' => ""
    ],
    [
        'title' => "Trucking Chuck",
        'content' => "A game about trucking as a guy named Chuck. Drive through extreme weather conditions within the alloted time to win. Chuck must meet his quota.",
        'languages' => "C++",
        'link' => ""
    ]
    ]
];

include_once(APP_ROOT . '/src/views/headview.php');
include_once(APP_ROOT . '/src/views/projectview.php');
?>