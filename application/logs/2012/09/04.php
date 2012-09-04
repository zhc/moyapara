
2012-09-04 00:37:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: group_id ~ APPPATH/classes/controller/subject.php [ 18 ]
2012-09-04 00:37:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: group_id ~ APPPATH/classes/controller/subject.php [ 18 ]
--
#0 /home/vitek/Repos/StudRating/application/classes/controller/subject.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vitek/Rep...', 18, Array)
#1 [internal function]: Controller_Subject->action_group()
#2 /home/vitek/Repos/StudRating/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#3 /home/vitek/Repos/StudRating/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/vitek/Repos/StudRating/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/vitek/Repos/StudRating/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-04 00:38:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL subject/info/8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-09-04 00:38:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL subject/info/8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/vitek/Repos/StudRating/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/vitek/Repos/StudRating/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/vitek/Repos/StudRating/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-04 15:52:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL subject/info/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-09-04 15:52:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL subject/info/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/vitek/Repos/StudRating/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/vitek/Repos/StudRating/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/vitek/Repos/StudRating/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-04 15:55:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL subject/info/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-09-04 15:55:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL subject/info/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/vitek/Repos/StudRating/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/vitek/Repos/StudRating/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/vitek/Repos/StudRating/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-04 15:55:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL subject/info/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-09-04 15:55:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL subject/info/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/vitek/Repos/StudRating/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/vitek/Repos/StudRating/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/vitek/Repos/StudRating/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-04 15:57:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL class/info/274 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-09-04 15:57:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL class/info/274 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/vitek/Repos/StudRating/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/vitek/Repos/StudRating/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/vitek/Repos/StudRating/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-04 15:57:30 --- ERROR: View_Exception [ 0 ]: The requested view subject/list could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-04 15:57:30 --- STRACE: View_Exception [ 0 ]: The requested view subject/list could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/vitek/Repos/StudRating/system/classes/kohana/view.php(137): Kohana_View->set_filename('subject/list')
#1 /home/vitek/Repos/StudRating/system/classes/kohana/view.php(30): Kohana_View->__construct('subject/list', NULL)
#2 /home/vitek/Repos/StudRating/application/classes/controller/subject.php(22): Kohana_View::factory('subject/list')
#3 [internal function]: Controller_Subject->action_group()
#4 /home/vitek/Repos/StudRating/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#5 /home/vitek/Repos/StudRating/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/vitek/Repos/StudRating/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitek/Repos/StudRating/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-04 15:59:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL subject/list/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-09-04 15:59:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL subject/list/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/vitek/Repos/StudRating/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/vitek/Repos/StudRating/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/vitek/Repos/StudRating/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-04 15:59:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL subject/list/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-09-04 15:59:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL subject/list/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/vitek/Repos/StudRating/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/vitek/Repos/StudRating/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/vitek/Repos/StudRating/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-04 16:01:46 --- ERROR: View_Exception [ 0 ]: The requested view subject/list could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-04 16:01:46 --- STRACE: View_Exception [ 0 ]: The requested view subject/list could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/vitek/Repos/StudRating/system/classes/kohana/view.php(137): Kohana_View->set_filename('subject/list')
#1 /home/vitek/Repos/StudRating/system/classes/kohana/view.php(30): Kohana_View->__construct('subject/list', NULL)
#2 /home/vitek/Repos/StudRating/application/classes/controller/subject.php(35): Kohana_View::factory('subject/list')
#3 [internal function]: Controller_Subject->action_list()
#4 /home/vitek/Repos/StudRating/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#5 /home/vitek/Repos/StudRating/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/vitek/Repos/StudRating/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitek/Repos/StudRating/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-04 16:01:47 --- ERROR: View_Exception [ 0 ]: The requested view subject/list could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-04 16:01:47 --- STRACE: View_Exception [ 0 ]: The requested view subject/list could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/vitek/Repos/StudRating/system/classes/kohana/view.php(137): Kohana_View->set_filename('subject/list')
#1 /home/vitek/Repos/StudRating/system/classes/kohana/view.php(30): Kohana_View->__construct('subject/list', NULL)
#2 /home/vitek/Repos/StudRating/application/classes/controller/subject.php(35): Kohana_View::factory('subject/list')
#3 [internal function]: Controller_Subject->action_list()
#4 /home/vitek/Repos/StudRating/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#5 /home/vitek/Repos/StudRating/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/vitek/Repos/StudRating/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitek/Repos/StudRating/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-04 16:01:47 --- ERROR: View_Exception [ 0 ]: The requested view subject/list could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-04 16:01:47 --- STRACE: View_Exception [ 0 ]: The requested view subject/list could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/vitek/Repos/StudRating/system/classes/kohana/view.php(137): Kohana_View->set_filename('subject/list')
#1 /home/vitek/Repos/StudRating/system/classes/kohana/view.php(30): Kohana_View->__construct('subject/list', NULL)
#2 /home/vitek/Repos/StudRating/application/classes/controller/subject.php(35): Kohana_View::factory('subject/list')
#3 [internal function]: Controller_Subject->action_list()
#4 /home/vitek/Repos/StudRating/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#5 /home/vitek/Repos/StudRating/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/vitek/Repos/StudRating/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitek/Repos/StudRating/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-04 16:01:47 --- ERROR: View_Exception [ 0 ]: The requested view subject/list could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-04 16:01:47 --- STRACE: View_Exception [ 0 ]: The requested view subject/list could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/vitek/Repos/StudRating/system/classes/kohana/view.php(137): Kohana_View->set_filename('subject/list')
#1 /home/vitek/Repos/StudRating/system/classes/kohana/view.php(30): Kohana_View->__construct('subject/list', NULL)
#2 /home/vitek/Repos/StudRating/application/classes/controller/subject.php(35): Kohana_View::factory('subject/list')
#3 [internal function]: Controller_Subject->action_list()
#4 /home/vitek/Repos/StudRating/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#5 /home/vitek/Repos/StudRating/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/vitek/Repos/StudRating/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitek/Repos/StudRating/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-04 16:01:48 --- ERROR: View_Exception [ 0 ]: The requested view subject/list could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-04 16:01:48 --- STRACE: View_Exception [ 0 ]: The requested view subject/list could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/vitek/Repos/StudRating/system/classes/kohana/view.php(137): Kohana_View->set_filename('subject/list')
#1 /home/vitek/Repos/StudRating/system/classes/kohana/view.php(30): Kohana_View->__construct('subject/list', NULL)
#2 /home/vitek/Repos/StudRating/application/classes/controller/subject.php(35): Kohana_View::factory('subject/list')
#3 [internal function]: Controller_Subject->action_list()
#4 /home/vitek/Repos/StudRating/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#5 /home/vitek/Repos/StudRating/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/vitek/Repos/StudRating/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitek/Repos/StudRating/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-04 16:03:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: group ~ APPPATH/views/subject/list.php [ 6 ]
2012-09-04 16:03:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: group ~ APPPATH/views/subject/list.php [ 6 ]
--
#0 /home/vitek/Repos/StudRating/application/views/subject/list.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vitek/Rep...', 6, Array)
#1 /home/vitek/Repos/StudRating/system/classes/kohana/view.php(61): include('/home/vitek/Rep...')
#2 /home/vitek/Repos/StudRating/system/classes/kohana/view.php(343): Kohana_View::capture('/home/vitek/Rep...', Array)
#3 /home/vitek/Repos/StudRating/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/vitek/Repos/StudRating/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /home/vitek/Repos/StudRating/application/classes/controller/subject.php(36): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Subject->action_list()
#7 /home/vitek/Repos/StudRating/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#8 /home/vitek/Repos/StudRating/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/vitek/Repos/StudRating/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /home/vitek/Repos/StudRating/index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-04 16:04:07 --- ERROR: Kohana_Exception [ 0 ]: The group property does not exist in the Model_Subject class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
2012-09-04 16:04:07 --- STRACE: Kohana_Exception [ 0 ]: The group property does not exist in the Model_Subject class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
--
#0 /home/vitek/Repos/StudRating/application/classes/controller/subject.php(34): Kohana_ORM->__get('group')
#1 [internal function]: Controller_Subject->action_list()
#2 /home/vitek/Repos/StudRating/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#3 /home/vitek/Repos/StudRating/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/vitek/Repos/StudRating/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/vitek/Repos/StudRating/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-04 16:04:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: group ~ APPPATH/views/subject/list.php [ 6 ]
2012-09-04 16:04:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: group ~ APPPATH/views/subject/list.php [ 6 ]
--
#0 /home/vitek/Repos/StudRating/application/views/subject/list.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vitek/Rep...', 6, Array)
#1 /home/vitek/Repos/StudRating/system/classes/kohana/view.php(61): include('/home/vitek/Rep...')
#2 /home/vitek/Repos/StudRating/system/classes/kohana/view.php(343): Kohana_View::capture('/home/vitek/Rep...', Array)
#3 /home/vitek/Repos/StudRating/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/vitek/Repos/StudRating/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /home/vitek/Repos/StudRating/application/classes/controller/subject.php(37): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Subject->action_list()
#7 /home/vitek/Repos/StudRating/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#8 /home/vitek/Repos/StudRating/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/vitek/Repos/StudRating/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /home/vitek/Repos/StudRating/index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-04 16:11:40 --- ERROR: ErrorException [ 8 ]: Use of undefined constant classes - assumed 'classes' ~ APPPATH/views/subject/list.php [ 12 ]
2012-09-04 16:11:40 --- STRACE: ErrorException [ 8 ]: Use of undefined constant classes - assumed 'classes' ~ APPPATH/views/subject/list.php [ 12 ]
--
#0 /home/vitek/Repos/StudRating/application/views/subject/list.php(12): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/vitek/Rep...', 12, Array)
#1 /home/vitek/Repos/StudRating/system/classes/kohana/view.php(61): include('/home/vitek/Rep...')
#2 /home/vitek/Repos/StudRating/system/classes/kohana/view.php(343): Kohana_View::capture('/home/vitek/Rep...', Array)
#3 /home/vitek/Repos/StudRating/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/vitek/Repos/StudRating/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /home/vitek/Repos/StudRating/application/classes/controller/subject.php(41): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Subject->action_list()
#7 /home/vitek/Repos/StudRating/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#8 /home/vitek/Repos/StudRating/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/vitek/Repos/StudRating/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /home/vitek/Repos/StudRating/index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-04 16:11:50 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Class class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
2012-09-04 16:11:50 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Class class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
--
#0 /home/vitek/Repos/StudRating/application/views/subject/list.php(13): Kohana_ORM->__get('name')
#1 /home/vitek/Repos/StudRating/system/classes/kohana/view.php(61): include('/home/vitek/Rep...')
#2 /home/vitek/Repos/StudRating/system/classes/kohana/view.php(343): Kohana_View::capture('/home/vitek/Rep...', Array)
#3 /home/vitek/Repos/StudRating/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/vitek/Repos/StudRating/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /home/vitek/Repos/StudRating/application/classes/controller/subject.php(41): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Subject->action_list()
#7 /home/vitek/Repos/StudRating/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#8 /home/vitek/Repos/StudRating/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/vitek/Repos/StudRating/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /home/vitek/Repos/StudRating/index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-04 16:40:56 --- ERROR: Kohana_Exception [ 0 ]: Database results are read-only ~ MODPATH/database/classes/kohana/database/result.php [ 272 ]
2012-09-04 16:40:56 --- STRACE: Kohana_Exception [ 0 ]: Database results are read-only ~ MODPATH/database/classes/kohana/database/result.php [ 272 ]
--
#0 /home/vitek/Repos/StudRating/application/classes/controller/subject.php(42): Kohana_Database_Result->offsetUnset(1)
#1 [internal function]: Controller_Subject->action_list()
#2 /home/vitek/Repos/StudRating/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Subject))
#3 /home/vitek/Repos/StudRating/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/vitek/Repos/StudRating/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/vitek/Repos/StudRating/index.php(109): Kohana_Request->execute()
#6 {main}