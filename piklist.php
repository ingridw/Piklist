<?php
/*
Title: Add More Fields <span class="piklist-title-right">Order 1</span>
Post Type: page
Order: 1
Collapse: false
*/
  
  piklist('field', array(
    'type' => 'group'
    ,'label' => __('Sidebar Boxes')
    ,'description' => __('Add some content and some images to the sidebar.')
    ,'field' => 'sidebar_content'
    ,'add_more' => true
    ,'fields' => array(
      array(
      	'type' => 'editor'
      	,'field' => 'wysiwyg'
      	,'columns' => 12
      )
      ,array(
        'type' => 'text'
        ,'field' => 'caption'
        ,'label' => 'Caption'
        ,'columns' => 4
      )
      ,array(
        'type' => 'file'
        ,'field' => 'image'
        ,'label' => 'Add Image'
        ,'columns' => 4
      )
    )
  ));
  
