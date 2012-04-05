<div style="text-align:center">
	<img alt="好きな韓流ｽﾀｰと診断" border="0" src="<?php echo base_url('img/menu_shindan01.gif');?>"/><br />
	<img alt="{if $p_groupname != $p_name }{$p_groupname}{/if}{$p_name}" border="0" src="<?php echo base_url("img/act_img/$img_id.jpg");?>" width="192" />
	<h1>
	<span style="font-size:medium;color:#3399FF"><strong><?=$p_name?></strong><br />
		<?php
			if($p_groupname !='' and $group<1){
				echo "($p_groupname)";
			}
		?>
	</span>
	</h1>
	</div>
	<div style="text-align:right">
		<a href="<?php
			if(empty($target)){
				$target = 0;
			}
			echo base_url("confirm/profile/$group/$target/#profile");

		?>">
		<span style="font-size:xx-small;color:#0000ff">⇒ﾌﾟﾛﾌｨｰﾙを見る</span></a>
	</div>
	<!--診断セクション-->
				<br />
<a id="regist"></a><span style="font-size:x-small;color:#ff0000">ｱﾅﾀ</span><span style="font-size:xx-small;color:#000000">と</span><span style="font-size:x-small;color:#3399FF"><?php echo $p_name;?></span><span style="font-size:xx-small;color:#000000">の</span><span style="font-size:x-small;color:#FF1493">相性</span><span style="font-size:xx-small;color:#000000">を</span><br />
<span style="font-size:small;color:#ff0000">今すぐ占ってみよう<?php $this->myemoji->mm('&#xE704;'); ?></span><br />
<br />
<form action="<?php echo base_url("confirm/mail/$group/$target");?>" method="POST" >
			<!--  <input type="hidden" name="id" value="{$subno}">
			<input type="hidden" name="aid" value="{$a}">
			<input type="hidden" name="ticket" value="{$t}">-->
				<span style="font-size:xx-small;color:#ff0000"><?php $this->myemoji->mm('&#xE719;'); ?></span><span style="font-size:x-small;color:#000000">お名前は?(ﾆｯｸﾈｰﾑOK)</span>
<br />
				<span style="font-size:x-small;color:#ff0000">※</span><span style="font-size:x-small;color:#000000">絵文字･半角ｶﾅ不可</span>
<br />
				<input name="u_name" type="text" maxlength="26"  value="" istyle="1"/><br /><br />
				<span style="font-size:xx-small;color:#ff0000"><?php $this->myemoji->mm('&#xE719;'); ?></span><span style="font-size:x-small;color:#000000">性別は?</span>
				<br />
				<input type="radio" name="u_gender" value="2" checked="checked">女性
				<input type="radio" name="u_gender" value="1">男性
				<br /><br />
				<span style="font-size:xx-small;color:#ff0000"><?php $this->myemoji->mm('&#xE719;'); ?></span><span style="font-size:x-small;color:#000000">生年月日は?</span>
				<br />
<span style="font-size:x-small;color:#ff0000">例</span><span style="font-size:x-small;color:#000000">:1981年1月1日の方は<br />
⇒19810101と入力</span><br />
				<input name="u_birth" type="text" maxlength="8" istyle="4" mode="numeric" style="-wap-input-format:&quot;*&lt;ja:n&gt;&quot;;-wap-input-format:*N;" />
				<br />
				<br />
  <span style="font-size:x-small;color:#ff0000"><?php $this->myemoji->mm('&#xE719;'); ?></span><span style="font-size:x-small;color:#000000">職業は?</span> <br />
  <select name="u_job" maxlength="4">
    <option value="1">会社員</option>
    <option value="2">自営業</option>
    <option value="3" selected="selected">学生</option>
    <option value="4">ｱﾙﾊﾞｲﾄ</option>
    <option value="5">専業主婦</option>
    <option value="6">無職</option>
  </select>
  <br />
  <br />
				<span style="font-size:xx-small;color:#ff0000"><?php $this->myemoji->mm('&#xE719;'); ?></span><span style="font-size:x-small;color:#000000">お住まいは?</span>
				<br />
				 <select name="u_pref" maxlength="4">
					<option value="1">北海道</option>
					<option value="2">青森県</option>
					<option value="3">岩手県</option>
					<option value="4">宮城県</option>
					<option value="5">秋田県</option>
					<option value="6">山形県</option>
					<option value="7">福島県</option>
					<option value="8">茨城県</option>
					<option value="9">栃木県</option>
					<option value="10">群馬県</option>
					<option value="11">埼玉県</option>
					<option value="12">千葉県</option>
					<option value="13" selected="selected">東京都</option>
					<option value="14">神奈川県</option>
					<option value="15">新潟県</option>
					<option value="16">富山県</option>
					<option value="17">石川県</option>
					<option value="18">福井県</option>
					<option value="19">山梨県</option>
					<option value="20">長野県</option>
					<option value="21">岐阜県</option>
					<option value="22">静岡県</option>
					<option value="23">愛知県</option>
					<option value="24">三重県</option>
					<option value="25">滋賀県</option>
					<option value="26">京都府</option>
					<option value="27">大阪府</option>
					<option value="28">兵庫県</option>
					<option value="29">奈良県</option>
					<option value="30">和歌山県</option>
					<option value="31">鳥取県</option>
					<option value="32">島根県</option>
					<option value="33">岡山県</option>
					<option value="34">広島県</option>
					<option value="35">山口県</option>
					<option value="36">徳島県</option>
					<option value="37">香川県</option>
					<option value="38">愛媛県</option>
					<option value="39">高知県</option>
					<option value="40">福岡県</option>
					<option value="41">佐賀県</option>
					<option value="42">長崎県</option>
					<option value="43">熊本県</option>
					<option value="44">大分県</option>
					<option value="45">宮崎県</option>
					<option value="46">鹿児島県</option>
					<option value="47">沖縄県</option>
					</select>
				<br />
				<br />
<div style="text-align:center">
					<input type="submit" value="診断結果を見る"><br />
				<input type="hidden" name="opt_check" value="1">
			</div>
		</form>
<br /><br />
<!--広告-->
<div style="text-align:center">
<a href="http://preaf.jp/pa.do?s=s65138&o=31744&guid=ON"><img src="http://mo.preaf.jp/bn/o31744_1.gif" border="0"></a>
</div>
<br />

