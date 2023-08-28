<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>TEST SİSTEMİ </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>
function validateForm() {var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("İsim boş bırakılamaz.");return false;}var z =document.forms["form"]["okul"].value;if (z == null || z == "") {alert("Okul kısmı boş bırakılamaz.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Email adresi geçerli değil.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Parola kısmı boş bırakılamaz");return false;}if(a.length<5 || a.length>25){alert("Parola en az 5 en fazla 25 karakter uzunluğunda olmalı.");return false;}
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Parolalar aynı olmalıdır.");return false;}}
</script>


</head>

<body>
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo">Test Sistemi</span></div>
<div class="col-md-2 col-md-offset-4">
  
<a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Giriş</b></span></a></div>
<!--oturum açma modülü-->
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


<!-- Text giriş-->
<div class="form-group">
  <label class="col-md-3 control-label" for="email"></label>  
  <div class="col-md-6">
  <input id="email" name="email" placeholder="Email adresini girin" class="form-control input-md" type="email">
    
  </div>
</div>


<!-- Password girişi-->
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Parolanızı girin" class="form-control input-md" type="password">
    
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
        <button type="submit" class="btn btn-primary">Giriş</button>
		</fieldset>
</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--oturum açma bitiş-->

</div><!--başlık satırı kapatılır-->
</div>

<div class="bg1">
<div class="row">

<div class="col-md-7"></div>
<div class="col-md-4 panel">
<!-- kayıt olma formu başlar -->  
  <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
<fieldset>


<!-- Text giriş-->
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="name" name="name" placeholder="İsminizi girin" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text giriş-->
<div class="form-group">
  <label class="col-md-12 control-label" for="gender"></label>
  <div class="col-md-12">
    <select id="gender" name="gender" placeholder="Cinsiyetinizi girin" class="form-control input-md" >
   <option value="Erkek">Cinsiyet Seç</option>
  <option value="E">Erkek</option>
  <option value="K">Kadın</option> </select>
  </div>
</div>

<!-- Text giriş-->
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="okul" name="okul" placeholder="Okul adınızı girin" class="form-control input-md" type="text">
    
  </div>
</div>


<!-- Text giriş-->
<div class="form-group">
  <label class="col-md-12 control-label title1" for="email"></label>
  <div class="col-md-12">
    <input id="email" name="email" placeholder="Emailinizi girin" class="form-control input-md" type="email">
    
  </div>
</div>

<!-- Text giriş-->
<div class="form-group">
  <label class="col-md-12 control-label" for="mob"></label>  
  <div class="col-md-12">
  <input id="mob" name="mob" placeholder="Telefon numaranzı girin" class="form-control input-md" type="number">
    
  </div>
</div>


<!-- Text giriş-->
<div class="form-group">
  <label class="col-md-12 control-label" for="password"></label>
  <div class="col-md-12">
    <input id="password" name="password" placeholder="Parolanızı girin" class="form-control input-md" type="password">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12control-label" for="cpassword"></label>
  <div class="col-md-12">
    <input id="cpassword" name="cpassword" placeholder="Parolanızı tekrar girin" class="form-control input-md" type="password">
    
  </div>
</div>
<?php if(@$_GET['q7'])
{ echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}?>
<!-- Kayıt ol buton -->
<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input  type="submit" class="sub" value="Kayıt Ol" class="btn btn-primary"/>
  </div>
</div>

</fieldset>
</form>
</div>
</div></div>
</div><!--container son-->

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
<!-- geliştirici için modal-->
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
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+905374544554</h4>
		<h4 style="font-family:'typo' ">musfatmin@gmail.com</h4>
		<h4 style="font-family:'typo' ">Alanya,ANTALYA</h4></div></div>
		</p>
      </div>
    
    </div>
  </div>
</div>

<!--admin girişi için modal-->
	 <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Kapat</span></button>
        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">Giriş</span></h4>
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
      
    </div>
  </div>
</div>
<!--footer bit-->
</body>
</html>
