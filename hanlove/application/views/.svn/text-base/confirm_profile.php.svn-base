<a id="profile"><img alt="韓流ｽﾀｰﾌﾟﾛﾌｨｰﾙ" border="0" src="<?php echo base_url("img/banner_profile.gif");?>"/></a><br />
<div style="text-align:center">
	<h1>
		<span style="font-size:large;color:#ff0000"><?=$p_name?></span>
		<?php
			if($p_groupname != '' and $group<1){
				echo '<br/><span style="font-size:medium;color:#ff0000">';
				echo $p_groupname;
				echo '</span>';
			}
		?>
	<br />
	</h1>
	<img alt="
	<?php
		if($p_groupname != $p_name){
			echo $p_groupname.$p_name;
		}
	?>
	" border="0" src="<?php echo base_url("img/act_img/$img_id.jpg");?>"  />
		</div>
<p>
	<span style="font-size:x-small;"><?=$p_bio?></span>
</p>
<br />
<?php
 if ($group<1){
 	echo '<blockquote>';
 	echo '<span style="font-size:x-small;">]';
 	if($p_birth !="")echo "生年月日：".$p_birth.'<br/>';
 	if($p_blod !="")echo"血液型：".$p_blod.'<br/>';
 	if($p_height != "") echo "身長：".$p_height."cm".'<br/>';
 	if($p_weight !="") echo "体重：".$p_weight."kg".'<br/>';
 	if($p_hobby !="") echo "趣味：".$p_hobby.'<br/>';
 	if($p_skill != "") echo "学歴：".$p_academic.'<br/>';
 	echo "</span>";
 	echo "</blockquote>";
 }else{
 	echo '<blockquote>';
 	echo '<span style="font-size:x-small;">]';
 	if($p_category != '') echo "ジャンル：".$p_category.'<br/>';
 	if($p_birth != '') echo "結成日："."<br/>";
 	if($p_hobby != '') echo "所属レーベル："."<br/>";
 	if($p_skill != '') echo "所属事務所："."<br/>";
 	if($p_academic != '') echo "メンバー："."<br/>";
 	echo "</span>";
 	echo "</blockquote>";
 }
?>
<br />

<div style="text-align:center">
		<hr style="border:double;border-color:#ffa5c8;height:3;" />
	<blockquote>
		<strong>
		<a href="<?php echo base_url("confirm/mail/$group/$target/");?>#regist"">
		<span style="font-size:x-small;color:#ff0000">たった1分で<br />
		ｱﾅﾀと<?php if($p_name != "")echo $p_name;?>の<br />相性を占えます!!</span></a></strong><br />
		<span style="font-size:x-small;color:#3399FF"><blink>※完全無料※</blink></span>
	</blockquote>
<br />
<!--広告01-->
<a href="http://preaf.jp/pa.do?s=s65138&o=31112&guid=ON"><span style="font-size:x-small;">有名占い師による<br>～ｱﾅﾀの運命～</span></a>
<br />
		<hr style="border:double;border-color:#ffa5c8;height:3;" />
</div>
<br />

<?php
  if($p_sigles != '' or $p_album != ''){
  	echo '<h2><span style="font-size:x-small;color:#666666">'.$this->myemoji->mm('&#xE68C;').'ﾃﾞｨｽｺｸﾞﾗﾌｨｰ</span></h2>';
  }
  if($p_sigles != ''){
  	echo '・ｼﾝｸﾞﾙ<br /><blockquote><span style="font-size:xx-small;">';
  	echo $p_sigles;
  	echo '</span></blockquote>';
  }
  if($p_album != ''){
  	echo '・ｱﾙﾊﾞﾑ<br /><blockquote><span style="font-size:xx-small;">';
  	echo $p_album;
  	echo '</span></blockquote>';
  }


?>
<br />
<?php
	if($p_movie !=''){
		echo '<h2><span style="font-size:x-small;color:#666666">'.$this->myemoji->mm('&#xE677;').'映画</span></h2>';
		echo '<blockquote><span style="font-size:xx-small;">';
		echo $p_movie;
		echo '</span></blockquote><br/>';
	}
	if( $p_drama !=''){
		echo '<h2><span style="font-size:x-small;color:#666666">'.$this->myemoji->mm('&#xE68A;').'ﾄﾞﾗﾏ</span></h2>';
		echo '<blockquote><span style="font-size:xx-small;">';
		echo  $p_drama;
		echo '</span></blockquote><br/>';
	}
	if( $p_award !=''){
		echo '<h2><span style="font-size:x-small;color:#666666">'.$this->myemoji->mm('&#xE71A;').'受賞歴</span></h2>';
		echo '<blockquote><span style="font-size:xx-small;">';
		echo  $p_award;
		echo '</span></blockquote><br/>';
	}
	if( $p_award !=''){
		echo '<h2><span style="font-size:x-small;color:#666666">'.$this->myemoji->mm('&#xE71A;').'受賞歴</span></h2>';
		echo '<blockquote><span style="font-size:xx-small;">';
		echo  $p_award;
		echo '</span></blockquote><br/>';
		echo '<hr style="border:double;border-color:#ffa5c8;height:3;" />';
	}
	if( $p_twitter !=''){
		echo '<h2><span style="font-size:x-small;color:#000000">'.$this->myemoji->mm('&#xE719;').'ｵﾌｨｼｬﾙTwitter</span></h2>';
		echo '<blockquote>';
		echo "<a href =\"".$p_twitter."\"<span style=\"font-size:xx-small;color:#0000ff\">";
		echo  $p_twitter;//もらったファイルの中にp_twitternameが入っているが？？DBにはない
		echo '</span></a></blockquote><br/>';
	}
	if( $p_blog !=''){
		echo '<h2><span style="font-size:x-small;color:#000000">'.$this->myemoji->mm('&#xE719;').'ｵﾌｨｼｬﾙBlog</span></h2>';
		echo '<blockquote>';
		echo "<a href =\"".$p_blog."\"<span style=\"font-size:xx-small;color:#0000ff\">";
		echo  $p_blog;
		echo '</span></a></blockquote><br/>';
	}
	if( $p_officialmobile !=''){
		echo '<h2><span style="font-size:x-small;color:#000000">'.$this->myemoji->mm('&#xE6CE;').'ｵﾌｨｼｬﾙｻｲﾄ';
		echo $p_officialmobile_name;
		echo '</span></h2>';
		echo '<blockquote>';
		echo "<a href =\"".$p_officialmobile."\"<span style=\"font-size:xx-small;color:#0000ff\">";
		echo  $p_officialmobile;
		echo '</span></a></blockquote><br/>';
	}
	if( $p_officialpc!=''){
		echo '<h2><span style="font-size:x-small;color:#000000">'.$this->myemoji->mm('&#xE716;').'ｵﾌｨｼｬﾙｻｲﾄ';
		echo $p_officialpc_name;
		echo '</span></h2>';
		echo '<blockquote>';
		echo "<a href =\"".$p_officialpc."\"<span style=\"font-size:xx-small;color:#0000ff\">";
		echo  $p_officialpc;
		echo '</span></a></blockquote><br/>';
	}
	if( $p_officialpersonal !=''){
		echo '<h2><span style="font-size:x-small;color:#000000">'.$this->myemoji->mm('&#xE6CE;').'ｵﾌｨｼｬﾙｻｲﾄ';
		echo $p_officialpersonal_name;
		echo '</span></h2>';
		echo '<blockquote>';
		echo "<a href =\"".$p_officialpersonal."\"<span style=\"font-size:xx-small;color:#0000ff\">";
		echo  $p_officialpc;
		echo '</span></a></blockquote><br/>';
	}
	if( $p_officialgroup !=''){
		echo '<h2><span style="font-size:x-small;color:#000000">'.$this->myemoji->mm('&#xE716;').'ｵﾌｨｼｬﾙｻｲﾄ';
		echo $p_officialgroup_name;
		echo '</span></h2>';
		echo '<blockquote>';
		echo "<a href =\"".$p_officialgroup."\"<span style=\"font-size:xx-small;color:#0000ff\">";
		echo  $p_officialgroup;
		echo '</span></a></blockquote><br/>';
	}
?>


<div style="text-align:center">
<!--広告02-->
<a href="http://preaf.jp/pa.do?s=s65138&o=30029&guid=ON"><img src="http://mo.preaf.jp/bn/o30029_1.gif" border="0"></a>
</div>