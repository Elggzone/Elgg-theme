<?php
/**
 * Page Layout
 *
 * Contains CSS for the page shell and page layout
 *
 * Default layout: 990px wide, centered. Used in default page shell
 * Color scheme, check culer.com, base #427DAB
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>

/* ***************************************
	PAGE LAYOUT
*************************************** */
/***** DEFAULT LAYOUT ******/
<?php // the width is on the page rather than topbar to handle small viewports ?>
.elgg-page-default {
	min-width: 800px;
}
.elgg-page-default .elgg-page-header > .elgg-inner {
	max-width: 990px;
	margin: 0 auto;
	height: 80px;
}
.elgg-page-default .elgg-page-navbar > .elgg-inner {
	max-width: 990px;
	margin: 0 auto;
	height: auto;
}
.elgg-page-default .elgg-page-body > .elgg-inner {
	max-width: 990px;
	margin: 0 auto;
}
.elgg-page-default .elgg-page-footer > .elgg-inner {
	max-width: 990px;
	margin: 0 auto;
	padding: 5px 0;
	border-top: 1px solid #DEDEDE;
}

/***** TOPBAR ******/
.elgg-page-topbar {
	background: #424242;
	border-bottom: 1px solid #000000;
	padding: 0 20px;
	position: relative;
	height: 32px;
	z-index: 9000;
}

/***** PAGE MESSAGES ******/
.elgg-system-messages {
	position: fixed;
	top: 32px;
	right: 20px;
	max-width: 500px;
	z-index: 2000;
}
.elgg-system-messages li {
	margin-top: 10px;
}
.elgg-system-messages li p {
	margin: 0;
}

/***** PAGE HEADER ******/
.elgg-page-header {
	padding: 0 10px;
	position: relative;
	background: #60B8F7;
}
.elgg-page-header > .elgg-inner {
	position: relative;
}
/***** PAGE NAVBAR ******/
.elgg-page-navbar {
	padding: 0 10px;
	position: relative;
	background: #4787B8;
}
.elgg-page-navbar > .elgg-inner {
	position: relative;
}

/***** PAGE BODY LAYOUT ******/
.elgg-page-body {
	padding: 0 10px;
}

.elgg-layout {
	min-height: 360px;
}
.elgg-layout-error {
	margin-top: 20px;
}
.elgg-sidebar {
	position: relative;
	padding: 32px 10px 20px 20px;
	float: right;
	width: 210px;
	margin: 0 0 0 10px;
	border-left: 1px solid #EBEBEB;
}
.elgg-sidebar-alt {
	position: relative;
	padding: 26px 20px 20px 10px;
	float: left;
	width: 160px;
	margin: 0 10px 0 0;
	border-right: 1px solid #EBEBEB;
}
.elgg-main {
	position: relative;
	min-height: 360px;
	padding: 12px 10px 10px 10px;
}
.elgg-main > .elgg-head {
	padding-bottom: 5px;
	border-bottom: 1px solid #EBEBEB;
	margin-bottom: 10px;
}

/***** PAGE FOOTER ******/
.elgg-page-footer {
	color: #999;
	padding: 0 10px;
	position: relative;
}

.elgg-page-footer a:hover {
	color: #666;
}