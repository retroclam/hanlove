<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class Myemoji {
    public function mm($text){
 		require_once 'HTML/Emoji.php';
		// 現在の端末用の HTML_Emoji オブジェクトを作成
		$emoji = HTML_Emoji::getInstance();

		// PC で表示する際に用いる画像ファイルの URL を指定
		$emoji->setImageUrl('/mobile-codeIgniter/img/PC_images/');
		
		//$text = mb_convert_encoding($text, "UTF-8", "EUC-JP");
		//$text = mb_convert_encoding($text, "UTF-8", "SJIS");
		
	// 現在の端末で表示するのに適した形にデータを変換
		$output= $emoji->filter($text, array('HexToUtf8','carrier'));
 
       
        
        
		//$output = mb_convert_encoding($output, "EUC-JP", "UTF-8");
    	echo $output;
  
   
    }
}

	
	
	
