<br />
<div style="text-align:center">
<!--広告01-->
<a href="http://preaf.jp/pa.do?s=s65138&o=30020&guid=ON"><span style="font-size:x-small;">男女安心無料♪<br>信頼のｻｲﾄはここ！</span></a>
</div>
<div style="text-align:center;">
	<img alt="相性診断結果" border="0"  src="<?php echo base_url('img/banner_shindan_answer.gif');?>"/>
	<br />
	<h1>
         <span style="font-size:small;color:#FF00FF"><?=$nick?>さん</span><span style="font-size:small">と</span><span style="font-size:small;color:#0066FF"><?=$p_name?></span><span style="font-size:small">の</span><br />
         <span style="font-size:medium;color:#FF1493">相性はｺﾁﾗ!!</span><span style="font-size:small;color:#ff0000"><?php $this->myemoji->mm('&#xE6EC;');?></span>
	</h1>
	<img alt="<?php echo $p_groupname.$p_name;?>" border="0" src="<?php echo base_url("img/act_img/$img_id.jpg");?>" width="192">
</div>
<hr style="border:dotted;border-color:#ff0000;" />
<div style="background-color : #ffffcc">
	<span style="font-size:small;color:#666666">[<?php $this->myemoji->mm('&#xE719;'); ?>総合結果]</span>
	<span style="font-size:small;color:#ff0000"><blink><?=$r_total_num;?></blink></span><span style="font-size:small;">/5</span><br />
	<span style="font-size:small;"><?=$r_total?></span>
<hr style="border:dotted;border-color:#ff0000;" />
<div style="background-color : #ffffcc">
	<span style="font-size:small;color:#666666">[<?php $this->myemoji->mm('&#xE719;'); ?>愛情面]</span>
	<span style="font-size:small;color:#ff0000"><blink><?=$r_love_num?></blink></span><span style="font-size:small;">/5</span><br />
	<span style="font-size:small;"><?=$r_love?></span>
<hr style="border:dotted;border-color:#ff0000;" />
<div style="background-color : #ffffcc">
	<span style="font-size:small;color:#666666">[<?php $this->myemoji->mm('&#xE719;'); ?>協調性]</span>
	<span style="font-size:small;color:#ff0000"><blink><?=$r_relation_num?></blink></span><span style="font-size:small;">/5</span><br />
	<span style="font-size:small;"><?=$r_relation?></span>
<hr style="border:dotted;border-color:#ff0000;" />
<div style="background-color : #ffffcc">
	<span style="font-size:small;color:#666666">[<?php $this->myemoji->mm('&#xE719;'); ?>友情度]</span>
	<span style="font-size:small;color:#ff0000"><blink><?=$r_friends_num?></blink></span><span style="font-size:small;">/5</span><br />
	<span style="font-size:small;"><?=$r_friends?></span>
<br /><br />
</div>
</div>
</div>
</div>
<div style="background-color : #ffcccc">
	<span style="font-size:small;color:#FF00FF"><?php $this->myemoji->mm('&#xE6EC;'); ?><?=$nick?>さんのｾｯｸｽ診断</span><br />
	<span style="font-size:small;"><?=$r_sex_self?></span>
<br /><br />
<div style="background-color : #99ffff">
	<span style="font-size:small;color:#FF00FF"><?php $this->myemoji->mm('&#xE6EC;'); ?><?=$p_name?>のｾｯｸｽ診断</span><br />
	<span style="font-size:small;"><?=$r_sex_act?></span>
<br /><br />
</div>
</div>
<!--p>
	<span style="font-size:small;color:#ff0000">■</span>
	<a href="">
		<span style="font-size:small;color:#ff0000">ｲﾄｩｸと相性が良い○○さんの今日の運勢はｺﾁﾗ</span>
	</a>
</p>
<p>
	<span style="font-size:small;color:#3399FF">■</span>
	<a href="">
		<span style="font-size:small;color:#3399FF">ｲﾄｩｸの今日の運勢はｺﾁﾗ</span>
	</a>
</p>
<hr style="border:double;border-color:#71d2ff;" />
<p>
	<span style="font-size:small;">
		&#xE689;
		<a href="">ｲﾄｩｸ遂にｻｲﾌｧｰに入社!?</a>
	</span>
</p>
<p>
	<span style="font-size:small;">
		&#xE6CE;ｲﾄｩｸ ｵﾌｨｼｬﾙTwitter
		<br />
		<a href="">http://twitter.com/special1004</a>
	</span>
</p>
<p>
	<span style="font-size:small;">
		&#xE716;Super Junior/BONAMANA
		<br />
		<a href="">http://www.youtube.com/watch?v=tSOSxwEWFA4&feature=fvst</a>
	</span>
</p-->


<br />
<span style="font-size:x-small">
<span style="font-size:x-small;color:#0000FF"><?php $this->myemoji->mm('&#xE6DC;'); ?></span><?=$p_name ?>との結果は<br />
どうでしたか?<br />
<?php
	if($p_groupname != ''){
		echo '<br/>';
		echo $p_groupname.'の他のﾒﾝﾊﾞｰと診断<span style="font-size:x-small;color:#FFD700">'.$this->myemoji->mm('&#xE6FA;').'</span><br />';
		foreach($member_info as $key => $value){
			if($value['pid'] != $p_profid){
				$target = $value['pid'];
				$base_url = base_url("confirm/mail/0/$target");
				echo "<a href=\"$base_url\">";
				echo "<span style=\"font-size:x-small;color:#0000ff\">".$value['name']."</span></a><br />";
			}
		}
	}
?>
<br />

他のｽﾀｰとも診断してみよう<span style="font-size:x-small;color:#FFD700"><?php $this->myemoji->mm('&#xE6FA;'); ?></span></span><br />
<a href="<?php echo base_url('#shindan_list');?>"><span style="font-size:x-small;color:#FF1493"><?php $this->myemoji->mm('&#xE6EC;'); ?>韓流ｽﾀｰと診断</span></a>
<br /><br />
<div style="text-align:center;">
<span style="font-size:xx-small">
<span style="font-size:xx-small;color:#ff0000">総勢100人以上のｽﾀｰ</span>の中から<br />
<?=$nick?>さんと<span style="font-size:xx-small;color:#FF1493">相性ﾋﾟｯﾀﾘ</span>のｽﾀｰを探し出す事もできます<span style="font-size:xx-small;color:#ff0000"><?php $this->myemoji->mm('&#xE6EF;'); ?></span><br />
<a href="<?php echo base_url('#search_star');?>"><span style="font-size:small;color:#0066FF"><?php $this->myemoji->mm('&#xE6EC;'); ?>運命のｽﾀｰは誰?<?php $this->myemoji->mm('&#xE6EC;'); ?></span></a>
<br /><br />
<div style="text-align:center">
<!--広告02-->
<a href="http://px.moba8.net/svt/ejp?a8mat=1ZIAQR+91O4OI+OWE+60WN5&guid=on">
<img border="0" width="120" height="40" alt="" src="http://www27.moba8.net/svt/bgt?aid=120106467547&wid=001&eno=01&mid=m00000003227001012000&mc=1"></a>
<img border="0" width="1" height="1" src="http://www14.moba8.net/0.jpg?a8mat=1ZIAQR+91O4OI+OWE+60WN5&guid=on" alt="韓国市場">
</div>
<br />
<hr style="border:dotted;border-color:#ff0000;" />

<span style="font-size:small;color:#ff0000"><?php $this->myemoji->mm('&#xE717;'); ?></span><span style="font-size:small;color:#ff6c00">友達に紹介する</span><span style="font-size:small;color:#ff0000"><?php $this->myemoji->mm('&#xE717;'); ?></span><br /><br />

<a href="<?php echo base_url('index/mixi_check');?>"><img src="<?php echo base_url('img/mixi.gif');?>"　alt="mixiﾁｪｯｸ" border="0" /></a>　
<a href="http://twtr.jp/share?url=http://han-love.jp&text=%e9%9f%93%e6%b5%81%ef%bd%bd%ef%be%80%ef%bd%b0%e3%81%a8%e3%81%ae%e7%84%a1%e6%96%99%e5%8d%a0%e3%81%84%e3%81%aa%e3%82%89%e2%98%85%e9%9f%93%e3%82%89%e3%81%b6%e8%a8%ba%e6%96%ad%20%23%e9%9f%93%e6%b5%81%0d%0a">
<img src="<?php echo base_url('img/twitter.gif');?>"　alt="twitter" border="0" /></a>
<br /><br />
<a href="<?php echo base_url('index/invite');?>"><span style="font-size:x-small;color:#0000ff">韓らぶを友達に紹介して<br />
<span style="font-size:x-small;color:#ff0000">韓国旅行</span>に行こう<span style="font-size:x-small;color:#ff0000"><?php $this->myemoji->mm('&#xE6F6;'); ?></span></span></a>
<br /><br />

</div>

<!--広告03-->
<div style="text-align:center">
<a href="http://preaf.jp/pa.do?s=s65138&o=31355&guid=ON"><img src="http://mo.preaf.jp/bn/o31355_1.gif" border="0"></a>
</div>



