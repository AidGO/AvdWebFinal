<main class="aboutme">
<div class="container">
        <div class="box">
            <div class="box-row">
                <div class="box-cell box1">
                    <h2><?php echo $data['imgTitle'] ?></h2>
                    <img src="<?php echo $data['img'] ?>" alt="My Picture" width="500" height="600" class="center">
                </div>
                    <div class="box-cell box2">
                        <?php foreach($data['articles'] as $article){ ?>
                        <h2><?php echo $article['title']?></h2>
                        <p><?php echo $article['content']?></p>
                    <?php } ?>
                </div>
            </div>
        </div>
</div>
</main>
<?php include_once('footerview.php') ?>