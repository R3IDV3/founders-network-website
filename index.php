<?php

	include 'router.php';

	new Router(array(
		'/' => 'home.php',
		'/community' => 'community.php',
		'/team' => 'team.php',
		'/events' => 'events.php',
		'/group-strategy' => 'group-strategy.php',
		'/education' => 'education.php',
		'/entrepreneurship' => 'entrepreneurship.php',
		'/industry' => 'industry.php',
		'/gew' => 'gew.php',
		'/microsoft-case-competition' => 'mcc.php',
		'/#!microsoft-case-competition/c10vj' => 'mcc.php',
		'/director-applications' => 'director-applications.php',
		'/director-application-results' => 'aresults.php',
		'/join' => 'early-bird-registration.php',
		'/join-results' => 'eearesults.php'
	));

	// '/apply/education-executive' => 'education-executive-application.php',
