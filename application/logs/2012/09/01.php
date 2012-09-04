<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-09-01 07:55:34 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ SYSPATH\classes\kohana\response.php [ 160 ]
2012-09-01 07:55:34 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ SYSPATH\classes\kohana\response.php [ 160 ]
--
#0 C:\Coding\StudRating\system\classes\kohana\response.php(160): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\Coding\StudR...', 160, Array)
#1 C:\Coding\StudRating\application\classes\controller\welcome.php(8): Kohana_Response->body(Object(Database_MySQL_Result))
#2 [internal function]: Controller_Welcome->action_index()
#3 C:\Coding\StudRating\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-01 08:07:20 --- ERROR: View_Exception [ 0 ]: The requested view group1 could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-09-01 08:07:20 --- STRACE: View_Exception [ 0 ]: The requested view group1 could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Coding\StudRating\system\classes\kohana\view.php(137): Kohana_View->set_filename('group1')
#1 C:\Coding\StudRating\system\classes\kohana\view.php(30): Kohana_View->__construct('group1', NULL)
#2 C:\Coding\StudRating\application\classes\controller\welcome.php(11): Kohana_View::factory('group1')
#3 [internal function]: Controller_Welcome->action_index()
#4 C:\Coding\StudRating\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-01 08:32:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/inf was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-01 08:32:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/inf was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-01 08:33:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/asdasd was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-01 08:33:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/asdasd was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-01 08:36:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/add was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-01 08:36:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/add was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-01 08:44:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-01 08:44:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-01 08:45:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-01 08:45:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-01 08:45:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-01 08:45:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-01 08:45:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-01 08:45:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-01 09:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/info/3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-01 09:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/info/3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-01 09:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/info/3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-01 09:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/info/3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-01 09:08:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/info/3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-01 09:08:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/info/3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-01 09:08:52 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Subject::action_group() ~ APPPATH\classes\controller\subject.php [ 11 ]
2012-09-01 09:08:52 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Subject::action_group() ~ APPPATH\classes\controller\subject.php [ 11 ]
--
#0 C:\Coding\StudRating\application\classes\controller\subject.php(11): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\Coding\StudR...', 11, Array)
#1 [internal function]: Controller_Subject->action_group()
#2 C:\Coding\StudRating\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#3 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-01 09:10:18 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Subject::action_group() ~ APPPATH\classes\controller\subject.php [ 11 ]
2012-09-01 09:10:18 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Subject::action_group() ~ APPPATH\classes\controller\subject.php [ 11 ]
--
#0 C:\Coding\StudRating\application\classes\controller\subject.php(11): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\Coding\StudR...', 11, Array)
#1 [internal function]: Controller_Subject->action_group()
#2 C:\Coding\StudRating\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#3 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-01 09:10:19 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Subject::action_group() ~ APPPATH\classes\controller\subject.php [ 11 ]
2012-09-01 09:10:19 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Subject::action_group() ~ APPPATH\classes\controller\subject.php [ 11 ]
--
#0 C:\Coding\StudRating\application\classes\controller\subject.php(11): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\Coding\StudR...', 11, Array)
#1 [internal function]: Controller_Subject->action_group()
#2 C:\Coding\StudRating\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#3 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-01 09:10:20 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Subject::action_group() ~ APPPATH\classes\controller\subject.php [ 11 ]
2012-09-01 09:10:20 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Subject::action_group() ~ APPPATH\classes\controller\subject.php [ 11 ]
--
#0 C:\Coding\StudRating\application\classes\controller\subject.php(11): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\Coding\StudR...', 11, Array)
#1 [internal function]: Controller_Subject->action_group()
#2 C:\Coding\StudRating\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#3 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-01 09:10:20 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Subject::action_group() ~ APPPATH\classes\controller\subject.php [ 11 ]
2012-09-01 09:10:20 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Subject::action_group() ~ APPPATH\classes\controller\subject.php [ 11 ]
--
#0 C:\Coding\StudRating\application\classes\controller\subject.php(11): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\Coding\StudR...', 11, Array)
#1 [internal function]: Controller_Subject->action_group()
#2 C:\Coding\StudRating\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#3 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-01 09:10:21 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Subject::action_group() ~ APPPATH\classes\controller\subject.php [ 11 ]
2012-09-01 09:10:21 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Subject::action_group() ~ APPPATH\classes\controller\subject.php [ 11 ]
--
#0 C:\Coding\StudRating\application\classes\controller\subject.php(11): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\Coding\StudR...', 11, Array)
#1 [internal function]: Controller_Subject->action_group()
#2 C:\Coding\StudRating\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#3 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-01 09:10:22 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Subject::action_group() ~ APPPATH\classes\controller\subject.php [ 11 ]
2012-09-01 09:10:22 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Subject::action_group() ~ APPPATH\classes\controller\subject.php [ 11 ]
--
#0 C:\Coding\StudRating\application\classes\controller\subject.php(11): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\Coding\StudR...', 11, Array)
#1 [internal function]: Controller_Subject->action_group()
#2 C:\Coding\StudRating\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#3 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-01 09:10:22 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Subject::action_group() ~ APPPATH\classes\controller\subject.php [ 11 ]
2012-09-01 09:10:22 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Subject::action_group() ~ APPPATH\classes\controller\subject.php [ 11 ]
--
#0 C:\Coding\StudRating\application\classes\controller\subject.php(11): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\Coding\StudR...', 11, Array)
#1 [internal function]: Controller_Subject->action_group()
#2 C:\Coding\StudRating\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#3 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-01 09:10:23 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Subject::action_group() ~ APPPATH\classes\controller\subject.php [ 11 ]
2012-09-01 09:10:23 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Subject::action_group() ~ APPPATH\classes\controller\subject.php [ 11 ]
--
#0 C:\Coding\StudRating\application\classes\controller\subject.php(11): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\Coding\StudR...', 11, Array)
#1 [internal function]: Controller_Subject->action_group()
#2 C:\Coding\StudRating\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#3 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-01 09:10:23 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Subject::action_group() ~ APPPATH\classes\controller\subject.php [ 11 ]
2012-09-01 09:10:23 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Subject::action_group() ~ APPPATH\classes\controller\subject.php [ 11 ]
--
#0 C:\Coding\StudRating\application\classes\controller\subject.php(11): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\Coding\StudR...', 11, Array)
#1 [internal function]: Controller_Subject->action_group()
#2 C:\Coding\StudRating\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#3 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-01 09:10:24 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Subject::action_group() ~ APPPATH\classes\controller\subject.php [ 11 ]
2012-09-01 09:10:24 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Subject::action_group() ~ APPPATH\classes\controller\subject.php [ 11 ]
--
#0 C:\Coding\StudRating\application\classes\controller\subject.php(11): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\Coding\StudR...', 11, Array)
#1 [internal function]: Controller_Subject->action_group()
#2 C:\Coding\StudRating\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#3 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-01 09:10:37 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Subject::action_group() ~ APPPATH\classes\controller\subject.php [ 11 ]
2012-09-01 09:10:37 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Subject::action_group() ~ APPPATH\classes\controller\subject.php [ 11 ]
--
#0 C:\Coding\StudRating\application\classes\controller\subject.php(11): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\Coding\StudR...', 11, Array)
#1 [internal function]: Controller_Subject->action_group()
#2 C:\Coding\StudRating\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#3 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-01 09:19:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: group ~ APPPATH\views\subject\list.php [ 6 ]
2012-09-01 09:19:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: group ~ APPPATH\views\subject\list.php [ 6 ]
--
#0 C:\Coding\StudRating\application\views\subject\list.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Coding\StudR...', 6, Array)
#1 C:\Coding\StudRating\system\classes\kohana\view.php(61): include('C:\Coding\StudR...')
#2 C:\Coding\StudRating\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Coding\StudR...', Array)
#3 C:\Coding\StudRating\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Coding\StudRating\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\Coding\StudRating\application\classes\controller\subject.php(15): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Subject->action_group()
#7 C:\Coding\StudRating\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#8 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-01 09:20:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: group ~ APPPATH\views\subject\list.php [ 6 ]
2012-09-01 09:20:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: group ~ APPPATH\views\subject\list.php [ 6 ]
--
#0 C:\Coding\StudRating\application\views\subject\list.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Coding\StudR...', 6, Array)
#1 C:\Coding\StudRating\system\classes\kohana\view.php(61): include('C:\Coding\StudR...')
#2 C:\Coding\StudRating\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Coding\StudR...', Array)
#3 C:\Coding\StudRating\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Coding\StudRating\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\Coding\StudRating\application\classes\controller\subject.php(15): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Subject->action_group()
#7 C:\Coding\StudRating\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#8 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-01 09:20:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: group ~ APPPATH\views\subject\list.php [ 6 ]
2012-09-01 09:20:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: group ~ APPPATH\views\subject\list.php [ 6 ]
--
#0 C:\Coding\StudRating\application\views\subject\list.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Coding\StudR...', 6, Array)
#1 C:\Coding\StudRating\system\classes\kohana\view.php(61): include('C:\Coding\StudR...')
#2 C:\Coding\StudRating\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Coding\StudR...', Array)
#3 C:\Coding\StudRating\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Coding\StudRating\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\Coding\StudRating\application\classes\controller\subject.php(15): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Subject->action_group()
#7 C:\Coding\StudRating\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#8 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-01 09:21:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: group ~ APPPATH\views\subject\list.php [ 6 ]
2012-09-01 09:21:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: group ~ APPPATH\views\subject\list.php [ 6 ]
--
#0 C:\Coding\StudRating\application\views\subject\list.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Coding\StudR...', 6, Array)
#1 C:\Coding\StudRating\system\classes\kohana\view.php(61): include('C:\Coding\StudR...')
#2 C:\Coding\StudRating\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Coding\StudR...', Array)
#3 C:\Coding\StudRating\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Coding\StudRating\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\Coding\StudRating\application\classes\controller\subject.php(17): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Subject->action_group()
#7 C:\Coding\StudRating\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#8 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-01 09:25:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL subject was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-01 09:25:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL subject was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-01 09:29:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL subject/info/3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-01 09:29:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL subject/info/3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#3 {main}