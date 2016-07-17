<!DOCTYPE html>
<html>
	<head>
		<title>Western Founders Network</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="//a.mailmunch.co/app/v1/site.js" id="mailmunch-script" data-mailmunch-site-id="244825" async="async"></script>
	</head>
	<body id="home">
		<?php include 'inc/assets.php' ?>
		<?php include 'inc/ip-header.php' ?>
		<?php include 'inc/nav-portrait.php' ?>
		<div class="ip-main">
			<header class="home">
				<?php include 'inc/nav.php' ?>
				<table class="feature">
					<tr>
						<td>
							<h1></h1>
<!-- 							<a href="https://www.usc-online.ca/clubs_registration.asp?cid=8&scid=11&pid=7296" target="_blank" class="btn small-caps">Join Now</a> &nbsp;&nbsp; --><a href="/director-applications" class="btn small-caps">Director Applications</a>
						</td>
						<td>
							<img src="" >
						</td>
					</tr>
				</table>
				<i class="vc t-decrement fa fa-angle-left"></i>
				<i class="vc t-increment fa fa-angle-right"></i>
				<div class="t-trigger-wrapper"></div>
			</header>
			<article>
				<header class="blurb">
					<h1 class="small-caps">Welcome</h1>
					<p>Founders Network is a platform for aspiring tech entrepreneurs at Western University. Our goal is to foster a startup culture on campus by giving students the knowhow and the means to put their ideas into action.</p>
				</header>
				<section class="stats">
					<div class="stat">
						<i class="fa fa-rocket"></i>
						<div class="count fit"><span class="n">2013</span></div>
						<h1 class="small-caps fit">Launched</h1>
					</div><div class="stat">
						<i class="fa fa-users"></i>
						<div class="count fit"><span class="n">350</span>+</div>
						<h1 class="small-caps fit">Members</h1>
					</div><div class="stat">
						<i class="fa fa-university"></i>
						<div class="count fit" ><span class="n">3</span></div>
						<h1 class="small-caps fit">Western Campuses</h1>
					</div><div class="stat">
						<i class="fa fa-graduation-cap"></i>
						<div class="count fit"><span class="n">15</span></div>
						<h1 class="small-caps fit">Majors Represented</h1>
					</div>
				</section>
				<section class="programs">
					<div class="program">
						<a class="diamond-icon" title="Learn More" href="programs.php"><i class="fa fa-code"></i></a>
						<h1 class="small-caps">Educational Programs</h1>
						<p>Founders Network's Educational Program aims to equip Western students with the necessary skills needed to bring their ideas to market. Students from across all faculties are welcome: from computer science students interested in iOS programming to business students with no prior programming background. Programs are taught by senior students who have experience in the field.</p>
					</div><div class="program">
						<a class="diamond-icon" title="Learn More" href="events.php"><i class="fa fa-lightbulb-o"></i></a>
						<h1 class="small-caps">Entrepreneurship Events</h1>
						<p>The Founders network is designed not only to promote entrepreneurial spirit and advance technological learning, but also to connect driven individuals such as yourself with like minded peers. Our entrepreneurship events provide the opportunity to take a close look at successful startups, meet one-on-one with insightful entrepreneurs, and learn from industry experts.</p>
					</div><div class="program">
						<a class="diamond-icon" title="Learn More" href="events.php"><i class="fa fa-pencil"></i></a>
						<h1 class="small-caps">Technology Consulting</h1>
						<p>The Microsoft Case Competition was the first ever non-technical business-tech consulting case competition geared towards business students who are interested in pursuing tech-related careers. Designed as a competitive event where business students got to analyze a real life scenario faced by Microsoft, they got a taste of what it is like to work for a world leading tech company’s business unit.</p>
					</div>
				</section>
			</article>
			<article class="testimonial" title="Go to the article" data-link="http://news.westernu.ca/2015/01/student-network-facilitates-dream-team-developments/">
				<div class="ac">
					<p class="serif"><cite>Student Network Facilitates 'Dream Team' Developments</cite></p>
					<p class="attribution"><em></em></p>
					<p class="small-caps attributor-title">Western News</p>
				</div>
			</article>	
			<article>
				<header class="blurb">
					<h1 class="small-caps">Our Team</h1>
					<p>Founders Network is led by a diverse team of students majoring in a multitude of disciplines at Western University. We share a common passion for technology and we believe that programming skills are essential and applicable regardless one’s major.</p>
				</header>
				<section class="team">
					<?php include 'inc/core-team.php' ?>
				</section>
			</article>
			<article>
				<header class="blurb">
					<h1 class="small-caps">Affiliates <span class="char">&</span> Partners</h1>
					<p>All of our affiliates and partners are satisfied with our organization. Hopefully your company is next.</p>
				</header>
				<article class="companies with-blurb sponsors">
					<div class="companies-wrapper">
						<div class="company">
							<img src="img/microsoft-sponsor.png">
						</div><div class="company">
							<img src="img/propel-sponsor.png">
						</div><div class="company">
							<img src="img/tech-alliance-sponsor.png">
						</div><div class="company">
							<img src="img/html500-sponsor.png">
						</div><div class="company">
							<img src="img/nspire-sponsor.png">
						</div><div class="company">
							<img src="img/hack-western-sponsor.png">
						</div>
					</div>
				</article>
			</article>
			<?php include 'inc/footer.php' ?>
		</div><!-- .ip-main -->
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script src="dist/jquery.easing.1.3.js"></script>
		<script src="dist/fn.min.js"></script>
		<script>
    		$(function() {
        		if (window.location.href == "http://www.foundersnetwork.ca/#!microsoft-case-competition/c10vj") {
            		window.location.assign("http://www.foundersnetwork.ca/microsoft-case-competition");
        		}
    		});
		</script>
	</body>
</html>