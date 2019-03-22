<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

   <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"> </script>
    <script type="text/javascript" src="js/bootstrap.js"> </script>
    <script type="text/javascript" src="js/bootstrap.min.js"> </script>

<title>Başlıksız Belge</title>
</head>

<body>

<!-- Navbar alanımız başladı -->
    <div class="navbar navbar-inverse navbar-static-top" id="Mymenu">
        <div class="container">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">Tasarımcı Web</a>
                
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbarSec"> <!-- burada menüleri3 cubugun altına alacak class tanımladık -->
                    <span class="sr-only"> Menu </span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>     
            <div class="collapse navbar-collapse navbarSec">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"> <a href="#" title="" > Anasayfa </a> </li>
                    <li> <a href="#" title=""> Hakkımızda </a> </li>
                    <li> <a href="#" title=""> Makaleler </a> </li>
                    <li class="dropdown"> 
                
                		<a href="#" title="" class="dropdown-toggle" data-toggle='dropdown'> Videolar 
                			<span class="caret"></span>
               			</a>
                        <ul class="dropdown-menu navbar-inverse Acilir_Menu">
                            <li> <a href="#" title=""> A'dan Z'ye PHP </a> </li>
                            <li> <a href="#" title=""> A'dan Z'ye CSS </a> </li>
                           <!-- <li class="divider"></li>    Araya beyaz cizgi koyar    -->
                            <li> <a href="#" title=""> A'dan Z'ye Jquery </a> </li>
                            <li class="divider"></li>
                            <li> <a href="#" title=""> Panel 2018 </a> </li>
                    	</ul> 
                
               		</li>
                    <li> <a href="#" title=""> İletişim </a> </li>
                    <li class="dropdown">
                    	<a  href="#" title="" class="dropdown-toggle" data-toggle='dropdown'><i class="glyphicon glyphicon-search"></i></a>
                        <ul class="dropdown-menu navbar-inverse Acilir_Menu">
                        	<li>
                                <form role="search" class="navbar-form">
                                    <div class="input-group">
                                        <input type="text" class="form-control input-sm" placeholder="arama yap"/>
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-default input-sm">ara</button>
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



</body>
</html>