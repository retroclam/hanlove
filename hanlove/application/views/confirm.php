			<div style="text-align:center; background-color:#71d2ff;">
				<span style="color:#ffffff;">診断内容の確認</span><br />
			</div>
			<div style="font-size:x-small;">
			<form action="<?php echo base_url('result/u_result/');?>" method="POST">
				<?php
					if($target>0 or $group >0){
						echo '<span style="collor:#ff0000;font-size:x-small;">下記内容で間違いがなければ、ボタンをクリックしてスターとの相性を診断しよう&#xE704;</span>';
					}else{
						echo '<span style="collor:#ff0000;font-size:x-small;">下記内容で間違いがなければ、ボタンをクリックして運命のスターを見つけよう&#xE704;</span>';
					}

					?>

				<hr>


				<?php echo $u_nick;?>さん<br />
				性別:<?php echo $gender;?><br />
				生年月日:<?php echo $birth;?><br />
				職業:<?php echo $job?><br />
				お住まい:<?php echo $pref?><br />
				<?php
				  if($target > 0 ){
				  }
				  if($group > 0 ){
				  	echo "占うグループ：".$p_groupname;
				  }
				?>
				<hr>
				<div style="text-align:center;">
				<?php
					if($target>0 or $group > 0){
						$base_url = base_url('img/btn_start_target.gif');
						echo "<input type=\"submit\" value=\"診断スタート\">";
					}else{
						//$base_url = base_url('img/btn_start_self.gif');
						echo "<input type=\"submit\" value=\"診断スタート\">";
					}
				?>

				<input type="hidden" name="u_nick" value="<?php echo $u_nick;?>">
				<input type="hidden" name="target" value="<?php echo$target;?>">
				<input type="hidden" name="group" value="<?php echo $group;?>">
				<input type="hidden" name="etid" value="<?php echo $etid;?>">
				

				<input type="hidden" name="u_nick" value="<?=$u_nick?>">
				<input type="hidden" name="target" value="<?=$target?>">
				<input type="hidden" name="group" value="<?=$group?>">
				<input type="hidden" name="etid" value="<?=$etid?>">

				</form><!-- <a href=\"$mail_temp\"><img alt=\"診断スタート\" border=\"0\" src=\"$base_url\"</a> -->
				</div>
			</div>

<span style="font-size:x-small;color:#0066FF"><?php $this->myemoji->mm('&#xE6D3;'); ?>ﾄﾞﾒｲﾝ指定受信について</span>
		<br />
	<span style="font-size:x-small;">
		迷惑ﾒｰﾙ対策などでﾄﾞﾒｲﾝ指定受信を設定されている方は、必ず指定受信の設定を変更して下さい。<br />
		<br />
		[設定方法]<br />
		ﾄﾞﾒｲﾝ指定受信を設定する場合、以下のﾄﾞﾒｲﾝを指定して下さい。

		<br />
		<br />
	<div style="text-align:center">
		<form action=".">
			<textarea cols="12" rows="1">@han-love.jp</textarea>
		</form>
		<br />
		<br />
	</div>
各ｷｬﾘｱの設定はｺﾁﾗから<br />
★<a href="http://docomo.ne.jp/cp/mailsetst.cgi">ﾒｰﾙ受信設定(docomo)</a><br />
★<a href="http://imutl.ezweb.ne.jp/cgi2001/utl_menu.cgi">ﾒｰﾙ受信設定(au)</a><br />
★<a href="http://elinks.softbank.ne.jp/selfcare">ﾒｰﾙ受信設定(softbank)</a></span>
<br /><br />
