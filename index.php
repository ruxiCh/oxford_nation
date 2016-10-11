<?php include("./data_arrays/main.php")?>
<!DOCTYPE html>
<html>	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href='https://fonts.googleapis.com/css?family=Merriweather|Open+Sans:400,800' rel='stylesheet' type='text/css'>
		<link type='text/css' rel='stylesheet' href="css/styles.min.css">
		<title>Oxford Nation | Study at the UK's top universities</title>
	</head>
	<body>
				<header>
						<h1 class='sr-only'>Oxford Nation</h1>
                        <nav>
                            <a class="nav_link" target="_blank" href='http://ask.fm/OxfordNation'>Ask Us</a>
                            <a class="nav_link bold" href='#contact-form'>Apply Now!</a>
                        </nav>
				</header>
				<div id='main_screen'>
						<div class="overlay"></div>
						<div class="row">
							<div class='logo_white'></div>
							<div class="social_media">
								<a target="_blank" href='https://www.facebook.com/oxfordnation'><span class='social_btn icon-facebook3'></span></a>
								<a target="_blank" href='https://twitter.com/oxfordnation'><span class='social_btn icon-twitter3'></span></a>
							</div>
						</div>
						<h3 class="mission_statement">We help students gain admission at the best universities in the UK</h3>
						<div class="glyphicon glyphicon-chevron-down"></div>
				</div>
				<div id='intro_text_section'>
					<div class="overlay"></div>
					<div class='intro_text'>
						<h1>Since we started, 100% of our students were admitted to a top 10 UK university</h1>
						<p>We are a small team of graduates from top UK universities: Oxford, Cambridge, and Exeter. We help students with all stages of
							the admission process: UCAS and personal statement, English language and other tests, and Oxford and Cambridge interviews.
						</p>
					</div>
				</div>
				<div id='features_section'>
					<h1 class="section_title">Why choose Oxford Nation?</h1>
					<div class='features_container'>
						<?php foreach($features as $v):?>
						<div class='feature <?php echo $v["class"];?>'>
							<div class='glyphicon glyphicon-<?php echo $v["icon_class"];?>'></div>
							<h2 class='feature_title'><?php echo $v["title"];?></h2>
							<p class="feature_text"><?php echo $v["text"];?></p>
						</div>
						<?php endforeach;?>
					</div>
				</div>
				<div class='cta_bar options'>
					<div class="overlay"></div>
					<a target="_blank" href='http://www.theguardian.com/education/ng-interactive/2015/may/25/university-league-tables-2016'>
						<h4>Discover your options</h4>
					</a>
				</div>
				<div id='testimonial_section'>
					<h1 class="section_title">What do our students say?</h1>
					<div class="controls visible-mob">
						<div class="glyphicon glyphicon-chevron-left"></div>
						<?php foreach($testimonials as $k=>$v):?>
							<div class="marker <?php echo $k===0 ? "active" : "";?>" data-target="<?php echo $k +1;?>"></div>
						<?php endforeach;?>
						<div class="glyphicon glyphicon-chevron-right"></div>
					</div>
					<div class="testimonial_container">

						<div class="col">
							<?php foreach($testimonials_first_col as $k=>$v):?>
								<div class="testimonial <?php echo $k === 0 ? "active": "";?>" data-target="<?php echo $k+1;?>">
									<p class="testimonial_text"><?php echo $v["text"];?></p>
									<h6 class="testimonial_author">
										<?php echo $v["author"]?> - <a target="_blank" href="<?php echo $v["uni_link"]?>" class="author_uni"><?php echo $v["university"]?></a>
									</h6>
								</div>
							<?php endforeach;?>
						</div>
						<div class="separating_line hidden-mob"></div>
						<div class="col">
							<?php foreach($testimonials_second_col as $k=>$v):?>
								<div class="testimonial" data-target="<?php echo $k + count($testimonials_first_col) + 1 ;?>">
									<p class="testimonial_text"><?php echo $v["text"];?></p>
									<h6 class="testimonial_author">
										<?php echo $v["author"]?> - <a target="_blank" href="<?php echo $v["uni_link"]?>" class="author_uni"><?php echo $v["university"]?></a>
									</h6>
								</div>
							<?php endforeach;?>
						</div>
					</div>
				</div>
				<div class='cta_bar contact'>
					<div class="overlay"></div>
					<a target="_blank" href='https://docs.google.com/forms/d/1lcBL9xiIStyQoEAu81rF-CFdA6ZMzZHcPwYRXnK9KJc/viewform?chromeless=1&edit_requested=true'>
						<h4>Get in touch - Call us at 0722.922.903 or <span class="visible-tablet visible-mob">tap</span> <span class="hidden-tablet hidden-mob">click</span> here and we'll contact you!</h4>
					</a>
				</div>
				<footer>
					<div class="logo_color"></div>
					<div class="contact_list">
						<h3>Contact</h3>
						<div class="contact_item contact_phone">
							<div class="contact_icon glyphicon glyphicon-phone-alt"></div>
							<a href='tel:+40722922903'>0722.922.903</a>
						</div>
						<div class="contact_item contact_mail">
							<div class="contact_icon glyphicon glyphicon-envelope"></div>
							<a href='mailto:contact@oxfordnation.ro'>contact@oxfordnation.ro</a>
						</div>
					</div>
				</footer>
				<script src="js/scripts.min.js"></script>
		</body>
	</html>