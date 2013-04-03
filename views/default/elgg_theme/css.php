<?php
/**
 * Elgg theme CSS
 */

?>

/* ***************************************
	MISC
*****************************************/
#dashboard-info {
	border: 1px solid #DCDCDC;
	margin: 0 0 15px 0
}
.elgg-sidebar input[type=text],
.elgg-sidebar input[type=password] {
	box-shadow: inset 0 2px 6px rgba(0, 0, 0, 0.1);
}
/* ***************************************
	ACCOUNT MENU
*****************************************/
.elgg-menu-topbar-alt > li > a {
	padding: 5px 15px 10px;
	margin: 1px 0 0;
}
.elgg-menu-topbar-alt ul {
    position: absolute;
	display: none;
    background-color: #FFFFFF;
	border: 1px solid #DEDEDE;
    text-align: left;
    top: 33px;
    margin-left: -100px;
    width: 180px;

	border-radius: 0 0 3px 3px;
	box-shadow: 1px 3px 5px rgba(0, 0, 0, 0.25);
}
.elgg-menu-topbar-alt li ul > li > a {
	text-decoration: none;
	padding: 10px 20px;
	background-color: #FFFFFF;
	color: #444444;
}
.elgg-menu-topbar-alt li ul > li > a:hover {
	background-color: #F0F0F0;
	color: #444444;
}
.elgg-menu-topbar-alt > li:hover > ul {
	display: block;
}
.elgg-menu-item-account > a:after {
	content: "\bb";
	margin-left: 6px;
}
/* ***************************************
	RESPONSIVE
*****************************************/
html {
	font-size: 100%;
	-webkit-text-size-adjust: 100%;
	-ms-text-size-adjust: 100%;
}
@media (max-width: 1030px) {
	.elgg-menu-topbar-default > li:first-child a {
		margin-left: 0;
	}
	.elgg-menu-topbar-alt > li > a {
		padding-right: 0;
	}
	.elgg-page-footer {
		padding: 0 20px;
	}
}
@media (max-width: 820px) {
	.elgg-page-default {
		min-width: 0;
	}
    .elgg-layout-one-sidebar {
        width: 100%;
        float: left;
    }
    .elgg-layout-two-sidebar {
        width: 100%;
        float: left;
    }
	.elgg-sidebar {
		border-left: none;
        border-bottom: 1px solid #DCDCDC;
        width: 100%;
        float: left;
		padding: 32px 10px 20px 10px;
        margin: 0 0 10px 0;
		
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
	.elgg-sidebar-alt {
        display: none;
    }
	.elgg-menu-footer {
        float: none;
        text-align: center;
    }
	/***** CUSTOM INDEX ******/
    .elgg-col-1of2 {
        width: 100%;
    }
    .prl {
        padding-right: 0;
    }
    /***** WIDGETS ******/
	.elgg-col-alt,
    .elgg-col-2of3,	
    #elgg-widget-col-1,
    #elgg-widget-col-2,
    #elgg-widget-col-3 {
        width: 100%;
        min-height: 0 !important;
    }
    .elgg-module-widget {
        margin: 0 0 15px;
    }
}
@media (max-width: 600px) {
    #login-dropdown {
        display: none;
    }
    .groups-profile-fields {
        float: left;
        padding-left: 0;
    }
    #profile-owner-block {
    	border-right: none;
        width: auto;
    }
    #profile-details {
        display: block;
        float: left;
    }
	#groups-tools > li {
        width: 100%;
        margin-bottom: 20px;
    }
    #groups-tools > li:nth-child(odd) {
        margin-right: 0;
    }
    #groups-tools > li:last-child {
        margin-bottom: 0;
    }
}

