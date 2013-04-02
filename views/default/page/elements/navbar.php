<?php
/**
 * Elgg page navbar
 * 
 */

// drop-down login
echo elgg_view('core/account/login_dropdown');

// insert site-wide navigation
echo elgg_view_menu('site');