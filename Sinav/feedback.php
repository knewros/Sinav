<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>GERİDÖNÜŞ</title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<!--uyarı mesajı-->
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<!--uyarı son-->

</head>

<body>

<!--header-->
<div class="row header">
<div class="col-lg-6">
<span class="logo">Test Sistemi</span></div>
<div class="col-md-2">
</div>
<div class="col-md-4">
<?php
 include_once 'dbConnection.php';
session_start();
  if((!isset($_SESSION['email']))){
echo '<a href="#" class="pull-right sub1 btn title3" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;Giriş</a>&nbsp;';}
else
{
echo '<a href="logout.php?q=feedback.php" class="pull-right sub1 btn title3"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Çıkış</a>&nbsp;';}
?>

<a href="index.php" class="pull-right btn sub1 title3"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Anasayfa</a>&nbsp;
</div></div>

<!--oturum açma modülü başlangıcı-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Kapat"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:orange">Giriş</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>


<!-- text girişi-->
<div class="form-group">
  <label class="col-md-3 control-label" for="email"></label>  
  <div class="col-md-6">
  <input id="email" name="email" placeholder="Emailinizi Girin" class="form-control input-md" type="email">
    
  </div>
</div>

<!-- Password girişi-->
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Parolanızı Girin" class="form-control input-md" type="password">
    
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
        <button type="submit" class="btn btn-primary">Giriş</button>
		</fieldset>
</form>
      </div>
    </div>
  </div>
</div>
<!--oturum modülü sonu-->

<!--header son-->

<div class="bg1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6 panel" style="background-image:url(image/bg1.jpg); min-height:430px;">
<h2 align="center" style="font-family:'typo'; color:#000066">GERİDÖNÜŞ/ÖNERİ</h2>
<div style="font-size:14px">
<?php if(@$_GET['q'])echo '<span style="font-size:18px;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;'.@$_GET['q'].'</span>';
else
{echo' 
Geri bildiriminizi aşağıdaki e-postaya manuel olarak gönderebilirsiniz!:<br />
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
<a href="mailto:musfatmin@gmail.com" style="color:#000000">musfatmin@gmail.com</a><br /><br />
</div><div class="col-md-1"></div></div>
<p>Veya aşağıdaki formu doldurarak gönderebilirsiniz:</p>
<form role="form"  method="post" action="feed.php?q=feedback.php">
<div class="row">
<div class="col-md-3"><b>İsim:</b><br /><br /><br /><b>Konu:</b></div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
  <input id="name" name="name" placeholder="İsminizi Girin" class="form-control input-md" type="text"><br />    
  <input id="konu" name="konu" placeholder="Konu Girin" class="form-control input-md" type="text">    

</div>
</div>
</div><!--End of row-->

<div class="row">
<div class="col-md-3"><b>E-Mail adresi:</b></div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
  <input id="email" name="email" placeholder="Emailinizi Girin" class="form-control input-md" type="email">    
 </div>
</div>
</div><!--End of row-->

<div class="form-group"> 
<textarea rows="5" cols="8" name="feedback" class="form-control" placeholder="Görüşünüzü buraya yazın..."></textarea>
</div>
<div class="form-group" align="center">
<input type="submit" name="submit" value="Gönder" class="btn btn-primary" />
</div>
</form>';}?>
</div>
<div class="col-md-3"></div></div>
</div></div>
</div>


<!--Footer başla-->
<div class="row footer">
<div class="col-md-3 box">
<a href="https://www.facebook.com/musathan07" target="_blank">Hakkımda</a>
</div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#login">Admin Girişi</a></div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#developers">Geliştirici</a>

</div>
<div class="col-md-3 box">
<a href="feedback.php" target="_blank">Geridönüş</a></div></div>
<!-- geliştirici modülü-->
<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Kapat</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Geliştirici</span></h4>
      </div>
	  
      <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-4">
		 <img src="image/CAM00121.jpeg" width=100 height=100 alt="Mustafa Gülcan" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<a href="https://www.facebook.com/musathan07" style="color:#202020; font-family:'typo' ; font-size:18px" title="Facebookta Bul">Mustafa Gülcan</a>
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+905398211139</h4>
		<h4 style="font-family:'typo' ">musfatmin@gmail.comm</h4>
		<h4 style="font-family:'typo' ">Alanya,ANTALYA</h4></div></div>
		</p>
      </div>
    
    </div>
  </div>
</div>

<!--admin için modal-->
	 <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Kapat</span></button>
        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">GİRİŞ</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Admin Email" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Parola" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Giriş" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
      
        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
      </div>-->
    </div>
  </div>
</div>
<!--footer son-->
</body>
</html>
