<div style="text-align:center">
<h1><img alt="友達紹介ｷｬﾝﾍﾟｰﾝ" border="0" height="30" src="<?php echo base_url('img/banner_friend02.gif');?>"/></h1>
		<span style="font-size:x-small;color:#ff0000">紹介者全員に今話題の</span><br />
		<span style="font-size:small;color:#0066FF">韓流ﾃﾞｺﾒ</span><span style="font-size:x-small;color:#ff0000">をﾌﾟﾚｾﾞﾝﾄ!!<?php $this->myemoji->mm('&#xE685;'); ?></span>
		<br /><br />
		<span style="font-size:x-small;">さ・ら・に<?php $this->myemoji->mm('&#xE702;'); ?></span><br />
		<span style="font-size:xx-small;color:#000000">
		今なら<span style="font-size:x-small;color:#0066FF">毎週抽選で</span><span style="font-size:x-small;color:#ff0000">10名様</span>に<br />
	<img alt="韓国旅行ﾌﾟﾚｾﾞﾝﾄ" border="0" src="<?php echo base_url('img/vip.jpg');?>"/>
<div style="background-color : #ffff99">
		<span style="font-size:medium;color:#FF0000">
		<strong>韓国旅行2泊3日
		<br />VIPｺｰｽ<?php $this->myemoji->mm('&#xE662;'); ?></strong></span>
</div>
</div>
<div style="text-align:center">
		ﾌﾟﾚｾﾞﾝﾄ!!<span style="font-size:small;color:#FFD700"><?php $this->myemoji->mm('&#xE6FA;'); ?></span>
</div>
<br />
<div style="text-align:center">
<!--広告01-->
<a href="http://preaf.jp/pa.do?s=s65138&o=31383&guid=ON"><span style="font-size:x-small;">女の子必見！！<br>綺麗の秘密☆</span></a>
</div>
<br />

	<form action="<?php echo base_url('index/invite_confirm');?>" method="POST" utn>
	<div style="background-color : #ffe4ee">

	<!--  <input type="hidden" name="type" value="invite">
	<input type="hidden" name="aid" value="{$a}">
	<input type="hidden" name="ticket" value="{$t}">-->
	<div style="text-align:left;">
	<span style="font-size:xx-small;color:#ff0000"><?php $this->myemoji->mm('&#xE719;'); ?></span><span style="font-size:xx-small;color:#000000">ｱﾅﾀのお名前は?(ﾆｯｸﾈｰﾑOK)</span><br />
	<span style="font-size:x-small;color:#ff0000">※</span><span style="font-size:xx-small;color:#000000">絵文字･半角ｶﾅ不可</span><br />
	<input name="u_name" type="text" maxlength="26" istyle="1"/><br /><br />

	<!--  
	<span style="font-size:xx-small;color:#ff0000"><?php $this->myemoji->mm('&#xE719;'); ?></span><span style="font-size:xx-small;color:#000000">ｱﾅﾀのﾒｰﾙｱﾄﾞﾚｽ</span><br />
	<span style="font-size:xx-small;color:#000000">ﾃﾞｺﾒが送られるよ!</span><br />
	<input name="u_adr" type="text" maxlength="50" istyle="3" format="*x" mode="alphabet"/><br /><br />
	-->
	<span style="font-size:xx-small;color:#ff0000"><?php $this->myemoji->mm('&#xE719;'); ?></span><span style="font-size:xx-small;color:#000000">友達のお名前は?(ﾆｯｸﾈｰﾑOK)</span><br />
	<span style="font-size:x-small;color:#ff0000">※</span><span style="font-size:xx-small;color:#000000">絵文字･半角ｶﾅ不可</span><br />
	<input name="invite_name" type="text" maxlength="26" istyle="1"/><br /><br />


	<span style="font-size:xx-small;color:#ff0000"><?php $this->myemoji->mm('&#xE719;'); ?></span><span style="font-size:xx-small;color:#000000">お友達のﾒｰﾙｱﾄﾞﾚｽ</span><br />
	<span style="font-size:xx-small;color:#000000">電話帳から貼り付けてﾈ!</span><br />
	<input name="invite_adr" type="text" maxlength="50" istyle="3" format="*x" mode="alphabet"/><br /><br />


			<span style="font-size:xx-small;color:#ff0000"><?php $this->myemoji->mm('&#xE719;'); ?></span><span style="font-size:xx-small;color:#000000">貰いたい韓流ﾃﾞｺﾒ</span><br />
			<select name="dec_id">
				<option value="1">Rain(ﾋﾟ)</option>
				<option value="2">ｲ･ｼﾞｭﾝｷﾞ</option>
				<option value="3">ｲ･ﾋﾞｮﾝﾎﾝ</option>
				<option value="4">ｸｫﾝ･ｻﾝｳ</option>
				<option value="5">ｿ･ｼﾞｿﾌﾞ</option>
				<option value="6">ｿﾝ･ｽﾝﾎﾝ</option>
				<option value="7">ﾁｬﾝ･ｸﾞﾝｿｸ</option>
				<option value="8">ﾁｬﾝ･ﾄﾞﾝｺﾞﾝ</option>
				<option value="9">ﾁｭ･ｼﾞﾌﾝ</option>
				<option value="59">ﾊﾟｸ･ｼﾞｪﾎﾞﾑ</option>
				<option value="10">ﾊﾟｸ･ﾖﾝﾊ</option>
				<option value="11">ﾍﾟ･ﾖﾝｼﾞｭﾝ</option>
				<option value="12">ﾘｭ･ｼｳｫﾝ</option>
				<option value="13">ﾕﾝﾎ(東方神起)</option>
				<option value="14">ﾁｬﾝﾐﾝ(東方神起)</option>
				<option value="15">ｷﾑ･ｼﾞｪｼﾞｭﾝ(JYJ)</option>
				<option value="16">ﾊﾟｸ･ﾕﾁｮﾝ(JYJ)</option>
				<option value="17">ｷﾑ･ｼﾞｭﾝｽ(JYJ)</option>
				<option value="18">ｷﾑ･ﾋｮﾝｼﾞｭﾝ(SS501)</option>
				<option value="19">ﾎ･ﾖﾝｾﾝ(SS501)</option>
				<option value="20">ｷﾑ･ｷｭｼﾞｮﾝ(SS501)</option>
				<option value="21">ﾊﾟｸ･ｼﾞｮﾝﾐﾝ(SS501)</option>
				<option value="22">ｷﾑ･ﾋｮﾝｼﾞｭﾝ[1987年生](SS501)</option>
				<option value="23">G-DRAGON(BIGBANG)</option>
				<option value="24">SOL(BIGBANG)</option>
				<option value="25">T.O.P(BIGBANG)</option>
				<option value="26">D-LITE(BIGBANG)</option>
				<option value="27">V.I(BIGBANG)</option>
				<option value="28">ｲﾄｩｸ(Super Junior)</option>
				<option value="29">ﾋﾁｮﾙ(Super Junior)</option>
				<option value="30">ﾊﾝｷﾞｮﾝ(Super Junior)</option>
				<option value="31">ｲｪｿﾝ(Super Junior)</option>
				<option value="32">ｶﾝｲﾝ(Super Junior)</option>
				<option value="33">ｼﾝﾄﾞﾝ(Super Junior)</option>
				<option value="34">ｿﾝﾐﾝ(Super Junior)</option>
				<option value="35">ｳﾆｮｸ(Super Junior)</option>
				<option value="36">ﾄﾞﾝﾍ(Super Junior)</option>
				<option value="37">ｼｳｫﾝ(Super Junior)</option>
				<option value="38">ﾘｮｳｸ(Super Junior)</option>
				<option value="39">ｷﾎﾞﾑ(Super Junior)</option>
				<option value="40">ｷｭﾋｮﾝ(Super Junior)</option>
				<option value="41">ﾁｪ･ｼﾞｮﾝﾌﾝ(FTISLAND)</option>
				<option value="42">ｲ･ﾎﾝｷﾞ(FTISLAND)</option>
				<option value="43">ｲ･ｼﾞｪｼﾞﾝ(FTISLAND)</option>
				<option value="44">ﾁｪ･ﾐﾝﾌｧﾝ(FTISLAND)</option>
				<option value="45">ｿﾝ･ｽﾝﾋｮﾝ(FTISLAND)</option>
				<option value="46">ﾕﾝ･ﾄﾞｩｼﾞｭﾝ(BEAST)</option>
				<option value="47">ﾁｬﾝ･ﾋｮﾝｽﾝ(BEAST)</option>
				<option value="48">ﾖﾝ･ｼﾞｭﾝﾋｮﾝ(BEAST)</option>
				<option value="49">ﾔﾝ･ﾖｿﾌﾟ(BEAST)</option>
				<option value="50">ｲ･ｷﾞｸﾞｧﾝ(BEAST)</option>
				<option value="51">ｿﾝ･ﾄﾞﾝｳﾝ(BEAST)</option>
				<option value="64">ｽﾝﾎ(MBLAQ)</option>
				<option value="65">G.O(ｼﾞｵ)(MBLAQ)</option>
				<option value="66">ｲ･ｼﾞｭﾝ(MBLAQ)</option>
				<option value="67">ﾁｮﾝﾄﾞｩﾝ(MBLAQ)</option>
				<option value="68">ﾐﾙ(MBLAQ)</option>
				<option value="69">ｼﾞｭﾝｽ(2PM)</option>
				<option value="70">ﾆｯｸﾝ(2PM)</option>
				<option value="71">ﾃｷﾞｮﾝ(2PM)</option>
				<option value="72">ｳﾖﾝ(2PM)</option>
				<option value="73">ｼﾞｭﾉ(2PM)</option>
				<option value="74">ﾁｬﾝｿﾝ(2PM)</option>
				<option value="75">ﾐｶ(大国男児)</option>
				<option value="76">ｶﾗﾑ(大国男児)</option>
				<option value="77">ﾋｮﾝﾐﾝ(大国男児)</option>
				<option value="78">ｲﾝｼﾞｭﾝ(大国男児)</option>
				<option value="79">Jay(大国男児)</option>
				<option value="80">ｵﾝﾕ(SHINee)</option>
				<option value="81">ｼﾞｮﾝﾋｮﾝ(SHINee)</option>
				<option value="82">KEY(ｷｰ)(SHINee)</option>
				<option value="83">ﾐﾝﾎ(ﾐﾉ)(SHINee)</option>
				<option value="84">ﾃﾐﾝ(SHINee)</option>
				<option value="85">ﾕﾅｸ(超新星)</option>
				<option value="86">ｿﾝｼﾞｪ(超新星)</option>
				<option value="87">ｸﾞｧﾝｽ(超新星)</option>
				<option value="88">ｿﾝﾓ(超新星)</option>
				<option value="89">ｼﾞﾋｮｸ(超新星)</option>
				<option value="90">ｺﾞﾆﾙ(超新星)</option>
				<option value="91">ﾄﾞﾝﾎ(U-Kiss)</option>
				<option value="92">ｲﾗｲ(U-Kiss)</option>
				<option value="93">ｹﾋﾞﾝ(U-Kiss)</option>
				<option value="94">ｽﾋｮﾝ(U-Kiss)</option>
				<option value="95">ｷｿﾌﾟ(U-Kiss)</option>
				<option value="96">ｴｲｼﾞｪｲ(U-Kiss)</option>
				<option value="97">ﾌﾝ(U-Kiss)</option>
				<option value="98">ﾁｮ･ｸﾞｫﾝ(2AM)</option>
				<option value="99">ｲﾑ･ｽﾛﾝ(2AM)</option>
				<option value="100">ﾁｮﾝ･ｼﾞﾇﾝ(2AM)</option>
				<option value="101">ｲ･ﾁｬﾝﾐﾝ(2AM)</option>
				<option value="102">ｹﾋﾞﾝ(ZE:A)</option>
				<option value="103">ﾌｧﾝ･ｸﾞｧﾝﾋ(ZE:A)</option>
				<option value="104">ｲﾑ･ｼﾜﾝ(ZE:A)</option>
				<option value="105">ﾑﾝ･ｼﾞｭﾝﾖﾝ(ZE:A)</option>
				<option value="106">ｷﾑ･ﾃﾎﾝ(ZE:A)</option>
				<option value="107">ﾁｮﾝ･ﾋﾁｮﾙ(ZE:A)</option>
				<option value="108">ﾊ･ﾐﾝｳ(ZE:A)</option>
				<option value="109">ﾊﾟｸ･ﾋｮﾝｼｸ(ZE:A)</option>
				<option value="110">ｷﾑ･ﾄﾞﾝｼﾞｭﾝ(ZE:A)</option>
				<option value="122">ｿﾝｷﾞｭ(INFINITE)</option>
				<option value="123">ﾄﾞﾝｳ(INFINITE)</option>
				<option value="124">ｳﾋｮﾝ(INFINITE)</option>
				<option value="125">ﾎﾔ(INFINITE)</option>
				<option value="126">ｿﾝﾖﾙ(INFINITE)</option>
				<option value="127">ｴﾙ(INFINITE)</option>
				<option value="128">ｿﾝｼﾞｮﾝ(INFINITE)</option>
				<option value="129">ｼﾞﾆｮﾝ(B1A4)</option>
				<option value="130">ｼﾇ(B1A4)</option>
				<option value="131">ｻﾝﾄﾞｩﾙ(B1A4)</option>
				<option value="132">ﾊﾞﾛ(B1A4)</option>
				<option value="133">ｺﾞﾝﾁｬﾝ(B1A4)</option>
			</select><br /><br />
		<div style="text-align:center">
			<input type="submit" value="招待する" /><br />
		</div>
			<input type="hidden" name="opt_check" value="1">
		</div><br />
	</form>
	
	<span style="font-size:x-small;color:#ff0000">※紹介したお友達が診断をすると、ｱﾅﾀに韓流ﾃﾞｺﾒが送られます<?php $this->myemoji->mm('&#xE6EF;'); ?></span>
		<br />
		<br />
<div style="text-align:center">
<!--広告02-->
<a href="http://preaf.jp/pa.do?s=s65138&o=31333&guid=ON"><img src="http://mo.preaf.jp/bn/o31333_3.gif" border="0"></a>
</div>
		<br />
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
<br />
