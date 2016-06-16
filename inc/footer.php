<footer class="site-footer">
	<div class="site-footer-content">
		<div class="col-left hidden-portrait">
			<a href="/" class="no-angle"><img class="logo" src="/img/logo.svg" /></a>
			<h1 class="small-caps" style="margin-top: 20px;">Disclaimer</h1>
			<p>All information collected is only available for purposes of the Founders Network organization. We will not voluntarily disclose your information to any third parties. In using the site you agree that Founders Network is not liable for any loss or damage resulting from unintended circumstances that may arise from the use of this website that are out of our control. Although we are run by Western University students, we are an independent organization that is not affiliated with the university.<br>
				<br>
				For inquiries, legal, or copyright complaints, please contact <a href="mailto:communications@foundersnetwork.ca" class="no-angle">communications@foundersnetwork.ca</a>.<br>
Monitored by the technologies divison of Western Founders Network.
			</p>
			<div class="social-icons">
				<a href="https://www.facebook.com/westernfoundersnetwork" target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="https://www.linkedin.com/company/western-founders-network" target="_blank"><i class="fa fa-linkedin-square"></i></a>
				<a href="https://medium.com/founders-network" target="_blank"><i class="fa fa-medium"></i></a>
			</div>
		</div><!-- .col-left --><div class="col-right">
			<div class="col">
				<a href="/" class="visible-portrait inline-block no-angle" style="width: 25%;"><img class="logo" src="img/logo.svg" ></a>
				<div class="social-icons vc fit visible-portrait block">
					<a href="https://www.facebook.com/westernfoundersnetwork" target="_blank"><i class="fa fa-facebook"></i></a>
					<a href="https://www.linkedin.com/company/western-founders-network" target="_blank"><i class="fa fa-linkedin-square"></i></a>
					<a href="https://medium.com/founders-network" target="_blank"><i class="fa fa-medium"></i></a>
				</div>
			</div>
			<div class="col">
				<h1 class="small-caps">Recent Posts</h1>
				<ul>
				<?php
				    $content = file_get_contents('https://medium.com/feed/founders-network/');
				    $x = new SimpleXmlElement($content);
				     
				    foreach($x->channel->item as $entry) {
				        echo "<li class='post-medium'><a href='$entry->link' title='$entry->title' target='_blank'>" . $entry->title . "</a></li>";
				    }
				?>
				</ul>
			</div><!<div class="col"><div class="col">
				<h1 class="small-caps">Recent News</h1>
				<ul class="news">
					<li>
						<a href="https://www.facebook.com/events/1492988367663912/">Join us at Startup Showcase!</a>
						<div class="date">November 17, 2015</div>
					</li>
					<li>
						<span>Education Executive Applications Have Closed</span>
						<div class="date">October 30, 2015</div>
					</li>
<!--
					<li>
						<span>Education Executive Applications Now Available</span>
						<div class="date">October 18, 2015</div>
					</li>
-->
					<li>
						<span>Director Applications Have Closed</span>
						<div class="date">October 6, 2015</div>
					</li>
<!--
					<li>
						<a href="https://www.facebook.com/events/906628299424892/">Come out to our Annual General Meeting</a>
						<div class="date">September 28, 2015</div>
					</li>
					<li>
						<a>Director Applications Now Available</a>
						<div class="date">September 15, 2015</div>
					</li>
					<li>
						<a href="https://westernu.collegiatelink.net/organization/Foundersnetwork/calendar/details/34661" target="_blank">Join us at Clubs Week</a>
						<div class="date">September 14-18, 2015</div>
					</li>
-->
				</ul>
			</div>			
			<!</div>
		</div><!-- .col-right -->
		<div class="col-right visible-portrait block" style="margin-bottom: 100px;">
			<h1 class="small-caps" style="margin-top: 20px;">Disclaimer</h1>
			<p>All information collected is only available for purposes of the Founders Network organization. We will not voluntarily disclose your information to any third parties. In using the site you agree that Founders Network is not liable for any loss or damage resulting from unintended circumstances that may arise from the use of this website that are out of our control. Although we are run by Western University students, we are an independent organization that is not affiliated with the university.<br>
				<br>
				For inquiries, legal, or copyright complaints, please contact <a href="mailto:communications@foundersnetwork.ca" class="no-angle">communications@foundersnetwork.ca</a>.<br>
Monitored by the technologies divison of Western Founders Network.
			</p>
		</div>
		<div class="copyright">
			<p>Copyright &copy; <span class="year"></span> Western Founders Network. All rights reserved.</p>
		</div>
	</div><!-- .site-footer-content -->
</footer>