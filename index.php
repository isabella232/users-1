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

	// Place your html content in a file called content/en_pagename.php
	ob_start();
	include("content/en_" . $App->getScriptName());
	$html = ob_get_clean();

	# Generate the web page
	$App->Promotion = TRUE;
	//$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />');
	$App->generatePage("solstice", $Menu, NULL, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
