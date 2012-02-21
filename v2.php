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
	
	
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f0a6769141fbf14"></script>
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />

<div id="widecontainer">
	<div class="topContent">
		<!-- AddThis Button BEGIN -->
		<div class="addthis_toolbox addthis_default_style round ">
			<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
			<a class="addthis_button_tweet"></a>
			<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
			<a class="addthis_counter addthis_pill_style"></a>
		</div>
		<!-- AddThis Button END -->		
		<div class="box_user box_right round" id="box_user_newto">		
			<h2>Getting Started with Eclipse</h2>	
			<div class="box_content">			
				<ul>
					<li class="box_li_toggle" id="box_li_download"><a href="http://www.eclipse.org/downloads/" class="txt_emphasis round">Download an Eclipse package</a><br/>  <span class="secondary_links">Learn more about Eclipse <a href="http://www.eclipse.org/downloads/compare.php">packages</a>. </span></li>
					<li class="box_li_toggle" id="box_li_newcomers"><a href="http://www.eclipse.org/forums/index.php/f/89/">Ask a question in the Newcomers Forums</a></li>
					<li class="box_li_toggle" id="box_li_books">More Information: <a href="http://www.eclipse.org/resources/?type=book">Books</a>, <a href="http://www.eclipse.org/articles/">Articles</a>, <a href="http://marketplace.eclipse.org/taxonomy/term/34">Training</a>, <a href="http://www.eclipse.org/resources/?sort=date&category=Tutorial">Tutorials</a>, <a href="http://live.eclipse.org/">Webinars</a> &amp; <a href="http://help.eclipse.org/indigo/index.jsp">Documentation</a></li>	
				</ul>
				<div class="box_icon"><a href="http://www.eclipse.org/downloads/"><span>Download</span><img src="http://dev.eclipse.org/huge_icons/actions/document-save.png"/></a></div>
			</div>			
		</div> <!-- /end #box_user_newto -->
		
		
		<div class="box_user box_left round" id="box_user_support">
			<h2>Looking For Help?</h2>
		<div class="box_content">
			<ul>
				<li class="box_li_toggle"><a href="https://dev.eclipse.org/site_login/createaccount.php">Create An Eclipse Account</a><br /> to access our <a href="http://www.eclipse.org/forums">forums</a>, <a href="https://bugs.eclipse.org/bugs">Bugzilla</a>, <a href="http://wiki.eclipse.org">Wiki</a> and other Eclipse sites.</li>			
				<li class="box_li_toggle"><a href="http://help.eclipse.org/indigo/index.jsp">Read the Documentation</a></li>
				<li class="box_li_toggle">Frequently asked questions: <a href="http://www.eclipse.org/home/newcomers.php">Newcomer</a> & <a href="http://wiki.eclipse.org/Eclipse_FAQs">Eclipse </a></li>
				<li class="box_li_toggle"><a href="http://www.eclipse.org/forums/">Ask questions on the forums</a></li>
				<li class="box_li_toggle"><a href="http://www.eclipse.org/mail/">Follow project mailing lists</a></li>
				<li class="box_li_toggle">Learn how to  : <a href="http://wiki.eclipse.org/FAQ_How_do_I_upgrade_Eclipse%3F">upgrade Eclipse</a> &amp; <a href="http://marketplace.eclipse.org/content/drag-install-now-available-eclipse-marketplace">drag to install on Eclipse Marketplace</a></li>
			</ul>
				<div class="box_icon"><a href="http://help.eclipse.org/indigo/index.jsp"><span>Create Account</span><img src="http://dev.eclipse.org/huge_icons/apps/help-browser.png"/></a></div>
			</div>							
		</div> <!-- /end #box_user_support -->
		
		
		<div class="box_user box_right round" id="box_user_community">
		<h2>More Eclipse Resources</h2>
		<div class="box_content">			
			<ul>
				<li class="box_li_toggle"><a href="http://marketplace.eclipse.org/">Discover more Eclipse plugins on Marketplace</a><br/> Find open source and commercial Eclipse plugins, tools, and products.</li>			
				<li class="box_li_toggle" id="box_li_project"><a href="http://www.eclipse.org/projects/">Learn more about Eclipse projects</a></li>
				<li class="box_li_toggle"><a href="http://code.google.com/a/eclipselabs.org/hosting/">Other open source projects on Eclipse Labs</a></li>
				<li class="box_li_toggle"><a href="http://www.eclipse.org/community/events/">Eclipse related events</a></li>
				<li class="box_li_toggle"><a href="http://www.eclipse.org/community/portals.php">Developer portals</a></li>								
			</ul>
			<div class="box_icon"><a href="http://marketplace.eclipse.org/"><span>Download</span><img src="http://dev.eclipse.org/huge_icons/apps/system-users.png"/></a></div>			
			</div>			
		</div> <!-- /end #box_user_community -->
		
		
		<div class="box_user box_left round" id="box_user_involved">
		<h2>Contributing To Eclipse</h2>
		<div class="box_content">			
			<ul>
				<li class="box_li_toggle"><a href="http://wiki.eclipse.org/Development_Resources">Development Resources</a></li>
				<li class="box_li_toggle"><a href="https://bugs.eclipse.org/bugs/enter_bug.cgi">Report Bugs</a></li>
				<!-- <li class="box_li_toggle"><a href="http://wiki.eclipse.org/index.php/CVS_Howto">Source Code</a></li>
				<li class="box_li_toggle"><a href="http://www.eclipse.org/epp/download.php">Nightly Builds</a></li> -->
				<li class="box_li_toggle"><a href="http://www.eclipse.org/forums/">Support Eclipse</a><br />Feel free to donate any amount you'd like. Donations of $35 or more will receive special Friends of Eclipse benefits.</li>
			</ul>
			<div class="box_icon"><a href="http://wiki.eclipse.org/Development_Resources"><span>Download</span><img src="http://dev.eclipse.org/huge_icons/devices/network-wired.png"/></a></div>
		</div>			
		</div> <!-- /end #box_user_involved -->
				
	<div class="clear"></div>



		
	</div>		<!-- /end topContent -->
</div><!-- /end widecontainer -->
	<?
	$html = ob_get_clean(); 
	$html = mb_convert_encoding($html, "HTML-ENTITIES", "auto");
	# Generate the web page
	$App->Promotion = TRUE;	
	$App->generatePage("Nova", $Menu, NULL, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>