<main>
    <h2><?php echo (isset($article['title'])) ? $article['title'] : null; ?></h2>
    <p><?php echo (isset($article['content'])) ? $article['content'] : null;?></p>
    <p><?php echo (isset($article['languages'])) ? $article['languages'] : null;?></p>
    <a href="<?php echo (isset($article['link'])) ? $article['link'] : null;?>">
        <?php echo (isset($article['link'])) ? 'See More' : null;?>
    </a>
</main>