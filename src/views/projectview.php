<main>
    <?php foreach($data['articles'] as $article){ ?>
        <h2><?php echo $article['title']?></h2>
        <p><?php echo $article['content']?></p>
        <p><?php echo $article['languages']?></p>
        <a href ="<?php echo $article['link']?>" target="_blank"><?php echo $article['link']?></a>
    <?php } ?>
</main>
<?php include_once('footerview.php') ?>