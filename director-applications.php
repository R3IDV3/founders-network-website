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
				<form action="/director-application-results" enctype="multipart/form-data" method="post" id="application-form" name="applicationForm">
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
					<header class="blurb">
					<h1 class="small-caps">Select Portfolios Below</h1>
					<p>Please select at least one portfolio and answer the questions associated with them. You are not required to select specific positions within each portfolio, but you may if you like. If you are invited for an interview, you may be assigned a position based on your qualifications which you had not originally chosen in this application.</p>
				</header>
					
					<?php
    					include "inc/Portfolio.class.php";
    					
    					new Portfolio("Operations & Entrepreneurship", "nick@foundersnetwork.ca", array(
    					    "Director of Events" 
    					        => array("This director will act as the right hand of the VP in overseeing all events run by the department."),
    					    
    					    "Director of Logistics and Hospitality" 
    					        => array("Responsible for ensuring all events are well executed, organizing facilities, coordinating food services, and submitted with the USC."),
                            
                            "Director of Member Relations"
                                => array("Responsible for generation of event descriptions and the experience of event attendees with regards to their membership with Founders Network. Will be present at all events to welcome and register attendees and work as a liaison to the marketing department to ensure events are well represented to our community to maximize their attendance."),
                            
                            "Director of Social Events"
                                => array("Responsible for taking a lead organizing four or more member social events throughout the year, examples include a dinner meetup, group night out, or networking social event. This director will also assist with a few other events."),
                            
                            "Director of Global Entrepreneurship Week"
                                => array("Responsible for taking a lead organizing events for the Global Entrepreneurship Week at Western including speaker events, a pitch competition, and other entrepreneurial events. This director will also assist with a few other events likely running an additional Entrepreneurship event outside G.E.W."),
                            
                            "Director of Future View"
                                => array("Responsible for the newly established Future View Conference focusing on sharing information about the current and future state of the world with its attendees. Event will likely contain speakers from innovative companies, analysts, discussion groups for the delegates, and networking opportunities. This director will also assist with additional events if time allows."),
    					        
                            "Operations Associate"
                                => array("Responsible for assisting with a few events throughout the year, while this director will not be responsible primarily for any particular event, they will be involved in running the majority of events hosted throughout the year.", 2)
                            ), 
                            
                            array(
                                "Describe one project, initiative, or anything else you have been involved in recently. Outline your role, why you participated, and what you took away from the experience.",
                                "What do you look forward to existing in 20 years?"
                            ), 
                            
                            "The Operations and Entrepreneurship portfolio will be responsible generally for all club events with regards to facilities, and USC Club guidelines, but will focus on running Entrepreneurship-centric events for Founders Network. With an ambitious set of events planned, we are looking for dedicated and innovative individuals to help bring the events to fruition. Positions are available with focus on serving as the primary organizer to a particular event, or as a general organizer for all events. All primary event organizers will also serve as general organizers for other events throughout the year."
    					);
    					
    					new Portfolio("Industry", "frank@foundersnetwork.ca", array(
        					"Co-Head of Industry"
                                => array("This position will work closely with the current head of industry to oversee and supervise the industry portfolio"),
        					
        					"Director of Case Competition"
        					    => array("Responsible for the planning, implementation and operations of the annual Founders Network case competition"),
                                
                            "Director of Careers"
                                => array("Responsible for organizing career panels, resume workshops and other career oriented initiatives"),
                                
                            "Director of Special Events"
                                => array("Responsible for organizing special events for the industry portfolio including algorithms preparation workshops and various over events throughout the year"),
                                
                            "Director of TechLink"
                                => array("Responsible for managing the Founders Network Techlink page which aims to connect entrepreneurs with those seeking talent and vice versa"),
                            
                            "Director of Corporate Relations"
                                => array("Responsible for the functions of the venture capital branch. This position will work closely with startups to connect them with the proper resources and sponsors"),
                                
                            "Industry Executive"
                                => array("Will work closely with the entire industry portfolio to help in the planning and operations of various industry related events", 2)
                            ), 
                            
                            array(
                                "Describe a challenging project or activity which you have planned and taken through to a conclusion. What was your objective, what did you do and what was the outcome? Include any changes you made to your initial plan.",
                                "What attracts you to this portfolio and tell us what makes you suitable?"
                            ),
                            
                            "The Industry portfolio focuses on developing and fostering technical along with transferable skills, aiming to help those break into a professional workplace environment. Executives in this portfolio will have a chance to expand their networks and build meaningful relationships with fellow students, emerging startups and various big name companies including Microsoft, IBM, and Propel. The positions available for this portfolio are centered around 3 main components. First is our annual case competition which will focus on integrating various technologies into a business setting. The second and largest component will feature careers, which will include resume workshops, career panels, kickstarter workshops, career fairs, and technical practice. Finally the third will be centered around venture capital which includes growing, integrating and connecting emerging startups with the appropriate resources and sponsors."
    					);
    					
    					new Portfolio("Marketing & Community Engagement", "niko.virvilis@foundersnetwork.ca", array(
        					"Director of Engagement"
        					    => array(""),
        					    
                            "Director of Communications"
                                => array(""),
                                
                            "Director of Digital Media & Social Networking"
                                => array(""),
                                
                            "Director of Graphic Design"
                                => array(""),
                                
                            "Director of Photography"
                                => array(""),
                                
                            "Director of Web Development & Design"
                                => array(""),
                            
                            "Director of Founders Publications & Blogs"
                                => array(""),
                            
                            "Director of Affiliates Network"
                                => array("")
                            ), 
                            
                            array(
                                "Pitch a creative marketing strategy to attract students at Western University to join the Founders Network.",
                                "What experience do you have with multimedia platforms? (Adobe Creative Suite, photography, videography, editing softwares, etc.)"
                            )
                        );
    					
    					new Portfolio("Finance & Business Development Portfolio", "finance@foundersnetwork.ca", array(
        					"Director of Finance"
        					    => array(
        					        "In this position you will have a critical role as a liaison between our fund management and the ambitious event planning committees. You should be confident generating financial plans, overcoming logistical barriers, and taking the initiative. Basic Excel proficiency will be an asset.", 3),
        					    
                            "Director of Business Development"
                                => array(
                                    "Those chosen for this position, should be confident corresponding with corporate partners and be entrepreneurial in the way they work. Lucrative funding opportunities always exist beyond our initial expectations, and as such your passion for our mission will be essential.", 3)
                            ), 
                            
                            array(
                                "What about the finance and business development portfolio interests you?",
                                "Tell us about any experiences you've had related to [or the reasons you are confident with] corporate relations/sponsorship proposals and/or budgetting/accounting? Additionally, please include 2~3 potential FN sponsors that you would like to reach out to and one sentence about why you chose them."
                            ), 
                            
                            "Going into one of our most ambitious years since the start of Founders Network, in this portfolio you will play a pivotal role in ensuring the success of our new initiatives. Ensuring that our organization is able to acquire the funding it needs and that we are allocating it responsibly, is the core of the finance and business development portfolio. This role will be what you make it – and what you make it, can be an unforgettable learning experience that will speak volumes about you."
    					);
					?>
					
					<div class="question">
						<label for="universal-q-textarea">Tell us why you want to be a part of Western Founder Network. And remember your response, we would love for you to share with us why you connect with FN during the interview stage.</label><br>
						<textarea name="universal-q" id="universal-q-textarea" placeholder="Explain your answer here..."></textarea>
						<span class="error-message"><em></em></span>
					</div>
					
					<br>
					
					Please attach your PDF resume (maximum size 5MB)<br>
					<input type="file" name="resume" id="resume">
					
					<p class="application-process">Successful applicants will be invited for an interview.</p>
					<button type="reset">Reset</button><button type="submit" name="submit" disabled>Submit</button><p class="error-message"><em>Ensure you have entered all fields accurately, selected a position and attached a resume.</em></p>
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