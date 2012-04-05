
<?php
class Result extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('index_model');
	}
	public function u_result(){
	$this->load->library('Myemoji');
	//居場所
	$locate = "result";
	//form Params
	//$aid		=	$_REQUEST['aid'];
	//$ticket		=	$_REQUEST['ticket'];
	$target		=	$_REQUEST['target'];
	$eto_number	=	$_REQUEST['etid'];
	$group		=	$_REQUEST['group'];
	$u_nick		=	$_REQUEST['u_nick'];

	
	
	//$u_nick 	= ereg_replace("\r|\n| ","",$u_nick);
	/*//■固体識別取得
	$guid_chk	= 	$_GET['guid'];
	$subno		= 	getSubscriber($_SERVER['HTTP_USER_AGENT'];
	if(empty($subno))header("Location: $domain");*/
	//◆診断ロジック部分
	if($target <1){
		//グループ診断の時
		if($group>0){
			 $shindan_flg = 'group';
			//ユーザーの相性順に検索
			$sql = <<<SQL
				SELECT *
				FROM  	`h_result`
				WHERE  	`r_female` = '$eto_number'
				AND  `r_total_num` >=4
				ORDER BY  `h_result`.`r_total_num` DESC
SQL;
			$result_text = $this->index_model->getAll($sql);

			//チェック1回目
			$result_number = 0;
				
			$p_eto = $result_text[$result_number][2];

			//一番合う人間がグループに存在するかチェック
			$sql = <<<SQL
				SELECT *
				FROM  `h_profile`
				WHERE  `p_eto` = 	'$p_eto'
				AND  `p_eto_jp` !=  '0'
				AND `p_groupid` = 	'$group'
SQL;
			$result_star = $this->index_model->getAll($sql);
			//取得できなかった場合2番目でチェック
			if(count($result_star)==0){
				$result_number = 1;
				$p_eto = $result_text[$result_number][2];
				//一番合う人間がグループに存在するかチェック
				$sql = <<<SQL
					SELECT *
					FROM  `h_profile`
					WHERE  `p_eto` = 	'$p_eto'
					AND  `p_eto_jp` !=  '0'
					AND `p_groupid` = 	'$group'
SQL;
				$result_star = $this->index_model->getAll($sql);
				if(count($result_star)==0){
					//グループの韓流スターを抽出
					$sql = <<<SQL
						SELECT *
						FROM  `h_profile`
						WHERE  `p_groupid` = '$group'
						AND  `p_profid` !=  '0'
SQL;
					$result_star = $this->index_model->getAll($sql);
					//複数の人から一人だけ選んで干支番号の取得
					$star_counts = 0;
					$star_eto_number = $result_star[$star_counts][7];
					//スターの干支と自分の干支の処理
					//相手が取れない場合はエラー
					if(count($result_star)==0){
						echo 'error';
					}else{
						$sql = <<<SQL
						SELECT *
						FROM  	`h_result`
						WHERE  	`r_male` = '$star_eto_number'
						AND		`r_female` = '$eto_number'
SQL;
						$result_text = $this->index_model->getAll($sql);
						$p_eto_number = 0;
						//echo $sql;
					}
				}else{
					$p_eto_number = $result_number;
				}
			}else{
				$p_eto_number = $result_number;
			}
			$star_id = 0;
		}else{
			$shindan_flg = 'self';
			//☆ユーザーに最適な人の診断結果を取得
			//$eto_number = 1;
			$sql = <<<SQL
				SELECT *
				FROM  	`h_result`
				WHERE  	`r_female` = '$eto_number'
				AND  `r_total_num` >=4
				ORDER BY  `h_result`.`r_total_num` DESC
SQL;
			$result_text =  $this->index_model->getAll($sql);
			$p_eto_number = 0;
			$p_eto = $result_text[$p_eto_number][2];
			//最も合う干支の韓流スターを選ぶ
			$sql = <<<SQL
				SELECT *
				FROM  `h_profile`
				WHERE  `p_eto` = '$p_eto'
				AND  `p_eto_jp` !=  '0'
SQL;
			$result_star = $this->index_model->getAll($sql);
			$star_id = 0;
		}

	}else{
			$shindan_flg = 'target';
			//指定の相手がいる場合の診断結果を取得
			$sql = <<<SQL
				SELECT *
				FROM  `h_profile`
				WHERE  `p_profid` = '$target'
				AND  `p_eto_jp` !=  '0'
SQL;
			$result_star = $this->index_model->getAll($sql);
			//相手が取れない場合はエラー
			if(count($result_star)==0){
				echo 'error';
			}else{
				$star_eto_number = $result_star[0][7];
				$sql = <<<SQL
				SELECT *
				FROM  	`h_result`
				WHERE  	`r_male` = '$star_eto_number'
				AND		`r_female` = '$eto_number'
SQL;
				$result_text = $this->index_model->getAll($sql);
				$p_eto_number = 0;
				$star_id = 0;
			}
	}

	//グループのメンバーのリストを出す
	if($group < 1){
		$group = $result_star[$star_id][2];
	}
	$sql = <<<SQL
	SELECT *
	FROM  `h_profile`
	WHERE  `p_groupid` = '$group'
	AND  `p_profid` !=  '0'
SQL;
	$other_member = $this->index_model->getAll($sql);
	for($i=0; $i < count($other_member); $i ++){
		$member_info[$i]['pid']		= $other_member[$i][1];
		$member_info[$i]['name'] 	= $other_member[$i][4];
	}
	$data['member_info'] =$member_info;
	//◆画像URL生成
	$id_count = 4 - mb_strlen($result_star[$star_id][1]);
	switch($id_count){
		case 1:
			$img_id = '0'.$result_star[$star_id][1];
			break;
		case 2:
			$img_id = '00'.$result_star[$star_id][1];
			break;
		case 3:
			$img_id = '000'.$result_star[$star_id][1];
			break;
	}


	//画像ID
	$data['img_id'] = $img_id;

	//ニックネーム
	$data['nick'] = $u_nick;

	if($result_text[$p_eto_number][3] == 1)$result_text[$p_eto_number][3] =2;

	//診断結果データ
	$data['r_total_num'] = $result_text[$p_eto_number][3];
	$data['r_love_num'] = $result_text[$p_eto_number][4];
	$data['r_relation_num'] = $result_text[$p_eto_number][5];
	$data['r_friends_num'] =$result_text[$p_eto_number][6];
	$data['r_total'] =$result_text[$p_eto_number][7];
	$data['r_love'] =$result_text[$p_eto_number][8];
	$data['r_relation'] =$result_text[$p_eto_number][9];
	$data['r_friends'] =$result_text[$p_eto_number][10];
	$data['r_sex_self'] =$result_text[$p_eto_number][11];
	$data['r_sex_act'] =$result_text[$p_eto_number][12];

	//診断相手のデータ
	$data['p_profid'] =$result_star[$star_id][1];
	$data['p_groupid'] =$result_star[$star_id][2];
	$data['p_groupname'] =$result_star[$star_id][3];
	$data['p_name'] =$result_star[$star_id][4];
	$data['p_nativename'] =$result_star[$star_id][5];
	$data['p_category'] =$result_star[$star_id][6];
	$data['p_eto'] =$result_star[$star_id][7];
	$data['p_eto_jp'] =$result_star[$star_id][8];
	$data['p_birth'] =$result_star[$star_id][9];
	$data['p_blod'] =$result_star[$star_id][10];
	$data['p_height'] =$result_star[$star_id][11];
	$data['p_weight'] =$result_star[$star_id][12];
	$data['p_bio'] =$result_star[$star_id][13];
	$data['p_hobby'] =$result_star[$star_id][14];
	$data['p_skill'] =$result_star[$star_id][15];
	$data['p_academic'] =$result_star[$star_id][16];
	$data['p_sigles'] =$result_star[$star_id][17];
	$data['p_album'] =$result_star[$star_id][18];
	$data['p_movie'] =$result_star[$star_id][19];
	$data['p_drama'] =$result_star[$star_id][20];
	$data['p_award'] =$result_star[$star_id][21];
	$data['p_twitter'] =$result_star[$star_id][22];
	$data['p_blog'] =$result_star[$star_id][23];
	$data['p_official'] =$result_star[$star_id][24];
	$data['site_title'] =$result_star[$star_id][4].'｜診断結果｜韓らぶ診断';

	//★view

	//会員登録できているか
	//if($res[0] ==  1 ){
		//キャリア別テンプレ表示
		//$agent = Net_UserAgent_Mobile::singleton();
		//if($agent->isSoftbank()){
			$this->load->view('headerview',$data);
			//診断相手によってBODYの変更
			switch($shindan_flg){
				case 'target':
					$this->load->view('result_targ',$data);
					break;
				case 'group':
					$this->load->view('result_group',$data);
					break;
				case 'self':
					$this->load->view('result_self',$data);
					break;
				default:
					break;
			}
			$this->load->view('footer_s');

		//}elseif($agent->isEZweb()){
			//$smarty->display('a/header.tpl');
		//診断相手によってBODYの変更
			/*switch($shindan_flg){
				case 'target':
					$smarty->display('a/result_targ.tpl');
					break;
				case 'group':
					$smarty->display('a/result_group.tpl');
					break;
				case 'self':
					$smarty->display('a/result_self.tpl');
					break;
				default:
					break;
			}
			/*
		if($target <1){
			if($group>0){
				$smarty->display('a/result_group.tpl');
			}else{
				$smarty->display('a/result_self.tpl');
			}
		}else{
			$smarty->display('a/result_targ.tpl');
		}
		*/
		/*S	$smarty->display('a/footer_s.tpl');
		}else{
			$smarty->display('header.tpl');
		//診断相手によってBODYの変更
			switch($shindan_flg){
				case 'target':
					$smarty->display('result_targ.tpl');
					break;
				case 'group':
					$smarty->display('result_group.tpl');
					break;
				case 'self':
					$smarty->display('result_self.tpl');
					break;
				default:
					break;
			}
			/*
		if($target <1){
			if($group>0){
				$smarty->display('result_group.tpl');
			}else{
				$smarty->display('result_self.tpl');
			}
		}else{
			$smarty->display('result_targ.tpl');
		}*/

			//S$smarty->display('footer_s.tpl');
		//S}

	}

}