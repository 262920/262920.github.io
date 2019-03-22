<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible content=""IE=edge" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/Tools_Style.css" />
    <link rel="stylesheet" href="css/jquery.lightbox-0.5.css" />
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"> </script>
    <script type="text/javascript" src="js/bootstrap.js"> </script>
    <script type="text/javascript" src="js/jquery.lightbox-0.5.js"> </script>
 
    <!-- [if 1t IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.js"></script>
    <![endif]-->
    <title>Tasarımcı Web || Hakkımızda</title>
    <script type="text/javascript">
		$(document).ready(function() {
			$(".tooltipAc").tooltip();
			$(".popoverAc").popover();
			$('a.GaleriAc').lightBox();
            
        });
	</script>
  
</head>


<body>

	<!-- Navbar alanımız başladı -->
	<div class="navbar navbar-inverse navbar-static-top" id="Mymenu">
	<div class="container">
    	<div class="navbar-header">
            <a href="index.php" class="navbar-brand">Tasarımcı Web</a>
            
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbarSec"> <!-- burada menüleri3 cubugun altına alacak class tanımladık -->
                <span class="sr-only"> Menu </span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
       	</div>     
        <div class="collapse navbar-collapse navbarSec">
            <ul class="nav navbar-nav navbar-right">
                <li> <a href="index.php" title="" > Anasayfa </a> </li>
                <li> <a href="hakkimizda.php" title=""> Hakkımızda </a> </li>
                <li class="dropdown"> 
                
                <a href="#" title="" class="dropdown-toggle" data-toggle='dropdown'> Dersler 
                	<span class="caret"></span>
                </a>
                	<ul class="dropdown-menu navbar-inverse Acilir_Menu">
                    	<li> <a href="makaleler.php" title="">Makaleler</a> </li>
                        <li> <a href="videolar.php" title="">Videolar</a> </li>
                       <!-- <li class="divider"></li>    Araya beyaz cizgi koyar    -->
                        <li class="divider"></li>
                        <li> <a href="#" title=""> Panel 2018 </a> </li>
                    </ul> 
                
                </li>
                <li class="active"> <a href="iletisim.php" title=""> İletişim </a> </li> 
                <li class="dropdown">
                    	<a  href="#" title="" class="dropdown-toggle" data-toggle='dropdown'>
                       		
                        	<i class="glyphicon glyphicon-search">
                            
                            </i>
                            <br />
                            
                        </a>
                        
                        
                        <ul class="dropdown-menu navbar-inverse Acilir_Menu">
                        	<li>
                                <form role="search" class="navbar-form">
                                    <div class="input-group">
                                        <input type="text" class="form-control input-sm" placeholder="arama yap" />
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-default input-sm"><i class="glyphicon glyphicon-search"></i></button>
                                        </span> 
                                    </div>
                                </form>
                            </li>
                        </ul>
                        
                        
                    </li>
                    <li> 
                    	<a href="#" title="" data-toggle="modal" data-target="#LoginModal"> <i class="glyphicon glyphicon-log-in"></i> </a> 
                    </li>
                     
            </ul>
        </div>
	</div>
</div>
	<!-- Navbar alanımız bitti-->


	<!-- Modal ile pop up Başladı -->
	<div id="LoginModal" style="overflow:auto;" class=" modal fade col-lg-4 col-md-4 col-sm-6 col-xs-10 col-lg-offset-4 col-md-offset-4 col-sm-offset-3 col-xs-offset-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> <!-- Bu belli bi kalıp -->
    	<!-- yukarıdaki style da scroll ları kaldırdık -->
        <div class=" row modal-dialog" style="width:100%!important;">
        <!-- yukarıda row vererek ve style da width e %100 vererek şu anki görünümü elde ettik-->
        	<div class="col-md-12 modal-content">
            	<form action="" role="form" class="form-horizontal">
                	<div class="modal-header">
                    	<button type="button" class=" close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"> Giriş Yap </h4>
                    </div>
                    <div class="modal-body" style="padding-bottom:10px;">
                    	<div class="form-group">
                        	<input type="email" class=" form-control" id="inputEmail3" placeholder="E-mail Adresiniz.."/>
                        </div>
                        <div class="form-group">
                        	<input type="password" class="form-control" id="inputPassword3" placeholder="şifreniz.."/>  
                        </div>
                    </div>
                    <div class="modal-footer">
                    	<button type="button" class="btn btn-default" data-dissmiss="modal">Kapat</button>
                        <button type="button" class="btn btn-primary" data-dissmiss="modal">Giriş</button>
                        
                    </div>
                </form>
            </div>
            
        </div>
   
    
    </div>
    <!-- Modal ile pop up Bitti -->

	<!-- Jumbotron sayfa title başladı -->
	<div class=" container MarginTop_10 MarginBottom_10 " >
    	<div class="jumbotron PaddingBottom_20 PaddingTop_20 MarginBottom_0">
            <div class="page-header MarginTop_0 MarginBottom_0 PaddingBottom_0 PaddingTop_0">
            	<h2 class="MarginTop_0 MarginBottom_0">İletişim</h2>
            </div>
    	</div>
    </div>
    <!-- Jumbotron sayfa titke bitti --> 
 
 	<div class="container">
    	<div class="col-lg-12 BgWhiteOzel Padding_10 MarginBottom_10" >
        <!-- iletişim Bilgileri Bölümü Başladı -->
        	<div class="col-lg-4 col-md-5 col-sm-5 col-xs-12">
            	<h3 class="page-header MarginTop_0 color1">İletişim Bilgileri</h3>
                <div class="list-group ">
                	<div class=" list-group-item PaddingLeft_0 Border_0">
                    	<i class="glyphicon glyphicon-earphone"></i> <strong class="hidden-xs hidden-sm"><abbr title="Telefon">Tel.</abbr> :</strong>02283141713
                    </div>
                    <div class=" list-group-item PaddingLeft_0 Border_0">
                    	<i class="glyphicon glyphicon-phone"></i> <strong class="hidden-xs hidden-sm"><abbr title=" Cep Telefon">Cep.</abbr> :</strong>05445052611
                    </div>
                    <div class=" list-group-item PaddingLeft_0 Border_0">
                    	<i class="glyphicon glyphicon-envelope"></i> <strong class="hidden-xs hidden-sm"><abbr title="E-mail">Mail.</abbr> :</strong>
                        <a href="mailto:yunus.er@windowslive.com" title="">yunus.er@windowslive.com</a>
                    </div>
                    <div class=" list-group-item PaddingLeft_0 Border_0">
                    	<i class="glyphicon glyphicon-map-marker"></i> <strong class="hidden-xs hidden-sm"><abbr title="Adres">Adres.</abbr> :</strong>Efeler mah. 1611 Sok. no:9/4 <P class="text-right MarginBottom_0">DİDİM/AYDIN</P>                  
                    </div>
                </div>
            </div>
        <!-- iletişim Bilgileri Bölümü Bitti -->   
            
        <!-- iletişim formu başladı -->
            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                    <h3 class="page-header MarginTop_0 color1"> İletişim Formu </h3>
                    <form role="form" class="form-horizontal">
                    <div class="form-group">
                        <label for="ConAdSoyad" class="col-lg-2 control-label">Ad Soyad</label>
                        <div class="col-lg-10 PaddingRight_0">
                            <input type="text" class="form-control" id="ConAdSoyad" name="ConAdSoyad" placeholder="Place Holder Özelliği" />
                        
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    
                    <div class="form-group">
                        <label for="ConAdSoyad" class="col-lg-2 control-label">E-mail</label>
                        <div class="col-lg-10 PaddingRight_0">
                            <input type="text" class="form-control" id="ConAdSoyad" name="ConAdSoyad" placeholder="Place Holder Özelliği" />
                        
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    
                    <div class="form-group">
                        <label for="ConAdSoyad" class="col-lg-2 control-label">Telefon</label>
                        <div class="col-lg-10 PaddingRight_0">
                            <input type="text" class="form-control" id="ConAdSoyad" name="ConAdSoyad" placeholder="Place Holder Özelliği" />
                        
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    
                    <div class="form-group">
                        <label for="ConAdSoyad" class="col-lg-2 control-label">Konu</label>
                        <div class="col-lg-10 PaddingRight_0">
                            <input type="text" class="form-control" id="ConAdSoyad" name="ConAdSoyad" placeholder="Place Holder Özelliği" />
                        
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    
                    <div class="form-group">
                        <label for="ConAdSoyad" class="col-lg-2 control-label">Mesaj</label>
                        <div class="col-lg-10 PaddingRight_0">
                            <textarea class="form-control" rows="4"></textarea>                    
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <label class=" col-lg-2 control-label"></label>
                        <div class="col-lg-10 PaddingRight_0">
                            <input type="submit" class="btn btn-default pull-right" value="Gönder"/>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    </form>
                    
                    
                    
                </div>
        <!-- iletişim formu Bitti -->
            <div class="clearfix"></div>
           
        </div>
        
    </div>
    
    <!-- Yazarlar bölümü(Özgeçmiş tooltip popover ayarları başladı) -->
    <div class=" container">
    	<h3 class="page-header color1">Harita Bölümü</h3>
        <iframe style="max-height:500px; min-height:300px; width:100%;" class="Border_0" 
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2308.3056665099602!2d27.276769155167152!3d37.37172679700571!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14be8729a8eb668f%3A0xea16d4a87058bbbe!2sCumhuriyet+Mahallesi%2C+Didim+Devlet+Hastanesi+Otopark%2C+09270+Didim%2FAyd%C4%B1n!5e0!3m2!1str!2str!4v1552910313016"></iframe>
	</div>
    
    
    
      
    <!-- Yazarlar bölümü(Özgeçmiş tooltip popover ayarları bitti) -->
    
    <div class="container">
        <div class="alert alert-info">
                    Bilgini paylaşarak insanlara faydalı olmak istiyorsan <a href="" class="tooltipAc text-warning" data-toggle="tooltip" data-placement="top" title="hakkımızda"> bizimle</a> <a href="" class=" tooltipAc text-danger" data-toggle="tooltip" data-placement="top" title="iletişim">işletişime</a> geçin.
        </div>
    </div>
    
    <!-- Footer alanımız başladı yine navbar kullandık -->
    <div class="navbar navbar-default" style="margin-bottom:0px!important;">
    	<div class="container">
            <p class=" navbar-text pull-left">
                Her hakkı saklıdır <a href="#">&copy;</a> 2018
            </p>
            <p  class=" navbar-text pull-right">
                <a href="http://localhost/tasarimci-web/"title="Tasarımcı Web">Tasarımcı Web</a>
            </p>
        </div>
    </div>
    <!-- Footer alanımız bitti yine navbar kullandık -->  

</body>


</html>