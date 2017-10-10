<?php snippet('header') ?>
<main>
 <article>   
  <header class="article-presentation <?= $page->alignpresentation() ?> <?= $page->leadtheme() ?>">
    <div class="wrap">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
      <?php if($page->contactsection()->bool()) :?>
      <div class="presentation-contact <?= $page->aligncontact() ?>">
        <?php if(!$site->twitter()->empty()): ?><a target="blank" href="https://twitter.com/<?php echo $site->twitter()->html() ?>"><?php echo $site->twitter()->html() ?></a><?php endif ?> <?= html::email($site->email(), $text = '', $attr = array('class' => 'presentationemail')) ?>
        <?php if(!$site->website()->empty()): ?><a target="blank" href="<?php echo $site->website()->html() ?>"><?php echo $site->website()->html() ?></a><?php endif ?>
      </div>
      <?php endif ?>
    </div>
  </header>
  <?php $page->modules() ?>
  </article> 
</main>
<?php snippet('footer') ?>