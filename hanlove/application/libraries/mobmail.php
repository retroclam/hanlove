<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
require_once('qdmail.php');
class Mobmail {
    function use_qdmail($invite_adr,$subject,$body){
        $CI =& get_instance();
        $CI->mail = new Qdmail();
        $mail_result = qb_send_mail(
        		'text',
        		$invite_adr,
        		$subject,
        		$body,
        		'test@localhost'
        );
        if($mail_result)$message= $invite_name."さんを招待しました<br>";
        return $message;
    }
}

?>