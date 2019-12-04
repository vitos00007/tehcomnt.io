<?php  defined('ABSPATH') || die(); ?>
<script type="text/javascript">
	jQuery( document ).ready(function() {
	   document.getElementById("themesd").style.display = "block";
	});
	function themes(){
		document.getElementById("themesd").style.display = "block";
		document.getElementById("pluginsd").style.display = "none";
		document.getElementById("offers2").style.display = "none";
	  
	}
	 function plugins1(){
	   document.getElementById("pluginsd").style.display = "block";
	   document.getElementById("themesd").style.display = "none";
	   document.getElementById("offers2").style.display = "none";
	}
	 function offers(){
		document.getElementById("offers2").style.display = "block";
		document.getElementById("themesd").style.display = "none";
		document.getElementById("pluginsd").style.display = "none";
	  }
</script>       
<div class="row">
<div class="col-md-10  product-main-cont">			
	<div class=" wrap elw-page-welcome about-wrap seting-page">
		<div class="row col-md-12 settings ">
			<div class=" col-md-2 col-md-offset-1">
				<div class="header-logo">
					<img  src="<?php echo esc_url(WL_Page_Ainm_URI. '/images/weblizar2.png'); ?>" alt="logo" />
				</div>
			</div>
			 <div class=" col-md-8">
				<h2><span class="elw_shortcode_heading"><?php esc_html_e('Responsive WordPress Themes & Plugins',WL_PAT_DOMAIN); ?></span></h2>
			</div>
		</div>
	</div>
	<ul class="nav nav-pills nav-fill ">
		<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#themesd" onclick="themes()"><?php esc_html_e('Themes',WL_PAT_DOMAIN); ?> </a></li>
		<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#pluginsd" onclick="plugins1()"><?php esc_html_e('Plugins',WL_PAT_DOMAIN); ?></a></li>
		<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#offers2" onclick="offers()"><?php esc_html_e('Offers',WL_PAT_DOMAIN); ?></a></li>
	</ul>

	<div class="tab-content">
		<div id="themesd" class="tab-pane ">
			<div class="space  theme">
				<div class=" p_head theme">
					<h1 class="section-title"><?php esc_html_e('WordPress Themes ',WL_PAT_DOMAIN); ?></h1>
				</div>
				<div class=" row p_plugin blog_gallery clearfix">
					<div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
						<div class="img-thumbnail">
							<img src="<?php echo esc_url(WL_Page_Ainm_URI.'/images/BeautySpa.jpg'); ?>" class="img-responsive" alt="img"/>
					  
						</div>
					</div>
					<div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
						<div class=" p-box">
							<h2><a href=""><?php esc_html_e('BeautySpa- Beauty Salon Theme',WL_PAT_DOMAIN); ?></a></h2>
							<p><strong><?php esc_html_e('Tags: ',WL_PAT_DOMAIN); ?></strong><?php esc_html_e('Customize Front Page, Multilingual, Complete Documentation, Theme Option Panel, Unlimited Color Skins, Multiple Background Patterns, Multiple Theme Templates, 5 Portfolio Layout, 3 Page Layout and many more.',WL_PAT_DOMAIN); ?></p>
							<div>
								<p><strong><?php esc_html_e('Description: ',WL_PAT_DOMAIN); ?></strong><?php esc_html_e('BeautySpa is versatile health care business WordPress theme suitable for spa, spa salon, sauna, massage , medical business, massage center, beauty center, eCommerce and beauty salon websites.',WL_PAT_DOMAIN); ?></p>
							</div>
						</div>
					</div>
					<div class="  p_plugin_pic">
						<div class="price">
							<span class="currency"><?php esc_html_e('USD',WL_PAT_DOMAIN); ?></span>
							<span class="price-number"><?php esc_html_e('$',WL_PAT_DOMAIN); ?><span><?php esc_html_e('39',WL_PAT_DOMAIN); ?></span></span>
						</div>
						<div class="btn-group-vertical">
							<a class="btn btn-primary btn-lg" href="https://weblizar.com/themes/beautyspa-premium/"><?php esc_html_e('Demo',WL_PAT_DOMAIN); ?></a>
							<a class="btn btn-success btn-lg" href="https://weblizar.com/themes/beautyspa-premium/"><?php esc_html_e('Buy Now',WL_PAT_DOMAIN); ?></a>
						</div>
					</div>
				</div>	
				<div class="row p_plugin blog_gallery clearfix clearfix">
					<div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
						<div class="img-thumbnail">
							<img src="<?php echo esc_url(WL_Page_Ainm_URI.'/images/personal.jpg'); ?>" class="img-responsive" alt="img"/>
						</div>
					</div>
					<div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
						<div class=" p-box">
							<h2><a href=""><?php esc_html_e('Personal Premium Theme',WL_PAT_DOMAIN); ?> </a></h2>
							<p><strong><?php esc_html_e('Tags: ',WL_PAT_DOMAIN); ?></strong><?php esc_html_e('clean, responsive, portfolio, blog, e-commerce, Business, WordPress, dark, real estate, shop, restaurant, ele…',WL_PAT_DOMAIN); ?></p>
							<div>
								<p><strong><?php esc_html_e('Description: ',WL_PAT_DOMAIN); ?></strong><?php esc_html_e('Personal Premium is a powerful and flexible, customizable and extensively developed, wonderfully lightweight and mobile friendly, easy to use and intuitively structured. Personal Premium is a highly customizable and SEO friendly responsive WordPress theme you have access to unlimited color variations, multiple different layout options, shortcode modules, and much more. ',WL_PAT_DOMAIN); ?></div>
						</div>
					</div>
					<div class=" p_plugin_pic">
						<div class="price">
							<span class="currency"><?php esc_html_e('USD',WL_PAT_DOMAIN); ?></span>
							<span class="price-number"><?php esc_html_e('$',WL_PAT_DOMAIN); ?><span><?php esc_html_e('17',WL_PAT_DOMAIN); ?></span></span>
						</div>
						<div class="btn-group-vertical">
							<a class="btn btn-primary btn-lg" href="https://weblizar.com/themes/personal-premium/"><?php esc_html_e('Demo',WL_PAT_DOMAIN); ?></a>
							<a class="btn btn-success btn-lg" href="https://weblizar.com/themes/personal-premium"><?php esc_html_e('Buy Now',WL_PAT_DOMAIN); ?></a>
						</div>
					</div>
				</div>
				<div class="row p_plugin blog_gallery clearfix clearfix">
					<div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
						<div class="img-thumbnail">
							<img src="<?php echo esc_url(WL_Page_Ainm_URI.'/images/explora.jpg'); ?>" class="img-responsive" alt="img"/>
						</div>
					</div>
					<div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
						<div class=" p-box">
							<h2><a href=""><?php esc_html_e('Explora- Ultimate Multi-Purpose WordPress Theme',WL_PAT_DOMAIN); ?></a></h2>
							<p><strong><?php esc_html_e('Tags: ',WL_PAT_DOMAIN); ?></strong><?php esc_html_e('clean, responsive, portfolio, blog, e-commerce, Business, WordPress, Corporate, dark, real estate, shop, restaurant, ele…',WL_PAT_DOMAIN); ?></p>
							<div>
								<p><strong><?php esc_html_e('Description: ',WL_PAT_DOMAIN); ?></strong><?php esc_html_e(' Explora Premium is a multi-purpose responsive theme coded & designed with a lot of care and love. You can use it for your business, portfolio, blogging or any type of site. ',WL_PAT_DOMAIN); ?></div>
						</div>
					</div>
					<div class="  p_plugin_pic">
						<div class="price">
							<span class="currency"><?php esc_html_e('USD',WL_PAT_DOMAIN); ?></span>
							<span class="price-number"><?php esc_html_e('$',WL_PAT_DOMAIN); ?><span><?php esc_html_e('25',WL_PAT_DOMAIN); ?></span></span>
						</div>
						<div class="btn-group-vertical">
							<a class="btn btn-primary btn-lg" href="https://weblizar.com/explora-premium/"><?php esc_html_e('Demo',WL_PAT_DOMAIN); ?></a>
							<a class="btn btn-success btn-lg" href="https://weblizar.com/explora-premium/"><?php esc_html_e('Buy Now',WL_PAT_DOMAIN); ?></a>
						</div>
					</div>
				</div>
				<div class="row p_plugin blog_gallery clearfix clearfix">
					<div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
						<div class="img-thumbnail">
						 <img src="<?php echo esc_url(WL_Page_Ainm_URI.'/images/Guardian.jpg'); ?>" class="img-responsive" alt="img"/>

						</div>
					</div>
					<div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
						<div class=" p-box">
							<h2><a href=""><?php esc_html_e('Guardian- Corporate Business Theme',WL_PAT_DOMAIN); ?></a></h2>
							<p><strong><?php esc_html_e('Tags: ',WL_PAT_DOMAIN); ?></strong><?php esc_html_e('Multiple Background Patterns, Rich color changer, Boxed/wide layout styles, Additional Page, WPML & Woo Commerce.',WL_PAT_DOMAIN); ?></p>
							<div>
								<p><strong><?php esc_html_e('Description: ',WL_PAT_DOMAIN); ?></strong><?php esc_html_e(' Guardian Premium Theme is a super professional one page WordPress theme for modern businesses. Ideal for creative agencies, startups, small businesses, and freelancers and best of all it is so easy to use that you can have your website up in minutes.',WL_PAT_DOMAIN); ?></p>
							</div>
						</div>
					</div>
					<div class="  p_plugin_pic">
						<div class="price">
							<span class="currency"><?php esc_html_e('USD',WL_PAT_DOMAIN); ?></span>
							<span class="price-number"><?php esc_html_e('$',WL_PAT_DOMAIN); ?><span><?php esc_html_e('39',WL_PAT_DOMAIN); ?></span></span>
						</div>
						<div class="btn-group-vertical">
							<a class="btn btn-primary btn-lg" href="https://weblizar.com/themes/guardian-premium-theme/"><?php esc_html_e('Demo',WL_PAT_DOMAIN); ?></a>
							<a class="btn btn-success btn-lg" href="https://weblizar.com/themes/guardian-premium-theme/"><?php esc_html_e('Buy Now',WL_PAT_DOMAIN); ?></a>
						</div>
					</div>
				</div>
				<div class=" row p_plugin blog_gallery clearfix clearfix">
					<div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
						<div class="img-thumbnail">
						  <img src="<?php echo esc_url(WL_Page_Ainm_URI.'/images/Enigma.jpg'); ?>" class="img-responsive" alt="img"/>

						</div>
					</div>
					<div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
						<div class=" p-box">
							<h2><a href=""><?php esc_html_e('Enigma- Modern & Clean Designed Multi-Purpose WordPress Theme',WL_PAT_DOMAIN); ?></a></h2>
							<p><strong><?php esc_html_e('Tags: ',WL_PAT_DOMAIN); ?></strong><?php esc_html_e('clean, responsive, portfolio, blog, e-commerce, Business, WordPress, Corporate, dark, real estate, shop, restaurant.',WL_PAT_DOMAIN); ?></p>
							<div>
								<p><strong><?php esc_html_e('Description: ',WL_PAT_DOMAIN); ?></strong> <?php esc_html_e('Enigma is a Full Responsive Multi-Purpose Theme suitable for Business , corporate office and others .Cool Blog Layout and full width page also present.',WL_PAT_DOMAIN); ?></p>
							</div>
						</div>
					</div>
					<div class="  p_plugin_pic">
						<div class="price">
							<span class="currency"><?php esc_html_e('USD',WL_PAT_DOMAIN); ?></span>
							<span class="price-number"><?php esc_html_e('$',WL_PAT_DOMAIN); ?><span><?php esc_html_e('39',WL_PAT_DOMAIN); ?></span></span>
						</div>
						<div class="btn-group-vertical">
							<a class="btn btn-primary btn-lg" href="https://weblizar.com/themes/enigma-premium/"><?php esc_html_e('Detail',WL_PAT_DOMAIN); ?></a>
							<a class="btn btn-success btn-lg" href="https://weblizar.com/themes/enigma-premium/"><?php esc_html_e('Buy Now',WL_PAT_DOMAIN); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!----Plugin----->
		<div id="pluginsd" class="tab-pane " onclick="plugins()">
			<div class="p_head theme">
				<h1 class="section-title"><?php esc_html_e('WordPress Plugins',WL_PAT_DOMAIN); ?></h1>
			</div>
			<div class="row p_plugin blog_gallery clearfix clearfix">
				<div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
					<div class="img-thumbnail">
						<img src="<?php echo esc_url(WL_Page_Ainm_URI.'/images/Clockin-Pro.jpg'); ?>" class="img-responsive" alt="img"/>
				   </div>
				</div>
				<div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
					<div class=" p-box">
						<h2><a href=""><?php esc_html_e('Clockin Portal Pro',WL_PAT_DOMAIN); ?></a></h2>
						<p><strong><?php esc_html_e('Features: ',WL_PAT_DOMAIN); ?></strong>
							<ul>
								<li><?php esc_html_e('Set Your TimeZone',WL_PAT_DOMAIN); ?></li>
								<li><?php esc_html_e('Salary status (Monthly or Hourly)',WL_PAT_DOMAIN); ?></li>
								<li><?php esc_html_e('IP Restriction',WL_PAT_DOMAIN); ?></li>
								<li><?php esc_html_e('Shift Management',WL_PAT_DOMAIN); ?></li>
								<li><?php esc_html_e('Holiday Listing',WL_PAT_DOMAIN); ?></li>
								<li><?php esc_html_e('Leave Management Module',WL_PAT_DOMAIN); ?></li>
								<li><?php esc_html_e('Event Management Module....etc many more.',WL_PAT_DOMAIN); ?></li>
							</ul>
						</p>
					</div>
				</div>
				<div class="  p_plugin_pic">
					<div class="price">
						<span class="currency"><?php esc_html_e('USD',WL_PAT_DOMAIN); ?></span>
						<span class="price-number"><span><?php esc_html_e('$14',WL_PAT_DOMAIN); ?></span></span>
					</div>
					<div class="btn-group-vertical">
						<a target="_blank" class="btn btn-primary btn-lg" href="https://weblizar.com/plugins/clockin-pro-plugin/"><?php esc_html_e('Demo',WL_PAT_DOMAIN); ?></a>
						<a class="btn btn-success btn-lg" href="https://weblizar.com/plugins/clockin-pro-plugin/"><?php esc_html_e('Buy Now',WL_PAT_DOMAIN); ?></a>
					</div>
				</div>
			</div>
			 <div class="row p_plugin blog_gallery">
		<div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
			<div class="img-thumbnail">
				<img src="<?php echo esc_url(WL_Page_Ainm_URI.'/images/Preview_SM.jpg'); ?>" class="img-responsive" alt="img"/>
		   </div>
		</div>
		<div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
			<div class="d-flex flex-column p-box">
				<h2><a href=""><?php esc_html_e("School Management", WL_PAT_DOMAIN); ?></a></h2>
				<p class="d-flex"><strong><?php esc_html_e("Features:", WL_PAT_DOMAIN); ?> </strong>
					<ul>
						<li><?php esc_html_e("Multi-School Management", WL_PAT_DOMAIN); ?></li>
						<li><?php esc_html_e("Session Management", WL_PAT_DOMAIN); ?></li>
						<li><?php esc_html_e("Manage Classes and Sections", WL_PAT_DOMAIN); ?></li>
						<li><?php esc_html_e("Student Management", WL_PAT_DOMAIN); ?></li>
						<li><?php esc_html_e("Inquiries Management ", WL_PAT_DOMAIN); ?></li>
						<li><?php esc_html_e("Student Promotion ", WL_PAT_DOMAIN); ?></li>
						<li><?php esc_html_e("Student Transfer", WL_PAT_DOMAIN); ?></li>
						<li><?php esc_html_e("Student Attendance", WL_PAT_DOMAIN); ?></li>
						<li><?php esc_html_e("Student Dashboard", WL_PAT_DOMAIN); ?></li>
						<li><?php esc_html_e("Roles and Permissions ", WL_PAT_DOMAIN); ?></li>
						<li><?php esc_html_e("Assign School Admins and Staff", WL_PAT_DOMAIN); ?></li>
						<li><?php esc_html_e("Noticeboard Widget", WL_PAT_DOMAIN); ?></li>
						
					</ul>
				</p>
			</div>
		</div>
		<div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
			<div class="price">
				<span class="currency"><?php esc_html_e("USD", WL_PAT_DOMAIN); ?></span>
				<span class="price-number"><span><?php esc_html_e("$15", WL_PAT_DOMAIN); ?></span></span>
			</div>
			<div class="btn-group-vertical">
				<a target="_blank" class="btn btn-primary btn-lg" href="http://demo.weblizar.com/school-management/"><?php esc_html_e("Demo", WL_PAT_DOMAIN); ?></a>
				<a class="btn btn-success btn-lg" href="https://weblizar.com/plugins/school-management/"><?php esc_html_e("Buy Now", WL_PAT_DOMAIN); ?></a>
			</div>
		</div>
	</div>
	<div class="row p_plugin blog_gallery">
		<div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
			<div class="img-thumbnail">
				 <div class="img-thumbnail">
					<img src="<?php echo esc_url(WL_Page_Ainm_URI.'/images/IMG.jpg'); ?>" class="img-responsive" alt="img"/>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
			<div class="d-flex flex-column p-box">
				<h2><a href=""><?php esc_html_e("Employee And HR Management", WL_PAT_DOMAIN); ?></a></h2>
				<p class="d-flex"><strong> <?php esc_html_e("Features:", WL_PAT_DOMAIN); ?></strong>
					<ul>
						<li><?php esc_html_e("Admin Centralized Dashboard", WL_PAT_DOMAIN); ?></li>
						<li><?php esc_html_e("Department & Designation Management", WL_PAT_DOMAIN); ?></li>
						<li><?php esc_html_e("Leave Request Management", WL_PAT_DOMAIN); ?></li>
						<li><?php esc_html_e("Shifts Management", WL_PAT_DOMAIN); ?></li>
						<li><?php esc_html_e("Staff Management", WL_PAT_DOMAIN); ?></li>
						<li><?php esc_html_e("Generate Attandance Reports", WL_PAT_DOMAIN); ?></li>
						<li><?php esc_html_e("Payroll Management(Upcoming Update)", WL_PAT_DOMAIN); ?></li>
						<li><?php esc_html_e("Staff Working Hours Management", WL_PAT_DOMAIN); ?></li>
						<li><?php esc_html_e("Monthly/Hourly Basis Salary", WL_PAT_DOMAIN); ?></li>
						<li><?php esc_html_e("Events Management", WL_PAT_DOMAIN); ?></li>
						<li><?php esc_html_e(" Notice Management", WL_PAT_DOMAIN); ?></li>                                   
					</ul>
				</p>
			</div>
		</div>
		<div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
			<div class="price">
				<span class="currency"><?php esc_html_e("USD", WL_PAT_DOMAIN); ?></span>
				<span class="price-number"><span><?php esc_html_e("$19", WL_PAT_DOMAIN); ?></span></span>
			</div>
			<div class="btn-group-vertical">
				<a target="_blank" class="btn btn-primary btn-lg" href="http://demo.weblizar.com/employee-and-hr-management/"><?php esc_html_e("Demo", WL_PAT_DOMAIN); ?></a>
				<a class="btn btn-success btn-lg" href="https://weblizar.com/plugins/employee-and-hr-management-wordpress-plugin/"><?php esc_html_e("Buy Now", WL_PAT_DOMAIN); ?></a>
			</div>
		</div>
	</div>                 
			<div class="row p_plugin blog_gallery clearfix clearfix">
				<div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
					<div class="img-thumbnail">
						 <img src="<?php echo esc_url(WL_Page_Ainm_URI.'/images/Search-Engine-Optimizer-new.jpg'); ?>" class="img-responsive" alt="img"/>
					  </div>
				</div>
				<div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
					<div class=" p-box">
						<h2><a href=""><?php esc_html_e('SEO Image Optimizer Pro ',WL_PAT_DOMAIN); ?></a></h2>
						<p><strong><?php esc_html_e('Features: ',WL_PAT_DOMAIN); ?></strong>
							<ul>
								<li><?php esc_html_e('WooCommerce Product Images SEO',WL_PAT_DOMAIN); ?></li>
								<li><?php esc_html_e('Auto Fill Title & Alt Tag',WL_PAT_DOMAIN); ?></li>
								<li><?php esc_html_e('Custom Title & Alt Tag',WL_PAT_DOMAIN); ?></li>
								<li><?php esc_html_e('Featured Images SEO',WL_PAT_DOMAIN); ?></li>
								<li><?php esc_html_e('Magical Reset',WL_PAT_DOMAIN); ?></li>
								<li><?php esc_html_e('Delimiter Removal',WL_PAT_DOMAIN); ?></li>
								<li><?php esc_html_e('Image Compression',WL_PAT_DOMAIN); ?></li>
								<li><?php esc_html_e('Site Speed Up',WL_PAT_DOMAIN); ?></li>
							</ul>
						</p>
					</div>
				</div>
				<div class="  p_plugin_pic">
					<div class="price">
						<span class="currency"><?php esc_html_e('USD',WL_PAT_DOMAIN); ?></span>
						<span class="price-number"><span><?php esc_html_e('$11',WL_PAT_DOMAIN); ?></span></span>
					</div>
					<div class="btn-group-vertical">
						<a target="_blank" class="btn btn-primary btn-lg" href="https://weblizar.com/seo-image-optimizer-pro"><?php esc_html_e('Demo',WL_PAT_DOMAIN); ?></a>
						<a class="btn btn-success btn-lg" href="https://weblizar.com/seo-image-optimizer-pro/"><?php esc_html_e('Buy Now',WL_PAT_DOMAIN); ?></a>
					</div>
				</div>
			</div>
			<div class=" row p_plugin blog_gallery clearfix clearfix">
				<div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
					<div class="img-thumbnail">
						<img src="<?php echo esc_url(WL_Page_Ainm_URI.'/images/newsletter.png'); ?>" class="img-responsive" alt="img"/>
				   </div>
				</div>
				<div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
					<div class=" p-box">
						<h2><a href=""><?php esc_html_e('Newsletter Subscription Form Pro ',WL_PAT_DOMAIN); ?></a></h2>
						<p><strong><?php esc_html_e('Features: ',WL_PAT_DOMAIN); ?></strong>
							<ul>
								<li><?php esc_html_e('Multiple Pro Template',WL_PAT_DOMAIN); ?></li>
								<li><?php esc_html_e('News Letter Subscription',WL_PAT_DOMAIN); ?></li>
								<li><?php esc_html_e('Download Subscriber List',WL_PAT_DOMAIN); ?></li>
								<li><?php esc_html_e('Auto & Manual Notification',WL_PAT_DOMAIN); ?></li>
								<li><?php esc_html_e('Major Bser Compatible',WL_PAT_DOMAIN); ?></li>
								<li><?php esc_html_e('Multi Site and Multilingual',WL_PAT_DOMAIN); ?></li>
								<li><?php esc_html_e('Customized Form',WL_PAT_DOMAIN); ?></li>
								<li><?php esc_html_e('Forms shotcode',WL_PAT_DOMAIN); ?></li>
							</ul>
						</p>
					</div>
				</div>
				<div class="  p_plugin_pic">
					<div class="price">
						<span class="currency"><?php esc_html_e('USD',WL_PAT_DOMAIN); ?></span>
						<span class="price-number"><span><?php esc_html_e('$7',WL_PAT_DOMAIN); ?></span></span>
					</div>
					<div class="btn-group-vertical">
						<a target="_blank" class="btn btn-primary btn-lg" href="https://weblizar.com/newsletter-subscription-form-pro/"><?php esc_html_e('Demo',WL_PAT_DOMAIN); ?></a>
						<a class="btn btn-success btn-lg" href="https://weblizar.com/newsletter-subscription-form-pro/"><?php esc_html_e('Buy Now',WL_PAT_DOMAIN); ?></a>
					</div>
				</div>
			</div>

			<div class=" row  p_plugin blog_gallery clearfix clearfix">
				<div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
					<div class="img-thumbnail">
						<img src="<?php echo esc_url(WL_Page_Ainm_URI.'/images/Comingsoon.jpg'); ?>" class="img-responsive" alt="img"/>
					 </div>
				</div>
				<div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
					<div class=" p-box">
						<h2><a href=""><?php esc_html_e('Coming Soon Page & Maintenance Mode Pro ',WL_PAT_DOMAIN); ?></a></h2>
						<p><strong><?php esc_html_e('Features: ',WL_PAT_DOMAIN); ?></strong>
							<ul>
								<li><?php esc_html_e('Coming Soon Mode',WL_PAT_DOMAIN); ?></li>
								<li><?php esc_html_e('Under Construction Mode',WL_PAT_DOMAIN); ?></li>
								<li><?php esc_html_e('Pro Templates',WL_PAT_DOMAIN); ?></li>
								<li><?php esc_html_e('News Letter Subscriptions',WL_PAT_DOMAIN); ?></li>
								<li><?php esc_html_e('Automatic Website Launch',WL_PAT_DOMAIN); ?></li>
								<li><?php esc_html_e('News Letter Subscriber Forms',WL_PAT_DOMAIN); ?></li>
								<li><?php esc_html_e('Auto & Manual Notification',WL_PAT_DOMAIN); ?></li>
								<li><?php esc_html_e('Google Analytic Tracking',WL_PAT_DOMAIN); ?></li>
							</ul>
						</p>
					</div>
				</div>
				<div class="  p_plugin_pic">
					<div class="price">
						<span class="currency"><?php esc_html_e('USD',WL_PAT_DOMAIN); ?></span>
						<span class="price-number"><span><?php esc_html_e('$24',WL_PAT_DOMAIN); ?></span></span>
					</div>
					<div class="btn-group-vertical">
						<a target="_blank" class="btn btn-primary btn-lg" href="https://weblizar.com/plugins/coming-soon-page-maintenance-mode-pro/"><?php esc_html_e('Demo',WL_PAT_DOMAIN); ?></a>
						<a class="btn btn-success btn-lg" href="https://weblizar.com/plugins/coming-soon-page-maintenance-mode-pro/"><?php esc_html_e('Buy Now',WL_PAT_DOMAIN); ?></a>
					</div>
				</div>
			</div>
			<div class="row p_plugin blog_gallery clearfix">
				<div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
					<div class="img-thumbnail">
						<img src="<?php echo esc_url(WL_Page_Ainm_URI.'/images/responsive-pro.jpg'); ?>" class="img-responsive" alt="img"/>
					</div>
				</div>
				<div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
					<div class=" p-box">
						<h2><a href=""><?php esc_html_e('Responsive Portfolio Pro- Perfect Responsive Portfolio Plugin',WL_PAT_DOMAIN); ?></a></h2>
						<p><strong><?php esc_html_e('Features: ',WL_PAT_DOMAIN); ?></strong>
							<ul>
								<li><?php esc_html_e('Image Hover Animation',WL_PAT_DOMAIN); ?></li>
								<li><?php esc_html_e('Number of Hover Color',WL_PAT_DOMAIN); ?></li>
								<li><?php esc_html_e('Number of Font Style',WL_PAT_DOMAIN); ?></li>
								<li><?php esc_html_e('Number of Lightbox Styles',WL_PAT_DOMAIN); ?></li>
								<li><?php esc_html_e('Drag and Drop image Position',WL_PAT_DOMAIN); ?></li>
								<li><?php esc_html_e('Multiple Image uploader and so on..',WL_PAT_DOMAIN); ?><li>
							</ul>
						</p>
					</div>
				</div>
				<div class="  p_plugin_pic">
					<div class="price">
						<span class="currency"><?php esc_html_e('USD',WL_PAT_DOMAIN); ?></span>
						<span class="price-number"><?php esc_html_e('$',WL_PAT_DOMAIN); ?><span><?php esc_html_e('19',WL_PAT_DOMAIN); ?></span></span>
					</div>
					<div class="btn-group-vertical">
						<a class="btn btn-primary btn-lg" href="https://weblizar.com/plugins/responsive-portfolio-pro/"><?php esc_html_e('Demo',WL_PAT_DOMAIN); ?></a>
						<a class="btn btn-success btn-lg" href="https://weblizar.com/plugins/responsive-portfolio-pro/"><?php esc_html_e('Buy Now',WL_PAT_DOMAIN); ?></a>
					</div>
				</div>
			</div>

		</div>
		
		<!--offers-->
			<div id="offers2" class="tab-pane" onclick="offers()">
				<div class="space  theme">

					<div class=" p_head theme">
						 <h1 class="section-title"><?php esc_html_e('Weblizar Offers',WL_PAT_DOMAIN); ?></h1>
					</div>
					<div class="row p_plugin blog_gallery clearfix">
						<div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
							<div class="img-thumbnail">
								<img src="<?php echo esc_url(WL_Page_Ainm_URI.'/images/offer.jpg'); ?>" class="img-responsive" alt="img"/>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
							<div class=" p-box">
								<h2><?php esc_html_e('Get the Exciting Deals here , Daily',WL_PAT_DOMAIN); ?></h2>
							</div>
						</div>
						<div class="  p_plugin_pic">
							<div class="btn-group-vertical">
								<a class="btn btn-primary  btn-lg title_offers" href="https://weblizar.com/offers/"><?php esc_html_e('Visit Here',WL_PAT_DOMAIN); ?></a> 
							</div>
						</div>
					</div>
				 </div>
			</div> 
	</div>
</div>
<style>
    .setting_page {padding: 0;margin-top: 25px;}

    a.button.button-primary.thickbox.eswhortcode {
        color: #555d66;
        border-color: #ccc;
        background: #f7f7f7;
        box-shadow: 0 1px 0 #ccc;
        vertical-align: top;
        text-shadow: none;
    }
    div#TB_ajaxContent {
        width: 96%!important;
        height: 810px!important;
    }
    .weblizar-generator-clearfix:before,
    .weblizar-generator-clearfix:after {
        display: table;
        content: " ";
    }
    .weblizar-generator-clearfix:after { clear: both; }
    .weblizar-generator-clear {
        height: 0;
        clear: both;
        overflow: hidden;8
        min-height: 60px;
        background: 50% 50% url("../images/spinner.gif") no-repeat !important;
    }
    .weblizar-generator-loading * { visibility: hidden; }

    .weblizar-generator-button img {
        margin: -1px 2px 0 -5px;
        vertical-align: middle;
    }
    .wp-media-buttons .weblizar-generator-button img {
        margin: -1px -1px 0 -4px;
        vertical-align: middle;
    }

    #weblizar-generator-wrap { display: none; }
    #weblizar-generator {
        position: relative;
        /* width: 85%; */
        max-width: 1000px;
        margin: 16px auto;
        padding: 0px;
        background: #fff;
        /* -webkit-box-shadow: 0 2px 25px #000; */
        -moz-box-shadow: none;
        box-shadow: none;
        -webkit-transition: max-width .2s;
        -moz-transition: max-width .2s;
        transition: max-width .2s;
    }
    #weblizar-generator.weblizar-generator-narrow { max-width: none; }

    /* Generator tools */
    #weblizar-generator-tools { margin: 0 20px 20px 0; }
    #weblizar-generator-tools span {
        display: inline-block;
        width: 1px;
        height: 1em;
        margin: 0 0.5em;
        border-right: 1px dotted #555;
        vertical-align: middle;
    }
    #weblizar-generator-tools a { text-decoration: none; }
    #weblizar-generator-tools a.weblizar-add-ons {
        display: inline-block;
        padding: 2px 7px;
        background: #FF7654;
        color: #fff;
        border: 1px solid #ff4d21;
        border-radius: 3px;
    }
    #weblizar-generator-tools a.weblizar-add-ons:hover { background: #ff4d21; }

    /* Search box */
    #weblizar-generator-search {
    width: 100%;
    border: 1px solid #23282f;
        border-radius: 6px;
        margin-bottom: 5px;
        padding: 10px 10px 10px 42px;
        background: 5px 50% url(../images/search.png) no-repeat;
        color: #00a0d2;
        font-size: 14px;
        text-shadow: 2px 8px 6px rgba(0,0,0,0.2), 0px -5px 35px rgba(255,255,255,0.3);
    }
    #weblizar-generator-search-pro-tip {
        margin: 14px 5px 17px 5px;
        color: #23282fe0;
        font-style: italic;
        text-align: left;
        font-size: 0.9em;
    }

    /* Filter box */
    #weblizar-generator-filter {
        margin: 0px;
        padding: 14px 1px;
        border-top: none;
        border-bottom: none;
        background: #23282d;
        color: #f7f7f7 !important;
        text-align: center;
        line-height: 24px;
        border-radius: 5px;
        border: 1px solid #d0cfcf;
    }
    #weblizar-generator-filter a,
    #weblizar-generator-filter strong {
        display: inline-block;
        margin: 0 1em;
        line-height: 1;
        border-bottom: none;
        text-decoration: none;
        color: #f7f7f7bd;
        text-shadow: 2px 5px 6px rgba(0,0,0,0.2), 0px -5px 35px rgba(255,255,255,0.3);
        font-size:15px;
        font-weight:bold;
    }
    #weblizar-generator-filter a {
        border-bottom: none;
        text-decoration: none;
        color: #f7f7f7;
        text-shadow: 2px 5px 6px rgba(0,0,0,0.2), 0px -5px 35px rgba(255,255,255,0.3);
        font-size:14px;
        font-weight:bold;
    }
    #weblizar-generator-filter a:hover {
        color: #777;
    }
    /* Dropdown choices */
    #weblizar-generator-choices {
        margin-top: 35px;
        border-radius: 6px;
        text-align: center;
        background-color: #23282e;
    }
    #weblizar-generator-choices > span {
    position: relative;
        display: block;
        width: 25%!important;
        height: 50px;
        min-width: 130px;
        padding: 0 5px 0 40px;
        float: left;
        border: 1px solid #cccccc4a;
        overflow: hidden;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        border-bottom: none;
        vertical-align: top;
        text-align: left;
        line-height: 46px;
        cursor: pointer;
        color: #f7f7f7;
        font-weight: 600;
        font-size: 16px;
        text-shadow: 2px 8px 6px rgba(0, 0, 0, 0.12), 0px -5px 35px rgba(255,255,255,0.3);
    }

    #weblizar-generator-choices span:hover {
        border-bottom: 1px solid #6f6d6da1;
        background: #6f6d6da1;
        color: #fff;
    }
    #weblizar-generator-choices span img {
        position: absolute;
        top: 7px;
        left: 7px;
        width: 14px;
        height: 14px;
    }
    #weblizar-generator-choices span i {
        position: absolute;
        top: 1px;
        left: 1px;
        display: block;
        width: 26px;
        height: 46px;
        color: #fdfdfd;
        text-align: center;
        font-size: 16px;
        line-height: 42px;
    }
    #weblizar-generator-choices span:hover i { color: #fff; }
    .su-generator-choice-first {
        outline: 1px solid #09f;
        box-shadow: 0 0 3px rgba(30,140,190,.8);
    }

    /* Breadcrumbs */
    #weblizar-generator-breadcrumbs {
        margin: 0 -20px;
        padding: 14px 20px;
        border-top: 1px solid #ccc;
        border-bottom: 1px solid #ccc;
        background: #eee;
        color: #555;
        line-height: 24px;
    }
    #weblizar-generator-breadcrumbs span {
        margin-right: 1em;
        font-weight: bold;
    }
    #su-generator-breadcrumbs small {
        color: #bbb;
        font-weight: normal;
        font-size: 0.9em;
    }

    /* Notes */
    .weblizar-generator-note {
        position: relative;
        margin: 0 -20px;
        padding: 5px 20px;
        background: #FFFFB8;
        border-bottom: 1px solid #ccc;
        color: #333;
        line-height: 18px;
    }
    .weblizar-generator-note-content {
        min-height: 20px;
        margin-left: 35px;
    }
    .weblizar-generator-note p { margin: 10px 0; }
    .weblizar-generator-note a {
        text-decoration: underline;
    }
    .weblizar-generator-note i {
        position: absolute;
        top: 15px;
        left: 20px;
        display: block;
        width: 1em;
        height: 1em;
        color: #555;
        text-align: left;
        font-size: 20px;
        line-height: 1em;
    }

    /* Attribute container */
    #weblizar-generator-settings .weblizar-generator-attr-container {
        margin: 0 -20px;
        padding: 1.5em 20px;
        border-bottom: 1px solid #ccc;
    }

    /* Attribute name */
    #weblizar-generator-settings h5,
    #weblizar-generator-preview h5 {
        margin: 0 0 15px 0;
        font-size: 1em;
    }

    /* Attribute description */
    .weblizar-generator-attr-desc {
        margin-top: 15px;
        color: #aaa;
        font-style: italic;
        line-height: 1.6;
    }
    .weblizar-generator-attr-desc b { color: #999; }

    /* Small text after text field */
    .weblizar-generator-px-units {
        position: relative;
        margin-right: 15px;
    }
    .weblizar-generator-px-units:before {
        position: absolute;
        right: -18px;
        bottom: 3px;
        display: block;
        width: 15px;
        color: #999;
        content: 'px';
        text-align: left;
        font-size: 0.9em;
    }

    /* Clickable values in attribute description */
    .weblizar-generator-attr-desc b.su-generator-set-value {
        border-bottom: 1px dotted #999;
        cursor: pointer;
    }
    .su-generator-attr-desc b.su-generator-set-value:hover {
        border-bottom: 1px dotted #333;
        color: #333;
    }

    /* Common attribute fields */
    #weblizar-generator-settings input[type="text"],
    #weblizar-generator-settings input[type="number"],
    #weblizar-generator-settings textarea,
    #weblizar-generator-settings select {
        width: 100%;
        height: auto;
        padding: 10px;
    }

    /* Upload fields */
    .weblizar-generator-field-actions { padding-top: 10px; }
    .weblizar-generator-field-actions .button,
    .weblizar-generator-field-actions span { margin-right: 5px; }
    .weblizar-generator-field-actions img {
        margin: 0 6px 0 -4px;
        vertical-align: middle;
    }

    div#mceu_62-body {
        width: 798px!important;
        height: 698px;
    }
    div#mceu_62 {
        width: 798px!important;
    }








    #selected-shortcode input[type=range] {
        /*removes default webkit styles*/
        -webkit-appearance: none;

        /*fix for FF unable to apply focus style bug */
        border: 1px solid white;

        /*required for proper track sizing in FF*/
        width: 300px;
    }
    #selected-shortcode input[type=range]::-webkit-slider-runnable-track {
        width: 300px;
        height: 5px;
        background: #ddd;
        border: none;
        border-radius: 3px;
    }
    #selected-shortcode input[type=range]::-webkit-slider-thumb {
        -webkit-appearance: none;
        border: none;
        height: 16px;
        width: 16px;
        border-radius: 50%;
        background: #1e8cbee8;
        margin-top: -5px;
    }
    #selected-shortcode input[type=range]:focus {
        outline: none;
    }
    #selected-shortcode input[type=range]:focus::-webkit-slider-runnable-track {
        background: #ccc;
    }

    #selected-shortcode input[type=range]::-moz-range-track {
        width: 300px;
        height: 5px;
        background: #ddd;
        border: none;
        border-radius: 3px;
    }
    #selected-shortcode input[type=range]::-moz-range-thumb {
        border: none;
        height: 16px;
        width: 16px;
        border-radius: 50%;
        background: goldenrod;
    }

    /*hide the outline behind the border*/
    #selected-shortcode input[type=range]:-moz-focusring{
        outline: 1px solid white;
        outline-offset: -1px;
    }

    #selected-shortcode input[type=range]::-ms-track {
        width: 300px;
        height: 5px;

        /*remove bg colour from the track, we'll use ms-fill-lower and ms-fill-upper instead */
        background: transparent;

        /*leave room for the larger thumb to overflow with a transparent border */
        border-color: transparent;
        border-width: 6px 0;

        /*remove default tick marks*/
        color: transparent;
    }
    #selected-shortcode input[type=range]::-ms-fill-lower {
        background: #777;
        border-radius: 10px;
    }
    #selected-shortcode input[type=range]::-ms-fill-upper {
        background: #ddd;
        border-radius: 10px;
    }
    #selected-shortcode input[type=range]::-ms-thumb {
        border: none;
        height: 16px;
        width: 16px;
        border-radius: 50%;
        background: goldenrod;
    }
    #selected-shortcode input[type=range]:focus::-ms-fill-lower {
        background: #888;
    }
    #selected-shortcode input[type=range]:focus::-ms-fill-upper {
        background: #ccc;
    }

    .btn.custom_button_shortcode {
        -moz-box-shadow: 0px 1px 0px 0px #f0f7fa;
        -webkit-box-shadow: 0px 1px 0px 0px #f0f7fa!important;
        box-shadow: 0px 1px 0px 0px #f0f7fa!important;
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #33bdef), color-stop(1, #019ad2))!important;
        background: -moz-linear-gradient(top, #33bdef 5%, #019ad2 100%);
        background: -webkit-linear-gradient(top, #33bdef 5%, #019ad2 100%);
        background: -o-linear-gradient(top, #33bdef 5%, #019ad2 100%);
        background: -ms-linear-gradient(top, #33bdef 5%, #019ad2 100%);
        background: linear-gradient(to bottom, #33bdef 5%, #019ad2 100%)!important;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#33bdef', endColorstr='#019ad2',GradientType=0);
        background-color: #33bdef!important;
        -moz-border-radius: 6px;
        -webkit-border-radius: 6px!important;
        border-radius: 6px!important;
        border: 1px solid #057fd0!important;
        display: inline-block!important;
        cursor: pointer;
        color: #ffffff;
        font-family: Arial;
        font-size: 20px!important;
        font-weight: bold;
        padding: 4px 57px!important;
        text-decoration: none!important;
        text-shadow: 0px -1px 0px #5b6178!important;
        line-height: 0px !important;
        margin-top: 12px !important;
    }
    #selected-shortcode .btn.custom_button_shortcode:hover {
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #019ad2), color-stop(1, #33bdef));
        background:-moz-linear-gradient(top, #019ad2 5%, #33bdef 100%);
        background:-webkit-linear-gradient(top, #019ad2 5%, #33bdef 100%);
        background:-o-linear-gradient(top, #019ad2 5%, #33bdef 100%);
        background:-ms-linear-gradient(top, #019ad2 5%, #33bdef 100%);
        background:linear-gradient(to bottom, #019ad2 5%, #33bdef 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#019ad2', endColorstr='#33bdef',GradientType=0);
        background-color:#019ad2;
    }
    #selected-shortcode .btn.custom_button_shortcode:active {
        position:relative;
        top:1px;
    }
    #selected-shortcode #map {
            height: 100%;
          }
    #selected-shortcode #description {
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
          }

    #selected-shortcode #infowindow-content .title {
            font-weight: bold;
          }

    #selected-shortcode #infowindow-content {
            display: none;
          }

    #selected-shortcode #map #infowindow-content {
            display: inline;
          }

    #selected-shortcode .pac-card {
            margin: 10px 10px 0 0;
            border-radius: 2px 0 0 2px;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            outline: none;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
            background-color: #fff;
            font-family: Roboto;
          }

    #selected-shortcode #pac-container {
            padding-bottom: 12px;
            margin-right: 12px;
          }

    #selected-shortcode .pac-controls {
            display: inline-block;
            padding: 5px 11px;
          }

    #selected-shortcode .pac-controls label {
            font-family: Roboto;
            font-size: 13px;
            font-weight: 300;
          }

    #selected-shortcode #pac-input {
            background-color: #fff;
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
            margin-left: 12px;
            padding: 0 11px 0 13px;
            text-overflow: ellipsis;
            width: 400px;
          }

    #selected-shortcode  #pac-input:focus {
            border-color: #4d90fe;
          }

    #selected-shortcode #title {
            color: #fff;
            background-color: #4d90fe;
            font-size: 25px;
            font-weight: 500;
            padding: 6px 12px;
          }
    #selected-shortcode  #target {
            width: 345px;
          }
    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media (max-width: 600px) {
      .col-25, .col-75, input[type=submit] {
        width: 100%;
        display: inline-flex;
        margin-top: 0;
      }
    }



    /*----Extra--*/
    .clearfix:after {content: ".";display: block;height: 0;clear: both;visibility: hidden;font-size: 0;}
    * html .clearfix{ zoom: 1; } /* IE6 */
    *:first-child+html .clearfix { zoom: 1; } /* IE7 */

    #wpex-shortcodes-popup{ text-shadow: 1px 1px 1px #fff; font-size:14px; }

    #shortcode-selector-title{ margin-top: 20px; }
    /*#select-shortcode{ border: 1px solid #ccc; margin-bottom: 25px; }*/
    #select-shortcode-inner{ padding: 15px; border: 1px solid #fff; }
    #select-shortcode select{ margin-left: 78px; float: none; width: 400px; font-size: 13px; padding: 5px; }


    /*#shortcode-editor { border: 1px solid #ccc; position: relative; }*/
    /*#shortcode-editor-inner{ padding: 15px 15px 0; border: 1px solid #fff;  }*/

    .padding-bottom{ padding-bottom: 15px; }

    #shortcode-editor h2{ margin-top: 0px; }
    #select-shortcode { border: 1px solid transparent!important; }
    #shortcode-editor { border: 1px solid transparent!important; }
    #shortcode-editor label { display: block; float: left; margin: 0 8px 0 0; width: auto!important; }
    #shortcode-editor select{ padding: 0px!important; }
    #shortcode-editor select,
    #shortcode-editor input,
    #shortcode-editor textarea { display: block; float: left; width: 100%;padding: 10px; margin-bottom:2%;font-size:14px; box-shadow: 3px 5px 6px rgba(0, 0, 0, 0.12), 0px -5px 35px rgba(255, 255, 255, 0.84);}
    #shortcode-editor input:focus,
    #shortcode-editor textarea:focus {background: #fff;border: 1px solid #bdbdbd !important;color: #444;-webkit-box-shadow: inset 1px 1px 4px rgba(0,0,0,0.1);-moz-box-shadow: inset 1px 1px 4px rgba(0,0,0,0.1); box-shadow: inset 1px 1px 4px rgba(0,0,0,0.1); }
    #shortcode-editor select {  box-shadow: 3px 5px 6px rgba(0, 0, 0, 0.12), 0px -5px 35px rgba(255, 255, 255, 0.84); color: #000000ab; }
    /*#shortcode-editor #insert { text-align: center; bottom: -45px; right: 0px; display: block; margin: 10px 0 0; text-decoration: none;margin-top:2%;margin-bottom:2%; }*/
    /*#shortcode-editor #insert {
        display: block;
        border: 1px solid #2891bb!important;
        border-radius: 3px!important;
        padding: 4px!important;
        color: white!important;
        background-color: #2891bb!important;
    }*/
    #shortcode-editor .form-section{ margin-bottom: 20px; }


    #wpex-shortcodes-popup h2{ margin-bottom: 20px; fontsize: 14px; color: #333; padding: 10px 10px 11px 10px; border: 1px solid #d0cfcf; margin-top: 20px;}
    #select-shortcode-wrap{ margin-bottom: 20px; }
    .clear{ clear: both; }

    hr{ outline: none; border: 0; border-top: 1px solid #ddd; border-bottom: 1px solid #fff; margin: 30px auto; height: 2px;}

    #su-generator-choices a
    {
        position: relative;
        display: block;
        width: 20%;
        height: 28px;
        min-width: 130px;
        padding: 0 5px 0 30px;
        float: left;
        overflow: hidden;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        border-bottom: 1px dotted #e5e5e5;
        color: #222;
        vertical-align: top;
        text-align: left;
        line-height: 28px;
        cursor: pointer;
    }
    #su-generator-choices a:hover
    {
        border-bottom: 1px solid #333;
        background: #333;
        color: #fff;
    }


    /* Cp */
    .switch {
      position: relative;
      display: inline-block;
      width: 60px;
      height: 34px;
    }

    .switch input {display:none!important;}
    .slider {
      position: absolute;
      cursor: pointer;
      top: 25px;
      left: 58px;
      right: -105px;
      width: auto;
      bottom: 0;
      background-color: #ccc;
      -webkit-transition: .4s;
      transition: .4s;
    }

    .slider:before {
      position: absolute;
      content: "";
      height: 26px;
      width: 26px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      -webkit-transition: .4s;
      transition: .4s;
    }

    input:checked + .slider {
      background-color: #2f93c1; width:auto;
    }

    input:focus + .slider {
      box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before {
      -webkit-transform: translateX(26px);
      -ms-transform: translateX(26px);
      transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
      border-radius: 34px;
    }

    .slider.round:before {
      border-radius: 50%;
    }

    /* new css */
    /* Style inputs, select elements and textareas */
    #shortcode-editor input[type=text],#shortcode-editor select,#shortcode-editor textarea{
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      resize: vertical;
    }

    /* Style the label to display next to the inputs */
    label {
      padding: 12px 12px 12px 0;
      display: inline-block;
    }

    /* Style the submit button */
    #shortcode-editor input[type=submit] {
      background-color: #4CAF50;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: right;
    }

    /* Style the container */


    /* Floating column for labels: 25% width */
    .col-25 {
      float: left;
      width: 25%;
      margin-top: 6px;
    }

    /* Floating column for inputs: 75% width */
    .col-75 {
      float: left;
      width: 75%;
      margin-top: 6px;
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    #selected-shortcode span output {
        border: 1px solid #333333b0;
        padding: 12px 15px;
        margin-left: 24px;
        position: relative;
        top: 14px;
        background-color: #333333b0;
        border-radius: 100%;
        color: #fff;
        font-weight: bold;
        font-size: 20px;
        text-shadow: 2px 8px 6px rgba(0,0,0,0.2), 0px -5px 35px rgba(255,255,255,0.3);
    }
    #selected-shortcode .col-25 label {
        color: #555;
        font-weight: bold;
        font-size: 16px;
        text-shadow: 2px 3px 6px rgba(0,0,0,0.2), 0px -5px 35px rgba(255,255,255,0.3);
    }

    input.button.button-small.wp-picker-clear {
        width: auto!important;
        padding: 0px 14px!important;
    }
    .wp-picker-input-wrap label {
        padding: 0!important;
    }
    /****** Media upload iframe **********/

    .iconpicker-container .iconpicker {
        overflow: inherit!important;
    }
    .iconpicker .iconpicker-item.iconpicker-selected {
        color: #1caae0;
        background: #23282d;
    }
    input#upload-btn {
        display: inline-block;
        text-decoration: none;
        font-size: 13px;
        line-height: 26px;
        height: 28px;
        width: 27%;
        margin-right: 2px!important;
        margin: 0;
        padding: 0 10px 1px;
        cursor: pointer;
        border-width: 1px;
        border-style: solid;
        -webkit-appearance: none;
        border-radius: 3px;
        white-space: nowrap;
        box-sizing: border-box;
    }

    /* 23-12-2017 */
    #shortcode-editor a.shortcode-editor-back {
        text-decoration: none;
        display: inline-block;
        border: 1px solid;
        padding: 4px;
        border-radius: 13px;
    }
    #shortcode-editor a.shortcode-editor-back:hover {
        background: #1cabe0;
        color: #fff;
        text-shadow: none;
    }
    #shortcode-editor span.shortcode-editor-title {
        margin-left: 7px;
        display: inline-block;
        color: #00a0d2;
        font-weight: bold;
        font-size: 18px;
        text-shadow: 2px 8px 6px rgba(0,0,0,0.2), 0px -5px 35px rgba(255,255,255,0.3);
    }


    @media (max-width: 767px) {
    div#TB_ajaxContent {
        width: 100%!important;
        height: 100%!important;
            clear: both;
        padding:0px!important; 
        overflow: auto;
        text-align: left;
        line-height: 1.4em;
    }
    #TB_window {
        position: fixed;
        margin: 0px!important;
        left: 4%!important;
    }
    }
    span.blog-editor-title {
        margin-left: 7px;
        display: inline-block;
        color: #00a0d2;
        font-weight: bold;
        font-size: 18px;
        text-shadow: 2px 8px 6px rgba(0,0,0,0.2), 0px -5px 35px rgba(255,255,255,0.3);
    }

    .col-md-12.settings {
        padding: 37px;
        margin-top: 41px;
        box-shadow: 1px 1px 1px 1px #ccc;
    }
    .settings .sub {    
        display: inline;
        width: 10%;
        margin-left: 14px;
        color: #fff;
        font-size: 15px;
        background-color: #00a0d2bd;
    }
    .settings input[type=text] {    
        display: inline;
        width: 36%;
    }
    .get_link {
        font-size: 18px;
        color: #fff!important;
        background: #333;
        /* font-weight: bold; */
        padding: 9px 12px;
        border-left: 3px solid #00a0d2;
        text-decoration: none !important;
           transition: all 0.5s; 
        -moz-transition: all 0.5s; 
        -webkit-transition: all 0.5s; 
        -o-transition: all 0.5s; 
    }
    .product-tbs.nav>li.active>a, .product-tbs.nav>li>a:focus, .product-tbs.nav>li>a:hover {
        text-decoration: none;
        color: #fff!important;
        background-color: #3fb6db!important;
    }
    .product-tbs.nav-tabs>li>a {
        color: #333;
    }
    .get_link:hover{ 
         text-decoration: none!important;    
        background: #4a4a4a;
           transition: all 0.5s; 
        -moz-transition: all 0.5s; 
        -webkit-transition: all 0.5s; 
        -o-transition: all 0.5s; 
        transition: opacity .25s ease-out;
        -moz-transition: opacity .25s ease-out;
        -webkit-transition: opacity .25s ease-out;
        -o-transition: opacity .25s ease-out;
     }
     
    .get_link:hover i.fa.fa-hand-o-right{
    background: #4a4a4a;
    color: #00a0d2;
       transition: all 0.5s; 
        -moz-transition: all 0.5s; 
        -webkit-transition: all 0.5s; 
        -o-transition: all 0.5s; 
        transition: opacity .25s ease-out;
        -moz-transition: opacity .25s ease-out;
        -webkit-transition: opacity .25s ease-out;
        -o-transition: opacity .25s ease-out;
    }

    i.fa.fa-hand-o-right {
        color: #fff;
        margin-left: -7px;
        font-size: 29px;
        background: rgba(0, 0, 0, 0.78);
        text-align: center;
        line-height: 42px;
        height: 48px;
        width: 48px;
    }
    /*----admin-our-products-ddd---*/
    .navbar-collapse ul.nav.navbar-nav {
        display: block!important;
    }


    .p_header{
    color:#fff;
    padding:50px 0;
    }
    .p_header h1{
    margin:0;
    }
    .p_header .navbar-form{
    margin:0;
    }
    .p_front{
    background:#ddd;
    padding:50px 0;
    }
    .p_front .container{
    background:#fff;
    }
    .p_head{
    margin:0;
    }
    .p_front .p_form {
      float: right;
      display: inline-flex;
      margin-top: 20px;
    }
    .p_front .p_form label {
    margin-right:20px;
    }
    .p_front .p_form  .form-control {
      min-width: 160px;
    }
    .p-select {
      display: inline-block;
      position: relative;
    }
    select.form-control {
      box-shadow: none;
      color: rgba(145, 145, 145, 0.7);
      line-height: 1.5;
    }
    select {
      -moz-appearance: none;
      display: inline-block;
      font: inherit;
      outline: medium none;
      position: relative;
    }
    .p-select::after {
      border-color: #919191 transparent transparent;
      border-style: solid;
      border-width: 5px 5px 0;
      content: "";
      height: 8px;
      line-height: 0;
      margin-top: -2px;
      position: absolute;
      right: 11px;
      top: 50%;
      width: 8px;
      z-index: 1;
    }
    .p_plugin {
      border: 1px solid #ccc;
      margin:40px 0;
      padding: 20px 10px;
    }
    .p_plugin_pic .img-thumbnail{
    padding:0;
    border:0;
    display:block;
    position:relative
    }
    .p-box{
    margin:0;
    }
    .p-box h2 a {
        text-decoration: none;
        color: #4a4848;
        display: block;
        font-weight: bold;
        text-shadow: 2px 2px 2px #ccc;
        line-height: 26px;
        font-size: 24px;
    }
    .p_head.theme h1 {
        text-align: center;
         font-weight: bold;
        text-shadow: 2px 2px 2px #ccc;
    }
    .p_rateing{
    list-style:none;
    padding:0;
    margin:0;
    }
    .p_rateing li{
    display:inline-block;
    }
    .price {
      line-height: 1;
      margin: 0 0 30px;
      text-align: center;
    }
    .currency {
      display: inline-block;
      font-size: 16px;
      margin-right: 10px;
      text-transform: uppercase;
      vertical-align: middle;
    }
    .price-number {
      color: #5b5b5b;
      display: inline-block;
      font-size: 43px;
      vertical-align: middle;
    }
    .btn-group-vertical .btn-lg {
        font-size: 16px;
        font-weight: 500;
        margin: 0 0 4px;
        padding-left: 15px;
        padding-right: 15px;
    }
    .p_plugin_desc p{
    margin:10px 0;
    color:#777;
    }
    .p_plugin_desc_cming p{
    margin:10px 0;
    color:#777;
    font-size: 15px;
    }
    .star-rating a {
        color: #ffd700;
        font-size:18px;
    }
    .menu,
    .spa-menu-head{
    margin:0;
    }
    .p_plugin_pic .img-thumbnail .overlay {
    background-color: rgba(255,255,255,0.90);
    border: 15px solid rgba(0,0,0,0.30);
    height: 100%;
    opacity: 0;
    visibility:hidden;
    position: absolute;
    text-align: center;
    top: 0;
    width: 100%;
    color: #fff;
    }
    .p_plugin_pic:hover .overlay {
    opacity: 0.75;
    visibility:visible;
    transition:all ease 0.6s;
    }
    .p_plugin_pic .overlay a{
    color:#fff;
    text-decoration:none;
    }
    .p_plugin_pic .overlay i {
    border-radius: 50%;
    font-size: 20px;
    height: 40px;
    padding: 8px 0;
    width:40px;
    border:1px solid #666;
    color:#666;
    margin-top:30%;
    }
    .p-box h2{
    margin:0;
    }
    .p-box p strong {
        font-size: 16px !important;
    }
    .p-box ul li {
        margin-bottom: 2px !important;
    }
    @media (max-width:768px){
    .col-md-12.settings {
        padding: 3px; 
        margin-top: 21px;

    }
    .btn-group-vertical .btn-lg {
        padding: 6px 15px;
    }
    .settings .sub {
        display: inline;
        width: 50%;
        margin-left: 0;
      margin-top: 15px;
    }
    .settings input[type=text] {
        display: inline;
        width: 100%;
    }


    .p-box h2{
    font-size:24px;
    }
    .p-select::after {
        margin-top: -5px;
        right: 5px;
    }
    .navbar-right {
        float: left !important;
        margin-top: 20px !important;
    }
    }
    @media (max-width:767px){
    .menu .dropdown-menu {
    position:relative !important;
    left:0 !important;
    width:100%;
    }
    }
    @media (max-width:480px){
    .btn-group-vertical .btn-lg {
        display: inline-block;
        width: auto;
        margin: 7px 2px;
        padding: 5px 15px;
        border-radius: 0 !important;
    }
    .price {
        margin: 0px 0px 10px;
        text-align: left;
        display:inline-block;   
    }
    .p-box h2 {
        font-size: 20px;
    }
    .section-title{
    font-size:30px;
    }
    .p_front .p_form {
        float: left;
    }
    .price-number {
        font-size: 30px;
    }
    .p_plugin_desc p {
        font-size: 14px;
    }
    .p_head h1{
    font-size:24px;
    }
    .input-lg {
        height: 35px;
        padding: 5px 10px;
        float: left;
        width:64%;
        display:inline-block;
    }
    .navbar-right {
        float: none !important;
    }
    .navbar-form .form-group {
        margin-bottom: 0px;
    }
    .btn-lg {
    padding: 5px 15px;
    }
    }
    li:hover {
        cursor: pointer;
    }
    #theme , #plugin , #comingup {
        padding: 0 10px;
        font-size:20px;
    }
    #plugin {
        font-size:20px;
    }
    .menu {
        padding-top: 0 !important;
    }
    .theme-menu.active button {
      background-color: #0098ff !important;
      color: #fff !important;
    }
    .p_front{
        display:none;
    }
    .p_front.active{
        display:block !important;
    }
    .tp {
        font-size: 18px;
        font-weight: 700;
        padding-top: 12px;
        padding-bottom: 8px;
    }
    .p_head h2 {
        color: #252424d1;
        font-weight: bold;
        margin-bottom: 25px;
        padding-left: 15px;
    }
    .p_head p {
        color: #434343c7;
        font-size: 17px;
        text-align: justify;
    }
    .panel-default>.panel-heading {
        background-color: #e0ecf0;
    }
    h4.panel-title {
        font-weight: bold;
    }
    .panel-body h4 {
        color: #333;
    }
    a.view-demo {
        padding: 10px;
        color: #fff;
        font-size: 18px;
        box-shadow: 2px 2px 2px #ccc;
        background-color: #46b450;
    }
    .imgheathcare {
        float:right;
        width: 28%;
        height: 470px;
    }
    .row.p_plugin.blog_gallery {
        margin: 15px 0px;
    }

    .page-wrapper.ui-tabs-panel{
        background-color:#fff;
    }
    .product-main-cont .nav-tabs {
        border-bottom: 1px solid #ddd;
        display: flex;
        width: 100%;
    }

    .product-main-cont  .nav-tabs>li {
        float: left;
        margin-bottom: -1px;
        width: 50%;
        text-align: center;
    }
    img.img-responsive {
        width: 100%;
        height: 100%;
    }
    .product-main-cont .nav-tabs>li {
   float: left;
   margin-bottom: -1px;
   width: 50%;
   text-align: center;
}
.product-tbs.nav>li.active>a, .product-tbs.nav>li>a:focus, .product-tbs.nav>li>a:hover {
   text-decoration: none;
   color: #fff!important;
   background-color: #3fb6db!important;
}
.product-main-cont .nav-tabs {
   border-bottom: 1px solid #ddd;
   display: flex;
   width: 100%;
}
.col-md-10.product-main-cont {
    /*margin: 40px auto;
    float: none;*/
}
span.elw_shortcode_heading {
    margin: 0;
    padding: 30px 0;
    text-align: center;
    font-weight: bold;
    text-shadow: 2px 2px #ccc;
    font-size: 39px;
    color: #3eabf6;
    /* font-weight: 400; */
}
.about-wrap {
    max-width: 100%;
}
.seting-page .col-md-12.settings {
    margin-bottom: 4%;
    margin-top: 0%;
    box-shadow: 1px 1px 10px -1px #acaaaa;
    border-radius: 8px;
}

.col-md-12.settings {
    padding: 0px;
}
.header-logo {
    padding: 15px;
}
</style>