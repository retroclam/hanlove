<?php

//include("base_url('application/libraries/qdmail.php')");

class Testmail extends CI_Controller {
	function sendmail(){
		$base_url = base_url('application/libraries/qdmail.php');
		$data = array('hello'=>'こんにちは');
		$content=$this->load->view('mailview',$data,true);
		echo qd_send_mail('html','address@example.com','件名',$content,'from@example.com');
	}
}