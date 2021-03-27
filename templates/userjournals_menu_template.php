<?php
/**
 * Copyright (C) e107 Inc (e107.org), Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 * $Id$
 * 
 * Userjournals menus templates
 */

if (!defined('e107_INIT'))  exit;


// latest menu
    
$USERJOURNALS_MENU_TEMPLATE['latest']['start']       = "<ul class='media-list list-unstyled comment-menu'>";
$USERJOURNALS_MENU_TEMPLATE['latest']['end']         = "</ul>"; 
$USERJOURNALS_MENU_TEMPLATE['latest']['item']        = "<li class='media d-flex mb-2'>  
<div class='media-left mr-3 me-3'>{UJ_BLOGGER_PICTURE: w=40&h=40}</div>
<div class='media-body'>
 
        {UJ_BLOG_CATEGORIES_LABEL}  <a href='{UJ_BLOG_LINK=href}'> {UJ_BLOG_SUBJECT}</a>
    	<div>{UJ_BLOG_ENTRY_SHORT}</div>
    	<small class='text-muted muted'> {UJ_BLOG_BLOGGER_LINK} {UJ_BLOG_DATE}</small>
</div>
    	</li>";