<?php
class Test extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		//$mail = new Qdmail();
$this->load->library('mobmail');
$mail = $this->mobmail->mail();
	$body = '<html><body bgcolor="#aabbff">
<h1>HTMLメールテスト</h1>
<b>太字</b>
<font color="red">文字色を変えてみます。</font>
<div>画像はこのように</div>
<img src="cid:test1.jpg">
<div>文章中に置くことができます。</div>
<img src="cid:test2.jpg">
<p>Send by Qdmail</p>
<div>携帯端末、キャリアによって使えるHTMLタグが違いますので注意してください。</div>
<div><a href="mailto:address@example.com">メールはこちらへ</a></div>
<div><a href="tel:00-0000-0000">電話はこちらへ</a></div>
</body></html>';


qd_send_mail(
      'deco',
      array('roiluwei@i.softbank.jp' , '宛先(日本語OK)' ) ,
      'デコメのテスト' ,
      $body,
      array ( 'test@localhost' , '配信元（日本語OK）')//,
     // array(array('test1.jpg'),array(test2.jpg))
 );
	}
}







?>