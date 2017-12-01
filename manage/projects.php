<?php
/*=======================================================\
|                        FrontKanban                     |
|--------------------------------------------------------|
|   Creator: Phương                                      |
|   Date :   01-12-2017                                  |
|   Description: Frontaccounting Project Management Ext  |
|   Free software under GNU GPL                          |
|                                                        |
\=======================================================*/

$page_security = 'SA_MANAGER';
$path_to_root  = '../../..';
include($path_to_root . "/includes/db_pager.inc");
include_once($path_to_root . "/includes/session.inc");
add_access_extensions();

$js = "";
if ($SysPrefs->use_popup_windows)
	$js .= get_js_open_window(900, 500);
if (user_use_date_picker())
	$js .= get_js_date_picker();

include_once($path_to_root . "/includes/ui.inc");
include_once($path_to_root . "/modules/kanban/includes/kanban_db.inc");
include_once($path_to_root . "/modules/kanban/includes/kanban_ui.inc");

//----------------------------------------------------------------------------------------



//----------------------------------------------------------------------------------------

page(_($help_context = "Manage Projects"), false, false, "", $js);

start_form();



end_form();
end_page();
