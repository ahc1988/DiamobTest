    <head>
        <meta charset="utf-8">
        <title>Webmarket HTML Template - All Products</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="ProteusThemes">

        <!--  Google Fonts  -->
        <link href='http://fonts.googleapis.com/css?family=Pacifico|Open+Sans:400,700,400italic,700italic&amp;subset=latin,latin-ext,greek' rel='stylesheet' type='text/css'>

        <!-- Twitter Bootstrap -->
        <link href="stylesheets/bootstrap.css" rel="stylesheet">
        <link href="stylesheets/responsive.css" rel="stylesheet">
        <!-- Slider Revolution -->
        <link rel="stylesheet" href="js/rs-plugin/css/settings.css" type="text/css"/>
        <!-- jQuery UI -->
        <link rel="stylesheet" href="js/jquery-ui-1.10.3/css/smoothness/jquery-ui-1.10.3.custom.min.css" type="text/css"/>
        <!-- PrettyPhoto -->
        <link rel="stylesheet" href="js/prettyphoto/css/prettyPhoto.css" type="text/css"/>
        <!-- main styles -->

        <link href="stylesheets/main.css" rel="stylesheet">



        <!-- Modernizr -->
        <script src="js/modernizr.custom.56918.js"></script>    

        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/apple-touch/144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch/114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch/72.png">
        <link rel="apple-touch-icon-precomposed" href="images/apple-touch/57.png">
        <link rel="shortcut icon" href="images/apple-touch/57.png">
    </head>

<?php
/* @var $this SubcategoriasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Subcategoriases',
);

$this->menu=array(
	array('label'=>'Create Subcategorias', 'url'=>array('create')),
	array('label'=>'Manage Subcategorias', 'url'=>array('admin')),
);
?>

<h1>Subcategorias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>


   <!--  ==========  -->
            <!--  = Breadcrumbs =  -->
            <!--  ==========  -->
            <div class="darker-stripe">
                <div class="container">
                    <div class="row">
                        <div class="span12">
                            <ul class="breadcrumb">
                                <li>
                                    <a href="index.html">Boomates</a>
                                </li>
                                <li><span class="icon-chevron-right"></span></li>
                                <li>
                                    <a href="shop.html">Shop</a>
                                </li>
                                <li><span class="icon-chevron-right"></span></li>
<!--                                <li>
                                    <a href="shop.html">Default Layout</a>
                                </li>-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="push-up blocks-spacer">
                    <div class="row">

                        <!--  ==========  -->
                        <!--  = Sidebar =  -->
                        <!--  ==========  -->
                        <aside class="span3 left-sidebar" id="tourStep1">
                            <div class="sidebar-item sidebar-filters" id="sidebarFilters">

                                <!--  ==========  -->
                                <!--  = Sidebar Title =  -->
                                <!--  ==========  -->
                                <div class="underlined">
                                    <h3><span class="light">Busca</span> tus ofertas</h3>
                                </div>


                                <!--  ==========  -->
                                <!--  = Cash Back slider =  -->
                                <!--  ==========  -->
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" href="#filterPrices">Cash Back <b class="caret"></b></a>
                                    </div>
                                    <div id="filterPrices" class="accordion-body in collapse">
                                        <div class="accordion-inner with-slider">
                                            <div class="jqueryui-slider-container">
                                                <div id="pricesRange"></div>
                                            </div>
                                            <input type="text" data-initial="432" class="max-val pull-right" disabled />
                                            <input type="text" data-initial="99" class="min-val" disabled />
                                        </div>
                                    </div>
                                </div> <!-- /prices slider -->
                                <!--  ==========  -->
                                <!--  = Categorías =  -->
                                <!--  ==========  -->
                                <div class="accordion-group" id="tourStep2">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" href="#filterOne">Categorías <b class="caret"></b></a>
                                    </div>
                                    <div id="filterOne" class="accordion-body collapse in">
                                        <div class="accordion-inner">
                                            <a href="#" data-target=".filter--online" class="selectable"><i class="box"></i> Online</a>
                                            <a href="#" data-target=".filter--ropaaccesorios" class="selectable"><i class="box"></i> Ropa &amp; Accesorios</a>
                                            <a href="#" data-target=".filter--turismo" class="selectable"><i class="box"></i> Turismo</a>
                                            <a href="#" data-target=".filter--tecnologiamedios" class="selectable"><i class="box"></i> Tecnología &amp; Medios</a>
                                            <a href="#" data-target=".filter--restaurantes" class="selectable"><i class="box"></i> Restaurantes</a>
                                            <a href="#" data-target=".filter--saludbelleza" class="selectable"><i class="box"></i> Salud &amp; Belleza</a>
                                        </div>
                                    </div>
                                </div> <!-- /categorías -->
                                
                                <!--  ==========  -->
                                <!--  = Productos =  -->
                                <!--  ==========  -->
                                 <div class="accordion-group" id="tourStep3">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" href="#filterSix">Productos <b class="caret"></b></a>
                                    </div>
                                    <div id="filterSix" class="accordion-body collapse in">
                                        <div class="accordion-inner">
                                            <a href="#" data-target=".filter--ropaaccesoriosp" class="selectable"><i class="box"></i> Ropa &amp; Accesorios</a>
                                            <a href="#" data-target=".filter--tecnologia" class="selectable"><i class="box"></i>Tecnología</a>
                                            <a href="#" data-target=".filter--hogarjardineria" class="selectable"><i class="box"></i> Hogar &amp; Jardinería</a>
                                            <a href="#" data-target=".filter--tiquetes" class="selectable"><i class="box"></i> Tiquetes</a>
                                            <a href="#" data-target=".filter--saludbellezap" class="selectable"><i class="box"></i> Salud &amp; Belleza</a>
                                            <a href="#" data-target=".filter--almacenes" class="selectable"><i class="box"></i> Salud &amp; Belleza</a>
                                        </div>
                                    </div>
                                </div> <!-- /productos -->
                                
                                
                                <!--  ==========  -->
                                <!--  = Remaining Days slider =  -->
                                <!--  ==========  -->
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" href="#filterPrices">Días a vencimiento <b class="caret"></b></a>
                                    </div>
                                    <div id="filterPrices" class="accordion-body in collapse">
                                        <div class="accordion-inner with-slider">
                                            <div class="jqueryui-sliderDays-container">
                                                <div id="daysRemainingRange"></div>
                                            </div>
                                            <input type="text" data-initial="90" class="max-val pull-right" disabled />
                                            <input type="text" data-initial="1" class="min-val" disabled />
                                        </div>
                                    </div>
                                </div> <!-- /prices slider -->



                                <!--  ==========  -->
                                <!--  = Size filter =  -->
                                <!--  ==========  -->
                           
                                <a href="#" class="remove-filter" id="removeFilters"><span class="icon-ban-circle"></span> Remove All Filters</a>

                            </div>
                        </aside> <!-- /sidebar -->

                        <!--  ==========  -->
                        <!--  = Main content =  -->
                        <!--  ==========  -->
                        <section class="span9">

                            <!--  ==========  -->
                            <!--  = Title =  -->
                            <!--  ==========  -->
                            <div class="underlined push-down-20">
                                <div class="row">
                                    <div class="span5">
                                        <h3><span class="light"></span> Ofertas</h3>
                                    </div>
                                    <div class="span4">
                                        <div class="form-inline sorting-by" id="tourStep5">
                                            <label for="isotopeSorting" class="black-clr">Ordenar:</label>
                                            <select id="isotopeSorting" class="span3">
                                                <option value='{"sortBy":"price", "sortAscending":"true"}'>Por Cash Back (Menor a Mayor) &uarr;</option>
                                                <option value='{"sortBy":"price", "sortAscending":"false"}'>Por Cash Back (Mayor a Menor) &darr;</option>
                                                <option value='{"sortBy":"name", "sortAscending":"true"}'>Por Nombre (Menor a Mayor) &uarr;</option>
                                                <option value='{"sortBy":"name", "sortAscending":"false"}'>Por Nombre (Mayor a Menor) &darr;</option>
                                                <option value='{"sortBy":"popularity", "sortAscending":"true"}'>Por Popularidad (Menor a Mayor) &uarr;</option>
                                                <option value='{"sortBy":"popularity", "sortAscending":"false"}'>Por Popularidad (Mayor a Menor) &darr;</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- /title -->

                            <!--  ==========  -->
                            <!--  = Products =  -->
                            <!--  ==========  -->
                            <div class="row popup-products">
                                <div id="isotopeContainer" class="isotope-container">             	    
                                    <!--  ==========  -->
                                    <!--  = Single Product =  -->
                                    <!--  ==========  -->
                                    <!--<div class="span3 filter--blazers" data-price="1567" data-popularity="2" data-size="xs|s|m|xl" data-color="pink" data-brand="adidas">-->
                                    <div class="span3 filter--hogarjardineria" data-price="15" data-popularity="2" data-size="xs|s|m|xl" data-color="pink" data-brand="adidas">
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
                                                    <a href="#" class="btn buy btn-danger">Wishlist</a>
                                                </div>
                                                <div class="main-titles no-margin">
                                                    <h5 class="no-margin">Jardinería</h5>
                                                </div>
                                                <p class="desc"><span class="cashback">15.0% Cash Back</span><br><span class="expire">Válido hasta:<br>10 de Enero de 2013</span></p>
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
                                    <div class="span3 filter--tecnologiamedios" data-price="8" data-popularity="2" data-size="xs|s|m|xl" data-color="pink" data-brand="adidas">
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
                                                    <a href="#" class="btn more btn-primary">Cash Back</a>
                                                    <a href="#" class="btn buy btn-danger">Wishlist</a>
                                                </div>
                                                <div class="main-titles no-margin">
                                                    <h5 class="no-margin">Samsung Galaxy</h5>
                                                </div>
                                                <p class="desc"><span class="cashback">8.0% Cash Back</span><br><span class="expire">Válido hasta:<br>10 de Enero de 2013</span></p>
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
                                    <div class="span3 filter--tecnologiamedios" data-price="20" data-popularity="2" data-size="xs|s|m|xl" data-color="pink" data-brand="adidas">
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
                                                    <a href="#" class="btn more btn-primary">Cash Back</a>
                                                    <a href="#" class="btn buy btn-danger">Wishlist</a>
                                                </div>
                                                <div class="main-titles no-margin">
                                                    <h5 class="no-margin">Funciones Domingo</h5>
                                                </div>
                                                <p class="desc"><span class="cashback">20.0% Cash Back</span><br><span class="expire">Válido hasta:<br>10 de Enero de 2013</span></p>
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
                        
                                                     
                                    <div class="span3 filter--blazers" data-price="23" data-popularity="2" data-size="xs|s|m|xl" data-color="pink" data-brand="adidas">
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
                                                    <a href="#" class="btn more btn-primary">Cash Back</a>
                                                    <a href="#" class="btn buy btn-danger">Wishlist</a>
                                                </div>
                                                <div class="main-titles no-margin">
                                                    <h5 class="no-margin">Zapatos Deportivos</h5>
                                                </div>
                                                <p class="desc"><span class="cashback">23.0% Cash Back</span><br><span class="expire">Válido hasta:<br>10 de Enero de 2013</span></p>
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
                                    <div class="span3 filter--tecnologiamedios" data-price="7" data-popularity="2" data-size="xs|s|m|xl" data-color="pink" data-brand="adidas">
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
                                                    <a href="#" class="btn more btn-primary">Cash Back</a>
                                                    <a href="#" class="btn buy btn-danger">Wishlist</a>
                                                </div>
                                                <div class="main-titles no-margin">
                                                    <h5 class="no-margin">Medellín-Aruba</h5>
                                                </div>
                                                <p class="desc"><span class="cashback">7.0% Cash Back</span><br><span class="expire">Válido hasta:<br>10 de Enero de 2013</span></p>
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
                                    <div class="span3 filter--blazers" data-price="33" data-popularity="2" data-size="xs|s|m|xl" data-color="pink" data-brand="adidas">
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
                                                    <a href="#" class="btn more btn-primary">Cash Back</a>
                                                    <a href="#" class="btn buy btn-danger">Wishlist</a>
                                                </div>
                                                <div class="main-titles no-margin">
                                                    <h5 class="no-margin">Pelucas</h5>
                                                </div>
                                                <p class="desc"><span class="cashback">33.0% Cash Back</span><br><span class="expire">Válido hasta:<br>10 de Enero de 2013</span></p>
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
                             
                                    <div class="span3 filter--blazers" data-price="25" data-popularity="2" data-size="xs|s|m|xl" data-color="pink" data-brand="adidas">
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
                                                    <a href="#" class="btn more btn-primary">Cash Back</a>
                                                    <a href="#" class="btn buy btn-danger">Wishlist</a>
                                                </div>
                                                <div class="main-titles no-margin">
                                                    <h5 class="no-margin">Llantas 4x4</h5>
                                                </div>
                                                <p class="desc"><span class="cashback">25.0% Cash Back</span><br><span class="expire">Válido hasta:<br>10 de Enero de 2013</span></p>
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
                                    <div class="span3 filter--blazers" data-price="7" data-popularity="2" data-size="xs|s|m|xl" data-color="pink" data-brand="adidas">
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
                                                    <a href="#" class="btn more btn-primary">Cash Back</a>
                                                    <a href="#" class="btn buy btn-danger">Wishlist</a>
                                                </div>
                                                <div class="main-titles no-margin">
                                                    <h5 class="no-margin">Computadores</h5>
                                                </div>
                                                <p class="desc"><span class="cashback">7.0% Cash Back</span><br><span class="expire">Válido hasta:<br>10 de Enero de 2013</span></p>
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
                                    <div class="span3 filter--blazers" data-price="35" data-popularity="2" data-size="xs|s|m|xl" data-color="pink" data-brand="adidas">
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
                                                <p class="desc"><span class="cashback">35.0% Cash Back</span><br><span class="expire">Válido hasta:<br>10 de Enero de 2013</span></p>
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
                            <hr />
                        </section> <!-- /main content -->
                    </div>
                </div>
            </div> <!-- /container -->
            
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