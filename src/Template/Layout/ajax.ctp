<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Gym Notepad';
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>

    </title>
    <?= $this->Html->meta('icon') ?>


    <?= $this->Html->script('vendor/jquery.js') ?>
    <?= $this->Html->script('vendor/what-input.js') ?>
    <?= $this->Html->script('vendor/foundation.min.js') ?>

  <?= $this->Html->css('foundation.css') ?>
    <!-- <?= $this->Html->css('base.css') ?> -->
    <!-- <?= $this->Html->css('style.css') ?> -->




  <?= $this->fetch('script') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>


    <!-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" /> -->
	<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script> -->
	<!-- <script type="text/javascript" src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script> -->
  <!-- Compressed CSS -->

<!-- <link rel="stylesheet" href="css/foundation.css" /> -->
</head>
<body>


    <!-- <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                 <h1><a href="">
                  <?= $this->fetch('title') ?>
                </a></h1>
                <h1><?= $this->Html->link(
                  'Gym Notepad',
                  '/pages/index'

              ); ?></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li><a target="_blank" href="https://cdu.edu.au">Kris LOGO</a></li>
                <li><a target="_blank" href="https://cdu.edu.au">CDU</a></li>
            </ul>
        </div>
    </nav> -->
<div class="top-bar" id="sitename">
  <h1><?= $this->Html->link(
    'Gym Notepad',
    '/pages/index'

  ); ?></h1>
    </div>
    <div class="top-bar">
      <div class="top-bar-left">
        <ul class="dropdown menu" data-dropdown-menu>
          <li class="menu-text">Options</li>
          <li>
            <a href="#">One</a>
            <ul class="menu vertical">
              <li><a href="#">One</a></li>
              <li><a href="#">Two</a></li>
              <li><a href="#">Three</a></li>
            </ul>
          </li>
          <li><a href="#">Two</a></li>
          <li><a href="#">Three</a></li>
        </ul>
      </div>

      <!-- <div class="top-bar-right">
        <ul class="menu">
          <li><input type="search" placeholder="Search"></li>
          <li><button type="button" class="button">Search</button></li>
        </ul>
      </div> -->
    </div>

    <?= $this->Flash->render() ?>
    <div class="container clearfix">

<?= $this->fetch('content') ?>



    </div>
    <footer>
    </footer>
    <script>
         $(document).foundation();
       </script>
</body>
</html>
