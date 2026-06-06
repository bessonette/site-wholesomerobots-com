<?php

return [
    'baseUrl' => '',
    'production' => false,
    'siteName' => 'Wholesome Robots',
    'siteDescription' => '',
    'navigation' => array (
  'primary' => 
  array (
    0 => 
    array (
      'label' => 'Home',
      'url' => '/',
      'target' => '_self',
    ),
    1 => 
    array (
      'label' => 'About',
      'url' => '/about',
      'target' => '_self',
    ),
  ),
),
    'collections' => [
        'posts' => ['sort' => ['-date']],
    ],
];
