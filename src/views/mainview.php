<main>
    <?php foreach($data['articles'] as $article){ ?>
        <h2><?php echo $article['title']?></h2>
            <p><?php echo $article['content']?></p>
    <?php } ?>
</main>
<?php include_once('footerview.php') ?>