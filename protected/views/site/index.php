<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
 <head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Boomates empresa de fidelización de clientes en Colombia">
    <meta name="author" content="Diamob">
    <!-- Slider Revolution -->
    <link rel="stylesheet" href="js/rs-plugin/css/settings.css" type="text/css"/>
    <!-- jQuery UI -->
    <link rel="stylesheet" href="js/jquery-ui-1.10.3/css/smoothness/jquery-ui-1.10.3.custom.min.css" type="text/css"/>
 
        <!-- Modernizr -->
        <script src="js/modernizr.custom.56918.js"></script>    
        <!--Timer-->
        <script type="text/JavaScript">
        redirectTime = "1500";
        redirectURL = "http://www.avianca.com/comprar/home.htm?idioma=ES&pais=CO&CheckPortada=SI";
        function timedRedirect() {
                setTimeout("location.href = redirectURL;",redirectTime);
        }
           
        </script>
        <script type="text/JavaScript">
            
             function play(){
             url = $('iframe').attr('src');
             url = url .replace('?autoplay=1','1');
             $('iframe').attr('src',url);
             $('#url').text(url);
             }
 
 
            function stop(){
            /* simplemente actualizamos la url quitandole el autoplay */
            url = $('iframe').attr('src');
            url = url .replace('?autoplay=1','');
            $('iframe').attr('src',url);
            $('#url').text(url);
            }
            
         </script>
      <!-- Fav and touch icons -->
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/apple-touch/144.png">
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch/114.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch/72.png">
      <link rel="apple-touch-icon-precomposed" href="images/apple-touch/57.png">
      <link rel="shortcut icon" href="images/apple-touch/57.png">
  </head>
    
 <body class="">
    
    <div class="master-wrapper">
     
    <!--  = Slider Revolution =  -->
    <!--  ==========  -->
        <div class="fullwidthbanner-container">
          <div class="fullwidthbanner">
            <ul>

                
                <li data-transition="premium-random" data-slotamount="3">
                <img src="images/Video.jpg" alt="slider img" width="1400" height="378" />
                    <div class="caption lft ltt"
                        data-x="520" 
                        data-y="20"
                        data-speed="1000" 
                        data-start="1000" 
                        data-easing="easeOutBack">
                        <img src="images/iPad.png" alt="ipad" width="350" height="200"/>
                    </div>
                    
                    <div class="caption lft ltt"
                        data-x="670" 
                        data-y="140"
                        data-speed="1000" 
                        data-start="1200" 
                        data-easing="easeOutBack">
                         <a href="#Videoyou" role="button" onclick="play()" data-toggle="modal"><img src="images/Play.png" alt="play" width="70" height="70"/></a>
                    </div>
                  
               </li>
            </ul>
          <div class="tp-bannertimer"></div>
        </div>
        <!--  ==========  -->
        <!--  = Nav Arrows =  -->
        <!--  ==========  -->
        <div id="sliderRevLeft"><i class="icon-chevron-left"></i></div>
        <div id="sliderRevRight"><i class="icon-chevron-right"></i></div>
    </div> <!-- /slider revolution -->

    <!--  ==========  -->
    <!--  = Main container =  -->
    <!--  ==========  -->
        <div class="container">
          <div class="row blocks-spacer-last">
            <div class="span12">
                <!--  ==========  -->
                <!--  = Banners =  -->
                <!--  ==========  -->
                <div class="push-up over-slider blocks-spacer new1">
                    <div class="container">
                        <!--  ==========  -->
                        <!--  = Title =  -->
                        <!--  ==========  -->
                        <div class="row">
                            <div class="span12">
                                <div class="main-titles">
                                    <h2 class="title wtitle"><span class="light">Nuestras</span> Tiendas</h2>
                                    <div class="arrows">
                                         <a href="#" class="icon-chevron-left" id="brandsLeft"></a>
                                         <a href="#" class="icon-chevron-right" id="brandsRight"></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /title -->
                        <!--  ==========  -->
                        <!--  = Logos =  -->
                        <!--  ==========  -->
                        <div class="row">
                            <div class="span12">
                                <div class="brands carouFredSel" data-nav="brands" data-autoplay="true">
                                   <img class="bordemar" src="images/empresas/apple_brand.png" alt=""  />
                                    <img class="bordemar" src="images/empresas/avianca_brand.png" alt=""  />
                                    <img class="bordemar" src="images/empresas/exito_brand.png" alt=""  />
                                    <img class="bordemar" src="images/empresas/groupon_brand.png" alt=""  />
                                    <img class="bordemar" src="images/empresas/dafiti_brand.png" alt=""  />
                                    <img class="bordemar" src="images/empresas/movistar_brand.png" alt=""  />
                                    <img class="bordemar" src="images/empresas/tigo_brand.png" alt=""  />
                                    <img class="bordemar" src="images/empresas/claro_brand.png" alt=""  />
                                    <img class="bordemar" src="images/empresas/zara_brand.png" alt=""  />
                                    <img class="bordemar" src="images/empresas/jumbo_brand.png" alt=""  />
                                    <img class="bordemar" src="images/empresas/agrocampo_brand.png" alt=""  />
                                    <img class="bordemar" src="images/empresas/cinemark_brand.png" alt=""  />
                                    <img class="bordemar" src="images/empresas/homecenter_brand.png" alt=""  />
                                    <img class="bordemar" src="images/empresas/linio_brand.png" alt=""  />
                               </div>
                            </div>
                        </div> <!-- /logos -->
                    </div> <!-- /brands carousel -->
                </div>
            </div>
        </div>
        <!--  ==========  -->       
        <!--  = Most Popular products =  -->
        <!--  ==========  -->
        <div class="most-popular blocks-spacer">
            <div class="container">
                    <div class="row popup-products pluof">
                    <!--  ==========  -->
                    <!--  = Product =  -->
                    <!--  ==========  -->
                    <div class="span3 ">
                        <div class="product">
                            <div class="product-img">
                                <div class="picture">
                                    <img src="images/ofertas/Nino.jpg" alt="" width="540" height="412" />
                                </div>
                            </div>
                            <div class="main-titles no-margin">
                                <h4 class="title" >Ofertas <span class="bold">Día</span></h4>
                            </div>
                            <p class="desc">25.0% Descuento en calzado para niños <br><span class="cashback">¡10.0% Cash Back!</span></p>
                            <p class="center-align stars">
                                <button class="btn btn-info btn-large btn-block">Todas las ofertas</button>
                            </p>
                        </div>
                    </div> <!-- /product -->



                            <!--  ==========  -->
                                    <!--  = Product =  -->
                                    <!--  ==========  -->
                    <div class="span3">
                        <div class="product">
                            <div class="product-img">
                                <div class="picture">
                                    <img src="images/ofertas/Viaje.jpg" alt="" width="540" height="412" />
                                </div>
                            </div>
                            <div class="main-titles no-margin">
                                <h4 class="title">Ofertas <span class="bold">Semana</span></h4>
                            </div>
                            <p class="desc">Bogotá - Santa Marta desde $350.000<br><span class="cashback">¡15.0% Cash Back!</p>
                            <p class="center-align stars">
                                <button class="btn btn-info btn-large btn-block">Todas las ofertas</button>
                            </p> 
                        </div>
                    </div> <!-- /product -->



                            <!--  ==========  -->
                                    <!--  = Product =  -->
                                    <!--  ==========  -->
                    <div class="span3">
                        <div class="product">
                            <div class="product-img">
                                <div class="picture">
                                    <img src="images/ofertas/Diversion.jpg" alt="" width="540" height="412" />
                                </div>
                            </div>
                            <div class="main-titles no-margin">
                                <h4 class="title">Mejores <span class="bold">Cash Back</span></h4>
                            </div>
                            <p class="desc">92.0% Deportes de aventura la Calera <br><span class="cashback">¡8.0% Cash Back!</p>
                            <p class="center-align stars">
                                <button class="btn btn-info btn-large btn-block">Todas las ofertas</button>         
                            </p>
                        </div>
                    </div> <!-- /product -->



                            <!--  ==========  -->
                                    <!--  = Product =  -->
                                    <!--  ==========  -->
                    <div class="span3">
                        <div class="product">
                            <div class="product-img">
                                <div class="picture">
                                    <img src="images/ofertas/TV.jpg" alt="" width="540" height="412" />
                                </div>
                            </div>
                            <div class="main-titles no-margin">
                                <h4 class="title">Recomendados <span class="bold">Boomates</span></h4>
                            </div>
                            <p class="desc">TV led 55' Full HD - 3D desde $3'499.950<br><span class="cashback">¡15.0% Cash Back!</p>
                            <p class="center-align stars">
                                <button class="btn btn-info btn-large btn-block">Todas las ofertas</button>
                            </p>
                        </div>
                    </div> <!-- /product -->
                                </div>
            </div>
        </div> <!-- /most popular -->
        
        <!--  ==========  -->
        <!--  = Banners 1 and 2 =  -->
        <!--  ==========  -->
        <div class="row-fluid">
                	         
            <div class="span6 push-down-20">
                <div class="picture">
                    <a href="images/empresas/avianca_banner.jpg" class="add-prettyphoto"><img class="rounded" src="images/empresas/avianca_banner.jpg" alt="" width="128" height="128"></a>
            </div>
            </div>

            <div class="span6 push-down-20 second">
                <div class="picture">
                    <a href="images/empresas/exito_banner.jpg" class="add-prettyphoto"><img class="rounded second" src="images/empresas/exito_banner.jpg" alt="" width="128" height="128"></a>
            </div>
            </div>

        </div>
    </div> <!-- /container -->
    
    <!--  ==========  -->
    <!--  = Mejores Ofertas =  -->
    <!--  ==========  -->
  <div class="boxed-area blocks-spacer">
        <div class="container">
            <div class="row">
            <div class="span12" >
                <!--  ==========  -->
                <!--  = Title =  -->
                <!--  ==========  -->
            	<div class="main-titles">
            	    <h2 class="title"><span class="light">Mejores</span> Ofertas</h2>
            	    <div class="arrows">
                        <a href="#" class="icon-chevron-left" id="featuredItemsLeft"></a>
                        <a href="#" class="icon-chevron-right" id="featuredItemsRight"></a>
                    </div>
            	</div>
            </div>
            </div>
            <div class="row rowmov">
            <div id="featuredSale" class="new1 new new2">
                <!--  ==========  -->
                <!--  = Carousel = -->
                <!--  ==========  -->
                <div class="carouFredSel" data-autoplay="false" data-nav="featuredItems">
                    <div class="slide">
                        <div class="left-offers newleft">
                                <div class="fixed">
                                    <div class="big-sale row popup-products blocks-spacer">
                                        <!--  ==========  -->
                                        <!--  = Product =  -->
                                        <!--  ==========  -->   
                                        <div class="span3 newav">
                                            <div class="product">
                                                <div class="product-img">
                                                    <div class="picture">
                                                        <img src="images/empresas/avianca_logo_special.jpg" alt=""/>
                                                        <div class="img-overlay "> 
                                                            <a data-toggle="modal" data-dismiss="modal" class="btn more btn-primary" onclick="JavaScript:setTimeout('location.href = redirectURL;',4500);" href="#trackingModal">Cash Back</a>
                                                            <!--<a data-toggle="modal" role="button" href="#trackingModal" onclick="JavaScript:setTimeout('location.href = redirectURL;',2000);" data-dismiss="modal" class="btn more btn-primary">Cash Back</a>-->
                                                            <a href="#" class="btn buy btn-danger">Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="big-sale-text">
                                                    <div class="main-titles no-margin">
                                                        <h5 class="no-margin">Bogotá-Cartagena </h5>
                                                    </div>
                                                    <p class="desc"><span class="cashback">33.0% Cash Back</span><br>Válido hasta el 8 de Agosto de 2014</p>

                                                    <div class="center-align stars">
                                                        <div class="left-viewmore">
                                                            <a href="anunciante.html" class="view-more">Ver más</a>
                                                        </div>
                                                        <div class="right-viewmore">
                                                            <span class="icon-star stars-clr"></span>
                                                            <span class="icon-star stars-clr"></span>
                                                            <span class="icon-star"></span>
                                                            <span class="icon-star"></span>
                                                            <span class="icon-star"></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- /product -->
                                    </div>
                                </div>                            
                        </div>
                        <div class="right-offers topcla">
                            <div class="fixed">
                                <div class="row popup-products blocks-spacer">
                                    <!--  ==========  -->
                                    <!--  = Product =  -->
                                    <!--  ==========  -->   
                                    <div class="span3 classborder">
                                        <div class="horizontal-product">
                                            <div class="left-image">
                                                <div class="product-img">
                                                    <div class="picture">
                                                        <img src="images/empresas/agrocampo_540sq.png" alt=""/>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="right-description">
                                                <div class="img-overlay">
                                                    <a href="#" class="btn more btn-primary">Cash Back</a>
                                                    <a href="#" class="btn buy btn-danger ">Wishlist</a>
                                                </div>
                                                <div class="main-titles no-margin">
                                                    <h5 class="no-margin">Jardinería</h5>
                                                </div>
                                                <p class="desc small"><span class="cashback">15.0% Cash Back</span><br><span class="expire">Válido hasta:<br>10 de Enero de 2013</span></p>
                                                <div class="center-align stars">
                                                    <div class="left-viewmore">
                                                        <a href="#" class="view-more">Ver más</a>
                                                    </div>
                                                    <div class="right-viewmore">
                                                        <span class="icon-star stars-clr"></span>
                                                        <span class="icon-star stars-clr"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                    </div>
                                                        
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /product -->
                                    <!--  ==========  -->
                                    <!--  = Product =  -->
                                    <!--  ==========  -->   
                                    <div class="span3 classborder">
                                        <div class="horizontal-product">
                                            <div class="left-image">
                                                <div class="product-img">
                                                    <div class="picture">
                                                        <img src="images/empresas/claro_540sq.png" alt=""/>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="right-description">
                                                <div class="img-overlay">
                                                    <a href="#" class="btn more btn-primary ">Cash Back</a>
                                                    <a href="#" class="btn buy btn-danger ">Wishlist</a>
                                                </div>
                                                <div class="main-titles no-margin">
                                                    <h5 class="no-margin">Samsung Galaxy</h5>
                                                </div>
                                                <p class="desc small"><span class="cashback">8.0% Cash Back</span><br><span class="expire">Válido hasta:<br>10 de Enero de 2013</span></p>
                                                <div class="center-align stars">
                                                    <div class="left-viewmore">
                                                        <a href="#" class="view-more">Ver más</a>
                                                    </div>
                                                    <div class="right-viewmore">
                                                        <span class="icon-star stars-clr"></span>
                                                        <span class="icon-star stars-clr"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                    </div>
                                                        
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /product -->
                                    <!--  ==========  -->
                                    <!--  = Product =  -->
                                    <!--  ==========  -->   
                                    <div class="span3 classborder derecof">
                                        <div class="horizontal-product">
                                            <div class="left-image">
                                                <div class="product-img">
                                                    <div class="picture">
                                                        <img src="images/empresas/apple_540sq.png" alt=""/>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="right-description">
                                                <div class="img-overlay">
                                                    <a href="#" class="btn more btn-primary ">Cash Back</a>
                                                    <a href="#" class="btn buy btn-danger ">Wishlist</a>
                                                </div>
                                                <div class="main-titles no-margin">
                                                    <h5 class="no-margin">Funciones Domingo</h5>
                                                </div>
                                                <p class="desc small"><span class="cashback">20.0% Cash Back</span><br><span class="expire">Válido hasta:<br>10 de Enero de 2013</span></p>
                                                <div class="center-align stars">
                                                    <div class="left-viewmore">
                                                        <a href="#" class="view-more">Ver más</a>
                                                    </div>
                                                    <div class="right-viewmore">
                                                        <span class="icon-star stars-clr"></span>
                                                        <span class="icon-star stars-clr"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                    </div>
                                                        
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /product -->                                  
                                </div>
                            </div>
                            <div class="fixed">
                                <div class="row popup-products blocks-spacer">
                                    <!--  ==========  -->
                                    <!--  = Product =  -->
                                    <!--  ==========  -->   
                                    <div class="span3 classborder">
                                        <div class="horizontal-product">
                                            <div class="left-image">
                                                <div class="product-img">
                                                    <div class="picture">
                                                        <img src="images/empresas/dafiti_540sq.png" alt=""/>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="right-description">
                                                <div class="img-overlay">
                                                    <a href="#" class="btn more btn-primary ">Cash Back</a>
                                                    <a href="#" class="btn buy btn-danger ">Wishlist</a>
                                                </div>
                                                <div class="main-titles no-margin">
                                                    <h5 class="no-margin">Zapatos Deportivos</h5>
                                                </div>
                                                <p class="desc small"><span class="cashback">23.0% Cash Back</span><br><span class="expire">Válido hasta:<br>10 de Enero de 2013</span></p>
                                                <div class="center-align stars">
                                                    <div class="left-viewmore">
                                                        <a href="#" class="view-more">Ver más</a>
                                                    </div>
                                                    <div class="right-viewmore">
                                                        <span class="icon-star stars-clr"></span>
                                                        <span class="icon-star stars-clr"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                    </div>
                                                        
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /product -->
                                    <!--  ==========  -->
                                    <!--  = Product =  -->
                                    <!--  ==========  -->   
                                    <div class="span3 classborder">
                                        <div class="horizontal-product">
                                            <div class="left-image">
                                                <div class="product-img">
                                                    <div class="picture">
                                                        <img src="images/empresas/tigo_540sq.png" alt=""/>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="right-description">
                                                <div class="img-overlay">
                                                    <a href="#" class="btn more btn-primary ">Cash Back</a>
                                                    <a href="#" class="btn buy btn-danger ">Wishlist</a>
                                                </div>
                                                <div class="main-titles no-margin">
                                                    <h5 class="no-margin">Medellín-Aruba</h5>
                                                </div>
                                                <p class="desc small"><span class="cashback">7.0% Cash Back</span><br><span class="expire">Válido hasta:<br>10 de Enero de 2013</span></p>
                                                <div class="center-align stars">
                                                    <div class="left-viewmore">
                                                        <a href="#" class="view-more">Ver más</a>
                                                    </div>
                                                    <div class="right-viewmore">
                                                        <span class="icon-star stars-clr"></span>
                                                        <span class="icon-star stars-clr"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                    </div>
                                                        
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /product -->
                                    <!--  ==========  -->
                                    <!--  = Product =  -->
                                    <!--  ==========  -->   
                                    <div class="span3 classborder derecof">
                                        <div class="horizontal-product">
                                            <div class="left-image">
                                                <div class="product-img">
                                                    <div class="picture">
                                                        <img src="images/empresas/exito_540sq.png" alt=""/>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="right-description">
                                                <div class="img-overlay">
                                                    <a href="#" class="btn more btn-primary ">Cash Back</a>
                                                    <a href="#" class="btn buy btn-danger ">Wishlist</a>
                                                </div>
                                                <div class="main-titles no-margin">
                                                    <h5 class="no-margin">Pelucas</h5>
                                                </div>
                                                <p class="desc small"><span class="cashback">33.0% Cash Back</span><br><span class="expire">Válido hasta:<br>10 de Enero de 2013</span></p>
                                                <div class="center-align stars">
                                                    <div class="left-viewmore">
                                                        <a href="#" class="view-more">Ver más</a>
                                                    </div>
                                                    <div class="right-viewmore">
                                                        <span class="icon-star stars-clr"></span>
                                                        <span class="icon-star stars-clr"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                    </div>
                                                        
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /product -->                                          
                                </div>
                            </div>        
                            <div class="fixed">
                                <div class="row popup-products blocks-spacer-last">
                                    <!--  ==========  -->
                                    <!--  = Product =  -->
                                    <!--  ==========  -->   
                                    <div class="span3 classborder">
                                        <div class="horizontal-product">
                                            <div class="left-image">
                                                <div class="product-img">
                                                    <div class="picture">
                                                        <img src="images/empresas/homecenter_540sq.png" alt=""/>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="right-description">
                                                <div class="img-overlay">
                                                    <a href="#" class="btn more btn-primary ">Cash Back</a>
                                                    <a href="#" class="btn buy btn-danger ">Wishlist</a>
                                                </div>
                                                <div class="main-titles no-margin">
                                                    <h5 class="no-margin">Llantas 4x4</h5>
                                                </div>
                                                <p class="desc small"><span class="cashback">25.0% Cash Back</span><br><span class="expire">Válido hasta:<br>10 de Enero de 2013</span></p>
                                                <div class="center-align stars">
                                                    <div class="left-viewmore">
                                                        <a href="#" class="view-more">Ver más</a>
                                                    </div>
                                                    <div class="right-viewmore">
                                                        <span class="icon-star stars-clr"></span>
                                                        <span class="icon-star stars-clr"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                    </div>
                                                        
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /product -->
                                    <!--  ==========  -->
                                    <!--  = Product =  -->
                                    <!--  ==========  -->   
                                    <div class="span3 classborder">
                                        <div class="horizontal-product">
                                            <div class="left-image">
                                                <div class="product-img">
                                                    <div class="picture">
                                                        <img src="images/empresas/linio_540sq.png" alt=""/>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="right-description">
                                                <div class="img-overlay">
                                                    <a href="#" class="btn more btn-primary ">Cash Back</a>
                                                    <a href="#" class="btn buy btn-danger ">Wishlist</a>
                                                </div>
                                                <div class="main-titles no-margin">
                                                    <h5 class="no-margin">Computadores</h5>
                                                </div>
                                                <p class="desc small"><span class="cashback">7.0% Cash Back</span><br><span class="expire">Válido hasta:<br>10 de Enero de 2013</span></p>
                                                <div class="center-align stars">
                                                    <div class="left-viewmore">
                                                        <a href="#" class="view-more">Ver más</a>
                                                    </div>
                                                    <div class="right-viewmore">
                                                        <span class="icon-star stars-clr"></span>
                                                        <span class="icon-star stars-clr"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                    </div>
                                                        
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /product -->
                                    <!--  ==========  -->
                                    <!--  = Product =  -->
                                    <!--  ==========  -->   
                                    <div class="span3 classborder derecof">
                                        <div class="horizontal-product">
                                            <div class="left-image">
                                                <div class="product-img">
                                                    <div class="picture">
                                                        <img src="images/empresas/zara_540sq.png" alt=""/>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="right-description">
                                                <div class="img-overlay">
                                                    <a href="#" class="btn more btn-primary ">Cash Back</a>
                                                    <a href="#" class="btn buy btn-danger ">Wishlist</a>
                                                </div>
                                                <div class="main-titles no-margin">
                                                    <h5 class="no-margin">Trajes Hombre</h5>
                                                </div>
                                                <p class="desc small"><span class="cashback">35.0% Cash Back</span><br><span class="expire">Válido hasta:<br>10 de Enero de 2013</span></p>
                                                <div class="center-align stars">
                                                    <div class="left-viewmore">
                                                        <a href="#" class="view-more">Ver más</a>
                                                    </div>
                                                    <div class="right-viewmore">
                                                        <span class="icon-star stars-clr"></span>
                                                        <span class="icon-star stars-clr"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                    </div>
                                                        
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /product -->                                          
                                </div>
                            </div>    
            	        </div>
            	    </div>
                    <div class="slide">
                        <div class="left-offers">
                                <div class="fixed">
                                   <div class="big-sale row popup-products blocks-spacer">
                                        <!--  ==========  -->
                                        <!--  = Product =  -->
                                        <!--  ==========  -->   
                                        <div class="span3 newav">
                                            <div class="product">
                                                <div class="product-img">
                                                    <div class="picture">
                                                        <img src="images/empresas/avianca_logo_special.jpg" alt=""/>
                                                        <div class="img-overlay"> 
                                                            <a data-toggle="modal" data-dismiss="modal" class="btn more btn-primary" onclick="JavaScript:setTimeout('location.href = redirectURL;',4500);" href="#trackingModal">Cash Back</a>
                                                            <!--<a data-toggle="modal" role="button" href="#trackingModal" onclick="JavaScript:setTimeout('location.href = redirectURL;',2000);" data-dismiss="modal" class="btn more btn-primary">Cash Back</a>-->
                                                            <a href="#" class="btn buy btn-danger">Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="big-sale-text">
                                                    <div class="main-titles no-margin">
                                                        <h5 class="no-margin">Bogotá-Cartagena </h5>
                                                    </div>
                                                    <p class="desc"><span class="cashback">33.0% Cash Back</span><br>Válido hasta el 8 de Agosto de 2014</p>

                                                    <div class="center-align stars">
                                                        <div class="left-viewmore">
                                                            <a href="anunciante.html" class="view-more">Ver más</a>
                                                        </div>
                                                        <div class="right-viewmore">
                                                            <span class="icon-star stars-clr"></span>
                                                            <span class="icon-star stars-clr"></span>
                                                            <span class="icon-star"></span>
                                                            <span class="icon-star"></span>
                                                            <span class="icon-star"></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- /product -->
                                    </div>
                                </div>                            
                        </div>
                        <div class="right-offers topcla">
                            <div class="fixed">
                                <div class="row popup-products blocks-spacer">
                                    <!--  ==========  -->
                                    <!--  = Product =  -->
                                    <!--  ==========  -->   
                                    <div class="span3 classborder">
                                        <div class="horizontal-product">
                                            <div class="left-image">
                                                <div class="product-img">
                                                    <div class="picture">
                                                        <img src="images/empresas/agrocampo_540sq.png" alt=""/>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="right-description">
                                                <div class="img-overlay">
                                                    <a href="#" class="btn more btn-primary ">Cash Back</a>
                                                    <a href="#" class="btn buy btn-danger ">Wishlist</a>
                                                </div>
                                                <div class="main-titles no-margin">
                                                    <h5 class="no-margin">Jardinería</h5>
                                                </div>
                                                <p class="desc small"><span class="cashback">15.0% Cash Back</span><br><span class="expire">Válido hasta:<br>10 de Enero de 2013</span></p>
                                                <div class="center-align stars">
                                                    <div class="left-viewmore">
                                                        <a href="#" class="view-more">Ver más</a>
                                                    </div>
                                                    <div class="right-viewmore">
                                                        <span class="icon-star stars-clr"></span>
                                                        <span class="icon-star stars-clr"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                    </div>
                                                        
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /product -->
                                    <!--  ==========  -->
                                    <!--  = Product =  -->
                                    <!--  ==========  -->   
                                    <div class="span3 classborder">
                                        <div class="horizontal-product">
                                            <div class="left-image">
                                                <div class="product-img">
                                                    <div class="picture">
                                                        <img src="images/empresas/claro_540sq.png" alt=""/>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="right-description">
                                                <div class="img-overlay">
                                                    <a href="#" class="btn more btn-primary ">Cash Back</a>
                                                    <a href="#" class="btn buy btn-danger ">Wishlist</a>
                                                </div>
                                                <div class="main-titles no-margin">
                                                    <h5 class="no-margin">Samsung Galaxy</h5>
                                                </div>
                                                <p class="desc small"><span class="cashback">8.0% Cash Back</span><br><span class="expire">Válido hasta:<br>10 de Enero de 2013</span></p>
                                                <div class="center-align stars">
                                                    <div class="left-viewmore">
                                                        <a href="#" class="view-more">Ver más</a>
                                                    </div>
                                                    <div class="right-viewmore">
                                                        <span class="icon-star stars-clr"></span>
                                                        <span class="icon-star stars-clr"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                    </div>
                                                        
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /product -->
                                    <!--  ==========  -->
                                    <!--  = Product =  -->
                                    <!--  ==========  -->   
                                    <div class="span3 classborder derecof">
                                        <div class="horizontal-product">
                                            <div class="left-image">
                                                <div class="product-img">
                                                    <div class="picture">
                                                        <img src="images/empresas/apple_540sq.png" alt=""/>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="right-description">
                                                <div class="img-overlay">
                                                    <a href="#" class="btn more btn-primary ">Cash Back</a>
                                                    <a href="#" class="btn buy btn-danger ">Wishlist</a>
                                                </div>
                                                <div class="main-titles no-margin">
                                                    <h5 class="no-margin">Funciones Domingo</h5>
                                                </div>
                                                <p class="desc small"><span class="cashback">20.0% Cash Back</span><br><span class="expire">Válido hasta:<br>10 de Enero de 2013</span></p>
                                                <div class="center-align stars">
                                                    <div class="left-viewmore">
                                                        <a href="#" class="view-more">Ver más</a>
                                                    </div>
                                                    <div class="right-viewmore">
                                                        <span class="icon-star stars-clr"></span>
                                                        <span class="icon-star stars-clr"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                    </div>
                                                        
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /product -->                                  
                                </div>
                            </div>
                            <div class="fixed">
                                <div class="row popup-products blocks-spacer">
                                    <!--  ==========  -->
                                    <!--  = Product =  -->
                                    <!--  ==========  -->   
                                    <div class="span3 classborder ">
                                        <div class="horizontal-product">
                                            <div class="left-image">
                                                <div class="product-img">
                                                    <div class="picture">
                                                        <img src="images/empresas/dafiti_540sq.png" alt=""/>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="right-description">
                                                <div class="img-overlay">
                                                    <a href="#" class="btn more btn-primary ">Cash Back</a>
                                                    <a href="#" class="btn buy btn-danger ">Wishlist</a>
                                                </div>
                                                <div class="main-titles no-margin">
                                                    <h5 class="no-margin">Zapatos Deportivos</h5>
                                                </div>
                                                <p class="desc small"><span class="cashback">23.0% Cash Back</span><br><span class="expire">Válido hasta:<br>10 de Enero de 2013</span></p>
                                                <div class="center-align stars">
                                                    <div class="left-viewmore">
                                                        <a href="#" class="view-more">Ver más</a>
                                                    </div>
                                                    <div class="right-viewmore">
                                                        <span class="icon-star stars-clr"></span>
                                                        <span class="icon-star stars-clr"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                    </div>
                                                        
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /product -->
                                    <!--  ==========  -->
                                    <!--  = Product =  -->
                                    <!--  ==========  -->   
                                    <div class="span3 classborder ">
                                        <div class="horizontal-product">
                                            <div class="left-image">
                                                <div class="product-img">
                                                    <div class="picture">
                                                        <img src="images/empresas/tigo_540sq.png" alt=""/>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="right-description">
                                                <div class="img-overlay">
                                                    <a href="#" class="btn more btn-primary ">Cash Back</a>
                                                    <a href="#" class="btn buy btn-danger ">Wishlist</a>
                                                </div>
                                                <div class="main-titles no-margin">
                                                    <h5 class="no-margin">Medellín-Aruba</h5>
                                                </div>
                                                <p class="desc small"><span class="cashback">7.0% Cash Back</span><br><span class="expire">Válido hasta:<br>10 de Enero de 2013</span></p>
                                                <div class="center-align stars">
                                                    <div class="left-viewmore">
                                                        <a href="#" class="view-more">Ver más</a>
                                                    </div>
                                                    <div class="right-viewmore">
                                                        <span class="icon-star stars-clr"></span>
                                                        <span class="icon-star stars-clr"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                    </div>
                                                        
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /product -->
                                    <!--  ==========  -->
                                    <!--  = Product =  -->
                                    <!--  ==========  -->   
                                    <div class="span3 classborder derecof">
                                        <div class="horizontal-product">
                                            <div class="left-image">
                                                <div class="product-img">
                                                    <div class="picture">
                                                        <img src="images/empresas/exito_540sq.png" alt=""/>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="right-description">
                                                <div class="img-overlay">
                                                    <a href="#" class="btn more btn-primary ">Cash Back</a>
                                                    <a href="#" class="btn buy btn-danger ">Wishlist</a>
                                                </div>
                                                <div class="main-titles no-margin">
                                                    <h5 class="no-margin">Pelucas</h5>
                                                </div>
                                                <p class="desc small"><span class="cashback">33.0% Cash Back</span><br><span class="expire">Válido hasta:<br>10 de Enero de 2013</span></p>
                                                <div class="center-align stars">
                                                    <div class="left-viewmore">
                                                        <a href="#" class="view-more">Ver más</a>
                                                    </div>
                                                    <div class="right-viewmore">
                                                        <span class="icon-star stars-clr"></span>
                                                        <span class="icon-star stars-clr"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                    </div>
                                                        
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /product -->                                          
                                </div>
                            </div>        
                            <div class="fixed">
                                <div class="row popup-products blocks-spacer">
                                    <!--  ==========  -->
                                    <!--  = Product =  -->
                                    <!--  ==========  -->   
                                    <div class="span3 classborder">
                                        <div class="horizontal-product">
                                            <div class="left-image">
                                                <div class="product-img">
                                                    <div class="picture">
                                                        <img src="images/empresas/homecenter_540sq.png" alt=""/>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="right-description">
                                                <div class="img-overlay">
                                                    <a href="#" class="btn more btn-primary ">Cash Back</a>
                                                    <a href="#" class="btn buy btn-danger ">Wishlist</a>
                                                </div>
                                                <div class="main-titles no-margin">
                                                    <h5 class="no-margin">Llantas 4x4</h5>
                                                </div>
                                                <p class="desc small"><span class="cashback">25.0% Cash Back</span><br><span class="expire">Válido hasta:<br>10 de Enero de 2013</span></p>
                                                <div class="center-align stars">
                                                    <div class="left-viewmore">
                                                        <a href="#" class="view-more">Ver más</a>
                                                    </div>
                                                    <div class="right-viewmore">
                                                        <span class="icon-star stars-clr"></span>
                                                        <span class="icon-star stars-clr"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                    </div>
                                                        
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /product -->
                                    <!--  ==========  -->
                                    <!--  = Product =  -->
                                    <!--  ==========  -->   
                                    <div class="span3 classborder">
                                        <div class="horizontal-product">
                                            <div class="left-image">
                                                <div class="product-img">
                                                    <div class="picture">
                                                        <img src="images/empresas/linio_540sq.png" alt=""/>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="right-description">
                                                <div class="img-overlay">
                                                    <a href="#" class="btn more btn-primary ">Cash Back</a>
                                                    <a href="#" class="btn buy btn-danger ">Wishlist</a>
                                                </div>
                                                <div class="main-titles no-margin">
                                                    <h5 class="no-margin">Computadores</h5>
                                                </div>
                                                <p class="desc small"><span class="cashback">7.0% Cash Back</span><br><span class="expire">Válido hasta:<br>10 de Enero de 2013</span></p>
                                                <div class="center-align stars">
                                                    <div class="left-viewmore">
                                                        <a href="#" class="view-more">Ver más</a>
                                                    </div>
                                                    <div class="right-viewmore">
                                                        <span class="icon-star stars-clr"></span>
                                                        <span class="icon-star stars-clr"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                    </div>
                                                        
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /product -->
                                    <!--  ==========  -->
                                    <!--  = Product =  -->
                                    <!--  ==========  -->   
                                    <div class="span3 classborder derecof">
                                        <div class="horizontal-product">
                                            <div class="left-image">
                                                <div class="product-img">
                                                    <div class="picture">
                                                        <img src="images/empresas/zara_540sq.png" alt=""/>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="right-description">
                                                <div class="img-overlay">
                                                    <a href="#" class="btn more btn-primary">Cash Back</a>
                                                    <a href="#" class="btn buy btn-danger">Wishlist</a>
                                                </div>
                                                <div class="main-titles no-margin">
                                                    <h5 class="no-margin">Trajes Hombre</h5>
                                                </div>
                                                <p class="desc small"><span class="cashback">35.0% Cash Back</span><br><span class="expire">Válido hasta:<br>10 de Enero de 2013</span></p>
                                                <div class="center-align stars">
                                                    <div class="left-viewmore">
                                                        <a href="#" class="view-more">Ver más</a>
                                                    </div>
                                                    <div class="right-viewmore">
                                                        <span class="icon-star stars-clr"></span>
                                                        <span class="icon-star stars-clr"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                    </div>
                                                        
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /product -->                                          
                                </div>
                            </div>    
            	        </div>
            	    </div>
                </div> <!-- /carousel -->
            </div> 
        </div>
        </div>
    </div> <!-- /new products -->
        
    <!--  ==========  -->
    <!--  = Categorìas =  -->
    <!--  ==========  -->
    <div>
        <div class="container category">
            <div class="span12 ">
                <!--  ==========  -->
                <!--  = Title =  -->
                <!--  ==========  -->
            	<div class="main-titles">
            	    <h2 class="title"><span class="light">Categorías</span></h2>
<!--            	    <div class="arrows">
                        <a href="#" class="icon-chevron-left" id="featuredItemsLeft"></a>
                        <a href="#" class="icon-chevron-right" id="featuredItemsRight"></a>
                    </div>-->
            	</div>
            </div>
            <div class='category-container'>
                <div class="category-row shadow">
                    <div id="market" class="category-block-normal">
                        <img id="mercado" src='images/categorias/ropa.png' />
                    </div>
                    <div class="category-block-large">
                        <div><h4>Ropa & Accesorios</h4></div>
                        <div class="category-col-small">
                            <h6>Jeans</h6>
                            <ul>
                                <li>Pilatos</li>
                                <li>Diesel</li>
                                <li>Studio F</li>
                                <li>Levi's</li>
                            </ul>
                        </div>
                        <div class="category-col-small">
                            <h6>Abrigos</h6>
                                <ul>
                                    <li>Zara</li>
                                    <li>Mango</li>
                                    <li>Aldo</li>
                                    <li>Carlos Nieto</li>
                                </ul>
                        </div>
                        <div class="category-col-small">
                            <h6>Vestidos</h6>
                                <ul>
                                    <li>Bershka</li>
                                    <li>Stradivarius</li>
                                    <li>Massimo Dutti</li>
                                    <li>Villa Romana</li>
                                </ul>
                        </div>
                        <div class="category-col-small">
                            <h6>Bolsos</h6>
                                <ul>
                                    <li>Mario Hernández</li>
                                    <li>Coach</li>
                                    <li>MSK</li>
                                    <li>Tous</li>
                                </ul>
                        </div>         
                        <div class="category-col-small">
                            <h6>Zapatos</h6>
                                <ul>
                                    <li>Nora Lozza</li>
                                    <li>Azulu</li>
                                    <li>Domenico</li>
                                    <li>Spring Step</li>
                                </ul>
                        </div> 
                    </div>
                </div>
                <div class="category-row">
                    <div class="category-block-normal first">
                        <div><h4>Turismo</h4></div>
                        <div class="category-col-small">
                            <ul>
                                <li>Tiquetes</li>
                                <li>Hoteles</li>
                                <li>Planes</li>
                                <li>Transporte</li>
                                <li>Reservas</li>
                            </ul>
                        </div>
                        <div class="category-col-extralarge">
                            <img id="turismo" src='images/categorias/turismo.png' />
                        </div>
                    </div>
                    <div class="category-block-normal central">
                        <div><h4>Hogar & Jardinería</h4></div>
                        <div class="category-col-small">
                            <ul>
                                <li>Cocina</li>
                                <li>Decoración</li>
                                <li>Cristalería</li>
                                <li>Floristerías</li>
                                <li>Seguridad</li>
                            </ul>
                        </div>
                        <div class="category-col-extralarge">
                            <img id="sofa" src='images/categorias/casa.png' />
                        </div>
                    </div>
                    <div class="category-block-normal last">
                        <div><h4>Restaurantes</h4></div>
                        <div class="category-col-small">
                            <ul>
                                <li>Usaquén</li>
                                <li>Zona Norte</li>
                                <li>Zona G</li>
                                <li>Zona T</li>
                                <li>Macarena</li>
                            </ul>
                        </div>
                        <div class="category-col-extralarge">
                            <img id="calentao-paisa" src='images/categorias/restaurantes.jpg' />
                        </div>
                    </div>
                </div>
                <div class="category-row">
                     <div class="category-block-normal first">
                        <div><h4>Bebés</h4></div>
                        <div class="category-col-small">
                            <ul>
                                <li>Juguetes</li>
                                <li>Ropa Bebé</li>
                                <li>Seguridad</li>
                                <li>Accesorios</li>
                                <li>Alimentos</li>
                            </ul>
                        </div>
                        <div class="category-col-extralarge">
                            <img id="bebes" src='images/categorias/bebes.png' />
                        </div>
                    </div>
                     <div class="category-block-normal central">
                        <div><h4>Juguetes & Juegos</h4></div>
                        <div class="category-col-large">
                            <ul>
                                <li>Juguetes</li>
                                <li>Videojuegos</li>
                                <li>Juegos de Mesa</li>
                                <li>Juegos de Azar</li>
                                <li>Consolas de Juegos</li>
                            </ul>
                        </div>
                        <div class="category-col-large">
                            <img id="juguetes" src='images/categorias/juguetes.png' />
                        </div>
                    </div>
                    <div class="category-block-normal last">
                        <div><h4>Almacenes de Cadena</h4></div>
                        <div class="category-col-small">
                            <ul>
                                <li>Carnes</li>
                                <li>Verduras</li>
                                <li>Panadería</li>
                                <li>Licores</li>
                                <li>Aseo Hogar</li>
                            </ul>
                        </div>
                        <div class="category-col-extralarge">
                            <img id="trix" src='images/categorias/mercado.png' />
                        </div>
                    </div>
                </div>
                <div class="category-row">
                    <div class="category-block-normal first">
                        <div><h4>Deportes</h4></div>
                        <div class="category-col-small">                            
                            <ul>
                                <li>Fútbol</li>
                                <li>Basket</li>
                                <li>Tennis</li>
                                <li>Ejercicio</li>
                                <li>Entrenamiento</li>
                            </ul>
                        </div>
                        <div class="category-col-extralarge">
                            <img id="deportes" src='images/categorias/deporte.png' />
                        </div>
                    </div>
                     <div class="category-block-normal central">
                        <div><h4>Tecnología & Media</h4></div>
                        <div class="category-col-small">
                            <ul>
                                <li>Cámaras</li>
                                <li>Computadores</li>
                                <li>Portátiles</li>
                                <li>Consolas</li>
                                <li>Videos</li>
                            </ul>
                        </div>
                        <div class="category-col-extralarge">
                            <img id="messi" src='images/categorias/tecnologia.png' />
                        </div>
                    </div>
                    <div class="category-block-normal last">
                        <div><h4>Salud & Belleza</h4></div>
                        <div class="category-col-small">
                            <ul>
                                <li>Nutrición</li>
                                <li>Maquillaje</li>
                                <li>Perfumes</li>
                                <li>Cremas</li>
                                <li>Accesorios</li>
                            </ul>
                        </div>
                        <div class="category-col-extralarge">
                            <img id="belleza" src='images/categorias/salud_belleza.png' />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <!--  ==========  -->
    <!--  = Lastest News =  -->
    <!--  ==========  -->
    <div class="darker-stripe more-space latest-news with-shadows"> 
    	<div class="container">
    	    
    	    <!--  ==========  -->
			<!--  = Title =  -->
			<!--  ==========  -->
    		<div class="row">
    			<div class="span12">
    			    <div class="main-titles center-align">
    			        <h2 class="title">
    			            <span class="clickable icon-chevron-left" id="tweetsLeft"></span> &nbsp;&nbsp;&nbsp;
    			            <span class="light">Anuncios</span> &nbsp;&nbsp;&nbsp;
    			            <span class="clickable icon-chevron-right" id="tweetsRight"></span>
			            </h2>
    			    </div>
    			</div>
    		</div> <!-- /title -->
    		
    		<!--  ==========  -->
			<!--  = News content =  -->
			<!--  ==========  -->
    		<div class="row">
    		    <div class="span12">
    		        <div class="carouFredSel" data-nav="tweets" data-autoplay="false">
    		             
    		                
		                <!--  ==========  -->
						<!--  = Slide =  -->
						<!--  ==========  --> 
                        <div class="slide">
                        	<div class="row">
                        		<div class="span6">
                        		    <div class="news-item">
                                                <img class="news-img" src="images/empresas/avianca_banner.jpg"/>
                        		    </div>
                        		</div>
                        		<div class="span6">
                        		    <div class="news-item">
                                                <img class="second news-img" src="images/empresas/exito_banner.jpg">
                                            </div>
                        		</div>
                        	</div>
                        </div> <!-- /slide -->

                        <div class="slide">
                        	<div class="row">
                        		<div class="span6">
                        		    <div class="news-item">
                                                <img src="images/empresas/exito_banner.jpg"/>
                        		    </div>
                        		</div>
                        		<div class="span6">
                        		    <div class="news-item">
                                                <img src="images/empresas/avianca_banner.jpg"/>
                        		    </div>
                        		</div>
                        	</div>
                        </div> <!-- /slide -->
                         
                    </div>
    		    </div>
    		</div> <!-- /news content -->
    	</div>
    </div> <!-- /latest news -->
   
    <!--  ==========  -->
    <!--  = Modal Windows =  -->
    <!--  ==========  -->
    
    <!--  = Login =  -->
    <div id="loginModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="loginModalLabel"><span class="light">Inicie </span>Sesión</h3> 
        </div>
        <div class="modal-body">
            <div class="bummy bummy-short">
                <img src="images/bummy_small.png" alt="" />
            </div>
            <div class='right-form' >
                <form method="post" action="#">
                    <div class="control-group">
                        <label class="control-label hidden shown-ie8" for="inputEmail">Usuario</label>
                        <div class="controls">
                            <input type="text" class="input-block-level" id="inputEmail" placeholder="Usuario">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label hidden shown-ie8" for="inputPassword">Contraseña</label>
                        <div class="controls">
                            <input type="password" class="input-block-level" id="inputPassword" placeholder="Contraseña">
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <div class="controls">
                            <label class="checkbox">
                                <input type="checkbox">
                                Recordar mi contraseña
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary input-block-level bold higher">
                        INICIAR SESIÓN
                    </button>
                     <p class="center-align push-down-0 olv">
                        <a href="#" data-dismiss="modal">¿Olvidó su contraseña?</a>
                     </p>
                </form>
               
            </div>
        </div>
    </div>
    <!--  = Tracking System =  -->
    <div id="trackingModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="tracking-header">
            
        </div>
        <div class="tracking-shadow"></div>
        <div class="tracking-body">
            <div class="bottom-text">
                <div class="tracking-img">
                    <img class="tracking-inside-img" src="images/tracking/mico_rastreo.png" alt="" width="250" />
                </div>
                <span class="trackingTitle">!LA FORMA MÁS FÁCIL Y SEGURA DE GANAR DINERO!</span>
                <br>
                <span class="trackingMedium">Felicitaciones Arturo,</span>
                <br>
                <span class="trackingMedium">!Estás a punto de ganar 4.0% de Cash Back en Avianca!</span>
                <br>
                <span class="trackingLittle">Boomates Tiquete de Rastreo #1025160012</span>
            </div>
        </div>
    </div>    

     <div id="Videoyou" class="modal hide fade modal-video" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" >
        <div>
            
            
        </div>
        <div id="popupVid" class="modal-body vid">
            <div class="modal-header">
              <button type="button" class="close cruz" onclick="stop()" data-dismiss="modal" aria-hidden="true" >×</button>
              <h3 id="loginModalLabel"><span class="light">¿Cómo funciona </span>Boomates?</h3> 
            </div>
            <iframe data-y="200" src="https://www.youtube.com/embed/9DtBrjZXCuc" frameborder="0" allowFullScreen>
            </iframe>
        </div>
    </div>
    <!--  = Register =  -->
    <div id="registerModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="registerModalLabel"><span class="light">Registro</span> Usuarios</h3>
        </div>
        <div class="modal-body">
              <div class="bummy bummy-tall">
                <img src="images/bummy_small.png" alt="" />
             </div>
            <div class='right-form' >
                <form method="post" action="#">
                    <div class="control-group">
                        <label class="control-label hidden shown-ie8" for="inputEmailRegister">Correo electrónico</label>
                        <div class="controls">
                            <input type="email" class="input-block-level" id="inputEmailRegister" placeholder="Correo electrónico">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label hidden shown-ie8" for="inputPasswordRegister">Contraseña</label>
                        <div class="controls">
                            <input type="password" class="input-block-level" id="inputPasswordRegister" placeholder="Contraseña">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label hidden shown-ie8" for="inputPassword">Referido</label>
                        <div class="controls">
                            <input type="password" class="input-block-level" id="inputPassword" placeholder="Referido">
                        </div>
                    </div>  
                    <button type="submit" class="btn btn-primary input-block-level bold higher">
                        Registrarse
                    </button>
                </form>
                <p class="center-align push-down-0 ter">
                    <a data-toggle="modal" role="button" href="#loginModal" data-dismiss="modal">Términos y Condiciones</a>
                </p>
                <p class="center-align push-down-0 yaes">
                    <a data-toggle="modal" role="button" href="#loginModal" data-dismiss="modal">¿Ya está registrado?</a>
                </p>
              
            </div>
        </div>
    </div>
    
     
    </div> <!-- end of master-wrapper -->
    


    <!--  ==========  -->
    <!--  = JavaScript =  -->
    <!--  ==========  -->
    
    <!--  = FB =  -->
    
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=126780447403102";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
    
    <!--  = jQuery - CDN with local fallback =  -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">
    if (typeof jQuery == 'undefined') {
        document.write('<script src="js/jquery.min.js"><\/script>');
    }
    </script>
    
    <!--  = _ =  -->
    <script src="js/underscore/underscore-min.js" type="text/javascript"></script>
    
    <!--  = Bootstrap =  -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    
    <!--  = Slider Revolution =  -->
    <script src="js/rs-plugin/pluginsources/jquery.themepunch.plugins.min.js" type="text/javascript"></script>
    <script src="js/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
    
    <!--  = CarouFredSel =  -->
    <script src="js/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script>
    
    <!--  = jQuery UI =  -->
    <script src="js/jquery-ui-1.10.3/js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui-1.10.3/touch-fix.min.js" type="text/javascript"></script>
    
    <!--  = Isotope =  -->
    <script src="js/isotope/jquery.isotope.min.js" type="text/javascript"></script>
    
    <!--  = Tour =  -->
    <script src="js/bootstrap-tour/build/js/bootstrap-tour.min.js" type="text/javascript"></script>
    
    <!--  = PrettyPhoto =  -->
    <script src="js/prettyphoto/js/jquery.prettyPhoto.js" type="text/javascript"></script>
    
    <!--  = Google Maps API =  -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="js/goMap/js/jquery.gomap-1.3.2.min.js"></script>
    
    <!--  = Custom JS =  -->
    <script src="js/custom.js" type="text/javascript"></script>
  </body>