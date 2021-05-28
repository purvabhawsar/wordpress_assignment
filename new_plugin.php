<?php
/*
 Plugin Name: My First Plugin
 
 Description: The very first plugin that I have ever created.
  Version: 1.0
  Author: purva bhawsar
  
 */

  add_action( 'the_content', 'my_thank_you_text' );

function my_thank_you_text ( $content ) {
    return $content .= '<p>Thank you for reading!</p>';
    } 
