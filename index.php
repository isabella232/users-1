<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php (/community)
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
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 1);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 1);

	# End: page-specific settings
	#
	// This file is linked to from lots of different places.
	// Use absolute paths to make sure that we can actually test
	// that the file renders properly (i.e. testing using) "/index.php",
	// and "/home/index.php" both work.
	$root = $_SERVER['DOCUMENT_ROOT'];
	//include ('scripts/whatsnew.php');
	//$whatsnew = rss_to_html('whatsnew');			
	# Paste your HTML content between the EOHTML markers!	
	require_once ($root . "/community/news/scripts/newsfeeds.php");
	$communitynews = @ rss_to_news_html($root . "/community/news/2005inthenewsarchive.rss", "news", 6);
	$epicPlugins = @ rss_to_news_html("/home/data/httpd/writable/community/pluginfeed.rss", "", 6);
	$eclipseLiveFeed = @ rss_to_news_html("/home/data/httpd/writable/community/eclipselive.rss", "", 6);
	
	$cookie = $_COOKIE['userSwap'];
	if (!isset($cookie))
	{
		$cookie = "help";
	}
	
	ob_start();
	?>
<script type="text/javascript" src="http://yui.yahooapis.com/combo?2.5.2/build/yahoo/yahoo-min.js&2.5.2/build/dom/dom-min.js&2.5.2/build/event/event-min.js&2.5.2/build/dragdrop/dragdrop-min.js&2.5.2/build/animation/animation-min.js&2.5.2/build/connection/connection-min.js&2.5.2/build/container/container-min.js"></script>
<script type="text/javascript" src="functions.js"></script>
<link rel="stylesheet" type="text/css" href="users.css" media="screen" />
<div id="widecontainer">
	<div class="topContent">
		<div id="constant">
			<div id="users" class="floatingIcon">
				<img src="images/users.png"><br/>
				<p class="heading">Users</p>
			</div>
			<div id="toggle" class="floatingIcon swap">
				<a onclick="flipAnimation();"><img src="images/swap.png"></a><br/>	
				<a class="heading" id="toggleLink" onclick="flipAnimation();">Switch View</a>
			</div>			
		</div>		
		<div id="help" <? if ($cookie !="help") echo "class=\"invisible\"";?>>
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
				<a href=""><img src="http://dev.eclipse.org/huge_icons/mimetypes/x-office-presentation.png"></a><br/>
				<a class="heading">Training</a>
				<p class="subText"><a href="/community/books/">Books</a>, <a href="/community/training.php">Online Courses</a>, <a href="http://live.eclipse.org">Webinars</a> and <a href="/resources/?sort=date&category=Tutorial">Tutorials</a>.</p>
			</div>
			<div id="resources" class="floatingIcon">
				<a href="/resources/"><img src="http://dev.eclipse.org/huge_icons/mimetypes/x-office-book.png"></a><br/>
				<a class="heading" href="/resources/">Resources</a>
				<p class="subText">Find Eclipse Articles<br/> and Resources.</p>
			</div>
			<div id="project" class="floatingIcon">
				<a href="/projects/listofprojects.php"><img src="http://dev.eclipse.org/huge_icons/actions/mail-forward.png"></a><br/>
				<a class="heading" href="/projects/listofprojects.php">Projects</a>
			</div>
			<div id="documentation" class="floatingIcon">
				<a href="http://help.eclipse.org/"><img src="http://dev.eclipse.org/huge_icons/apps/help-browser.png"></a><br/>
				<a class="heading" href="http://help.eclipse.org/">Documentation</a>
			</div>		
		</div>
		<div id="categories" <? if ($cookie !="categories") echo "class=\"invisible\"";?>>
			<div id="enterprise" class="floatingIcon">
				<a href="/home/categories/enterprise.php"><img src="http://dev.eclipse.org/huge_icons/places/network-server.png"></a><br/>
				<a class="heading" href="/home/categories/enterprise.php">Enterprise Development</a>
			</div>
			<div id="embedded" class="floatingIcon">
				<a href="/home/categories/embedded.php"><img src="http://dev.eclipse.org/custom_icons/embedded64x64.png"></a><br/>
				<a class="heading" href="/home/categories/embedded.php">Embedded + Device Development</a>
			</div>
			<div id="equinox" class="floatingIcon">
				<a href="/equinox-portal/"><img height="64" width="64" src="images/equinox.png"></a><br/>
				<a class="heading" href="/equinox-portal/">RCP + Equinox Runtimes</a>
			</div>
			<div id="frameworks" class="floatingIcon">
				<a href="/home/categories/frameworks.php"><img src="http://dev.eclipse.org/huge_icons/categories/applications-system.png"></a><br/>
				<a class="heading" href="/home/categories/frameworks.php">Application Frameworks</a>
			</div>
			<div id="languages" class="floatingIcon">
				<a href="/home/categories/languages.php"><img src="http://dev.eclipse.org/huge_icons/apps/preferences-system-session.png"></a><br/>
				<a class="heading" href="/home/categories/languages.php">Language IDE</a>
			</div>								
		</div>
	</div>		
	<div class="bottomContent">
		<div class="left"> 
			<div class="headerBox">
				<img class="headerBoxIcons" src="http://dev.eclipse.org/huge_icons/apps/internet-news-reader.png">
				<a class="header" href="news/eclipseinthenews.php">Community News</a> <a class="rssIcon" href="/home/eclipseinthenews.rss"><img align="bottom" src="http://www.eclipse.org/images/rss2.gif"></a>				
				<p><?=$communitynews;?></p>
			</div>
		</div>
		<div class="right">
				<div class="headerBox">	
					<div id="categoriesList" <? if ($cookie =="categories") echo "class=\"invisible\"";?>>
						<a class="header">Pillars of Eclipse</a><br/><br/>
						<div id="enterprise" class="pillar">
							<a href="/home/categories/enterprise.php"><img src="http://dev.eclipse.org/large_icons/places/network-server.png"></a>
							<a class="heading" href="/home/categories/enterprise.php">Enterprise Development</a>
						</div>
						<div id="embedded" class="pillar">
							<a href="/home/categories/embedded.php"><img width="32" height="32" src="http://dev.eclipse.org/custom_icons/embedded64x64.png"></a>
							<a class="heading" href="/home/categories/embedded.php">Embedded + Device Development</a>
						</div>
						<div id="equinox" class="pillar">
							<a href="/equinox-portal/"><img height="32" width="32" src="images/equinox.png"></a>
							<a class="heading" href="/equinox-portal/">RCP + Equinox Runtimes</a>
						</div>
						<div id="frameworks" class="pillar">
							<a href="/home/categories/frameworks.php"><img src="http://dev.eclipse.org/large_icons/categories/applications-system.png"></a>
							<a class="heading" href="/home/categories/frameworks.php">Application Frameworks</a>
						</div>
						<div id="languages" class="pillar">
							<a href="/home/categories/languages.php"><img src="http://dev.eclipse.org/large_icons/apps/preferences-system-session.png"></a>
							<a class="heading" href="/home/categories/languages.php">Language IDE</a>
						</div>
					</div>
					<div id="helpList" <? if ($cookie =="help") echo "class=\"invisible\"";?>>
						<a class="header">Help Topics</a><br/><br/>
						<div id="project" class="pillar">
							<a href="/projects/listofprojects.php"><img src="http://dev.eclipse.org/large_icons/actions/mail-forward.png"></a>
							<a class="heading" href="/projects/listofprojects.php">Projects</a>
						</div>						
						<div id="resources" class="pillar">
							<a href="/resources/"><img height="32" width="32" src="http://dev.eclipse.org/huge_icons/mimetypes/x-office-book.png"></a>
							<a class="heading" href="/resources/">Resources</a>
						</div>
						<div id="documentation" class="pillar">
							<a href="http://help.eclipse.org/"><img src="http://dev.eclipse.org/large_icons/apps/help-browser.png"></a>
							<a class="heading" href="http://help.eclipse.org/">Documentation</a>
						</div>					
						<div id="training" class="pillar">
							<a href=""><img src="http://dev.eclipse.org/large_icons/mimetypes/x-office-presentation.png"></a>
							<a class="heading">Training</a>
						</div>
						<div id="events" class="pillar">
							<a href="events/"><img src="http://dev.eclipse.org/large_icons/apps/office-calendar.png"></a>
							<a class="heading" href="events/">Events</a>
						</div>
						<div id="portals" class="pillar">
							<a href="portals.php"><img src="http://dev.eclipse.org/large_icons/apps/preferences-system-network-proxy.png"></a>
							<a class="heading" href="/community/portals.php">Portals</a>
						</div>
					</div>								
				</div>	
		</div>
	</div>
	<div class="bottomContent">
		<div class="left">
			<div class="headerBox">
				<img class="headerBoxIcons" src="http://dev.eclipse.org/huge_icons/devices/network-wireless.png">
				<a class="header" href="http://live.eclipse.org/">Eclipse Live</a> <a class="rssIcon" href="http://feeds.feedburner.com/eclipselive"><img align="bottom" src="http://www.eclipse.org/images/rss2.gif"></a>				
				<p><?=$eclipseLiveFeed;?></p>
			</div>
		</div>
		<div class="right">
			<div class="headerBox">
				<img class="headerBoxIcons" src="http://dev.eclipse.org/huge_icons/apps/preferences-desktop-remote-desktop.png">
				<a class="header" href="http://www.eclipseplugincentral.com/">Eclipse Plugin Central</a> <a class="rssIcon" href="http://www.eclipseplugincentral.com/pluginfeed.rss"><img align="bottom" src="http://www.eclipse.org/images/rss2.gif"></a>
				<p><?=$epicPlugins;?></p>
			</div>
		</div>		

	</div>
</div>
	<?
	$html = ob_get_clean(); 
	$html = mb_convert_encoding($html, "HTML-ENTITIES", "auto");
	# Generate the web page
	$App->generatePage($theme, $Menu, NULL, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

