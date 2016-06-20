<?php
/**
 * @file
 * The primary PHP file for this theme.
 */

function pperu_preprocess_html(&$variables) {
  drupal_add_css('https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css', array('type' => 'external'));
}
