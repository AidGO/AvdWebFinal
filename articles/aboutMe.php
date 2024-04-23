<?php
$config = parse_ini_file('../config.ini', true);
$environment = $config['ENVIRONMENT'];
$URL_BASE = $config[$environment]['URL_BASE'];
define('URL_ROOT', "$URL_BASE");
define('APP_ROOT', dirname(__FILE__,2));

    $data = 
    [
        'pageTitle' => 'About Me',
        'img' => '../media/Senior Pic.png',
        'imgTitle' => 'Picture',
        'articles' => 
        [
        [
          'title' => "Where I grew up",
          'content' => "For most of my live I have lived in the eastern part of Minnesota in the chisago county.
          My first memories that I have as a kid were in a place called Center City. I don't have
          many memories of this place because as soon as I turned four, our house burnt into ash
          while we were away at our cabin. Although we don't know the exact reason, it was speculated
          to be an electrical issue caused by a rodent. The bulk of my life was spend living on a farm
          in Almelund Minnesota. I'd live on that farm until I was in tenth grade, where our family moved
          into Bemidji for work oppurtunities."
        ],
        [
          'title' => "How I got into computer science",
          'content' => "It started when I got my first laptop in 2017 for my birthday. Originally I only used it to
          finish my school assignments, but a friend introduced computer games to me. Soon after, video
          games became my favorite way to pass time. Seeing all of the interesting things that can be
          accomplished from a computer, like video games for example, really solidified my interest
          in the science behind them."
        ],
        [
            'title' => "Graduation Plans",
            'content' => "I don't have any super specific plans for when I graduate from college. One thing I do know,
            is that I want to keep learning more and more until I can call myself a profensional. Gaining
            plenty of work experience would be most important way for me to accomplish this in the near
            future."
        ]
        ]
    ];
  include_once(APP_ROOT . '/src/views/headview.php');
  include_once(APP_ROOT . '/src/views/aboutmeview.php');
?> 