<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
  <head>
    <meta name="description" content="Sean Mihaly | UI/UX expert with a focus in design, technology, and service." />
    <meta name="keywords" content="Sean Mihaly, UI, UX, User Interface, User Experience, Mobile Design, Web Design, User flow, Design research, Service Design, Resume, Portfolio" />
    <meta name="robots" content="index, follow, noarchive, nocache" />
    <?php snippet('construction/meta') ?>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,400i,700,700i" rel="stylesheet">
    <?php snippet('construction/css') ?>
    <link href="../assets/css/lightbox.css" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">        
  </head>
  
  <body class="custom-bg">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bubbly-bg@0.2.3/dist/bubbly-bg.js"></script>
    <script>bubbly();</script> -->
    <?php echo js('assets/js/background.js') ?>
    <header class="wrap return">
      <?php if ($logo = $site->image($site->logo())): ?>
      <a href="<?php echo url() ?>"><img src="<?php echo $logo->url() ?>" alt="<?php echo $site->title()->html() ?>" /></a> 
      <?php else: ?> 
      <a href="<?php echo url() ?>"><?php echo $site->title()->html() ?></a>
      <?php endif ?>
    </header>