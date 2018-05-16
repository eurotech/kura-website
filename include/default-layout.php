<?php
/**
 * Copyright (c) 2014-2017, 2018 Eclipse Foundation.
 *
 * This program and the accompanying materials are made
 * available under the terms of the Eclipse Public License 2.0
 * which is available at https://www.eclipse.org/legal/epl-2.0/
 *
 * Contributors:
 * Christopher Guindon (Eclipse Foundation) - Initial implementation
 * Eric Poirier (Eclipse Foundation)
 *
 * SPDX-License-Identifier: EPL-2.0
 */

require_once ($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
require_once ($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");

function renderPage($path) {

$App = new App();
$Theme = $App->getThemeClass();

// Shared variables/configs for all pages of your website.
require_once ('_projectCommon.php');

// Begin: page-specific settings. Change these.

$Theme->setPageKeywords('iot, m2m, kura, gateway, java, osgi, embedded');
$Theme->setPageTitle("Eclipse Kura");
$Theme->setBaseUrl('http://www.eclipse.org/kura/');

if (isset($Nav)) {
  $Theme->setNav($Nav);
}


// Initialize custom solstice $variables.
$variables = array();

// Add classes to <body>. (String)
$variables['body_classes'] = '';

// Hide the breadcrumbs. (Bool)
$variables['hide_breadcrumbs'] = TRUE;

// Insert HTML before the left nav. (String)
$variables['leftnav_html'] = '';

// Update the main container class (String)
$variables['main_container_classes'] = 'container';

// Insert HTML after opening the main content container, before the left
// sidebar. (String)
$variables['main_container_html'] = '';

// Insert header navigation for project websites.
// Bug 436108 - https://bugs.eclipse.org/bugs/show_bug.cgi?id=436108
$links = array();

// CFA Link - Big orange button in header
$variables['btn_cfa'] = array(
  'hide' => FALSE, // Optional - Hide the CFA button.
  'html' => '', // Optional - Replace CFA html and insert custom HTML.
  'class' => 'btn btn-huge btn-warning', // Optional - Replace class on CFA link.
  'href' => '/downloads.php', // Optional - Replace href on CFA link.
  'text' => '<i class="fa fa-download"></i> Download' // Optional - Replace text of CFA link.
);

// Set Solstice theme variables. (Array)
$App->setThemeVariables($variables);

$Theme->setAttributes('img_logo_default', 'content/images/kura_logo_small.png', 'src');

$Menu = new Menu();
$Menu->setMenuItemList(array());
$Menu->addMenuItem("Documentation", "http://eclipse.github.io/kura/", "_self");
$Menu->addMenuItem("Adopters", "http://eclipse.github.io/kura/", "_self");

$Theme->setMenu($Menu);

$Theme->setDisplayToolbar(false);

// Place your html content in a file called content/en_pagename.php
ob_start();
include ($path);
$html = ob_get_clean();
$Theme->setHtml($html);

// Insert extra html before closing </head> tag.
// $App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css"
// href="style.css" media="screen" />');

// Insert script/html before closing </body> tag.
// $App->AddExtraJSFooter('<script type="text/javascript"
// src="script.min.js"></script>');

// Generate the web page
$Theme->generatePage();
}
