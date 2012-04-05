<?php
class Index extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('Myemoji');
		$this->load->model('index_model');
	}
	public function index(){
		//データペースと接続
		$this->index_model->PDOconnect();
		//ランキングを取得する（STAR　TOP5）
		$sql = "select * from h_ranking order by h_ranking.p_counts desc limit 0,5";
		$ranking = $this->index_model->getAll($sql);
		$data['ranking']= $ranking;

		//VIEWの表示
		$this->load->library('Myemoji');
		$this->load->view('headerview');
		$this->load->view('indexview',$data);
		$this->load->view('footerview');
	}
	public function company(){
		$this->load->library('Myemoji');
		$this->load->view('headerview');
		$this->load->view('index_company');
		$this->load->view('footer_s');
	}
	public function hanlove_nav(){
		$this->load->library('Myemoji');
		$this->load->view('headerview');
		$this->load->view('index_hanlove_nav');
		$this->load->view('footer_u');
	}
	public function invite(){
		$this->load->library('Myemoji');
		$this->load->view('headerview');
		$this->load->view('index_invite');
		$this->load->view('footer_u');
	}
	public function invite_confirm(){
		$message="";
		$ng_check = 0;
		//■招待できるユーザーかチェック
		//if(empty($u_subno)){
		//$message.= '<font color=#ff0000><b>!</b></font>端末認証番号が確認できません。設定を変更してください。<br /><span style="font-size:xx-small">※ｹｰﾀｲの[戻るﾎﾞﾀﾝ]で戻って下さい。</span><br />';
		//$ng_check = 3;
		//}else{
		
		$invite_adr = $_REQUEST['invite_adr'];
		//■招待元の情報取得
		//$sql = "SELECT `u_id` from `hanluv_user` ";
		//$sql.= "where `u_subno` = '$u_subno'";
		//$res = $this->index_model->getAll($sql);
		//if(!empty($res[0][0])){
			//■招待対象者のアドレス重複かつ登録済みかチェック
			$sql = "SELECT count(*) from hanluv_user ";
			$sql.= "where u_mail = '$invite_adr'";
			$sql.= "AND  `u_cflg` =1";
			$res = $this->index_model->getRow($sql);
			
			if($res[0] >0){
				$message.= '<font color=#ff0000><b>!</b></font>招待したｱﾄﾞﾚｽは既に登録済みです。<br /><span style="font-size:xx-small">※ｹｰﾀｲの[戻るﾎﾞﾀﾝ]で戻って下さい。</span><br />';
				$ng_check = 3;
			}else{
				//■名前のチェック
				if(mb_strlen($_REQUEST['u_name']) < 2 || mb_strlen($_REQUEST['u_name']) > 16){
					$message.= '<font color=#ff0000><b>!</b></font>ｱﾅﾀの名前は2～16文字で入力してください。<br /><span style="font-size:xx-small">※ｹｰﾀｲの[戻るﾎﾞﾀﾝ]で戻って下さい。</span><br />';
					$ng_check = 3;
				}
				if(mb_strlen($_REQUEST['invite_name']) < 2 || mb_strlen($_REQUEST['invite_name']) > 16){
					$message.= '<font color=#ff0000><b>!</b></font>友達の名前は2～16文字で入力してください。<br /><span style="font-size:xx-small">※ｹｰﾀｲの[戻るﾎﾞﾀﾝ]で戻って下さい。</span><br />';
					$ng_check = 3;
				}else{
					$invite_name = mb_convert_encoding($_REQUEST['invite_name'],"EUC-JP", 'Shift-JIS');
				}
				if(mb_strlen($_REQUEST['invite_adr']) < 10){
					$message.= '<font color=#ff0000><b>!</b></font>メールアドレスが短すぎます。<br /><span style="font-size:xx-small">※ｹｰﾀｲの[戻るﾎﾞﾀﾝ]で戻って下さい。</span><br />';
					$ng_check = 4;
				}
				if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_REQUEST['invite_adr'])) {
					$mail = explode('@',$_REQUEST['invite_adr']);
					$domain = $mail[1];
					$docomo = array('docomo.ne.jp');
					$au = array('ezweb.ne.jp');
					//$softbank = array('softbank.ne.jp','i.softbank.jp','d.vodafone.ne.jp','h.vodafone.ne.jp','t.vodafone.ne.jp','c.vodafone.ne.jp','r.vodafone.ne.jp','k.vodafone.ne.jp','n.vodafone.ne.jp','s.vodafone.ne.jp','q.vodafone.ne.jp');
					//iphoneはPC扱い
					$softbank = array('gmail.com','softbank.ne.jp','d.vodafone.ne.jp','h.vodafone.ne.jp','t.vodafone.ne.jp','c.vodafone.ne.jp','r.vodafone.ne.jp','k.vodafone.ne.jp','n.vodafone.ne.jp','s.vodafone.ne.jp','q.vodafone.ne.jp');
					$willcom = array('pdx.ne.jp','di.pdx.ne.jp','dj.pdx.ne.jp','dk.pdx.ne.jp','wm.pdx.ne.jp');
					if(in_array($domain,$docomo)){
						$career =  'dc';
					}else if(in_array($domain,$au)){
						$career =   'au';
					}else if(in_array($domain,$softbank)){
						$career =   'sb';
					}else if(in_array($domain,$willcom)){
						$career =  'wc';
					}else{
						$message.= '<font color=#ff0000><b>!</b></font>このメールアドレスには招待できません。<br /><span style="font-size:xx-small">※ｹｰﾀｲの[戻るﾎﾞﾀﾝ]で戻って下さい。</span><br />';
						$ng_check = 4;
					}
				} else {
					$message.= '<font color=#ff0000><b>!</b></font>メールアドレスが不正です。<br /><span style="font-size:xx-small">※ｹｰﾀｲの[戻るﾎﾞﾀﾝ]で戻って下さい。</span><br />';
					$ng_check = 4;
				}
				
				
				//追加機能自分のアドレスの入力
				//if(mb_strlen($_REQUEST['u_adr']) < 10){
				//	$message.= '<font color=#ff0000><b>!</b></font>メールアドレスが短すぎます。<br /><span style="font-size:xx-small">※ｹｰﾀｲの[戻るﾎﾞﾀﾝ]で戻って下さい。</span><br />';
				//	$ng_check = 4;
				//}
				//if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_REQUEST['u_adr'])) {
				//	$mail = explode('@',$_REQUEST['invite_adr']);
				//	$domain = $mail[1];
				//	$docomo = array('docomo.ne.jp');
				//	$au = array('ezweb.ne.jp');
					//$softbank = array('softbank.ne.jp','i.softbank.jp','d.vodafone.ne.jp','h.vodafone.ne.jp','t.vodafone.ne.jp','c.vodafone.ne.jp','r.vodafone.ne.jp','k.vodafone.ne.jp','n.vodafone.ne.jp','s.vodafone.ne.jp','q.vodafone.ne.jp');
					//iphoneはPC扱い
				//	$softbank = array('gmail.com','softbank.ne.jp','d.vodafone.ne.jp','h.vodafone.ne.jp','t.vodafone.ne.jp','c.vodafone.ne.jp','r.vodafone.ne.jp','k.vodafone.ne.jp','n.vodafone.ne.jp','s.vodafone.ne.jp','q.vodafone.ne.jp');/
				//	$willcom = array('pdx.ne.jp','di.pdx.ne.jp','dj.pdx.ne.jp','dk.pdx.ne.jp','wm.pdx.ne.jp');
				//	if(in_array($domain,$docomo)){
				//		$ucareer =  'dc';
				//	}else if(in_array($domain,$au)){
				//		$ucareer =   'au';
				//	}else if(in_array($domain,$softbank)){
				//		$ucareer =   'sb';
				//	}else if(in_array($domain,$willcom)){
				//		$ucareer =  'wc';
				//	}else{
				//		$message.= '<font color=#ff0000><b>!</b></font>このメールアドレスは使用できません。<br /><span style="font-size:xx-small">※ｹｰﾀｲの[戻るﾎﾞﾀﾝ]で戻って下さい。</span><br />';
				//		$ng_check = 4;
				//	}
				//} else {
				//	$message.= '<font color=#ff0000><b>!</b></font>メールアドレスが不正です。<br /><span style="font-size:xx-small">※ｹｰﾀｲの[戻るﾎﾞﾀﾝ]で戻って下さい。</span><br />';
				//	$ng_check = 4;
				//}
				
				
				
				
				
				
			}
		//}else{
			//$message.= '<font color=#ff0000><b>!</b></font>お使いの端末は未登録です。<br />診断を行ってから招待してください。<br /><span style="font-size:xx-small">※ｹｰﾀｲの[戻るﾎﾞﾀﾝ]で戻って下さい。</span><br />';
			//$ng_check = 3;
		//}

		//}
		//error message
		
		$data['message'] = $message;
		//$agent = Net_UserAgent_Mobile::singleton();

		//loading templates
		//if($agent->isSoftbank()){
			//$smarty->display('s/header.tpl');
		//}elseif($agent->isEZweb()){
			//$smarty->display('a/header.tpl');
		//}else{
		
			$this->load->view('headerview');
		//}
		
		if($ng_check != 0){
			//■NGだったら表示するテンプレート
			$this->load->view('error',$data);
		}else{
			$invite_adr = $_REQUEST['invite_adr'];
			//$u_adr = $_REQUEST['u_adr'];
			$dec_id = $_REQUEST['dec_id'];
			$nick = $_REQUEST['u_name'];
			//invite information
			$data['invite_adr'] = $invite_adr;
			$data['invite_name'] = $invite_name;
			$data['dec_id'] = $dec_id;
			$data['u_nick'] = $nick;
			//$date['u_adr'] = $u_adr;

			//■登録テンプレート
			$this->load->view('index_invite_confirm',$data);
			/*if($agent->isSoftbank()){
				$smarty->display('s/invite_confirm.tpl');
			}elseif($agent->isEZweb()){
				$smarty->display('a/invite_confirm.tpl');
			}else{
				$smarty->display('invite_confirm.tpl');
			}*/
		}
		//Footer
		//if($agent->isSoftbank()){
			//$smarty->display('s/footer_ss.tpl');
		//}elseif($agent->isEZweb()){
			//$smarty->display('a/footer_ss.tpl');
		//}else{
			$this->load->view('footer_ss');
			//$smarty->display('footer_ss.tpl');
		//}
	}
	public function send_mail(){
		//Paramin
		$nick 			= mb_convert_encoding($_REQUEST['u_name'],"EUC-JP", 'Shift-JIS');
		$invite_name 	= mb_convert_encoding($_REQUEST['invite_name'],"EUC-JP", 'Shift-JIS');
		$dec_id 		= $_REQUEST['dec_id'];
		$invite_adr		= $_REQUEST['invite_adr'];
		
		$sql = "SELECT `u_id` from `hanluv_user` ";
		
		/////仮の値、修正が必要！！
		$sql.= "where `u_subno` = '34'";
		$res = $this->index_model->getAll($sql);
		//■招待元がいれば処理を実行
		if(!empty($res[0][0])){
			$invite_from = $res[0][0];
			//■招待対象者のアドレス重複チェック
			$sql = "SELECT count(*) from hanluv_user ";
			$sql.= "where u_mail = '$invite_adr' ";
			$sql.= "AND  u_cflg =0";
			$res = $this->index_model->getRow($sql);

			//■重複調査結果の判別
			if($res[0] > 0)	{
				//招待元の情報更新
				$sql = "UPDATE `hanluv_user` SET";
				$sql.= "`invite_from` =  '$invite_from'";
				$sql.= "WHERE  `u_mail` ='$invite_adr';";
				$res = $this->index_model->query($sql);

			}else{
				//招待先の新規登録
				$sql = "INSERT INTO hanluv_user ";
				$sql.= "(u_mail,u_name,invite_from) ";
				$sql.= "VALUES ('$invite_adr','hanluv','$invite_from')";
				$res = $this->index_model->query($sql);
			}
			//■データの登録
			$ng_check = 0;
			if($ng_check == 0){
				//■招待さきIDの取得
				$con = $this->index_model->PDOconnect();
				$sql = "SELECT `u_id` from `hanluv_user` ";
				$sql.= "where `u_mail` = '$invite_adr'";
				$res = $this->index_model->getAll($sql);
				$invite_to = $res[0][0];
				//招待元の情報更新
				$sql = "UPDATE  `cp-gag`.`hanluv_user` SET";
				$sql.= "`dec_id` =  '$dec_id',`invite_to` =  '$invite_to'";
				$sql.= "WHERE  `hanluv_user`.`u_id` ='$invite_from';";
				$res = $this->index_model->query($sql);

				//■招待メール
				$mail_key = "invite_mail";
				//診断用URL作成
				$invite_url	='http://han-love.from.tv';
				
				//@todo:param settings
				//$invite_url .= '?a='.$invite_from.'&t='.$invite_from.'&guid=ON';
				//かつて同じ組み合わせで招待したことがあるか確認
				$sql = "SELECT count(*) from h_invite ";
				$sql.= "where `invite_from` = $invite_from ";
				$sql.= "AND  `invite_to` 	= $invite_to ";
				$res = $this->index_model->getRow($sql);
		
				if($res[0] < 1){
					//招待情報の登録
					$sql = "INSERT INTO h_invite ";
					$sql.= "(`invite_id` ,`invite_from` ,`invite_to` ,`invite_comp` ,`invite_time`) ";
					$sql.= "VALUES (NULL ,  '$invite_from',  '$invite_to',  '0', CURRENT_TIMESTAMP)";

					$res = $this->index_model->query($sql);
				}
			}else{
				echo 'duplicate';

			}
		}
		
		//■メール文章の抽出
		if(empty($mail_key)){
			//■例外処理
			exit();
		}else{
			$sql = "SELECT	`s_value` from `system_values` ";
			$sql.= "WHERE 	`s_key` = '$mail_key'";
			$res = $this->index_model->getAll($sql);
			$body = $res[0]['s_value'];
		}

		/************************************************/
		/******************  Mail  **********************/
		/************************************************/
		if($ng_check == 0){
			//■セクション独自タグの置換
			$body = 	str_replace("{invite_url}",$invite_url,$body);
			$body = 	str_replace("{u_name}",$nick,$body);
			$body = 	str_replace("{invite_name}",$invite_name,$body);
			//$this->load->library('mobmail');

			//■タグ置換
			//$body = $this->index_model->tag_Analyze($body);
			
			//■メール送信
			//mb_internal_encoding( "EUC-JP");
			$subject = $invite_name.'さんにオススメの韓流サイト!!';
			require_once('qdmail.php');
			$mail = new Qdmail();

			$mail->to($invite_adr);
			$mail->subject($subject);
			$mail->text($body);
			$mail->from('test@localhost');

		    $mail->send();				
		 }
		
		$message='<font color=#ff0000><b>!</b></font>お友達を招待しました<br /><span style="font-size:xx-small">※ｹｰﾀｲの[戻るﾎﾞﾀﾝ]で戻って下さい。</span><br />';
		
		
	//指定の韓流スターのプロフィール取得
	$sql = <<<SQL
		SELECT `p_name`
		FROM  `h_profile` 
		WHERE  `p_profid` = '$dec_id'
SQL;
	$res = $this->index_model->getAll($sql);
	$p_name=$res[0][0];
	
	if(empty($dec_id))header("Location: $domain");
	if($dec_id < 10)$decome_id = '000'.$dec_id;
	if($dec_id > 9 && $dec_id < 100)$decome_id = '00'.$dec_id;
	if($dec_id > 99)$decome_id = '0'.$dec_id;
	
	//$smarty->register_outputfilter('sjis_encoding');
	//ini_set("default_mimetype", "application/xhtml+xml");
		//dataのセット
		$data['message'] = $message;
		$data['u_nick'] = $nick;
		$data['p_name']=$p_name;
		$data['decome']=$decome_id;
	
		
		//loading view
	    $this->load->library('Myemoji');
	    $this->load->view('headerview');
	    $this->load->view('index_deco',$data);
		$this->load->view('footer_ss');	
		
		
		
		//$db->disconnect();
			//■招待元の情報取得
	
	}
	public function shichusuimei(){
		//$this->load->library('Myemoji');
		$this->load->view('headerview');
		$this->load->view('index_shichusuimei');
		$this->load->view('footer_u');
	}
	public function sitemap(){
		//$this->load->library('Myemoji');
		$this->load->view('headerview');
		$this->load->view('index_sitemap');
		$this->load->view('footer_ss');
	}
	public function tos(){
		//$this->load->library('Myemoji');
		$this->load->view('headerview');
		$this->load->view('index_tos');
		$this->load->view('footer_s');
	}
	public function contact(){
		//$this->load->library('Myemoji');
		$this->load->view('headerview');
		$this->load->view('index_contact');
		$this->load->view('footer_s');
	}
	public function request(){
		//$this->load->library('Myemoji');
		$this->load->view('headerview');
		$this->load->view('index_request');
		$this->load->view('footer_ss');
	}
	public function privacy(){
		//$this->load->library('Myemoji');
		$this->load->view('headerview');
		$this->load->view('index_privacy');
		$this->load->view('footer_s');
	}
	public function mixi_check(){
		//$this->load->library('Myemoji');
		$this->load->view('headerview');
		$this->load->view('index_mixi_check');
		$this->load->view('footer_ss');
	}
}

?>