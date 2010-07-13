<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php (/users)
	#
	# Author: 		Nathan Gervais
	# Date:			2008-09-04
	#
	# Description: Community Landing Page
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Users";
	$pageKeywords	= "eclipse resources, courses, books, events, plug-ins";
	$pageAuthor		= "Nathan Gervais";
	
	# End: page-specific settings
	#
	$root = $_SERVER['DOCUMENT_ROOT'];
	# Paste your HTML content between the EOHTML markers!	

	ob_start();
	?>
<script type="text/javascript" src="http://yui.yahooapis.com/combo?2.5.2/build/yahoo/yahoo-min.js&2.5.2/build/dom/dom-min.js&2.5.2/build/event/event-min.js&2.5.2/build/dragdrop/dragdrop-min.js&2.5.2/build/animation/animation-min.js&2.5.2/build/connection/connection-min.js&2.5.2/build/container/container-min.js"></script>
<script type="text/javascript" src="functions.js"></script>
<link rel="stylesheet" type="text/css" href="users.css" media="screen" />
<div id="widecontainer">
	<div class="topContent">
		<div id="help">
			<div id="events" class="floatingIcon">
				<a href="/community/events/"><img src="http://dev.eclipse.org/huge_icons/apps/office-calendar.png"></a><br/>
				<a class="heading" href="/community/events/">Events</a>
				<p class="subText">Check out a conference<br/> or gathering near you.</p>
			</div>
			<div id="portals" class="floatingIcon">
				<a href="/community/portals.php"><img src="http://dev.eclipse.org/huge_icons/apps/preferences-system-network-proxy.png"></a><br/>
				<a class="heading" href="/community/portals.php">Portals</a>
				<p class="subText">Community sites and blogs<br/> around the web.</p>
			</div>
			<div id="training" class="floatingIcon">
				<img src="http://dev.eclipse.org/huge_icons/mimetypes/x-office-presentation.png"><br/>
				<a class="heading">Training</a>
				<p class="subText"><a href="/community/books/">Books</a>, <a href="/community/training.php">Online Courses</a>, <a href="http://wiki.eclipse.org/Training_Schedule">Schedule</a>, <a href="/resources/?sort=date&category=Tutorial">Tutorials</a> and <a href="http://live.eclipse.org">Webinars</a>.</p>
			</div>
			<div id="resources" class="floatingIcon">
				<a href="/resources/"><img src="http://dev.eclipse.org/huge_icons/mimetypes/x-office-book.png"></a><br/>
				<a class="heading" href="/resources/">Resources</a>
				<p class="subText">Find Eclipse <a href="/articles/">Articles</a><br/> and Resources.</p>
			</div>
			<div id="project" class="floatingIcon">
				<a href="/projects/listofprojects.php"><img src="http://dev.eclipse.org/huge_icons/actions/mail-forward.png"></a><br/>
				<a class="heading" href="/projects/listofprojects.php">Projects</a>
				<p class="subText"><a href="/mail/">Mailing Lists</a>, <a href="/forums/">Forums</a></p>
			</div>
			<div id="documentation" class="floatingIcon">
				<a href="http://www.eclipse.org/documentation/"><img src="http://dev.eclipse.org/huge_icons/apps/help-browser.png"></a><br/>
				<a class="heading" href="http://www.eclipse.org/documentation/">Documentation</a>
			</div>
			<div id="getinvolved" class="floatingIcon">
				<img src="http://dev.eclipse.org/huge_icons/devices/network-wired.png" align="bottom"><br/>
				<a class="heading">Get Involved</a>
				<p class="subText"><a href="https://bugs.eclipse.org/bugs/">Report Bugs</a>, <a href="http://wiki.eclipse.org/index.php/CVS_Howto">Source Code</a>,<br/><a href="http://www.eclipse.org/epp/download.php">Nightly Builds</a></p>
			</div>	
			<div id="eclipselabs" class="floatingIcon">
				<a href="http://code.google.com/a/eclipselabs.org/hosting/"><img src="images/labs.png"/></a>
				<p class="subText">
					<a href="http://code.google.com/a/eclipselabs.org/hosting/">Eclipse-related open source projects</a>
				</p>
			</div>	
		</div>
	</div>		

</div>
	<?
	$html = ob_get_clean(); 
	$html = mb_convert_encoding($html, "HTML-ENTITIES", "auto");
	# Generate the web page
	$App->Promotion = TRUE;	
	$App->generatePage("Nova", $Menu, NULL, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>