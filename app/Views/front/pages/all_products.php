<!doctype html>
<html>

<!-- Mirrored from www.nicolethemes.com/sapphire-html/category_menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Dec 2020 08:08:24 GMT -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= base_url()?>/front-assets/img/logo.png">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/front-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/front-assets/css/bootstrap-select.css">
	<link rel='stylesheet' type='text/css' href="<?= base_url() ?>/front-assets/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/front-assets/css/camera.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/front-assets/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Montserrat:200,300,400,600,700' rel='stylesheet' type='text/css'/>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:200,300,400,600,700' rel='stylesheet' type='text/css'/>
	<title><?= $title; ?></title>
</head>
<body>
<div class="page-container">
<!-- Start Header -->
    <div class="header">
			<nav class="navbar container">
			  <div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				  <span class="sr-only">Toggle navigation</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
				<a href="<?= base_url('/front') ?>" class="navbar-brand">
					<img src="<?= base_url()?>/front-assets/img/logo.png" alt="Sapphire">Sapphire
				</a>
			  </div>
                 <div class="navbar-collapse collapse navbar-right">
					<ul class="nav navbar-nav">
                      <li><a href="<?= base_url('/front') ?>">Home</a></li>
                      <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Pages <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li class="dropdown-header">sliders</li>
                          <li><a href="nivo-slider.html">Nivo slider</a></li>
                          <li><a href="flexslider.html" class="ajax_right">Flexslider</a></li>
                          <li><a href="index.html" class="ajax_right">Camera</a></li>
						  <li class="divider"></li>
                          <li class="dropdown-header">ecommerce</li>
                          <li><a href="category.html">Category page</a></li>
                          <li><a href="category_menu.html">Category page left menu</a></li>
                          <li><a href="product.html" class="ajax_right">Product page</a></li>
                          <li><a href="cart.html" class="ajax_right">Cart</a></li>
                          <li><a href="checkout.html" class="ajax_right">Checkout</a></li>
						  <li class="divider"></li>
						  <li class="dropdown-submenu">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">Blog</a>
							  <ul class="dropdown-menu">                          
								  <li><a href="blog.html" class="ajax_right">Blog</a></li>
								  <li><a href="blog-post.html" class="ajax_right">Blog post</a></li>
							  </ul>
							 </li>
                        </ul>
                      </li>
                      <li class="active"><a href="<?= base_url('/front/product/')?>">Our Products</a></li>
                      <li><a href="contact.html" class="ajax_right">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-right cart">
                      <li class="dropdown">
					<a href="cart.html" class="dropdown-toggle" data-toggle="dropdown"><span>5</span></a>
					<div class="cart-info dropdown-menu">
						<table class="table">
							<thead>
							</thead>
							<tbody>
								<tr>
									<td class="image"><img alt="IMAGE" class="img-responsive" src="<?= base_url()?>/front-assets/products/dress33.jpg"></td>
									<td class="name"><a href="project.html">Black Dress</a></td>
									<td class="quantity">x&nbsp;3</td>
									<td class="total">$130.00</td>
									<td class="remove"><img src="<?= base_url()?>/front-assets/image/remove-small.png" alt="Remove" title="Remove"></td>											
								</tr>
								<tr>
									<td class="image"><img alt="IMAGE" class="img-responsive" src="<?= base_url()?>/front-assets/products/dress11.jpg"></td>
									<td class="name"><a href="project.html">Blue Dress</a></td>
									<td class="quantity">x&nbsp;3</td>
									<td class="total">$230.00</td>
									<td class="remove"><img src="<?= base_url()?>/front-assets/image/remove-small.png" alt="Remove" title="Remove"></td>											
								</tr>
							</tbody>									
						</table>
						<div class="cart-total">
						  <table>
							 <tbody>
								<tr>
								  <td><b>Sub-Total:</b></td>
								  <td>$400.00</td>
								</tr>
								<tr>
								  <td><b>Total:</b></td>
								  <td>$400.00</td>
								</tr>
							</tbody>
						  </table>
						  <div class="checkout"><a href="cart.html" class="ajax_right">View Cart</a> | <a href="checkout.html" class="ajax_right">Checkout</a></div>
						</div>
					</div> 
			      </li>
			     </ul>
                    <form action="" class="navbar-form navbar-search navbar-right" method="get" role="search" autocomplete="off">
		      			<div class="input-group"> 
							<input type="text" name="search" placeholder="Search" class="search-query col-lg-6"><button type="submit" class="btn btn-default icon-search"></button> 
						</div>
                    </form>
                  </div>
			</nav>		
	</div>
<!-- End Header -->
    <div class="container">
		<div class="row">
            <div class="col-md-3 left-menu">
                    <div class="sidebar">
                        <h3>Tanaman Hias</h3>
                        <ul>
                            <li class="active"><a href="category.html">Bunga</a></li>
                            <li><a href="category.html">Tanaman Outdoor</a></li>
                            <li><a href="category.html">Tanaman Herbal</a></li>
                            <li><a href="category.html">Kaktus Hias</a></li>
                        </ul>
                        <h3>Pohon</h3>
                        <ul>
                            <li><a href="category.html">Pohon Hias</a></li>
                            <li><a href="category.html">Pohon Indoor</a></li>
                            <li><a href="category.html">Pohon Outdoor</a></li>
                        </ul>
                        <h3>Bibit</h3>
                        <ul>
                            <li><a href="category.html">Bunga</a></li>
                            <li><a href="category.html">Buah - buahan</a></li>
                            <li><a href="category.html">Herbal</a></li>
                            <li><a href="category.html">Pohon</a></li>
                            <li><a href="category.html">Bibit Premium</a></li>
                        </ul>
                    </div>
                    <div class="options">
                        <h3>Pilih salah satu</h3>
                        <select class="selectpicker" data-width="150px">
                            <option>EN</option>
                            <option>IT</option>
                            <option>FR</option>
                        </select>
                        <select class="selectpicker"  data-width="150px">
                            <option>Euro</option>
                            <option>Pounds</option>
                            <option>US Dollars</option>
                        </select>
                    </div>
                </div>
		<div class="col-md-9">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a>
                            <span class="divider"></span></li>
                            <li><?= $name; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="cat_header">
                        <h2><?= $name; ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="product">
                        <div class="product_sale">Sale</div>
                        <a href="<?= base_url('/front/product/1')?>"><img alt="dress1home" src="<?=base_url()?>/front-assets/products/dress1home.jpg"></a>
                        <div class="name">
                        <a href="#">Elegant Dress</a>
                        </div>
                        <div class="price">
                        <p>$200.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product">
                        <a href="product.html"><img alt="dres2" src="products/dress5home.jpg"></a>
                        <div class="name">
                        <a href="#">Lace Dress</a>
                        </div>
                        <div class="price">
                        <p>$250.00</p>
                        </div>	

                    </div>	
                
                </div>			
                <div class="col-md-4">
                    <div class="product">
                        <a href="product.html"><img alt="dress3" src="products/dress6home.jpg"></a>
                        <div class="name">
                        <a href="#">Floral Dress</a>
                        </div>
                        <div class="price">
                        <p>$500.00</p>
                        </div>
                    </div>	
                </div>
            </div>
	

		<div class="row">
		    <div class="col-md-4">
			    <div class="product">
				    <div class="product_sale">Sale</div>
				    <a href="product.html"><img alt="dress5" src="products/dress3home.jpg"></a>
				    <div class="name">
				    <a href="#">Midi Dress</a>
				    </div>
				    <div class="price">
				    <p>$50.00</p>
				    </div>	
				</div>
			
			</div>
		    <div class="col-md-4">
			    <div class="product">
				    <a href="product.html"><img alt="dress6" src="products/dress4home.jpg"></a>
				    <div class="name">
				    <a href="#">White Dress</a>
				    </div>
				    <div class="price">
				    <p>$120.00</p>
				    </div>	

				</div>			
			</div>			
		    <div class="col-md-4">
			    <div class="product">
				    <div class="product_sale">Sale</div>
				    <a href="product.html"><img alt="dress7" src="products/dress7home.jpg"></a>
				    <div class="name">
				    <a href="#">Red Dress</a>
				    </div>
				    <div class="price">
				    <p>$20.00</p>
				    </div>

				</div>			
			</div>
		</div>
		<div class="row">
		    <div class="col-md-4">
			    <div class="product">
					<div class="product_sale">Sale</div>
				    <a href="product.html"><img alt="dress1home" src="products/dress1home.jpg"></a>
					<div class="name">
				    <a href="#">Elegant Dress</a>
				    </div>
				    <div class="price">
				    <p>$200.00</p>
				    </div>
				</div>
			</div>
		    <div class="col-md-4">
			    <div class="product">
				    <a href="product.html"><img alt="dres2" src="products/dress5home.jpg"></a>
				    <div class="name">
				    <a href="#">Lace Dress</a>
				    </div>
				    <div class="price">
				    <p>$250.00</p>
				    </div>
				</div>
			</div>			
		    <div class="col-md-4">
			    <div class="product">
				    <a href="product.html"><img alt="dress3" src="products/dress6home.jpg"></a>
					<div class="name">
				    <a href="#">Floral Dress</a>
				    </div>
				    <div class="price">
				    <p>$500.00</p>
				    </div>
				</div>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<ul class="pagination pull-right">
				  <li><a href="#">&laquo;</a></li>
				  <li class="active"><a href="#">1</a></li>
				  <li><a href="#">2</a></li>
				  <li><a href="#">3</a></li>
				  <li><a href="#">4</a></li>
				  <li><a href="#">5</a></li>
				  <li><a href="#">&raquo;</a></li>
				</ul>
			</div>
		</div>
	   </div>
	 </div>	
   </div>		
	
	<div class="footer black">
		<div class="container">
			<!-- div class="arrow"><b class="caret"></b></div -->
		    <div class="row">
		        <div class="col-md-3">
					<div>
			        <h3>Information</h3>
				        <ul>
					        <li><a href="about.html">About Us</a></li>
						    <li><a href="#">Delivery Information</a></li>
						    <li><a href="#">Privacy Policy</a></li>
						    <li><a href="#">Terms & Conditions</a></li>
					    </ul>
					  </div>
				</div>
		        <div class="col-md-3">
					<div>
			        <h3>Customer Service</h3>
				        <ul>
					        <li><a href="contact.html" class="ajax_right">Contact Us</a></li>
						    <li><a href="#">Returns</a></li>
						    <li><a href="#">Site Map</a></li>
							<li><a href="#">Shipping</a></li>
				        </ul>	
					  </div>
				</div>	

		        <div class="col-md-3 twitter">
					<div class="row">
						<h3>Follow us</h3>
						<script type="text/javascript" src="js/twitterFetcher_v9_min.js"></script>
						<ul id="twitter_update_list"><li class="col-md-2">Twitter feed loading</li></ul>			
						<script>twitterFetcher.fetch('256524641194098690', 'twitter_update_list', 2, true, true, false);</script> 
					</div>				
				</div>	

				
				<div class="col-md-3 social">
					<div class="copy">Copyright &copy; nicole_89</div>
					<ul class="social-network">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#"><i class="fa fa-rss"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>	
					</ul>
				</div>

		    </div>	
	</div>
	</div>	
</div>

<!-- script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write("<script src='js/jquery-1.10.2.min.js'><\/script>")</script -->
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/sapphire.js"></script>
</body>

<!-- Mirrored from www.nicolethemes.com/sapphire-html/category_menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Dec 2020 08:08:24 GMT -->
</html>