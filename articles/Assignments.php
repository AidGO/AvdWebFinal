<?php
$config = parse_ini_file('../config.ini', true);
$environment = $config['ENVIRONMENT'];
$URL_BASE = $config[$environment]['URL_BASE'];
define('URL_ROOT', "$URL_BASE");
define('APP_ROOT', dirname(__FILE__,2));

  $data = 
  [
    'pageTitle' => 'Assignments',
    'stylesheet' => 'HomePage.css',
    'articles' => 
    [
    [
      'title' => "Assignment 1 - Home Page",
      'content' => "You are to create a 'Home' page. This page will include a header with either your name or 'Home' in it. A navigation bar with links to 'Home' and 'Assignments'. The links can be dead for now. As well as an article section where you answer the following questions. 1. Why are you taking this class? 2.What do you want to take away from this class? Styling and creativity will be left up to you individually. You will also need to include a link on the page to the GitHub directory where all the source code for this assignment is located."
    ],
    [
      'title' => "Assignment 2 - About Page",
      'content' => "You are to create an 'About' page."
    ],
    [
      'title' => "Assignment 3 - Refactor",
      'content' => "You are to refactor your protfolio based on the in class exercises we did on Januar 18th and 23rd. These refactors make use of the power of PHP include statements and separate site content from site structure."
    ],
    [
      'title' => "Assignment 4 - Bank",
      'content' => "You are to create a demo bank website. This will include a log in page, an account summary page, and a transfer page. For now, all of the data can be stored in a data array on each page since we haven't gotten to sharing data yet. Styling and CSS as well as any extra JavaScript will be left up you you individually. The primary concern with this assignment is making a functioning 3 page website. This will be located at https://cs.bemidjistate.edu/{yourId}/banking."
    ],
    [
      'title' => "Assignment 5 - Objects",
      'content' => "You are to copy the inclass assignment from february 8th and 13th into a new directory and refactor the whole thing from functions to objects"
    ],
    [
      'title' => "Assignment 6 - projects view",
      'content' => "You are to create a projects page for your website. We have done several in class assignments recently where we take an array of items and show them in a list view. Use that experience to create this page. This page will be a list view of your recent projects. Each project will consist of a title, a short desciption, a link to the gitub repo for that project, a list of languages used, and a link to the live version on the web if there is one. YOu can use your site as one of those projects. This page will be located at https://cs.bemidjistate.edu/{yourId}/projects"
    ]
    ]
  ];
  include_once(APP_ROOT . '/src/views/headview.php');
  include_once(APP_ROOT . '/src/views/mainview.php');
?>