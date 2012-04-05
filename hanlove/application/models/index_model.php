<?php
class Index_model extends CI_Model {
	function PDOconnect(){
		$dsn = "mysql:dbname=cp-gag;host=localhost";
		$pass = "";
		$user = "root";
		try{
			$dsn = new PDO($dsn,$user,$pass);
			//print('接続に成功しました。<br>');
		}catch(PDOException $e){
			print('Error:'.$e->getMessage());
			die();
		}
		return $dsn;
	}
	function getAll($sql){
		$con=$this->PDOconnect();
		$str = $con->prepare($sql);
		$str->execute();
		$result = $str->fetchAll();
		return $result;
	}
	function query($sql){
		$con = $this->PDOconnect();
		$str = $con->query($sql);
		$str->execute();

	}
	function getRow($sql){
		$con = $this->PDOconnect();
		$str = $con->prepare($sql);
		$str->execute();
		$count = $str->fetchColumn();
		return $count;
	}
	/*
	 ■名前：タグ解析
	■引数：文字列
	■返値：文字列
	*/
	function tag_Analyze($body){
		//■初期化
		$match =array();
		$i=0;

		//■タグの抽出
		$match_counts = preg_match_all("/\{[a-zA-Z0-9\_]+\}/is",$body,$match,PREG_SET_ORDER);

		//■2次元配列を1次元配列に変換
		foreach($match as $colkey => $colvalue){
			foreach($colvalue as $key => $value){
				$tags[$i] = $value;
				$i = $i+1;
			}
		}

		//■配列内の重複解除
		$tag = array_unique($tags);
		sort($tag);

		//■文章内のタグを置換
	    $con = $this->PDOconnect();
		foreach($tag as $key => $value){
			//■タグの内容の置換
			$sql = "SELECT	`s_value` from `system_values` ";
			$sql.= "WHERE 	`s_key` = '$value'";
			$str = $con->prepare($sql);
			$str->execute();
			$res =  $str->fetchColumn($sql);
			$tag_value = $res[0];
			$body = 	str_replace($value,$tag_value,$body);
		}
		$con = null;
		return $body;
	}
	public function getValues($key){
		//■DBからキーに対応する要素の取り出し

		$sql = "SELECT	`s_value` from `system_values` ";
		$sql.= "WHERE 	`s_key` = '$key'";
		$con=$this->PDOconnect();
		$str = $con->prepare($sql);
		$str->execute();
		$res = $str->fetchColumn();
		$body = $res[0];
		$con = null;
		return $body;
	}
}
?>