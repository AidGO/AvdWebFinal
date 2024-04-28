<h2>Edit</h2>
<form method="POST">
    <label for="page">Page:</label>
    <input type="text" id="page" name="page" value="<?php echo (isset($article[0]['page'])) ? $article[0]['page'] : null ?>" required>
    <label for="title">Title:</label>
    <input type="title" id="title" name="title" value="<?php echo (isset($article[0]['title'])) ? $article[0]['title'] : null ?>">
    <label for="languages">Languages:</label>
    <input type="languages" id="languages" name="languages" value="<?php echo (isset($article[0]['languages'])) ? $article[0]['languages'] : null ?>">
    <label for="link">Link:</label>
    <input type="link" id="link" name="link" value="<?php echo (isset($article[0]['link'])) ? $article[0]['link'] : null ?>">
    <button type="submit">Update</button>
    <br>
    <label for="content">Content:</label>
    <textarea id="content" name="content" rows="4" style ="width: 100%" maxlength="600"><?php echo (isset($article[0]['content'])) ? $article[0]['content'] : null ?></textarea>
</form>