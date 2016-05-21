<?php
define('SMARTY_DIR',str_replace("\\","/",getcwd()).'/libs/');

require_once(SMARTY_DIR . 'Smarty.class.php');

$smarty = new Smarty;

// Expeditions
$smarty->assign('expeditions', 
  array(
    array(
      'title' => 'Discovery',
      'name' => 'British National Antarctic Expedition',
      'leader' => 'Robert Falcon Scott',
      'date' => '1901-1904',
      'bg' => '/images/teasers/12.jpg',
      'link' => 'expedition.php'
    ),
    array(
      'title' => 'Nimrod',
      'name' => 'British Antarctic Expedition',
      'leader' => 'Ernest Shackleton',
      'date' => '1907-1909',
      'bg' => '/images/teasers/15.jpg',
      'link' => 'expedition.php'
    ),
    array(
      'title' => 'Endurance',
      'name' => 'Imperial Trans-Antarctic Expedition',
      'leader' => 'Ernest Shackleton',
      'date' => '1914-1916',
      'bg' => '/images/teasers/10.jpg',
      'link' => 'expedition.php'
    ),
    array(
      'title' => 'Aurora',
      'name' => 'Imperial Trans-Antarctic Expedition',
      'leader' => 'Captain Aeneas Mackintosh',
      'date' => '1914-1917',
      'bg' => '/images/teasers/20.jpg',
      'link' => 'expedition.php'
    ),
    array(
      'title' => 'Quest',
      'name' => 'Shackleton Rowett Expedition',
      'leader' => 'Ernest Shackleton (Frank Wild)',
      'date' => '1921-1922',
      'bg' => '/images/teasers/18.jpg',
      'link' => 'expedition.php'
    )
  )
);

// Treasures
$smarty->assign('treasures',
  array(
    array(
      'title' => 'Map',
      'link' => 'article.php',
      'thumbnail' => '/images/treasures/map.jpg'
    ),
    array(
      'title' => 'Goggles',
      'link' => 'article.php',
      'thumbnail' => '/images/treasures/goggles.jpg'
    ),
    array(
      'title' => 'Letter',
      'link' => 'article.php',
      'thumbnail' => '/images/treasures/letter.jpg'
    ),
    array(
      'title' => 'Watch',
      'link' => 'article.php',
      'thumbnail' => '/images/treasures/watch.jpg'
    ),
    array(
      'title' => 'Telescope',
      'link' => 'article.php',
      'thumbnail' => '/images/treasures/telescope.jpg'
    ),
    array(
      'title' => 'Drawing',
      'link' => 'article.php',
      'thumbnail' => '/images/treasures/drawing.jpg'
    ),
    array(
      'title' => 'Boot',
      'link' => 'article.php',
      'thumbnail' => '/images/treasures/boot.jpg'
    ),
    array(
      'title' => 'Bust',
      'link' => 'article.php',
      'thumbnail' => '/images/treasures/bust.jpg'
    ),
    array(
      'title' => 'Instrument',
      'link' => 'article.php',
      'thumbnail' => '/images/treasures/instrument.jpg'
    ),
    array(
      'title' => 'Book',
      'link' => 'article.php',
      'thumbnail' => '/images/treasures/book.jpg'
    )
  )
);

// Pioneers
$smarty->assign('pioneers',
  array(
    array(
      'name' => 'Ernest Shackleton',
      'link' => 'biography.php',
      'image' => '/images/pioneers/shackleton.jpg'
    ),
    array(
      'name' => 'James McIlroy',
      'link' => 'biography.php',
      'image' => '/images/pioneers/mcilroy.jpg'
    ),
    array(
      'name' => 'Lionel Greenstreet',
      'link' => 'biography.php',
      'image' => '/images/pioneers/greenstreet.jpg'
    ),
    array(
      'name' => 'Frank Hurley',
      'link' => 'biography.php',
      'image' => '/images/pioneers/hurley.jpg'
    ),
    array(
      'name' => 'Perce Blackborow',
      'link' => 'biography.php',
      'image' => '/images/pioneers/blackborow.jpg'
    )
  )
);

$smarty->display('index.tpl');
?>