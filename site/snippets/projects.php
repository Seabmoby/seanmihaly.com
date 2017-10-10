<?php

$projects = $pages->index()->filterBy('template', 'project')->visible();

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of projects:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $projects = $projects->limit($limit);

?>


<?php if($page->show_projects()->bool()) :?>

<br>
<hr>
<br>

<ul class="home-projects">

  <?php foreach($projects as $project): ?>

  <li class="df">
    <div class="projects-text bl <?php if($thumbnail = $project->image($project->thumbnail())) :?>bl5<?php else:?>bl12<?php endif;?>">

      <h3 class="showcase-title"><a href="<?= $project->url() ?>"><?= $project->title()->html() ?></a></h3>
      <p><?php echo $project->text()->excerpt(500) ?></p>         
    </div>
    <?php if($thumbnail = $project->image($project->thumbnail())) :?>
    <div class="bl bla">         
      <img src="<?= $thumbnail->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="showcase-image" />
    </div>
    <?php endif ?>
    <a class="read-more-invisible" href="<?= $project->url() ?>">Read More</a>
  </li>
  <?php endforeach ?>
</ul>
<?php endif ?>

