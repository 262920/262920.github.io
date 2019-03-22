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
    <title>Tasarımcı Web || Makaleler</title>
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
                	 <li><a href="makaleler.php">Makale</a></li>
 					 <li><a href="makaleler-ana_kategori.php">Makale Ana Kategori</a></li>
                     <li class="active FontSize_16  "><a href="makaleler-alt_kategori.php" title="">Makale Ana Kategori</a></li>
				</ol>
            </div>
    	</div>
    </div>
    <!-- Jumbotron sayfa titke bitti --> 
 
 	<div class="container">
    	<div class="col-lg-12 BgWhiteOzel Padding_10 MarginBottom_10" >
            
        
                
                
                
                	<?php for($i=1; $i<=7; $i++) { ?>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                		<div class=" panel panel-default BorderHover">
                    	<div class="panel-heading">
                        	<h3 class="panel-title">
                            	<a href="makale-detay.php" title="">Makale Başlığı <?php  echo $i ?></a>
                            	<span class=" hidden-xs pull-right MakaleEkleyenBilgi"><a href="">23.07.2018</a> tarihinde <a href="">Yunus Er</a> ekledi</span>
                            </h3>
                     	</div>
                        <div class=" FontSize_13 panel-body">
    						<a class=" img-thumbnail col-lg-4 col-md-4 col-sm-12 hidden-xs pull-right PaddingRight_0" href="makale-detay.php" title="">
                            	<img class="img-responsive"   src="images/Makaleler/resim1.jpg" />
                            </a>
                            The most basic list group is simply an unordered list with list items, 
                            and the proper classes. Build upon it with the options that follow, 
                            or your own CSS as needed. 
                            The most basic list group is simply an unordered list with list items, 
                            and the proper classes. Build upon it with the options that follow, 
                            or your own CSS as needed.
                            The most basic list group is simply an unordered list with list items, 
                            and the proper classes. Build upon it with the options that follow, 
                            or your own CSS as needed.
                            
 						</div> 
                        <div class="panel-footer">
                        	<ol class=" hidden-xs col-lg-9 col-md-9 col-sm-8 breadcrumb MarginBottom_0 Padding_0">
                              <li><a href="#">PHP Dersleri</a></li>
                              <li><a href="#">PHP</a></li>				
                            </ol>
                            <a class=" col-lg-3 col-md-3 col-sm-4 pull-right text-right" href="makale-detay.php" title=""><em>devamını oku..</em></a>
                        	<div class="clearfix"></div>
                        </div>
                       
                        
                    </div>
				</div>					
                    <?php } ?>
                    
                    <div class="col-lg-12 Padding_0 Margin_0">
                    	<ul class=" MarginBottom_10  Margin_0 pagination pull-right">
                        	<li><a href="" title="">İlk</a></li>
                            <li><a href="" title="">&laquo;</a></li>
                            
                            <?php 
								$y=1;
								while($y<=10)
								{
									if($y==1)
									{
										echo '<li class="active"><a href="" title="">'.$y.' </a></li>';
									}
									else
									{
										echo '<li><a href="" title="">'.$y.' </a></li>';
									}
									
									$y++;
								}
							
							?>
                            
                            <li><a href="" title="">&raquo;</a></li>
                            <li><a href="" title="">Son</a></li>
                        
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