<?php snippet('header') ?>
<main class="wrap">   
  <h1><?= $page->title()->html() ?></h1>  
  <?= $page->text()->kirbytext() ?>  
  <?php snippet('projects') ?>
</main>
<?php snippet('footer') ?>