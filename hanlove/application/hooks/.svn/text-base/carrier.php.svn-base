<?php 

function getCarrier(){

//$a['test']= '$cr';
//define("config['carrer']", "cr");

$userAgent = $_SERVER['HTTP_USER_AGENT'];
    if (preg_match('/^DoCoMo/', $userAgent)) {
    	$cr='docomo';
    } else if (preg_match('/^KDDI-/', $userAgent)) {
        $cr='au';
    } else if (preg_match('/^(?:SoftBank|Vodafone|MOT-)/', $userAgent)) {
        $cr='SoftBank';
    } else if (preg_match('#^Mozilla/3\.0\((?:WILLCOM|DDIPOCKET);#', $userAgent)) {
        $cr='WILLCOM';
	} else if (preg_match('/^(?:emobile|Huawei|IAC)/', $userAgent)) {
	    $cr='EMOBILE';
	} else if (preg_match('#^Mozilla/5\.0 \((?:iPhone|iPod|iPad);#', $userAgent)) {
	    if (preg_match('/OS ([\d_]+)/', $userAgent, $matches)) {
	    	if (version_compare($matches[1], '2.2', '>=')) {
	        	$cr='iPhone';
	        }
	    }
	}else if (preg_match('/^J-PHONE/', $userAgent)) {
		$cr='J-PHONE';
	}
    $cr='PC'; 
   //エラーメッセージ　
   /* if($cr='PC'){
		
		echo 'error --このサイトは携帯電話専用です。';
		exit;
    }
    */
} 
	 

    	
       
    
 
    	
		
	
       

		
	
	

