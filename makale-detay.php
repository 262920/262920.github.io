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
    <title>Tasarımcı Web || Makale-Detay</title>
    <script type="text/javascript">
		$(document).ready(function() {
			$(".tooltipAc").tooltip();
			$(".popoverAc").popover();
			$('a.GaleriAc').lightBox();
			$('.collapseList').collapse();
            
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
                	 <li><a href="#">Makale</a></li>
 					 <li><a href="#">PHP Dersleri</a></li>
 					 <li><a href="#">PHP</a></li>
 					<li class="FontSize_16 active "><a href="" title="">Makale Detay</a></li>
				</ol>
            </div>
    	</div>
    </div>
    <!-- Jumbotron sayfa titke bitti --> 
 
 	<div class="container MarginTop_0">
    	<div class="col-lg-12 BgWhiteOzel Padding_10 MarginBottom_10" >
        	<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 Padding_0">
            	<a class=" BlokYap thumbnail GaleriAc" href="images/slide/resim1.jpg" title="">
                	<img class="img-responsive BlokMaxHeight_250"	 src="images/slide/resim1.jpg" alt="" title="" longdesc=""/>
                </a>
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
                <div class="panel-group Padding_0" id="accordion">
                      <div class=" panel panel-default MarginBottom_10">
                     	 <div class="panel-heading" role="tab" id="headingOne">
      						<h4 class="panel-title">
                      			<a title="" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">PHP Dersleri</a>
                                
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
                      
                          <div class=" panel panel-default MarginBottom_10">
                             <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a title="" data-toggle="collapse" data-parent="#accordion" href="#yorumform">Yorum yaz</a>
                                    
                                </h4>
                             </div>
                                 <div id="yorumform" class=" list-group collapseList in media Padding_10 PaddingTop_0" >
                                 	<form role="form">
                                       	  <div class="form-group hidden-xs">
                                         		<div class="col-lg-3 col-md-3 col-sm-4"> Yorum Türü</div>
                                          		<div class="col-lg-2 col-md-2 col-sm-2"><img class="img-responsive img-circle" style="width:100%;" src="images/tema/x.svg" /></div>
                                                <div class="col-lg-2 col-md-2 col-sm-2"><img class="img-responsive img-circle" style="width:100%;" src="images/tema/x.svg" /></div>
                                              	<div class="col-lg-2 col-md-2 col-sm-2"><img class="img-responsive img-circle" style="width:100%;" src="images/tema/x.svg" /></div>
                                                <div class="clearfix"></div>
                                     	  </div>
                                          <div class="form-group visible-xs">
                                            
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
                                          
                                          
                                          <button type="submit" class="btn btn-default">Gönder</button>
                                    </form>
                                 	
                                 </div>
                             </div>

                    
					  </div>
            </div>    
            	<div class="visible-xs col-xs-12 MarginBottom_10">
                    <select class="form-control">
                        <option selected="selected">Benzer Makaleler</option>
                        <option>+ Teşekkür/Tavsiye</option>
                        <option>? Soru</option>
                        <option>! Şikayet</option>
                    </select>
                
                
                </div> 
                <div class="col-lg-3 col-md-3 col-sm-4 hidden-xs PaddingRight_0">
            	<ul class="list-group ">
                  <li class="list-group-item list-group-item-info"><h4 class="list-group-item-heading color1">Benzer Makaleler</h4></li>
                  <li class="list-group-item"><a href="">Makale Başlığı</a></li>
                  <li class="list-group-item"><a href="">Makale Başlığı</a></li>
                  <li class="list-group-item"><a href="">Makale Başlığı</a></li>
                  <li class="list-group-item"><a href="">Makale Başlığı</a></li>
                  <li class="list-group-item"><a href="">Makale Başlığı</a></li>
                  <li class="list-group-item"><a href="">Makale Başlığı</a></li>
                  <li class="list-group-item"><a href="">Makale Başlığı</a></li>
                  <li class="list-group-item"><a href="">Makale Başlığı</a></li>
                  <li class="list-group-item"><a href="">Makale Başlığı</a></li>
                  <li class="list-group-item"><a href="">Makale Başlığı</a></li>
                </ul>
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