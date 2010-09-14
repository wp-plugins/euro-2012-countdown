<?php
/*
Plugin Name: EURO 2012 Countdown
Plugin URI: http://euro2012en.500v.net
Description: The widget shows the countdown that left till the start of the Euro 2012 football championship.
Version: 1.0
*/


class EURO2012Countdown extends WP_Widget { 
  function EURO2012Countdown() { 
  parent::WP_Widget(false, $name = 'EURO 2012 Countdown'); 
  } 

  function widget($args, $instance) { 
    echo '<div style="text-align:center;padding:10px 0 10px 0">'; 
    echo '<a href="http://euro2012en.500v.net" target="_blank" title="EURO 2012 - Countdown"><img src="http://euro2012en.500v.net/informer.ashx?t=1&l=en" border="0" width="175" height="120" /></a>';
    echo '</div>'; 
  } 

  function update($new_instance, $old_instance) { 
    return $new_instance; 
  } 

  function form($instance) { 
  }


} 
add_action('widgets_init', create_function('', 'return register_widget("EURO2012Countdown");')); 

?>
