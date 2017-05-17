<?php

$settings = array(
  array(
    'type'       => 'colorpicker',
    'label'      => __('Active Thumbnail Border Color'),
    'id'         => 'active-thumbnail-border-color',
    'value'      => '#0088CC',
    'pro'        => FALSE,
    'namespace'  => TRUE,
    'properties' =>
      array(
        array('target' => '.vimeography-videopartnertheme .vimeography-thumbnails .vimeography-slides li.vimeography-videopartnertheme-active-slide img', 'attribute' => 'borderColor'),
      )
  ),
  array(
    'type'       => 'colorpicker',
    'label'      => __('Inactive Thumbnail Border Color'),
    'id'         => 'inactive-thumbnail-border-color',
    'value'      => '#0088CC',
    'pro'        => FALSE,
    'namespace'  => TRUE,
    'properties' =>
      array(
        array('target' => '.vimeography-videopartnertheme .vimeography-thumbnails .vimeography-slides li img', 'attribute' => 'borderColor'),
      )
  ),
  array(
    'type'       => 'colorpicker',
    'label'      => __('Pager Arrow Color'),
    'id'         => 'pager-arrow-color',
    'value'      => '#000000',
    'pro'        => FALSE,
    'namespace'  => TRUE,
    'properties' =>
      array(
        array('target' => '.vimeography-videopartnertheme .vimeography-videopartnertheme-direction-nav a.vimeography-videopartnertheme-prev span', 'attribute' => 'borderRightColor'),
        array('target' => '.vimeography-videopartnertheme .vimeography-videopartnertheme-direction-nav a.vimeography-videopartnertheme-next span', 'attribute' => 'borderLeftColor'),
      )
  ),
  array(
    'type'       => 'colorpicker',
    'label'      => __('Loader Color'),
    'id'         => 'loader-color',
    'value'      => '#000000',
    'pro'        => FALSE,
    'namespace'  => TRUE,
    'important'  => TRUE,
    'properties' =>
      array(
        array('target' => '.vimeography-videopartnertheme .vimeography-main .vimeography-spinner div div', 'attribute' => 'backgroundColor'),
      )
  ),
  array(
    'type'       => 'slider',
    'label'      => __('Pager Arrow Size'),
    'id'         => 'pager-arrow-size',
    'value'      => '5',
    'pro'        => TRUE,
    'namespace'  => TRUE,
    'properties' =>
      array(
        array('target' => '.vimeography-videopartnertheme .vimeography-videopartnertheme-direction-nav a.vimeography-videopartnertheme-prev span', 'attribute' => 'borderWidth'),
        array('target' => '.vimeography-videopartnertheme .vimeography-videopartnertheme-direction-nav a.vimeography-videopartnertheme-next span', 'attribute' => 'borderWidth'),
      ),
    'min'       => '5',
    'max'       => '10',
    'step'      => '1',
  ),
);