<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

/*******************************************************************************
 * Copyright (c) 2013 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    Christopher Guindon (Eclipse Foundation)- initial API and implementation
 *******************************************************************************/

	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "Getting Started with Eclipse";
	$pageKeywords	= "eclipse resources, courses, books, events, plug-ins, Getting Started with Eclipse, help eclipse, eclipse documentation links, Get Involved with Eclipse, support eclipse";
	$pageAuthor		= "Christopher Guindon";
	$protocol = $App->getHTTPPrefix();

	$root = $_SERVER['DOCUMENT_ROOT'];
	ob_start();
	?>

 <div id="widecontainer">
	<div class="topContent">
		<script type="text/javascript">
		/* <![CDATA[ */
			document.write('<div class=\"addthis_toolbox addthis_default_style round\"><a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"><\/a><a class=\"addthis_button_tweet\"><\/a><a class=\"addthis_button_google_plusone\" g:plusone:size=\"medium\"><\/a><a class=\"addthis_counter addthis_pill_style\"><\/a><\/div>');
		/* ]]> */
		</script>
		<div class="box_user box_right round shadow" id="box_user_newto">
			<h2>Getting Started with Eclipse</h2>
			<div class="box_content">
				<ul>
<<<<<<< HEAD
					<li class="box_li_toggle" id="box_li_download"><a href="<?php print $protocol;?>://www.eclipse.org/downloads/" class="txt_emphasis round">Download an Eclipse package</a> <span class="secondary_links">Learn more about Eclipse <a href="<?php print $protocol;?>://www.eclipse.org/downloads/compare.php">packages</a>. </span></li>
					<li class="box_li_toggle"><a href="<?php print $protocol;?>://help.eclipse.org/juno/index.jsp">Read the Documentation</a></li>
					<li class="box_li_toggle">Learn how to <a href="<?php print $protocol;?>://wiki.eclipse.org/FAQ_How_do_I_upgrade_Eclipse%3F">upgrade Eclipse</a> &amp; <a href="<?php print $protocol;?>://marketplace.eclipse.org/content/drag-install-now-available-eclipse-marketplace">drag to install on Eclipse Marketplace</a></li>
					<li class="box_li_toggle" id="box_li_books">More Information: <span class="secondary_links"><a href="<?php print $protocol;?>://www.eclipse.org/resources/?type=book">Books</a>, <a href="<?php print $protocol;?>://www.eclipse.org/articles/">Articles</a>, <a href="<?php print $protocol;?>://www.eclipse.org/resources/?sort=date&amp;category=Tutorial">Tutorials</a> &amp; <a href="<?php print $protocol;?>://www.youtube.com/user/EclipseFdn" target="_blank">YouTube Channel</a> </span></li>
=======
					<li class="box_li_toggle" id="box_li_download"><a href="http://www.eclipse.org/downloads/" class="txt_emphasis round">Download an Eclipse package</a> <span class="secondary_links">Learn more about Eclipse <a href="http://www.eclipse.org/downloads/compare.php">packages</a>. </span></li>
					<li class="box_li_toggle"><a href="http://help.eclipse.org">Read the Documentation</a></li>
					<li class="box_li_toggle">Learn how to <a href="http://wiki.eclipse.org/FAQ_How_do_I_upgrade_Eclipse%3F">upgrade Eclipse</a> &amp; <a href="http://marketplace.eclipse.org/content/drag-install-now-available-eclipse-marketplace">drag to install on Eclipse Marketplace</a></li>
					<li class="box_li_toggle" id="box_li_books">More Information: <span class="secondary_links"><a href="http://www.eclipse.org/resources/?type=book">Books</a>, <a href="http://www.eclipse.org/articles/">Articles</a>, <a href="http://www.eclipse.org/resources/?sort=date&amp;category=Tutorial">Tutorials</a> &amp; <a href="http://www.youtube.com/user/EclipseFdn" target="_blank">YouTube Channel</a> </span></li>					
>>>>>>> branch 'master' of ssh://git.eclipse.org/gitroot/www.eclipse.org/users.git
				</ul>
				<div class="box_icon"><a href="<?php print $protocol;?>://www.eclipse.org/downloads/"><span>Download</span><img src="<?php print $protocol;?>://dev.eclipse.org/huge_icons/actions/document-save.png" alt="Download"/></a></div>
			</div>
		</div> <!-- /end #box_user_newto -->


		<div class="box_user box_left round shadow" id="box_user_support">
			<h2>Looking For Help?</h2>
		<div class="box_content">
			<ul>
				<li class="box_li_toggle"><a href="https://dev.eclipse.org/site_login/createaccount.php">Create An Eclipse Account</a><span class="secondary_links"> to access our <a href="<?php print $protocol;?>://www.eclipse.org/forums">forums</a>, <a href="https://bugs.eclipse.org/bugs">Bugzilla</a>, <a href="<?php print $protocol;?>://wiki.eclipse.org">Wiki</a> and other Eclipse sites.</span></li>
				<li class="box_li_toggle" id="box_li_newcomers"><a href="<?php print $protocol;?>://www.eclipse.org/forums/index.php/f/89/">Ask a question in the Newcomers Forums</a></li>
				<li class="box_li_toggle">Frequently asked questions: <a href="<?php print $protocol;?>://www.eclipse.org/home/newcomers.php">Newcomer</a> &amp; <a href="<?php print $protocol;?>://wiki.eclipse.org/Eclipse_FAQs">Eclipse </a></li>

				<li class="box_li_toggle"><a href="<?php print $protocol;?>://www.eclipse.org/mail/">Follow project mailing lists</a></li>
			</ul>
				<div class="box_icon"><img src="<?php print $protocol;?>://dev.eclipse.org/huge_icons/apps/help-browser.png" alt="Help"/></div>
			</div>
		</div> <!-- /end #box_user_support -->

			<div class="clear"></div>
		<div class="box_user box_right round shadow" id="box_user_community">
		<h2>More Eclipse Resources</h2>
		<div class="box_content">
			<ul>
				<li class="box_li_toggle"><a href="<?php print $protocol;?>://marketplace.eclipse.org/">Discover more Eclipse plugins on Marketplace</a></li>
				<li class="box_li_toggle" id="box_li_project"><a href="<?php print $protocol;?>://www.eclipse.org/projects/">Learn more about Eclipse projects</a></li>
				<li class="box_li_toggle"><a href="<?php print $protocol;?>://code.google.com/a/eclipselabs.org/hosting/" target="_blank">Other open source projects on Eclipse Labs</a></li>
				<li class="box_li_toggle"><a href="<?php print $protocol;?>://www.eclipse.org/community/events/">Eclipse related events</a></li>
				<li class="box_li_toggle"><a href="<?php print $protocol;?>://www.eclipse.org/community/portals.php">Developer Portals and User Communities</a></li>
				<li class="box_li_toggle"><a href="<?php print $protocol;?>://marketplace.eclipse.org/taxonomy/term/34">Training &amp; Consulting</a> &amp; <a href="<?php print $protocol;?>://wiki.eclipse.org/Training_Schedule">Training Schedule</a></li>
			</ul>
			<div class="box_icon"><img src="<?php print $protocol;?>://dev.eclipse.org/huge_icons/apps/system-users.png" alt="Users"/></div>
			</div>
		</div> <!-- /end #box_user_community -->


		<div class="box_user box_left round shadow" id="box_user_involved">
		<h2>Get Involved</h2>
		<div class="box_content">
			<ul>
				<li class="box_li_toggle"><a href="<?php print $protocol;?>://wiki.eclipse.org/Development_Resources">Development Resources</a></li>
				<li class="box_li_toggle"><a href="https://bugs.eclipse.org/bugs/enter_bug.cgi" id="link_bugs">Report Bugs</a></li>
				<!-- <li class="box_li_toggle"><a href="<?php print $protocol;?>://wiki.eclipse.org/index.php/CVS_Howto">Source Code</a></li>
				<li class="box_li_toggle"><a href="<?php print $protocol;?>://www.eclipse.org/epp/download.php">Nightly Builds</a></li> -->
				<li class="box_li_toggle"><a href="<?php print $protocol;?>://www.eclipse.org/donate/">Support Eclipse</a> <span class="secondary_links">Feel free to donate any amount you'd like. Donations of $35 or more will receive special Friends of Eclipse benefits.</span></li>
				<li class="box_li_toggle"><a href="<?php print $protocol;?>://wiki.eclipse.org">Update the Wiki</a></li>
			</ul>
			<div class="box_icon"><img src="<?php print $protocol;?>://dev.eclipse.org/huge_icons/devices/network-wired.png" alt="Network wired"/></div>
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
	$App->AddExtraHtmlHeader('<script type="text/javascript" src="//s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f0a6769141fbf14"></script>');
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />');
	$App->generatePage("Nova", $Menu, NULL, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
