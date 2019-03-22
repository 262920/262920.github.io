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
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"> </script>
    <script type="text/javascript" src="js/bootstrap.js"> </script>
    <script type="text/javascript" src="js/jquery.contenthover.js"> </script>
    <!-- [if 1t IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.js"></script>
    <![endif]-->
    
    <title>Tasarımcı Web</title>
  
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
                <li class="active"> <a href="index.php" title="" > Anasayfa </a> </li>
                <li> <a href="hakkimizda.php" title=""> Hakkımızda </a> </li>
                <li class="dropdown"> 
                
                <a href="#" title="" class="dropdown-toggle" data-toggle='dropdown'> Dersler
                	<span class="caret"></span>
                </a>
                	<ul class="dropdown-menu navbar-inverse Acilir_Menu">
                    	<li> <a href="makaleler.php" title="">Makaleler</a> </li>
                        <li> <a href="videolar.php" title=""> Videolar </a> </li>
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


	<!-- Carousel alanımız başladı (Yani Slider) -->
    <div class="carousel slide"  id="MySlide">
        	<ol class="carousel-indicators">
            	<li class="active" data-target="#MySlide" data-slide-to="0"></li>
                <li data-target="#MySlide" data-slide-to="1"></li>
                <li data-target="#MySlide" data-slide-to="2"></li>
                <li data-target="#MySlide" data-slide-to="3"></li>
            </ol>

            
            <div class="carousel-inner">
            	<div class="item active">
                	<img src="images/slide/resim1.jpg" alt="" title="" longdesc=""/>
                    <div class="carousel-caption">
                    	<h2>Bootstrap ile Web Sitesi Yapıyoruz 1</h2>
                        <p>Bu Dersimizde slider yapmayı öğrendik. Ders Sonunda sliderımız kullanıma hazır oldu.</p>
                    </div>
                </div>
                <div class="item">
                	<img src="images/slide/resim2.jpg" alt="" title="" longdesc="" />
                    <div class="carousel-caption">
                    	<h2>Bootstrap ile Web Sitesi Yapıyoruz 2</h2>
                        <p>Bu Dersimizde slider yapmayı öğrendik. Ders Sonunda sliderımız kullanıma hazır oldu.</p>
                    </div>
                </div>
                <div class="item">
                	<img src="images/slide/resim3.jpg" alt="" title="" longdesc="" />
                    <div class="carousel-caption">
                    	<h2>Bootstrap ile Web Sitesi Yapıyoruz 3</h2>
                        <p>Bu Dersimizde slider yapmayı öğrendik. Ders Sonunda sliderımız kullanıma hazır oldu.</p>
                    </div>
                </div>
                <div class="item">
                	<img src="images/slide/resim4.jpg" alt="" title="" longdesc="" />
                    <div class="carousel-caption">
                    	<h2>Bootstrap ile Web Sitesi Yapıyoruz 4</h2>
                        <p>Bu Dersimizde slider yapmayı öğrendik. Ders Sonunda sliderımız kullanıma hazır oldu.</p>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#MySlide" data-slide="prev">
            	<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
            <a class="right carousel-control" href="#MySlide" data-slide="next">
            	<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
			               
		</div>  
	<!-- 	Carousel alanımız (Yani Slider) bitti -->
     
     
	<!-- Grid Video Resimler (Izgara bölümü Başladı) -->
    <div class="container">
    </br>
        <div class="row">
        
        	<!-- Slide Bar (Liste tipi) Başladı -->
        	<div class="col-lg-3 col-md-3 col-sm-4">
            	<div class="list-group">
                	<a href="" class="list-group-item">Php <span class="badge">15</span></a>
                    <a href="" class="list-group-item">MySql <span class="badge">15</span></a>
                    <a href="" class="list-group-item active">Bootstrap <span class="badge">15</span></a>
                    <a href="" class="list-group-item">Jquery <span class="badge">15</span></a>
                    <a href="" class="list-group-item">HTML 5 <span class="badge">15</span></a>
                    <a href="" class="list-group-item">CSS <span class="badge">15</span></a>
                    <a href="" class="list-group-item">CSS 3 <span class="badge">15</span></a>
                    <a href="" class="list-group-item">ASP.NET <span class="badge">15</span></a>
                    <a href="" class="list-group-item">C# <span class="badge">15</span></a>
                    <a href="" class="list-group-item">Sql <span class="badge">15</span></a>
                </div>
            
            </div>
            
            <!-- Slide Bar (Liste tipi) Bitti -->
            
            <div class="col-lg-9 col-md-9 col-sm-8 hidden-xs">
            
                <?php 
					for($v=0;$v<=8;$v++) { ?>
					<div class="col-lg-3 col-md-3 col-sm-6 AnasayfaVideoListDiv">
                    	
                    	<a href="videolar-detay.php">
                        	<img class="img-responsive" src="images/Video/resim4.jpg" title="" alt="" longdesc=	""/>
                        </a>
                        <h4><a href="videolar-detay.php">PHP include işlemi</a></h4>
                    </div>
						
					
				
				<?php  }?>
            
            
        	</div>    
            
            
        </div>    
    
    </div>
    <!-- Grid Video Resimler(Izgara bölümü Bitti) -->
    
    
    <!-- Tab pane Makale bölümü başladı -->
	<div class="container">
    	<div class="row MargiTop-10">
        	<div class="col-lg-3 col-md-3 col-sm-4">
                <div class="list-group nav-tabs">
                     <a class="list-group-item"  href="#home" data-toggle="tab">Home</a> <!-- Burada belirlenen bağlantılarla aşağıdaki id ler aynı olduğunda eşleştirme yaparak o bölüm açılıyor-->
                     <a class="list-group-item" href="#profile" data-toggle="tab">Profile</a>
                     <a class="list-group-item" href="#messages" data-toggle="tab">Messages</a>
                     <a class="list-group-item" href="#settings" data-toggle="tab">Settings</a>	
                </div>
			</div>
            <div class="col-lg-9 col-md-9 col-sm-8">
                <div class="tab-content">
                    <div class="AnasayfaTab tab-pane fade in active" id="home">
                    	<div>
                            <h3><a href="" title="" class="text-success">Bootstrap ile Web sitesi</a> <span class="pull-right MakaleEkleyenBilgi"><a href="">23.07.2018</a> tarihinde <a href="">Yunus Er</a> Tarafından eklendi</span> </h3>
                            <p>
                            	<a href="#" class="col-lg-3 col-md-3 col-sm-4 AnasafyaMakaleLink hidden-xs" >
                                	<img class="img-thumbnail img-responsive" src="images/Video/resim3.jpg">
                                </a>
                                   Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown 
                                   aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan 
                                   helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, 
                                   qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis 
                                   cardigan american apparel, butcher voluptate nisi qui.Aliquip placeat salvia cillum iphone. 
                                   Seitan aliquip quiscardigan american apparel, butcher voluptate nisi qui.				
                            </p>
                        </div>
                        <hr style="margin:0;">
                        
                        <div>
                            <h3><a href="" title="" class="text-success">Bootstrap ile Web sitesi</a> <span class="pull-right MakaleEkleyenBilgi"><a href="">23.07.2018</a> tarihinde <a href="">Yunus Er</a> Tarafından eklendi</span> </h3>
                            <p>
                            	<a href="#" class="col-lg-3 col-md-3 col-sm-4 AnasafyaMakaleLink hidden-xs" >
                                	<img class="img-thumbnail img-responsive" src="images/Video/resim3.jpg">
                                </a>
                                   Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown 
                                   aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan 
                                   helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, 
                                   qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis 
                                   cardigan american apparel, butcher voluptate nisi qui.Aliquip placeat salvia cillum iphone. 
                                   Seitan aliquip quiscardigan american apparel, butcher voluptate nisi qui.				
                            </p>
                        </div>
                        <hr style="margin:0;">
                        
                        <div>
                            <h3><a href="" title="" class="text-success">Bootstrap ile Web sitesi</a> <span class="pull-right MakaleEkleyenBilgi"><a href="">23.07.2018</a> tarihinde <a href="">Yunus Er</a> Tarafından eklendi</span> </h3>
                            <p>
                            	<a href="#" class="col-lg-3 col-md-3 col-sm-4 AnasafyaMakaleLink hidden-xs" >
                                	<img class="img-thumbnail img-responsive" src="images/Video/resim3.jpg">
                                </a>
                                   Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown 
                                   aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan 
                                   helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, 
                                   qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis 
                                   cardigan american apparel, butcher voluptate nisi qui.Aliquip placeat salvia cillum iphone. 
                                   Seitan aliquip quiscardigan american apparel, butcher voluptate nisi qui.				
                            </p>
                        </div>
                        <hr style="margin:0;">
                       
                    
                    </div>
                    <div class=" AnasayfaTab tab-pane fade" id="profile">
                    	<div>
                            <h3><a href="" title="" class="text-success">Bootstrap ile Web sitesi</a> <span class="pull-right MakaleEkleyenBilgi"><a href="">23.07.2018</a> tarihinde <a href="">Yunus Er</a> Tarafından eklendi</span> </h3>
                            <p>
                            	<a href="#" class="col-lg-3 col-md-3 col-sm-4 AnasafyaMakaleLink hidden-xs" >
                                	<img class="img-thumbnail img-responsive" src="images/Video/resim3.jpg">
                                </a>
                                   Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown 
                                   aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan 
                                   helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, 
                                   qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis 
                                   cardigan american apparel, butcher voluptate nisi qui.Aliquip placeat salvia cillum iphone. 
                                   Seitan aliquip quiscardigan american apparel, butcher voluptate nisi qui.				
                            </p>
                        </div>
                        <hr style="margin:0;">
                        
                        <div>
                            <h3><a href="" title="" class="text-success">Bootstrap ile Web sitesi</a> <span class="pull-right MakaleEkleyenBilgi"><a href="">23.07.2018</a> tarihinde <a href="">Yunus Er</a> Tarafından eklendi</span> </h3>
                            <p>
                            	<a href="#" class="col-lg-3 col-md-3 col-sm-4 AnasafyaMakaleLink hidden-xs" >
                                	<img class="img-thumbnail img-responsive" src="images/Video/resim3.jpg">
                                </a>
                                   Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown 
                                   aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan 
                                   helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, 
                                   qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis 
                                   cardigan american apparel, butcher voluptate nisi qui.Aliquip placeat salvia cillum iphone. 
                                   Seitan aliquip quiscardigan american apparel, butcher voluptate nisi qui.				
                            </p>
                        </div>
                        <hr style="margin:0;">
                        
                        <div>
                            <h3><a href="" title="" class="text-success">Bootstrap ile Web sitesi</a> <span class="pull-right MakaleEkleyenBilgi"><a href="">23.07.2018</a> tarihinde <a href="">Yunus Er</a> Tarafından eklendi</span> </h3>
                            <p>
                            	<a href="#" class="col-lg-3 col-md-3 col-sm-4 AnasafyaMakaleLink hidden-xs" >
                                	<img class="img-thumbnail img-responsive" src="images/Video/resim3.jpg">
                                </a>
                                   Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown 
                                   aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan 
                                   helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, 
                                   qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis 
                                   cardigan american apparel, butcher voluptate nisi qui.Aliquip placeat salvia cillum iphone. 
                                   Seitan aliquip quiscardigan american apparel, butcher voluptate nisi qui.				
                            </p>
                        </div>
                        <hr style="margin:0;">
                    </div>
                    <div class=" AnasayfaTab tab-pane fade" id="messages">
                    	<div>
                            <h3><a href="" title="" class="text-success">Bootstrap ile Web sitesi</a> <span class="pull-right MakaleEkleyenBilgi"><a href="">23.07.2018</a> tarihinde <a href="">Yunus Er</a> Tarafından eklendi</span> </h3>
                            <p>
                            	<a href="#" class="col-lg-3 col-md-3 col-sm-4 AnasafyaMakaleLink hidden-xs" >
                                	<img class="img-thumbnail img-responsive" src="images/Video/resim3.jpg">
                                </a>
                                   Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown 
                                   aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan 
                                   helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, 
                                   qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis 
                                   cardigan american apparel, butcher voluptate nisi qui.Aliquip placeat salvia cillum iphone. 
                                   Seitan aliquip quiscardigan american apparel, butcher voluptate nisi qui.				
                            </p>
                        </div>
                        <hr style="margin:0;">
                        
                        <div>
                            <h3><a href="" title="" class="text-success">Bootstrap ile Web sitesi</a> <span class="pull-right MakaleEkleyenBilgi"><a href="">23.07.2018</a> tarihinde <a href="">Yunus Er</a> Tarafından eklendi</span> </h3>
                            <p>
                            	<a href="#" class="col-lg-3 col-md-3 col-sm-4 AnasafyaMakaleLink hidden-xs" >
                                	<img class="img-thumbnail img-responsive" src="images/Video/resim3.jpg">
                                </a>
                                   Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown 
                                   aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan 
                                   helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, 
                                   qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis 
                                   cardigan american apparel, butcher voluptate nisi qui.Aliquip placeat salvia cillum iphone. 
                                   Seitan aliquip quiscardigan american apparel, butcher voluptate nisi qui.				
                            </p>
                        </div>
                        <hr style="margin:0;">
                        
                        <div>
                            <h3><a href="" title="" class="text-success">Bootstrap ile Web sitesi</a> <span class="pull-right MakaleEkleyenBilgi"><a href="">23.07.2018</a> tarihinde <a href="">Yunus Er</a> Tarafından eklendi</span> </h3>
                            <p>
                            	<a href="#" class="col-lg-3 col-md-3 col-sm-4 AnasafyaMakaleLink hidden-xs" >
                                	<img class="img-thumbnail img-responsive" src="images/Video/resim3.jpg">
                                </a>
                                   Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown 
                                   aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan 
                                   helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, 
                                   qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis 
                                   cardigan american apparel, butcher voluptate nisi qui.Aliquip placeat salvia cillum iphone. 
                                   Seitan aliquip quiscardigan american apparel, butcher voluptate nisi qui.				
                            </p>
                        </div>
                        <hr style="margin:0;">
                    </div>
                    <div class=" AnasayfaTab tab-pane fade" id="settings">
                    	<div>
                            <h3><a href="" title="" class="text-success">Bootstrap ile Web sitesi</a> <span class="pull-right MakaleEkleyenBilgi"><a href="">23.07.2018</a> tarihinde <a href="">Yunus Er</a> Tarafından eklendi</span> </h3>
                            <p>
                            	<a href="#" class="col-lg-3 col-md-3 col-sm-4 AnasafyaMakaleLink hidden-xs" >
                                	<img class="img-thumbnail img-responsive" src="images/Video/resim3.jpg">
                                </a>
                                   Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown 
                                   aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan 
                                   helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, 
                                   qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis 
                                   cardigan american apparel, butcher voluptate nisi qui.Aliquip placeat salvia cillum iphone. 
                                   Seitan aliquip quiscardigan american apparel, butcher voluptate nisi qui.				
                            </p>
                        </div>
                        <hr style="margin:0;">
                        
                        <div>
                            <h3><a href="" title="" class="text-success">Bootstrap ile Web sitesi</a> <span class="pull-right MakaleEkleyenBilgi"><a href="">23.07.2018</a> tarihinde <a href="">Yunus Er</a> Tarafından eklendi</span> </h3>
                            <p>
                            	<a href="#" class="col-lg-3 col-md-3 col-sm-4 AnasafyaMakaleLink hidden-xs" >
                                	<img class="img-thumbnail img-responsive" src="images/Video/resim3.jpg">
                                </a>
                                   Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown 
                                   aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan 
                                   helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, 
                                   qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis 
                                   cardigan american apparel, butcher voluptate nisi qui.Aliquip placeat salvia cillum iphone. 
                                   Seitan aliquip quiscardigan american apparel, butcher voluptate nisi qui.				
                            </p>
                        </div>
                        <hr style="margin:0;">
                        
                        <div>
                            <h3><a href="" title="" class="text-success">Bootstrap ile Web sitesi</a> <span class="pull-right MakaleEkleyenBilgi"><a href="">23.07.2018</a> tarihinde <a href="">Yunus Er</a> Tarafından eklendi</span> </h3>
                            <p>
                            	<a href="#" class="col-lg-3 col-md-3 col-sm-4 AnasafyaMakaleLink hidden-xs" >
                                	<img class="img-thumbnail img-responsive" src="images/Video/resim3.jpg">
                                </a>
                                   Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown 
                                   aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan 
                                   helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, 
                                   qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis 
                                   cardigan american apparel, butcher voluptate nisi qui.Aliquip placeat salvia cillum iphone. 
                                   Seitan aliquip quiscardigan american apparel, butcher voluptate nisi qui.				
                            </p>
                        </div>
                        <hr style="margin:0;">
                    </div>
                </div>
        	</div>
        </div>
    </div>
	<!-- tab-pane (makale bölümü bitti)-->
    
    
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