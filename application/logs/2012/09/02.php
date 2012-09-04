<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-09-02 07:52:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL subject/info/3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-02 07:52:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL subject/info/3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-02 07:57:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL subject/info/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-02 07:57:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL subject/info/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-02 08:05:06 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$classes ~ APPPATH\classes\controller\subject.php [ 16 ]
2012-09-02 08:05:06 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$classes ~ APPPATH\classes\controller\subject.php [ 16 ]
--
#0 C:\Coding\StudRating\application\classes\controller\subject.php(16): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Coding\StudR...', 16, Array)
#1 [internal function]: Controller_Subject->action_group()
#2 C:\Coding\StudRating\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#3 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-02 08:07:30 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\subject.php [ 18 ]
2012-09-02 08:07:30 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\subject.php [ 18 ]
--
#0 C:\Coding\StudRating\application\classes\controller\subject.php(18): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\Coding\StudR...', 18, Array)
#1 [internal function]: Controller_Subject->action_group()
#2 C:\Coding\StudRating\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#3 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-02 08:07:47 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\subject.php [ 18 ]
2012-09-02 08:07:47 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\subject.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-02 08:14:14 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\views\subject\list.php [ 13 ]
2012-09-02 08:14:14 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\views\subject\list.php [ 13 ]
--
#0 C:\Coding\StudRating\application\views\subject\list.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Coding\StudR...', 13, Array)
#1 C:\Coding\StudRating\system\classes\kohana\view.php(61): include('C:\Coding\StudR...')
#2 C:\Coding\StudRating\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Coding\StudR...', Array)
#3 C:\Coding\StudRating\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Coding\StudRating\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\Coding\StudRating\application\classes\controller\subject.php(25): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Subject->action_group()
#7 C:\Coding\StudRating\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#8 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-02 08:14:41 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\views\subject\list.php [ 13 ]
2012-09-02 08:14:41 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\views\subject\list.php [ 13 ]
--
#0 C:\Coding\StudRating\application\views\subject\list.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Coding\StudR...', 13, Array)
#1 C:\Coding\StudRating\system\classes\kohana\view.php(61): include('C:\Coding\StudR...')
#2 C:\Coding\StudRating\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Coding\StudR...', Array)
#3 C:\Coding\StudRating\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Coding\StudRating\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\Coding\StudRating\application\classes\controller\subject.php(25): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Subject->action_group()
#7 C:\Coding\StudRating\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#8 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-02 08:14:43 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\views\subject\list.php [ 13 ]
2012-09-02 08:14:43 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\views\subject\list.php [ 13 ]
--
#0 C:\Coding\StudRating\application\views\subject\list.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Coding\StudR...', 13, Array)
#1 C:\Coding\StudRating\system\classes\kohana\view.php(61): include('C:\Coding\StudR...')
#2 C:\Coding\StudRating\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Coding\StudR...', Array)
#3 C:\Coding\StudRating\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Coding\StudRating\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\Coding\StudRating\application\classes\controller\subject.php(25): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Subject->action_group()
#7 C:\Coding\StudRating\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#8 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-02 08:14:44 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\views\subject\list.php [ 13 ]
2012-09-02 08:14:44 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\views\subject\list.php [ 13 ]
--
#0 C:\Coding\StudRating\application\views\subject\list.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Coding\StudR...', 13, Array)
#1 C:\Coding\StudRating\system\classes\kohana\view.php(61): include('C:\Coding\StudR...')
#2 C:\Coding\StudRating\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Coding\StudR...', Array)
#3 C:\Coding\StudRating\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Coding\StudRating\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\Coding\StudRating\application\classes\controller\subject.php(25): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Subject->action_group()
#7 C:\Coding\StudRating\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#8 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-02 08:15:08 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\views\subject\list.php [ 13 ]
2012-09-02 08:15:08 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\views\subject\list.php [ 13 ]
--
#0 C:\Coding\StudRating\application\views\subject\list.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Coding\StudR...', 13, Array)
#1 C:\Coding\StudRating\system\classes\kohana\view.php(61): include('C:\Coding\StudR...')
#2 C:\Coding\StudRating\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Coding\StudR...', Array)
#3 C:\Coding\StudRating\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Coding\StudRating\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\Coding\StudRating\application\classes\controller\subject.php(25): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Subject->action_group()
#7 C:\Coding\StudRating\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#8 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-02 08:15:10 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\views\subject\list.php [ 13 ]
2012-09-02 08:15:10 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\views\subject\list.php [ 13 ]
--
#0 C:\Coding\StudRating\application\views\subject\list.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Coding\StudR...', 13, Array)
#1 C:\Coding\StudRating\system\classes\kohana\view.php(61): include('C:\Coding\StudR...')
#2 C:\Coding\StudRating\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Coding\StudR...', Array)
#3 C:\Coding\StudRating\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Coding\StudRating\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\Coding\StudRating\application\classes\controller\subject.php(25): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Subject->action_group()
#7 C:\Coding\StudRating\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#8 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-02 08:15:11 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\views\subject\list.php [ 13 ]
2012-09-02 08:15:11 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\views\subject\list.php [ 13 ]
--
#0 C:\Coding\StudRating\application\views\subject\list.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Coding\StudR...', 13, Array)
#1 C:\Coding\StudRating\system\classes\kohana\view.php(61): include('C:\Coding\StudR...')
#2 C:\Coding\StudRating\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Coding\StudR...', Array)
#3 C:\Coding\StudRating\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Coding\StudRating\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\Coding\StudRating\application\classes\controller\subject.php(25): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Subject->action_group()
#7 C:\Coding\StudRating\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#8 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-02 08:16:38 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ APPPATH\classes\controller\subject.php [ 19 ]
2012-09-02 08:16:38 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ APPPATH\classes\controller\subject.php [ 19 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge() [...', 'C:\Coding\StudR...', 19, Array)
#1 C:\Coding\StudRating\application\classes\controller\subject.php(19): array_merge(Array, Object(Database_MySQL_Result))
#2 [internal function]: Controller_Subject->action_group()
#3 C:\Coding\StudRating\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#4 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-02 08:30:52 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\classes\controller\class.php [ 14 ]
2012-09-02 08:30:52 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\classes\controller\class.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-02 08:31:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: group_id ~ APPPATH\views\class\add.php [ 7 ]
2012-09-02 08:31:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: group_id ~ APPPATH\views\class\add.php [ 7 ]
--
#0 C:\Coding\StudRating\application\views\class\add.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Coding\StudR...', 7, Array)
#1 C:\Coding\StudRating\system\classes\kohana\view.php(61): include('C:\Coding\StudR...')
#2 C:\Coding\StudRating\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Coding\StudR...', Array)
#3 C:\Coding\StudRating\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Coding\StudRating\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\Coding\StudRating\application\classes\controller\class.php(15): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Class->action_add()
#7 C:\Coding\StudRating\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Class))
#8 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-02 08:46:29 --- ERROR: ErrorException [ 4096 ]: Object of class Date could not be converted to string ~ MODPATH\database\classes\kohana\database.php [ 461 ]
2012-09-02 08:46:29 --- STRACE: ErrorException [ 4096 ]: Object of class Date could not be converted to string ~ MODPATH\database\classes\kohana\database.php [ 461 ]
--
#0 C:\Coding\StudRating\modules\database\classes\kohana\database.php(461): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\Coding\StudR...', 461, Array)
#1 C:\Coding\StudRating\modules\database\classes\kohana\database\query\builder\insert.php(140): Kohana_Database->quote(Object(Date))
#2 C:\Coding\StudRating\modules\database\classes\kohana\database\query.php(228): Kohana_Database_Query_Builder_Insert->compile(Object(Database_MySQL))
#3 C:\Coding\StudRating\modules\orm\classes\kohana\orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#4 C:\Coding\StudRating\modules\orm\classes\kohana\orm.php(1348): Kohana_ORM->create(NULL)
#5 C:\Coding\StudRating\application\classes\controller\class.php(27): Kohana_ORM->save()
#6 [internal function]: Controller_Class->action_save()
#7 C:\Coding\StudRating\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Class))
#8 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-02 08:51:49 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ APPPATH\classes\controller\subject.php [ 20 ]
2012-09-02 08:51:49 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ APPPATH\classes\controller\subject.php [ 20 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge() [...', 'C:\Coding\StudR...', 20, Array)
#1 C:\Coding\StudRating\application\classes\controller\subject.php(20): array_merge(Array, Object(Database_MySQL_Result))
#2 [internal function]: Controller_Subject->action_group()
#3 C:\Coding\StudRating\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#4 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-02 08:53:46 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ MODPATH\database\classes\kohana\database.php [ 461 ]
2012-09-02 08:53:46 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ MODPATH\database\classes\kohana\database.php [ 461 ]
--
#0 C:\Coding\StudRating\modules\database\classes\kohana\database.php(461): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\Coding\StudR...', 461, Array)
#1 C:\Coding\StudRating\modules\database\classes\kohana\database\query\builder.php(116): Kohana_Database->quote(Object(Database_MySQL_Result))
#2 C:\Coding\StudRating\modules\database\classes\kohana\database\query\builder\select.php(366): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQL), Array)
#3 C:\Coding\StudRating\modules\database\classes\kohana\database\query.php(228): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 C:\Coding\StudRating\modules\orm\classes\kohana\orm.php(993): Kohana_Database_Query->execute(Object(Database_MySQL))
#5 C:\Coding\StudRating\modules\orm\classes\kohana\orm.php(934): Kohana_ORM->_load_result(true)
#6 C:\Coding\StudRating\application\classes\controller\subject.php(16): Kohana_ORM->find_all()
#7 [internal function]: Controller_Subject->action_group()
#8 C:\Coding\StudRating\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#9 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#12 {main}
2012-09-02 09:35:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: class/add/css/ui-lightness/jquery-ui-1.8.23.custom.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-02 09:35:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: class/add/css/ui-lightness/jquery-ui-1.8.23.custom.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-02 09:42:09 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_EXIT ~ APPPATH\classes\controller\class.php [ 33 ]
2012-09-02 09:42:09 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_EXIT ~ APPPATH\classes\controller\class.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-02 09:51:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL class/info/9 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-02 09:51:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL class/info/9 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-02 20:57:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL class/info/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-02 20:57:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL class/info/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#3 {main}