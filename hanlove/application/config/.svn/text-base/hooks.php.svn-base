<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//config.phpの９２行目を変更　　$config['enable_hooks'] = TRUE;
/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/hooks.html
|
*/

$hook['post_controller_constructor']= array(
                                'class'    => '',
                                'function' => 'getCarrier',
                                'filename' => 'carrier.php',
                                'filepath' => 'hooks',
                                );

$hook['display_override'][] = array(
                                'class'    => 'Mobile',
                                'function' => 'display',
                                'filename' => 'Mobile.php',
                                'filepath' => 'hooks'
                                );
                                

 //End of file hooks.php 
/* Location: ./application/config/hooks.php */