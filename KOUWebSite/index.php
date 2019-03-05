
<?php include("C:\wamp64\www\kousite\includes\config.php")?>

<?php include("C:\wamp64\www\kousite\duyurucek.php")?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="tr" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">


<style>
  
	
.swing1{
	-webkit-animation:swinging 10s ease-in-out 0s infinite;
	-moz-animation:swinging 10s ease-in-out 0s infinite;
	animation:swinging 10s ease-in-out 0s infinite;
	-webkit-transform-origin:50% 0;
	-moz-transform-origin:50% 0;
	transform-origin:50% 0;
	margin-left: 100px;
}

@-webkit-keyframes swinging{
	0% { -webkit-transform: rotate(0); }
	5% { -webkit-transform: rotate(10deg); }
	10% { -webkit-transform: rotate(-9deg); }
	15% { -webkit-transform: rotate(8deg); }
	20% { -webkit-transform: rotate(-7deg); }
	25% { -webkit-transform: rotate(6deg); }
	30% { -webkit-transform: rotate(-5deg); }
	35% { -webkit-transform: rotate(4deg); }
	40% { -webkit-transform: rotate(-3deg); }
	45% { -webkit-transform: rotate(2deg); }
	50% { -webkit-transform: rotate(0); }
	100% { -webkit-transform: rotate(0); }
}

@-moz-keyframes swinging{
	0% { -moz-transform: rotate(0); }
	5% { -moz-transform: rotate(10deg); }
	10% { -moz-transform: rotate(-9deg); }
	15% { -moz-transform: rotate(8deg); }
	20% { -moz-transform: rotate(-7deg); }
	25% { -moz-transform: rotate(6deg); }
	30% { -moz-transform: rotate(-5deg); }
	35% { -moz-transform: rotate(4deg); }
	40% { -moz-transform: rotate(-3deg); }
	45% { -moz-transform: rotate(2deg); }
	50% { -moz-transform: rotate(0); }
	100% { -moz-transform: rotate(0); }
}

@keyframes swinging{
	0% { transform: rotate(0); }
	5% { transform: rotate(10deg); }
	10% { transform: rotate(-9deg); }
	15% { transform: rotate(8deg); }
	20% { transform: rotate(-7deg); }
	25% { transform: rotate(6deg); }
	30% { transform: rotate(-5deg); }
	35% { transform: rotate(4deg); }
	40% { transform: rotate(-3deg); }
	45% { transform: rotate(2deg); }
	50% { transform: rotate(0); }
	100% { transform: rotate(0); }
}

</style>

<link href="css/bootstrap.css" rel="stylesheet" />
<link href="css/bootstrap-theme.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" /> 
<link href="font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="css/style1.css">
<style type="text/css">
.swing1 {	-webkit-animation:swinging 10s ease-in-out 0s infinite;
	-moz-animation:swinging 10s ease-in-out 0s infinite;
	animation:swinging 10s ease-in-out 0s infinite;
	-webkit-transform-origin:50% 0;
	-moz-transform-origin:50% 0;
	transform-origin:50% 0;
}
</style>
<title>KOCAELİ ÜNİVERSİTESİ BİLGİSAYAR MÜHENDİSLİĞİ</title>




<!-- FOR SLIDER  -->

	<meta charset="utf-8">
	
	<meta name="title" content="jQuery Immersive Slider by Pete R. | The Pete Design" />
	<meta name="description" content="Create an immersive slider experience with jQuery Immersive Slider" />
	<link rel="image_src" href="/images/immersive_slider_image.png" />

	<meta content="http://www.thepetedesign.com/demos/immersive_slider_demo.html" property="og:url" />
	<meta content="http://www.thepetedesign.com/images/immersive_slider_image.png" property="og:image" />
	<link rel="shortcut icon" id="favicon" href="favicon.png"> 
	<meta name="author" content="Pete R.">
	<link rel="canonical" href="http://www.thepetedesign.com/demos/immersive_slider_demo.html" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script type="text/javascript" src="js/jquery.immersive-slider.js"></script>
  <link href='css/immersive-slider.css' rel='stylesheet' type='text/css'>
  <style>
   html {
      height: 100%;
    }
    body {
      background:#c0d6c5; 
      padding: 0;
      text-align: left;
      font-family: 'open sans';
      position: relative;
      margin: 0;
      height: 100%;
    }
    
    .wrapper {
    	height: auto !important;
    	height: 100%;
    	margin: 0 auto; 
    	overflow: hidden;
    }
    
    a {
      text-decoration: none;
    }
    
    
    h1, h2 {
	width: 633px;
	float: left;
    }
    h1 {
      margin-top: 25px;
      color: #504c4c;
      margin-bottom: 5px;
      font-size: 50px;
      letter-spacing: -4px;
    }
    h2 {
      color: #444;
      font-weight: 100;
      margin-top: 0;
      margin-bottom: 10px;
    }
    
    .pointer {
      color: #9b59b6;
      font-family: 'Pacifico', cursive;
      font-size: 30px;
      margin-top: 15px;
    }
    pre {
      margin: 80px auto;
    }
    pre code {
      padding: 35px;
      border-radius: 5px;
      font-size: 15px;
      background: rgba(0,0,0,0.1);
      border: rgba(0,0,0,0.05) 5px solid;
      max-width: 500px;
    }


    .main {
      float: left;
      width: 100%;
      margin: 0 auto;
      background: #161923;
    }
    
    .main h1 {
      padding:20px 50px;
      float: left;
      width: 100%;
      font-size: 90px;
      box-sizing: border-box;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      font-weight: 100;
      color: black;
      margin: 0;
      margin-top: 70px;
      font-family: 'Playfair Display';
      letter-spacing: -1px;
    }
   
    .main h1.demo1 {
      background: #1ABC9C;
    }
    
    .reload.bell {
      font-size: 12px;
      padding: 20px;
      width: 45px;
      text-align: center;
      height: 47px;
      border-radius: 50px;
      -webkit-border-radius: 50px;
      -moz-border-radius: 50px;
    }
    
    .reload.bell #notification {
      font-size: 25px;
      line-height: 140%;
    }
    
    .reload, .btn{
      display: inline-block;
      border: 4px solid #A2261E;
      border-radius: 5px;
      -moz-border-radius: 5px;
      -webkit-border-radius: 5px;
      background: #CC3126;
      display: inline-block;
      line-height: 100%;
      padding: 0.7em;
      text-decoration: none;
      color: #fff;
      width: 100px;
      line-height: 140%;
      font-size: 17px;
      font-family: open sans;
      font-weight: bold;
    }
    .reload:hover{
      background: #A2261E;
    }
    .btn {
      width: 200px;
      color: #fff;
      border: none;
      margin-left: 10px;
      background: black;
    }
    .clear {
      width: auto;
    }
    .btn:hover, .btn:hover {
      background: rgba(0,0,0,0.8);
    }
    .btns {
      width: 410px;
      margin: 50px auto;
    }
    .credit {
      text-align: center;
      color: #444;
      padding: 10px;
      margin: 0 0 0 0;
      background: #161923;
      color: #FFF;
      float: left;
      width: 100%;
    }
    .credit a {
      color: #fff;
      text-decoration: none;
      font-weight: bold;
    }
    
    .back {
      position: absolute;
      top: 0;
      left: 0;
      text-align: center;
      display: block;
      padding: 7px;
      width: 100%;
      box-sizing: border-box;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      background: rgba(255, 255, 255, 0.25);
      font-weight: bold;
      font-size: 13px;
      color: #000;
      -webkit-transition: all 200ms ease-out;
      -moz-transition: all 200ms ease-out;
      -o-transition: all 200ms ease-out;
      transition: all 200ms ease-out;
    }
    .back:hover {
      color: black;
      background: rgba(255, 255, 255, 0.5);
    }
    
    
    .page_container {
      max-width: 960px;
      margin: 50px auto;
    }

    .header {
      background: white;
      padding-top: 10px;
      margin-bottom: 0;
    }
    .header h1{
      margin-bottom: 0;
      font-size: 45px;
    }

    .header .menu {
      padding-bottom: 10px;
    }

    .benefits {
      color: black;
      height: 10px;
      background: #FFF;
      position: relative;
      width: 100%;
      padding: 25px;
      font-size: 40px;
      font-weight: 100;
      float: left;
      box-sizing: border-box;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
    }

    .benefits .page_container{
      margin-bottom: 50px;
      margin-top: 0;
    }
  
    .immersive_slider .is-slide .content h2{
      line-height: 140%;
      font-weight: 100;
      color: white;
      font-weight: 100;
    }
    .immersive_slider .is-slide .content a {
      color: white;  
    }
  
  .immersive_slider .is-slide .content p{
    float: left;
    font-weight: 100;
    width: 100%;
    font-size: 15px;
    margin-top: 5px;
  }
	
	</style>
<!-- SLIDER BITTI-->
</head>

<body>

<!-- HEADER KISMI -->
<div>
 <header>
    <img src="kou_logo.png" class="swing1"  width="10%" height="10%" style="
	animation-delay: 0.2s;
	-webkit-animation-delay: 0.2s;
	-moz-animation-delay: 0.2s;
	animation-delay: 0.2s;
    z-index:1000;
	"
										 /> 
     <h1> KOCAELİ ÜNİVERSİTESİ<br/><b>BİLGİSAYAR MÜHENDİSLİĞİ</b></h1>

   
	 <a href="iletisimulasım.html"><img src="img/mail.png" class="mail" width="50" height="50" alt="iletisim"></a>
	 <a href="giris.html"><img src="img/giris.png" class="giris" width="50" height="50" alt="giris"></a>
 <!--
   <div class="nav navbar-nav  navbar-right pad50">
   <button type="button" class "btn btn-primary btn-lg pad10">
   <span class="glyphicon glyphicon-log-in">GİRİŞ</span>
   
   <button type="button" class "btn btn-primary btn-lg pad10 ">
   <span class="glyphicon glyphicon-envelope"></span>
   
   <button type="button" class "btn btn-primary btn-lg pad10">
   <span class="glyphicon glyphicon-log-in">ENG</span>
   
   </div>
  -->
	<!-- 
	</div>
    <div class="site-header-icons">
                    <a href="/aboutus/contact.html" class="btn btn-icon btn-header-icon" data-toggle="tooltip" data-placement="left" data-container=".site-header" title="Contact Us">
                        <img src="/img/icon-mail.png" width="41" height="41" alt="&nbsp;&nbsp;Contact Us&nbsp;&nbsp;">
                    </a>
                    <a href="http://www.cs.ox.ac.uk/search/" class="btn btn-icon btn-header-icon site-header-search-toggle" data-toggle="tooltip" data-placement="left" data-container=".site-header" title="Search">
                        <img src="/img/icon-search.png" width="41" height="41" alt="&nbsp;&nbsp;Search&nbsp;&nbsp;">
                    </a>
                </div>            
	--></header>

<!-- HEADER KISMI BİTİŞ -->






<!-- NAVİGASYON KISMI -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
      <a class="navbar-brand" href="index.php"><i class="fa fa-home" aria-hidden="true">ANASAYFA</i></a>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       
       <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">HAKKIMIZDA <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="tarihce.html">Tarihçe</a></li>
            <li role="separator" class="divider"></li>
			<li><a href="hakkimizda.html">Hakkımızda</a></li>
            <li role="separator" class="divider"></li>
			<li><a href="misyon.html">Misyon</a></li>
            <li role="separator" class="divider"></li>
			<li><a href="vizyon.html">Vizyon</a></li>
            <li role="separator" class="divider"></li>
			<li><a href="anaBilimDallari.html">Ana Bilim Dalları</a></li>
            <li role="separator" class="divider"></li>
			<li><a href="progciktilari.html">Program Çıktıları</a></li>
          </ul>
        </li>
        
        
        
        
        <li><a href="yonetim.html">YÖNETİM</a></li>
        
        
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ARAŞTIRMA <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://bilgisayar.kocaeli.edu.tr/akilli_sistemler_lab/"  target="_blank">Akıllı Sistemler Araştırma Laboratuvarı</a></li>
            	<li role="separator" class="divider"></li>
			 <li><a href="http://bilgisayar.kocaeli.edu.tr/comnet" target="_blank">Bilgisayar Ağları ve Haberleşme Araştırma Laboratuvarı</a></li>
             	<li role="separator" class="divider"></li>
			<li><a href="http://embedded.kocaeli.edu.tr/" target="_blank">Gömülü ve Algılayıcı Sistemler Araştırma Laboratuvarı</a></li>
            	<li role="separator" class="divider"></li>
			<li><a href="http://ipcv.kocaeli.edu.tr/" target="_blank">Görüntü İşleme Araştırma Laboratuvarı</a></li>
            	<li role="separator" class="divider"></li>
			<li><a href="http://ibel.kocaeli.edu.tr/" target="_blank">İnsan Bilgisayar Etkileşimi Araştırma Laboratuvarı</a></li>
            	<li role="separator" class="divider"></li>
			<li><a href="http://yapbenzet.kocaeli.edu.tr/" target="_blank">Yapay Zeka ve Benzetim Sistemleri Araştırma Laboratuvarı</a></li>
            	<li role="separator" class="divider"></li>
			<li><a href="projeler.html">Projeler</a></li>
          </ul>
        </li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PERSONEL <span class="caret"></span></a>
          <ul class="dropdown-menu">
          
          <li><a href="ogretimUyeleri.html">Öğretim Üyeleri</a></li>
         	<li role="separator" class="divider"></li>
		 <li><a href="ogretimElemanlari.html">Öğretim Elemanları</a></li>
        	 <li role="separator" class="divider"></li>
		 <li><a href="IdariPersonel.html">İdari Personel</a></li>
        	
            
            
          </ul>
        </li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LİSANS<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://mf.kocaeli.edu.tr/ogrenci/formlar.php" target="_blank">Öğrenci Dilekçe ve Formları</a></li>
             
            <li role="separator" class="divider"></li>
						<li><a href="http://bilgisayar.kocaeli.edu.tr/files/lisansdersplani.pdf" target="_blank">Ders Planı</a></li>
                         
            <li role="separator" class="divider"></li>
						<li><a href="http://bilgisayar.kocaeli.edu.tr/files/lisansdersicerikleri.pdf">Ders İçerikleri</a></li>
                         
            <li role="separator" class="divider"></li>
  					    <li><a href="208_Ders_Programi.zip">Ders Programı</a></li>
                         
            <li role="separator" class="divider"></li>
  					    <li><a href="2016-2017_Danismanliklari.pdf">Akademik Danışmanlar</a></li>
                         
            <li role="separator" class="divider"></li>
						<li><a href="#">İntibak Öğrencileri</a></li>
                         
            <li role="separator" class="divider"></li>
						<li><a href="#">Aday Öğrenciler</a></li>
                         
            <li role="separator" class="divider"></li>
						<li><a href="arastirmaproblemleri.html">Araştırma Problemleri ve Bitirme</a></li>
                         
            <li role="separator" class="divider"></li>
						<li><a href="http://odb.kocaeli.edu.tr/akademik_takvim.php">Akademik Takvim</a></li>
                         
            <li role="separator" class="divider"></li>
						<li><a href="mudek.html">MÜDEK</a></li>
                         
            <li role="separator" class="divider"></li>
						<li><a href="diplomasorgulama.html">Diploma Sorgulama</a></li>	
                         
            <li role="separator" class="divider"></li>					
						<li><a href="staj.html">Staj</a></li>	
          </ul>
        </li>
        
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LİSANSÜSTÜ <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="bilgmühcalismaalanlari.html">Çalışma Alanları</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="YuksekLisansDersListesi.html" target="_blank">Ders Listesi</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="2016-2017_Guz_Lisansustu.pdf" target="_blank">Ders Programı</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Tezler</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="Doktora_Yeterlik_Sinavi.pdf">Doktora Yeterlilik Sınavı</a></li>
          </ul>
        </li>
        
        <li><a href="https://www.facebook.com/groups/25429857332/" target="_blank">MEZUNLAR</a></li>
        <li><a href="#">3D NAVİ</a></li>
        
      </ul>
     
    
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav><!-- navigasyon bitiş -->



<!--   SLIDER BASLADI...  -->
  <div class="wrapper">
   
    <div class="main">
      <div class="page_container">
        <div id="immersive_slider">
          <div class="slide" data-blurred="img/slide1_blurred.jpg" >
            <div class="content">
              <h2><a href="http://www.bucketlistly.com" target="_blank">BucketListly</a></h2>
              <p>It’s never been easier to watch YouTube on the big screen
              Send your favorite YouTube videos from your Android phone or tablet to TV with the touch of a button. It’s easy. No wires, no setup, no nothing. Find out more here.</p>
            </div>
            <div class="image">
              <a href="http://www.bucketlistly.com" target="_blank">
                <img src="img/slide1.jpg" alt="Slider 1">
              </a>
            </div>
          </div>
          <div class="slide" data-blurred="img/slide2_blurred.jpg" >
            <div class="content">
              <h2><a href="http://www.bucketlistly.com/apps" target="_blank">BucketListly Apps</a></h2>
              <p>It’s never been easier to watch YouTube on the big screen
              Send your favorite YouTube videos from your Android phone or tablet to TV with the touch of a button. It’s easy. No wires, no setup, no nothing. Find out more here.</p>
            </div>
            <div class="image">
             <a href="http://www.bucketlistly.com/apps" target="_blank"> <img src="img/slide2.jpg" alt="Slider 1"></a>
            </div>
          </div>
          <div class="slide" data-blurred="img/slide3_blurred.jpg">
            <div class="content">
              <h2><a href="http://www.thepetedesign.com" target="_blank">The Pete Design</a></h2>
              <p>It’s never been easier to watch YouTube on the big screen
              Send your favorite YouTube videos from your Android phone or tablet to TV with the touch of a button. It’s easy. No wires, no setup, no nothing. Find out more here.</p>
            </div>
            <div class="image">
              <a href="http://www.thepetedesign.com" target="_blank"><img src="img/slide3.jpg" alt="Slider 1"></a>
            </div>
          </div>
          
          <a href="#" class="is-prev">&laquo;</a>
          <a href="#" class="is-next">&raquo;</a>
        </div>
      </div>
  	</div>
  	<div class="benefits">
      <div class="page_container"></div>
  	</div>
  	<script type="text/javascript">
  	  $(document).ready( function() {
  	    $("#immersive_slider").immersive_slider({
  	      container: ".main"
  	    });
  	  });

    </script>
  </div>
  <script>

  	var _gaq=[['_setAccount','UA-11278966-1'],['_trackPageview']]; // Change UA-XXXXX-X to be your site's ID
  	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
  	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  	s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
<!--  SLIDER BITTI!! -->
	
	
	


<!-- DUYURULAR KISMI -->

  
<div class="container">
<div class="row">
</div>
<div class="row">
<div class="col-md-4"> 

<!-- GENEL DUYURULAR-->

  <div class="panel panel-default">
  <div class="panel-heading">
 
 <h4> 
 	<span class="glyphicon glyphicon-bullhorn">
  	</span>
  		GENEL DUYURULAR
  </h4>
  
  
  </div>
  <div class="panel-body">
    <ul class="media-list">
    <!-- ilk duyuru -->
    
	<li class="media">
  <div class="media-left">
   
	<div class="panel-heading month">
	<span class="panel-title strong">
	
	</span>
 
   
</div>
  </div>
  <div class="media-body">
  <h4 class="media-heading">
  <h4> <b><?php echo "$dAdi[0]";?></b></h4>
  </h4>
  <p><h5 >
<h5><i> <?php echo "$dIcerik[0]";?></i></h5>
  </h5>
  </p>
  <h5>»<?php echo "$dtarih[0]";?></h5>
</div>
<hr>
</li>





<!-- ikinci duyuru -->
    
	 
	<li class="media">
  <div class="media-left">
   
	<div class="panel-heading month">
	<span class="panel-title strong">
	
	</span>
 
  

 
</div>
  </div>
  <div class="media-body">
  <h4 class="media-heading">
  <h4> <b><?php echo "$dAdi[1]";?></b></h4>
  </h4>
  <p><h5 >
<h5><i> <?php echo "$dIcerik[1]";?></i></h5>
  </h5>
  </p>
  <h5>»<?php echo "$dtarih[1]";?></h5>
</div>
<hr>
</li>


<!-- ucuncu duyuru -->
    
	 
	<li class="media">
  <div class="media-left">
   
	<div class="panel-heading month">
	<span class="panel-title strong">
	
	</span>
 
  

 
</div>
  </div>
  <div class="media-body">
  <h4 class="media-heading">
  <h4> <b><?php echo "$dAdi[2]";?></b></h4>
  </h4>
  <p><h5 >
<h5><i> <?php echo "$dIcerik[2]";?></i></h5>
  </h5>
  </p>
  <h5>»<?php echo "$dtarih[2]";?></h5>
</div>
<hr>
</li>

</ul>
<a href="#" class="btn btn-danger btn-block">Tüm etkinlikler</a>
</div>
</div>
</div>

<div class="col-md-4">
<!--BÖLÜM DUYURULARI-->


  <div class="panel panel-default">
  <div class="panel-heading">
 
 <h4> 
 	<span class="glyphicon glyphicon-bullhorn">
  	</span>
  		BÖLÜM DUYURULARI
  </h4>
  
  
  </div>
  <div class="panel-body">
    <ul class="media-list">
    <!-- ilk duyuru -->
    
	<li class="media">
  <div class="media-left">
   
	<div class="panel-heading month">
	<span class="panel-title strong">
	
	</span>
 
   
</div>
  </div>
  <div class="media-body">
  <h4 class="media-heading">
  <h4> <b><?php echo "$dAdi[0]";?></b></h4>
  </h4>
  <p><h5 >
<h5><i> <?php echo "$dIcerik[0]";?></i></h5>
  </h5>
  </p>
  <h5>»<?php echo "$dtarih[0]";?></h5>
</div>
<hr>
</li>





<!-- ikinci duyuru -->
    
	 
	<li class="media">
  <div class="media-left">
   
	<div class="panel-heading month">
	<span class="panel-title strong">
	
	</span>
 
  

 
</div>
  </div>
  <div class="media-body">
  <h4 class="media-heading">
  <h4> <b><?php echo "$dAdi[1]";?></b></h4>
  </h4>
  <p><h5 >
<h5><i> <?php echo "$dIcerik[1]";?></i></h5>
  </h5>
  </p>
  <h5>»<?php echo "$dtarih[1]";?></h5>
</div>
<hr>
</li>


<!-- ucuncu duyuru -->
    
	 
	<li class="media">
  <div class="media-left">
   
	<div class="panel-heading month">
	<span class="panel-title strong">
	
	</span>
 
  

 
</div>
  </div>
  <div class="media-body">
  <h4 class="media-heading">
  <h4> <b><?php echo "$dAdi[2]";?></b></h4>
  </h4>
  <p><h5 >
<h5><i> <?php echo "$dIcerik[2]";?></i></h5>
  </h5>
  </p>
  <h5>»<?php echo "$dtarih[2]";?></h5>
</div>
<hr>
</li>

</ul>
<a href="#" class="btn btn-danger btn-block">Tüm etkinlikler</a>
</div>
</div>
</div>
<div class="col-md-4"><!--HABER VE ETKİNLİKLER-->


  <div class="panel panel-default">
  <div class="panel-heading">
 
 <h4> 
 	<span class="glyphicon glyphicon-bullhorn">
  	</span>
  		BÖLÜM DUYURULARI
  </h4>
  
  
  </div>
  <div class="panel-body">
    <ul class="media-list">
    <!-- ilk duyuru -->
    
	<li class="media">
  <div class="media-left">
   
	<div class="panel-heading month">
	<span class="panel-title strong">
	
	</span>
 
   
</div>
  </div>
  <div class="media-body">
  <h4 class="media-heading">
  <h4> <b><?php echo "$dAdi[0]";?></b></h4>
  </h4>
  <p><h5 >
<h5><i> <?php echo "$dIcerik[0]";?></i></h5>
  </h5>
  </p>
  <h5>»<?php echo "$dtarih[0]";?></h5>
</div>
<hr>
</li>





<!-- ikinci duyuru -->
    
	 
	<li class="media">
  <div class="media-left">
   
	<div class="panel-heading month">
	<span class="panel-title strong">
	
	</span>
 
  

 
</div>
  </div>
  <div class="media-body">
  <h4 class="media-heading">
  <h4> <b><?php echo "$dAdi[1]";?></b></h4>
  </h4>
  <p><h5 >
<h5><i> <?php echo "$dIcerik[1]";?></i></h5>
  </h5>
  </p>
  <h5>»<?php echo "$dtarih[1]";?></h5>
</div>
<hr>
</li>


<!-- ucuncu duyuru -->
    
	 
	<li class="media">
  <div class="media-left">
   
	<div class="panel-heading month">
	<span class="panel-title strong">
	
	</span>
 
  

 
</div>
  </div>
  <div class="media-body">
  <h4 class="media-heading">
  <h4> <b><?php echo "$dAdi[2]";?></b></h4>
  </h4>
  <p><h5 >
<h5><i> <?php echo "$dIcerik[2]";?></i></h5>
  </h5>
  </p>
  <h5>»<?php echo "$dtarih[2]";?></h5>
</div>
<hr>
</li>

</ul>
<a href="#" class="btn btn-danger btn-block">Tüm etkinlikler</a>
</div>
</div>
</div>

</div>






</div>	

<!-- DUYURULAR BİTİŞ KISMI -->

<!-- FOOTER KISMI -->
<footer class="alt_kisim">
	<div class="row yesil font">
		<div class="container">
        	<div class="col-lg-4 col-md-4 col-sm4 iletisim">
             <h6>İLETİŞİM</h6>
               <div class="iletisim">
               <a href="" target="_blank" class=""></a>
                  <ul>
                      <li>TEL:+90(262) 303 35 60</li>
                      <li>E-POSTA:bilgisayar@kocaeli.edu.tr</li>
                      <li>WEB:http://bilgisayar.kocaeli.edu.tr </li>
                  </ul>
               </div>
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm4 adres">
             <h6>ADRES</h6>
               <div class="adres">
                  <h7> KOÜ Mühendislik Fakültesi (B Blok) Bilgisayar Mühendisliği
                   Umuttepe Yerleşkesi 41380 Kocaeli
                  </h7>
               </div>
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm4 istek">
             <h6>İSTEK, GÖRÜŞ VE ÖNERİLERİLERİNİZ İÇİN</h6>
               <div class="istek">
                 <a href="http://akademikpersonel.kocaeli.edu.tr/binner/">A. Burak İNNER</a> 
                 <br/><a href="http://akademikpersonel.kocaeli.edu.tr/hikmetcan.ozcan/">Hikmetcan ÖZCAN </a>
               </div>
            </div>
            
            
		</div>
	</div>
</footer><!-- footer bitiş -->




<script src="js/bootstrap.js" > </script>

</div>


</body>
</html>