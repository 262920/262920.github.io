<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible content=""IE=edge" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/Tools_Style.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.css" />
    <link rel="stylesheet" href="css/jquery.lightbox-0.5.css" />
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"> </script>
    <script type="text/javascript" src="js/bootstrap.js"> </script>
    <script type="text/javascript" src="js/jquery.lightbox-0.5.js"> </script>
    <script type="text/javascript" src="js/jquery.contenthover.js"> </script>
 
    <!-- [if 1t IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.js"></script>
    <![endif]-->
    <title>Tasarımcı Web || Video-Detay</title>
    <script type="text/javascript">
		$(document).ready(function() {
			$(".tooltipAc").tooltip();
			$(".popoverAc").popover();
			$('a.GaleriAc').lightBox();
			$('.collapseList').collapse();
			$('.VideoImg').contenthover( {
				effect:'slide',
				slide_speed:500,
				overlay_background:'#000',
				overlay_opacity:0.8
			});
            
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
                <li class="dropdown active"> 
                
                <a href="#" title="" class="dropdown-toggle" data-toggle='dropdown'> Dersler 
                	<span class="caret"></span>
                </a>
                	<ul class="dropdown-menu navbar-inverse Acilir_Menu">
                    	<li > <a href="makaleler.php " title="">Makaleler</a> </li>
                        <li> <a href="videolar.php" title="">Videolar</a> </li>
                       <!-- <li class="divider"></li>    Araya beyaz cizgi koyar    -->
                        <li class="divider"></li>
                        <li> <a href="#" title=""> Panel 2018 </a> </li>
                    </ul> 
                
                </li>
                <li> <a href="#" title=""> İletişim </a> </li> 
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
            <div class="page-header MarginTop_0 MarginBottom_0 Padding_0">
            	<ol class="breadcrumb Padding_0" style="background:none;">
                	 <li><a href="videolar.php">Videolar</a></li>
 					 <li><a href="videolar-ana_kategori.php">Ana kategori</a></li>
 					 <li><a href="videolar-alt_kategori.php">Alt kategori</a></li>
 					<li class="FontSize_16 active "><a href="video-detay.php" title="">Video Detay</a></li>
				</ol>
            </div>
    	</div>
    </div>
    <!-- Jumbotron sayfa titke bitti --> 
 
 
 	<div class="container MarginTop_0">
    	<div class="col-lg-12 BgWhiteOzel Padding_10 MarginBottom_10" >
        	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Padding_0">
            	<div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/V95-wsM7P_U"></iframe>
                </div>
                
                <div class="col-lg-12 MarginTop_10 Padding_0">
                	<div class="col-lg-6  PaddingLeft_0">
                    	<i class="glyphicon glyphicon-tags  MarginRight_5"></i>
                        <a href="" title="">Yunus ER,</a>
                        <a href="" title="">bootsrap,php,</a>
                        <a href="" title="">javascript,</a>
                        <a href="" title="">responsive</a>
                    </div>
                    <div class="col-lg-6 PaddingRight_0">
                    	<div class="col-lg-4 text-right PaddingRight_0">
                            <i class="glyphicon glyphicon-user MarginRight_5"></i>
                            <a href="" title="Yunus ER" class="tooltipAc" data-placement="bottom">Yunus ER</a>
                        </div>
                        <div class="col-lg-3 text-right PaddingRight_0">
                            <i class="glyphicon glyphicon-time MarginRight_5"></i>
                             <a href="" title="18.03.2018" class="tooltipAc" data-placement="bottom">18.03.2018</a>
                        </div>
                        <div class="col-lg-2 text-right PaddingRight_0">
                            <i class="glyphicon glyphicon-download-alt MarginRight_5"></i>
                             <a href="" title="Dosya indir" class="tooltipAc" data-placement="bottom">İndir</a>
                        </div>
                        <div class="col-lg-3 text-right PaddingRight_0">
                            <i class="glyphicon glyphicon-signal MarginRight_5"></i>
                             <a href="" title="">28 izlendi</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                <div class="clearfix"></div>
            </div>
                <div class="clearfix"></div>
                
                
                
                <p class="text-left MarginTop_10">
                    It uses utility<span class="tooltipAc" data-toggle="tooltip" title="Deneme Yapıyoruz" data-placement="top"> 
                    classes for typography and spacing </span>to space content out within the larger container.
                    It uses <code>utility classes </code>for typography and spacing to space content out within the larger container.
                    It uses utility classes for typography and spacing to space content out within the larger container.
                    It uses utility classes for typography and spacing to space content out within the larger container.
                    It uses utility classes for <kbd>typography</kbd> and spacing to space content out within the larger container.
                    It uses utility classes for typography and spacing to space content out within the larger container.
                </p>
                <p class="text-left MarginTop_10">
                    It uses utility<span class="tooltipAc" data-toggle="tooltip" title="Deneme Yapıyoruz" data-placement="top"> 
                    classes for typography and spacing </span>to space content out within the larger container.
                    It uses <code>utility classes </code>for typography and spacing to space content out within the larger container.
                    It uses utility classes for typography and spacing to space content out within the larger container.
                    It uses utility classes for typography and spacing to space content out within the larger container.
                    It uses utility classes for <kbd>typography</kbd> and spacing to space content out within the larger container.
                    It uses utility classes for typography and spacing to space content out within the larger container.
                </p>
                <div class="panel-group Padding_0 MarginTop_20" id="accordion">
                	<div class=" Padding_0 PaddingRight_10 col-lg-8">
                        <div class="panel panel-default MarginBottom_10">
                             <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a title="" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Yorumlar</a>
                                    
                                </h4>
                             </div>
                             <div id="collapseOne" class=" list-group collapseList in media Padding_10 PaddingTop_0" >
                                  <div class="media-left">
                                    <a class="pull-left" href="#">
                                      <img class="media-object" src="images/tema/x.svg"alt="...">
                                    </a>
                                  </div>
                                  <div class="media-body">
                                    <h4 class="media-heading">
                                        It uses utility classes for typography and spacing to space content out within the larger container.
                                        It uses utility classes for typography and spacing to space content out within the larger container.
                                    </h4>
                                    <div id="collapseOne" class=" list-group collapseList media Padding_10 PaddingTop_0" >
                                  <div class="media-left">
                                    <a class="pull-left" href="#">
                                      <img class="media-object" src="images/tema/x.svg"alt="...">
                                    </a>
                                  </div>
                                  <div class="media-body">
                                    <h4 class="media-heading">
                                        It uses utility classes for typography and spacing to space content out within the larger container.
                                        It uses utility classes for typography and spacing to space content out within the larger container.
                                    </h4>
                              
                                 </div>
                                 <div class="clearfix"></div>
                                </div>
                                 </div>
                                 
                                 <div class="clearfix"></div>
                                </div>
                          
                        </div>  
                    </div>
                    
                    <div class="Padding_0 PaddingLeft_10 col-lg-4">  
                          <div class="panel panel-default MarginBottom_10">
                             <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a title="" data-toggle="collapse" data-parent="#accordion" href="#yorumform">Yorum yaz</a>
                                    
                                </h4>
                             </div>
                                 <div id="yorumform" class=" list-group collapseList in media Padding_10 PaddingTop_0" >
                                 	<form role="form">
                                       	  
                                          <div class="form-group">
                                            
                                            <select class="form-control">
                                              <option selected="selected">Yorum türünü seçiniz..</option>
                                               <option>+ Teşekkür/Tavsiye</option>
                                              <option>? Soru</option>
                                              <option>! Şikayet</option>
                                            </select>
                                          </div>
                                          <div class="form-group">
                                            
                                            <input type="text" class="form-control" id="AdSoyad" placeholder="Ad Soyad">
                                          </div>
                                          <div class="form-group">
                                            
                                            <input type="email" class="form-control" id="eMail" placeholder="E-mail">
                                          </div>
                                           <div class="form-group">
                                            
                                            <textarea class="form-control" id="mesaj" placeholder="Mesaj" rows="4"></textarea>
                                          </div>
                                          
                                          
                                          <button type="submit" class="btn btn-default pull-right">Gönder</button>
                                          <div class="clearfix"></div>
                                    </form>
                                 	
                                 </div>
                             </div>
					</div>
                    
					  </div>
                      
                      
            </div> 
            <div class="clearfix"></div> 
            
             
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_5">
                	<div class="panel-default">
                    <div class="panel-heading PaddingLeft_0 PaddingRight_0 MarginBottom_10>
                    	<h2 class=" panel-title"> Benzer Videolar</h2>
                    </div>
                	<?php for($i=1; $i<=4; $i++) { ?>
                		
                            <div class="col-lg-3 col-md-3 col-sm-6 AnasayfaVideoListDiv">
                                <a href="videolar-detay.php" class="VideoImg" >
                                    <img class="img-responsive" src="images/Video/resim2.jpg" alt="" title="" longdesc="" />
                                </a>  
                                <div class="contenthover">
                                    <p>Php de include ve include_once işlemleri nasıl işlenir öğrendik ve anladık..</p>
                                    <p><a href="videolar-detay.php" class="mybutton pull-right">Dersi izle</a></p>
                                </div>      
                                <h4><a href="videolar-detay.php" title="">Php include işlemi</a></h4>
                            </div>
										
                    <?php } ?>  
                    
                    </div>
            	</div>
                <div class="clearfix"></div>
        </div>
        
    </div>
    
  
    
    <!-- Bilgini paylaş Bölümü(başladı) -->
    <div class="container">
        <div class="alert alert-info">
                    Bilgini paylaşarak insanlara faydalı olmak istiyorsan <a href="" class="tooltipAc text-warning" data-toggle="tooltip" data-placement="top" title="hakkımızda"> bizimle</a> <a href="" class=" tooltipAc text-danger" data-toggle="tooltip" data-placement="top" title="iletişim">işletişime</a> geçin.
        </div>
    </div>
    <!-- Bilgini paylaş Bölümü(bitti) -->
    
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