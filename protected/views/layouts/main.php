<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link href='http://fonts.googleapis.com/css?family=Pacifico|Open+Sans:400,700,400italic,700italic&amp;subset=latin,latin-ext,greek' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/stylesheets/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/stylesheets/responsive.css" />
        
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <!--<title>Boomates - Prototipo</title>-->
        <!-- jQuery UI -->
        <link rel="stylesheet" href="../../../js/jquery-ui-1.10.3/css/smoothness/jquery-ui-1.10.3.custom.min.css" type="text/css"/>

        <!-- main styles -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/stylesheets/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/stylesheets/tracking.css" />
           <!-- Modernizr -->
        <script src="../../../js/modernizr.custom.56918.js"></script>    
        <!--Timer-->
        <script type="text/JavaScript">
        redirectTime = "1500";
        redirectURL = "http://www.avianca.com/comprar/home.htm?idioma=ES&pais=CO&CheckPortada=SI";
        function timedRedirect() {
                setTimeout("location.href = redirectURL;",redirectTime);
        }
           
        </script>
   
</head>

  
  <body class="">
    
    <div class="master-wrapper">


        <header id="header">
        <div class="container">
            <div class="row">
                
                <!--  ==========  -->
                <!--  = Logo =  -->
                <!--  ==========  -->
                <div class="span7">
                    <a class="brand" href="index.php"/>
                        <img src="images/logo_simple.png" alt="Webmarket Logo" width="150"/> 
                    </a>
                </div>
                <!--  /Logo =  -->
                
                <!--  ==========  -->
                <!--  = User  buttons=  -->
                <!--  ==========  -->
                <div class="span5">
                    <div class="topmost-line">
                        <div class="lang-currency">
                        </div>
                    </div>
                    <div class="top-right">

                        <div class="register">
                            <a href="#loginModal" role="button" data-toggle="modal" class="btn more btn-info">Login</a>
                            <a href="#registerModal" role="button" data-toggle="modal" class="btn more btn-info">Registro</a>
                        </div>
                    </div>
                </div> 
                <!-- /User  buttons -->
                
            </div>
        </div>
    </header>    
        
                <!--  ==========  -->
                <!--  = Main Menu =  -->
                <!--  ==========  -->
    <div class="navbar navbar-static-top" id="stickyNavbar">
      <div class="navbar-inner">
        <div class="container">
          <div class="row">
            <div class="span9">
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>

                <div class="nav-collapse collapse">
                  <ul class="nav" id="mainNavigation">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle">PRODUCTO<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="menu-title menu-title-purple"><span>Producto</span><a href="#">Ver todos</a></li>
                            <li class="category-col">  
                                <ul>
                                    <li>
                                        <a href="shop_1.html">Ropa y accesorios</a>
                                        <ul>
                                            <li>Zara</li> 
                                            <li>Nora Lozza</li>
                                            <li>Adidas</li>
                                            <li>Otros</li>
                                        </ul>                                
                                    </li>
                                     <li class="last-row">
                                        <a href="shop_1.html">Tiquetes</a>
                                        <ul>
                                            <li>Avianca</li> 
                                            <li>Lan</li>
                                            <li>Aviatur</li>
                                            <li>Otros</li>                                           
                                        </ul>                                
                                    </li>
                              </ul>
                         </li>
                         <li class="category-col">  
                                <ul>                                    
                                     <li>
                                        <a href="shop_1.html">Tecnología</a>
                                        <ul>
                                            <li>Apple</li> 
                                            <li>Ktronix</li>
                                            <li>Movistar</li>    
                                            <li>Otros</li>
                                        </ul>                                
                                    </li>
                                    <li class="last-row">
                                        <a href="shop_1.html">Salud y Belleza</a>
                                        <ul>
                                            <li>Fedco</li> 
                                            <li>Falabella</li>
                                            <li>La Riviera</li>  
                                            <li>Otros</li>
                                        </ul>                                
                                    </li>
                              </ul>
                            </li>    
                            <li class="category-col">  
                                <ul>                                    
                                     <li>
                                        <a href="shop_1.html">Hogar y jardinerìa</a>
                                        <ul>
                                            <li>Homecenter</li> 
                                            <li>Cachivaches</li>
                                            <li>Agrocampo</li>     
                                            <li>Otros</li> 
                                        </ul>                                
                                    </li>
                                    <li class="last-row">
                                        <a href="shop_1.html">Almacenes</a>
                                        <ul>
                                            <li>Éxito</li> 
                                            <li>Falabella</li>
                                            <li>Alkosto</li>  
                                            <li>Otros</li>
                                        </ul>                                
                                    </li>
                              </ul>
                            </li>  
                        <li class="category-col col_last">  
                                <ul>    
                                    <li class="featured"><a href="#">Tiendas Destacadas</a></li>
                                     <li>
                                         <a href="#"><img class="backcol" src="images/empresas/exito_logo_menu.jpg"/></a>                 
                                    </li>
                                    <li>
                                         <a href="#"><img class="backcol" src="images/empresas/apple_logo_menu.jpg"/></a>                  
                                    </li>
                                    <li>
                                         <a href="#"><img class="backcol" src="images/empresas/claro_logo_menu.jpg"/></a>                  
                                    </li>
                                
                              </ul>
                            </li>       
                            
                            
                        </ul>
                      </li>
                      <li class="dropdown">
                        <a href="index.php?r=empresa/index" class="dropdown-toggle">TIENDAS<b class="caret"></b> </a>                       
                        <ul class="dropdown-menu">
                            <li class="menu-title menu-title-blue"><span>Tiendas</span><a href="#">Ver todos</a></li>
                            <li class="category-col">  
                                <ul>
                                    <li>
                                        <a href="shop_1.html">Zara</a>
                                        <ul>
                                            <li>Abrigos <br/><span>15.0% Cash Back</span></li> 
                                            <li>Vestidos <br/><span>10.0% Cash Back</span></li>
                                        </ul>                                
                                    </li>
                                     <li class="last-row">
                                        <a href="shop_1.html">Avianca</a>
                                        <ul>
                                            <li>Bogotá-Cartagena<br/> <span>15.0% Cash Back</span></li> 
                                            <li>Medellín-Cali <br/><span>10.0% Cash Back</span></li>
                                        </ul>                                
                                    </li>
                              </ul>
                         </li>
                         <li class="category-col">  
                                <ul>                                    
                                     <li>
                                        <a href="shop_1.html">KTronix</a>
                                        <ul>
                                            <li>Tv led 45'' <br/><span>20.0% Cash Back</span></li> 
                                            <li>iPods <br/><span>15.0% Cash Back</span></li>
                                        </ul>                                
                                    </li>
                                    <li class="last-row">
                                        <a href="shop_1.html">Fedco</a>
                                        <ul>
                                            <li>Cremas Cuerpo <br/><span>15.0% Cash Back</span></li> 
                                            <li>Reductor <br/><span>10.0% Cash Back</span></li>
                                        </ul>                                
                                    </li>
                              </ul>
                            </li>    
                            <li class="category-col">  
                                <ul>                                    
                                     <li>
                                        <a href="shop_1.html">Cachivaches</a>
                                        <ul>
                                            <li>Cristaleria <br/><span>8.0% Cash Back</span></li> 
                                            <li>Decoración <br/><span>5.0% Cash Back</span></li>
                                        </ul>                                
                                    </li>
                                    <li class="last-row">
                                        <a href="shop_1.html">Éxito</a>
                                        <ul>
                                            <li>Mercado <br/><span>15.0% Cash Back</span></li> 
                                            <li>Tecnología <br/><span>10.0% Cash Back</span></li>
                                        </ul>                                
                                    </li>
                              </ul>
                            </li>  
                        <li class="category-col col_last">  
                                <ul>    
                                    <li class="featured"><a href="#">Tiendas Destacadas</a></li>
                                     <li>
                                         <a href="#"><img class="backcol" src="images/empresas/exito_logo_menu.jpg"/></a>                 
                                    </li>
                                    <li>
                                         <a href="#"><img class="backcol" src="images/empresas/apple_logo_menu.jpg"/></a>                  
                                    </li>
                                    <li>
                                         <a href="#"><img class="backcol" src="images/empresas/claro_logo_menu.jpg"/></a>                  
                                    </li>
                                
                              </ul>
                            </li>       
                            
                            
                        </ul>
                    </li>
                    
                    <li class="dropdown">
                        <a href="blog_1.html" class="dropdown-toggle">ONLINE<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="menu-title menu-title-green"><span>Online</span><a href="#">Ver todos</a></li>
                            <li class="category-col">  
                                <ul>
                                    <li>
                                        <a href="shop_1.html">Groupon</a>
                                        <ul>
                                            <li>Restaurantes <br/><span>15.0% Cash Back</span></li> 
                                            <li>Estética <br/><span>20.0% Cash Back</span></li>
                                        </ul>                                
                                    </li>
                                     <li class="last-row">
                                        <a href="shop_1.html">Couponatic</a>
                                        <ul>
                                            <li>Zapatos <br/><span>10.0% Cash Back</span></li> 
                                            <li>Ropa <br/><span>5.0% Cash Back</span></li>
                                        </ul>                                
                                    </li>
                              </ul>
                         </li>
                         <li class="category-col">  
                                <ul>                                    
                                     <li>
                                        <a href="shop_1.html">Linio</a>
                                        <ul>
                                            <li>Juguetes <br/><span>10.0% Cash Back</span></li> 
                                            <li>Ropa <br/><span>20.0% Cash Back</span></li>
                                        </ul>                                
                                    </li>
                                    <li class="last-row">
                                        <a href="shop_1.html">Cuponidad</a>
                                        <ul>
                                            <li>Zapatos <br/><span>5.0% Cash Back</span></li> 
                                            <li>Accesorios <br/><span>4 .0% Cash Back</span></li>
                                        </ul>                                
                                    </li>
                              </ul>
                            </li>    
                            <li class="category-col">  
                                <ul>                                    
                                     <li>
                                        <a href="shop_1.html">Tu Boleta</a>
                                        <ul>
                                            <li>Estereo Picnic <br/><span>10.0% Cash Back</span></li> 
                                            <li>The Mills <br/><span>5.0% Cash Back</span></li>
                                        </ul>                                
                                    </li>
                                    <li class="last-row">
                                        <a href="shop_1.html">Cinemark</a>
                                        <ul>
                                            <li>Gravity <br/><span>10.0% Cash Back</span></li> 
                                            <li>Runner Runner <br/><span>5.0% Cash Back</span></li>
                                        </ul>                                
                                    </li>
                              </ul>
                            </li>  
                        <li class="category-col col_last">  
                                <ul>    
                                    <li class="featured"><a href="#">Tiendas Destacadas</a></li>
                                     <li>
                                         <a href="#"><img class="backcol" src="images/empresas/exito_logo_menu.jpg"/></a>                 
                                    </li>
                                    <li>
                                         <a href="#"><img class="backcol" src="images/empresas/apple_logo_menu.jpg"/></a>                  
                                    </li>
                                    <li>
                                         <a href="#"><img class="backcol" src="images/empresas/claro_logo_menu.jpg"/></a>                  
                                    </li>
                                
                              </ul>
                            </li>       
                            
                            
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="index.php?r=categoria" class="dropdown-toggle">Categorías<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="menu-title menu-title-orange"><span>Categorías</span><a href="#">Ver todos</a></li>
                            <li class="category-col">  
                                <ul>
                                    <li>
                                        <a href="shop_1.html">Online</a>
                                        <ul>
                                            <li>Linio</li> 
                                            <li>Dafiti</li>
                                            <li>Groupon</li>
                                            <li>Lets Bonus</li>
                                        </ul>                                
                                    </li>
                                     <li class="last-row">
                                        <a href="shop_1.html">Ropa y accesorios</a>
                                        <ul>
                                            <li>Zara</li> 
                                            <li>Pilatos</li>
                                            <li>Azulu</li>
                                            <li>Otros</li>
                                        </ul>                                
                                    </li>
                                    
                              </ul>
                         </li>
                         <li class="category-col">  
                                <ul>
                                    <li>
                                        <a href="shop_1.html">Turismo</a>
                                        <ul>
                                            <li>Avianca</li> 
                                            <li>Aviatur</li>
                                            <li>Despegar</li>   
                                            <li>Otros</li>
                                        </ul>                                
                                    </li>
                                    <li class="last-row">
                                        <a href="shop_1.html">Tecnología y medios</a>
                                        <ul>
                                            <li>Entertainment Store</li> 
                                            <li>Tigo</li>
                                            <li>Directv</li>      
                                            <li>Otros</li>
                                        </ul>                                
                                    </li>                                 
                              </ul>
                            </li>    
                            <li class="category-col">  
                                <ul>    
                                   <li>
                                        <a href="shop_1.html">Restaurantes</a>
                                        <ul>
                                            <li>Cascabel</li> 
                                            <li>Myryamcami</li>
                                            <li>Picanha</li>
                                            <li>Otros</li>     
                                        </ul>                                
                                    </li>
                                    <li class="last-row">
                                        <a href="shop_1.html">Salud y Belleza</a>
                                        <ul>
                                            <li>La Riviera</li> 
                                            <li>Fedco</li>
                                            <li>Marlon Becerra</li>   
                                            <li>Otros</li>
                                        </ul>                                
                                    </li>  
 
                              </ul>
                            </li>  
                            <li class="category-col col_last">  
                                <ul>    
                                    <li class="featured"><a href="#">Tiendas Destacadas</a></li>
                                     <li>
                                         <a href="#"><img class="backcol" src="images/empresas/exito_logo_menu.jpg"/></a>                 
                                    </li>
                                    <li>
                                         <a href="#"><img class="backcol" src="images/empresas/apple_logo_menu.jpg"/></a>                  
                                    </li>
                                    <li>
                                         <a href="#"><img class="backcol" src="images/empresas/claro_logo_menu.jpg"/></a>                  
                                    </li>
                              </ul>
                            </li>       
                            
                            
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="about-us.html" class="dropdown-toggle">MÁS<b class="caret"></b></a>
                        <ul class="dropdown-menu short">
                            <li class="menu-title menu-title-yellow"><span>Más</span><a href="#">Ver todos</a></li>
                            <li class="category-col third">  
                                <ul>
                                    <li>
                                        <a href="blog_1.html">Acerca de Boomates</a>
                                        <ul>
                                            <li>¿Quiénes somos?</li> 
                                            <li>Misión</li>
                                            <li>Visión</li>
                                        </ul>                                
                                    </li>
                                     <li class="last-row">
                                        <a href="blog_1.html">Servicio al cliente</a>
                                        <ul>
                                            <li>Online</li> 
                                            <li>Mail</li>
                                            <li>Telefónico</li>
                                        </ul>                                
                                    </li>
                              </ul>
                         </li>
                         <li class="category-col third">  
                                <ul>                                    
                                     <li>
                                        <a href="blog_1.html">Trabaja con nosotros</a>
                                        <ul>
                                            <li>Requisitos</li> 
                                            <li>Contacto</li>
                                            <li>Pide una cita</li>      
                                        </ul>  
                                    </li>
                                    <li class="last-row">
                                        <a href="blog_1.html">Prensa</a>
                                        <ul>
                                            <li>¿Cómo funciona Boomates?</li> 
                                            <li>Comercial Promo 1</li>
                                            <li>Prensa</li>   
                                            <li>Otros</li>
                                        </ul>                                
                                    </li>      

                              </ul>
                            </li>    
                            <li class="category-col third">  
                                <ul>                                    
                                    <li>
                                        <a href="shop_1.html">Afiliados</a>
                                        <ul>
                                            <li>Nuestros afiliados</li> 
                                            <li>Quiero ser afiliado Boomates</li>
                                            <li>Ventajas</li>      
                                        </ul>                                
                                    </li>
                              </ul>
                            </li>  
                        </ul>
                    </li>
                    
                     
                  </ul>
                  
                  <!--  ==========  -->
                  <!--  = Search form =  -->
                  <!--  ==========  -->
                  <form class="navbar-form pull-right" action="#" method="get">
                      <button type="submit"><span class="icon-search"></span></button>
                      <input type="text" class="span1" name="search" id="navSearchInput">
                  </form>
                </div>
                <!-- /.nav-collapse -->
                
            </div>
            
            <!--  ==========  -->
            <!--  = Cart =  -->
            <!--  ==========  -->
            <div class="span3">
                <div class="cart-container" id="cartContainer">
                    <div class="cart">
                        <p class="items">Usuario <span class="dark-clr">(3)</span></p>
                        <p class="dark-clr hidden-tablet">COP 120.000</p>
                            <a href="user.html">
                                <!-- <span class="icon icons-cart"></span> -->
                                <img src="images/default_profile.png" width="28"/>
                            </a>
                    </div>
                    <div class="open-panel">
                         
                        <div class="item-in-cart clearfix">
                            <div class="image">
                                <img src="images/empresas/apple_logo.jpg" width="124" height="124" alt="cart item" />
                            </div>
                            <div class="desc">
                                <strong><a href="product.html">Computadores Macbook</a></strong>
                                <span class="light-clr qty">
                                    Vence: Octubre 31 de 2013
                                    &nbsp;
                                    <a href="#" class="icon-remove-sign" title="Remove Item"></a>
                                </span>
                            </div>
                            <div class="price">
                                <strong>10.0%</strong>
                            </div>
                        </div>
                         
                        <div class="item-in-cart clearfix">
                            <div class="image">
                                <img src="images/empresas/avianca_logo.jpg" width="124" height="124" alt="cart item" />
                            </div>
                            <div class="desc">
                                <strong><a href="product.html">Tiquetes a Medellín y Montería</a></strong>
                                <span class="light-clr qty">
                                    Vence: Diciembre 10 de 2013
                                    &nbsp;
                                    <a href="#" class="icon-remove-sign" title="Remove Item"></a>
                                </span>
                            </div>
                            <div class="price">
                                <strong>8.0%</strong>
                            </div>
                        </div>
                         
                        <div class="item-in-cart clearfix">
                            <div class="image">
                                <img src="images/empresas/exito_logo.jpg" width="124" height="124" alt="cart item" />
                            </div>
                            <div class="desc">
                                <strong><a href="product.html">Productos de aseo para el hogar</a></strong>
                                <span class="light-clr qty">
                                    Vence: Enero 15 de 2014
                                    &nbsp;
                                    <a href="#" class="icon-remove-sign" title="Remove Item"></a>
                                </span>
                            </div>
                            <div class="price">
                                <strong>12.0%</strong>
                            </div>
                        </div> 
                         
                        <div class="summary">
                            <div class="line">
                                <div class="row-fluid">
                                    <div class="span6"><span class="light">Cash Back</span> Pagado:</div>
                                    <div class="span6 align-right">COP 75.000</div>
                                </div>
                            </div>
                            <div class="line">
                                <div class="row-fluid">
                                    <div class="span6"><span class="light">Cash Back</span> Pendiente:</div>
                                    <div class="span6 align-right">COP 55.000</div>
                                </div>
                            </div>
                            <div class="line">
                                <div class="row-fluid">
                                    <div class="span6"><span class="light">Cash Back</span> Total:</div>
                                    <div class="span6 align-right size-16">COP 120.000</div>
                                </div>
                            </div>
                        </div>
                        <div class="proceed">
                            <a href="user.html" class="btn btn-danger pull-right bold higher">MI PERFIL <i class="icon-user"></i></a>
                            <small>Políticas de uso de Boomates. <a href="#">Más Información</a></small>
                        </div>
                    </div>
                </div>
            </div> 
            <!-- /cart -->
          </div>
        </div>
      </div>
    </div> 
    <!-- /main menu -->
    <!--  ==========  -->
     
 <div class="navbar navbar-static-top" id="mainmenu">
   
            <div class="container">
             <div class="row">
                <div class="span9">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
//				  array('label'=>'Boletin', 'url'=>array('/boletin')),
//                                array('label'=>'Cashback', 'url'=>array('/cashback')),
                                array('label'=>'Consumidor', 'url'=>array('/consumidor')),
                                array('label'=>'Subcategoria', 'url'=>array('/subcategorias')),
                                array('label'=>'Suscripcion', 'url'=>array('/suscripcion')),
                                array('label'=>'TrackingTicket', 'url'=>array('/trackingTicket')),
                                array('label'=>'Oferta', 'url'=>array('/oferta')),
//				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
//				array('label'=>'Contact', 'url'=>array('/site/contact')),
                                array('label'=>'Admin', 'url'=>array('/site/page', 'view'=>'adminpage'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
//                        'submenuHtmlOptions' => array(
//                                'class' => 'dropdown-menu',
//                )
		)); ?>
                    </div>
              
                </div>
               </div>
	</div><!-- mainmenu2 -->
        
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

    <!--  ==========  -->
    <!--  = Footer =  -->
    <!--  ==========  -->
    <footer> 
        <!--  ==========  -->
        <!--  = Bottom Footer =  -->
        <!--  ==========  -->
        <div class="foot-last">
            <a href="#" id="toTheTop">
                <span class="icon-chevron-up"></span>
            </a>
            <div class="container black-clr bold-clr">
                <span class="light">&copy;Copyright 2013.</span> CashBack Co
                &nbsp;<span class="gray-clr">|</span>&nbsp;<a href="#"><span class="light">Página</span> Inicio</a>
                &nbsp;<span class="gray-clr">|</span>&nbsp;<a href="#"><span class="light">Términos</span> Condiciones</a>
                &nbsp;<span class="gray-clr">|</span>&nbsp;<a href="#"><span class="light">Políticas</span> Privacidad</a>
                &nbsp;<span class="gray-clr">|</span>&nbsp;<a href="#"><span class="light">Sobre</span> Boomates</a> 
                <div class="pull-right"><span class="light">Powered by </span><a href="http://diamob.co">diamob</a></div>
            </div>
        </div> <!-- /bottom footer -->
    </footer> <!-- /footer -->

</div><!-- page -->
	

</body>
</html>
