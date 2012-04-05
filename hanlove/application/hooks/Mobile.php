<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Mobile {
	function display(){	
		$this->ci =& get_instance();
		$this->ci->load->library('user_agent');
		
		if($t=$this->ci->agent->is_mobile()){
			$d=$this->config->item('charset');
		//var_dump($d);

		$buffer = $this->ci->output->get_output();
		$buffer = mb_convert_encoding($buffer, 'SJIS', $this->ci->config->item('charset'));
		echo $buffer;
		}else
		{
			
			echo $this->ci->output->get_output();
		}
  		}

}