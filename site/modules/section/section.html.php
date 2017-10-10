<div id="<?php echo str::slug($module->title()) ?>" class="print <?php if(!$module->iconillus()->empty()): ?>wrap df<?php else: ?>bg<?php endif ?>">
  <section class="article-text <?php if(!$module->iconillus()->empty()): ?>bl bl10<?php else: ?>wrap<?php endif ?> ">
    <h3 class="module-title"><?php echo $module->title()->html() ?></h3>
    <?php echo $module->text()->kirbytext() ?>


    <?php if(!$module->textsuite()->empty()): ?>
    <a class="mini-icon opentextsuite" href="#extra-<?php echo str::slug($module->title()) ?>">
    <i class="fa fa-plus-square-o fa-2x"></i>
    </a>
    <?php endif ?>


    <?php if(!$module->textlink()->empty()): ?>
    <a target="blank" class="mini-icon text-link" href="<?php echo $module->textlink()->url() ?>">
    <i class="fa fa-external-link fa-2x"></i>
    </a>
    <?php endif ?>


    <?php  $i = 1; $images = $module->gallerie()->split(); foreach($images as $image): ?>      
    <a href=" <?php echo $module->image($image)->url() ?>"
       class="mini-icon strip strip-image-<?php echo $i;?>"
       data-strip-group="image-group-<?php echo str::slug($module->title()) ?>">
        <i class="fa fa-photo fa-2x"></i>
    </a>
    <?php $i++; endforeach ?>


    <?php $i = 1; foreach($module->gallery_video()->toStructure() as $item): ?>
    <a class="mini-icon strip strip-video-<?php echo $i;?>" data-strip-options="width: 853,height: 480,youtube: { autoplay: 0 }" data-strip-group="video-group-<?php echo str::slug($module->title()) ?>" href="<?= $item->gallery_video_url()->url() ?>">
      <i class="fa fa-youtube-play fa-2x"></i>
    </a>
    <?php $i++; endforeach ?> 


    <?php if(!$module->textsuite()->empty()): ?>
    <div id="extra-<?php echo str::slug($module->title()) ?>" class="textsuite">
      <?php echo $module->textsuite()->kirbytext() ?>
    </div>
    <?php endif ?>
  </section>


  <?php if(!$module->iconillus()->empty()): ?>
  <div class="article-icon bl bla first">
    <i class="fa fa-<?php echo $module->iconillus()->text(); ?> fa-2x"></i>
  </div>
  <?php endif ?> 
</div>