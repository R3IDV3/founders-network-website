<!DOCTYPE html>
<html>
	<head>
		<title>Western Founders Network - Director Applications</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<?php include 'inc/assets.php' ?>
		<?php include 'inc/ip-header.php' ?>
		<?php include 'inc/nav-portrait.php' ?>
		<div class="ip-main">
			<header>
				<section class="site-section-heading -applications">
					<div class="ac" style="width: 80vw;">
						<h1 class="small-caps site-section-title">Director Applications</h1>
						<p class="serif"><em>Join one of our portfolios for the 2016-2017 year as a Director and take advantage of all that Founders Network has to offer.</em></p>
					</div>
				</section>
				<?php include 'inc/nav.php' ?>
			</header>
			<article class="form">
				<form action="aresults.php" enctype="multipart/form-data" method="post" id="application-form" name="applicationForm">
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
						<input type="number" min="1" max="4" name="year-of-study" id="year-of-study-input" placeholder="1"><br>
						<span class="error-message"><em></em></span>
					</div>
					<div class="input-group">
						<label for="faculty-input" class="small-caps">Faculty <span class="char">/</span> Program</label><br>
						<input type="text" name="faculty" id="faculty-input" placeholder="Faculty / Program"><br>
						<span class="error-message"><em></em></span>
					</div>
					<span class="small-caps">Select a Position Below</span><br>
					<fieldset>
						<legend class="small-caps">Operations <span class="char">&</span> Entrepreneurship</legend>
						<input type="checkbox" name="position[]" id="director-of-logistics" value="director-of-logistics"><label for="director-of-logistics"> Director of Logistics</label><span class="small-caps pos-desc-toggle" data-desc="director-of-logistics">Learn More</span><br>
							<p class="pos-desc-content" data-desc="director-of-logistics"></p>
						<input type="checkbox" name="position[]" id="director-of-special-events-oae" value="director-of-special-events-oae"><label for="director-of-special-events-oae"> Director of Special Events</label><span class="small-caps pos-desc-toggle" data-desc="director-of-special-events-oae">Learn More</span><br>
							<p class="pos-desc-content" data-desc="director-of-special-events-oae"></p>
                        <input type="checkbox" name="position[]" id="director-of-social-events" value="director-of-social-events"><label for="director-of-social-events"> Director of Social Events</label><span class="small-caps pos-desc-toggle" data-desc="director-of-social-events">Learn More</span>
							<p class="pos-desc-content" data-desc="director-of-social-events"></p>
					</fieldset>
					
					<fieldset>
						<legend class="small-caps">Industry</legend>
						<input type="checkbox" name="position[]" id="director-of-case-competition" value="director-of-case-competition"><label for="director-of-case-competition"> Director of Case Competition</label><span class="small-caps pos-desc-toggle" data-desc="director-of-case-competition">Learn More</span><br>
							<p class="pos-desc-content" data-desc="director-of-case-competition"></p>
						<input type="checkbox" name="position[]" id="director-of-careers" value="director-of-careers"><label for="director-of-careers"> Director of Careers</label><span class="small-caps pos-desc-toggle" data-desc="director-of-careers">Learn More</span><br>
							<p class="pos-desc-content" data-desc="director-of-careers"></p>
                        <input type="checkbox" name="position[]" id="director-of-special-events-i" value="director-of-special-events-i"><label for="director-of-special-events-i"> Director of Special Events</label><span class="small-caps pos-desc-toggle" data-desc="director-of-special-events-i">Learn More</span><br>
							<p class="pos-desc-content" data-desc="director-of-special-events-i"></p>
                        <input type="checkbox" name="position[]" id="director-of-techlink" value="director-of-techlink"><label for="director-of-techlink"> Director of TechLink</label><span class="small-caps pos-desc-toggle" data-desc="director-of-techlink">Learn More</span><br>
							<p class="pos-desc-content" data-desc="director-of-techlink"></p>
                        <input type="checkbox" name="position[]" id="director-of-venture-capital-initiatives" value="director-of-venture-capital-initiatives"><label for="director-of-venture-capital-initiatives"> Director of Venture Capital Initiatives</label><span class="small-caps pos-desc-toggle" data-desc="director-of-venture-capital-initiatives">Learn More</span>
                            <p class="pos-desc-content" data-desc="director-of-venture-capital-initiatives"></p>
					</fieldset>
					
					<fieldset>
						<legend class="small-caps">Marketing <span class="char">&</span> Community Engagement</legend>
						<input type="checkbox" name="position[]" id="director-of-engagement" value="director-of-engagement"><label for="director-of-engagement"> Director of Engagement</label><span class="small-caps pos-desc-toggle" data-desc="director-of-engagement">Learn More</span><br>
							<p class="pos-desc-content" data-desc="director-of-engagement"></p>
						<input type="checkbox" name="position[]" id="director-of-communications" value="director-of-communications"><label for="director-of-communications"> Director of Communications</label><span class="small-caps pos-desc-toggle" data-desc="director-of-communications">Learn More</span><br>
							<p class="pos-desc-content" data-desc="director-of-communications"></p>
                        <input type="checkbox" name="position[]" id="director-of-digital-media-social-networking" value="director-of-digital-media-social-networking"><label for="director-of-digital-media-social-networking"> Director of Digital Media & Social Networking</label><span class="small-caps pos-desc-toggle" data-desc="director-of-digital-media-social-networking">Learn More</span><br>
							<p class="pos-desc-content" data-desc="director-of-digital-media-social-networking"></p>
                        <input type="checkbox" name="position[]" id="director-of-graphic-design" value="director-of-graphic-design"><label for="director-of-graphic-design"> Director of Graphic Design <span class="small-caps"><span class="char">(2</span> positions<span class="char">)</span></span></label><span class="small-caps pos-desc-toggle" data-desc="director-of-graphic-design">Learn More</span><br>
							<p class="pos-desc-content" data-desc="director-of-graphic-design"></p>
                        <input type="checkbox" name="position[]" id="director-of-photography" value="director-of-photography"><label for="director-of-photography"> Director of Photography</label><span class="small-caps pos-desc-toggle" data-desc="director-of-photography">Learn More</span><br>
                            <p class="pos-desc-content" data-desc="director-of-photography"></p>
                        <input type="checkbox" name="position[]" id="director-of-web-development-design" value="director-of-web-development-design"><label for="director-of-web-development-design"> Director of Web Development & Design</label><span class="small-caps pos-desc-toggle" data-desc="director-of-web-development-design">Learn More</span><br>
							<p class="pos-desc-content" data-desc="director-of-web-development-design"></p>
					</fieldset>
					
					<fieldset>
						<legend class="small-caps">Finance <span class="char">&</span> Business Development Portfolio</legend>
						<input type="checkbox" name="position[]" id="director-of-affiliates-network" value="director-of-affiliates-network"><label for="director-of-affiliates-network"> Director of Affiliates Network</label><span class="small-caps pos-desc-toggle" data-desc="director-of-affiliates-network">Learn More</span><br>
							<p class="pos-desc-content" data-desc="director-of-engagement"></p>
						<input type="checkbox" name="position[]" id="director-of-special-events-sponsorship" value="director-of-special-events-sponsorship"><label for="director-of-special-events-sponsorship"> Director of Special Events Sponsorship</label><span class="small-caps pos-desc-toggle" data-desc="director-of-special-events-sponsorship">Learn More</span>
							<p class="pos-desc-content" data-desc="director-of-special-events-sponsorship"></p>
					</fieldset>
					
					<div class="question">
						<label for="universal-q-textarea">Tell us about something cool you've done in the past 12 months.</label><br>
						<textarea name="universal-q" id="universal-q-textarea" placeholder="Explain your answer here..."></textarea>
						<span class="error-message"><em></em></span>
					</div>
					<div id="education-qs">
						<div class="question">
							<label for="education-q1-textarea">What do you think your daily activities and challenges will be in this position?</label><br>
							<textarea name="education-q1" id="education-q1-textarea" placeholder="Explain your answer here..."></textarea>
							<span class="error-message"><em></em></span>
						</div>
					</div>
					<div id="finance-qs">
						<div class="question">
							<label for="finance-q1-textarea">In your opinion, what are 2 characteristics of a fitting sponsor for Founders Network and why? <strong>(350 word max)</strong></label><br>
							<textarea name="finance-q1" id="finance-q1-textarea" placeholder="Explain your answer here..."></textarea>
							<span class="error-message"><em></em></span>
						</div>
						<div class="question">
							<label for="finance-q2-textarea">Imagine you are the CEO of any existing tech start-up of your choice (some examples include: Shopify, Tilt, Oculus, Better Place, Etsy). If you had the opportunity to persuade an angel-investor to fund your company, how would you entice them to invest? <strong>(500 word max)</strong></label><br>
							<textarea name="finance-q2" id="finance-q2-textarea" placeholder="Explain your answer here..."></textarea>
							<span class="error-message"><em></em></span>
						</div>
					</div>
					<div id="marketing-qs">
						<div class="question">
							<label for="marketing-q1-textarea">If you were asked to 'sell' Founders Network, what would you say?</label><br>
							<textarea name="marketing-q1" id="marketing-q1-textarea" placeholder="Explain your answer here..."></textarea>
							<span class="error-message"><em></em></span>
						</div>
						Please attach examples of your photography and graphic design portfolio as a PDF (maximum size 5MB)<br>
						<input type="file" name="marketing-portfolio">
					</div>
					<div id="operations-qs">
						<div class="question">
							<label for="operations-q1-textarea">What kind of event do you see Founders Network hosting in the coming year? Explain how you would plan this event in  exactly 10 steps.</label><br>
							<textarea name="operations-q1" id="operations-q1-textarea" placeholder="Explain your answer here..."></textarea>
							<span class="error-message"><em></em></span>
						</div>
					</div>
					<br>
					Please attach your PDF resume (maximum size 5MB)<br>
					<input type="file" name="resume" id="resume">
					<p class="application-process">Successful applicants will be invited for an interview.</p>
					<button type="reset" onclick="$('.error').removeClass('error');$('#education-qs, #finance-qs, #marketing-qs, #operations-qs').css('display', 'none');$('button[type=submit]').attr('disabled', 'disabled');">Reset</button><button type="submit" name="submit" disabled>Submit</button><p class="error-message"><em>Ensure you have entered all fields accurately, selected a position and attached a resume.</em></p>
					<br><p class="error-message" style="display: block;"><em>Note: It may take a few moments for your application to be processed before you are taken to the results page. Do not close or refresh the page.</em></p>
				</form>
			</article>
			<?php include 'inc/footer.php' ?>
		</div><!-- .ip-main -->
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="dist/jquery.easing.1.3.js"></script>
	<script src="dist/fn.min.js"></script>
	<script src="dist/dapplication.js"></script>
	</body>
</html>