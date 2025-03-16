<div class="block">
<h2><?php echo (isset($article['title'])) ? $article['title'] : null; ?></h2>
<p><?php echo (isset($article['content'])) ? $article['content'] : null;?></p>
<p><?php echo !empty($article['languages']) ? "Resources used: $article[languages]" : null; ?></p>
<?php if (!empty($article['link'])): ?>
    <a href="<?php echo $article['link']; ?>">Link: <?php echo $article['link']; ?></a>
<?php endif; ?>
</div>