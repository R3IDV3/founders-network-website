<!DOCTYPE html>
<html>
	<head>
		<title>Western Founders Network - Education Executive Applications</title>
		<link rel="stylesheet" type="text/css" href="/css/style.css">
	</head>
	<body>
		<?php include 'inc/assets.php' ?>
		<?php include 'inc/ip-header.php' ?>
		<?php include 'inc/nav-portrait.php' ?>
		<div class="ip-main">
			<header>
				<section class="site-section-heading -applications">
					<div class="ac" style="width: 80vw;">
						<h1 class="small-caps site-section-title">Education Executive Application</h1>
						<p class="serif"><em>Join the Education portfolio for the 2015-2016 year as an Executive and take advantage of all that Founders Network has to offer.</em></p>
					</div>
				</section>
				<?php include 'inc/nav.php' ?>
			</header>
			<article>
				<header class="blurb">
					<h1 class="small-caps">Role <span class="char">&</span> Responsibilities</h1>
					<p>Help Founders Network plan and execute Educationals alongside Education Directors and the Vice President, Education. Education Executives will help design curricula and teach at Educationals. Organization, dedication, proactivity and creativity are key skills required for success in this position. Reasonable practical knowledge and experience in any programming language, including Web, is appropriate.</p>
				</header>
			</article>
			<article class="form" style="margin-top: 0;">
				<form action="/eearesults.php" enctype="multipart/form-data" method="post" id="application-form" name="applicationForm">
					<div class="input-group">
						<label for="firstname-input" class="small-caps">First Name</label><br>
						<input type="text" name="firstname" id="firstname-input" placeholder="First"><br>
						<span class="error-message"><em></em></span>
					</div>
					<div class="input-group">
						<label for="lastname-input" class="small-caps">Last Name</label><br>
						<input type="text" name="lastname" id="lastname-input" placeholder="Last"><br>
						<span class="error-message"><em></em></span>
					</div>
					<div class="input-group">
						<label for="email-input" class="small-caps">UWO Email</label><br>
						<input type="email" name="email" id="email-input" placeholder="example@uwo.ca"><br>
						<span class="error-message"><em></em></span>
					</div>
					<div class="input-group">
						<label for="year-of-study-input" class="small-caps">Year of Study</label><br>
						<input type="number" min="1" max="4" name="year-of-study" id="year-of-study-input" placeholder="1-4"><br>
						<span class="error-message"><em></em></span>
					</div>
					<div class="input-group">
						<label for="faculty-input" class="small-caps">Faculty</label><br>
						<input type="text" name="faculty" id="faculty-input" placeholder="Faculty"><br>
						<span class="error-message"><em></em></span>
					</div>
					<br>
					Please attach your PDF resume (maximum size 1MB)<br>
					<input type="file" name="resume" id="resume">
					<p class="application-process">Successful applicants will be invited for an interview.</p>
					<button type="reset" onclick="$('.error').removeClass('error');$('#education-qs, #finance-qs, #marketing-qs, #operations-qs').css('display', 'none');$('button[type=submit]').attr('disabled', 'disabled');">Reset</button><button type="submit" name="submit" disabled>Submit</button><p class="error-message"><em>Ensure you have entered all fields accurately and attached a resume.</em></p>
					<br><p class="error-message" style="display: block;"><em>Note: It may take a few moments for your application to be processed before you are taken to the results page. Do not close or refresh the page.</em></p>
				</form>
			</article>
			<?php include 'inc/footer.php' ?>
		</div><!-- .ip-main -->
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="/dist/jquery.easing.1.3.js"></script>
	<script src="/dist/fn.min.js"></script>
	<script src="/dist/eeapplication.js"></script>
	</body>
</html>