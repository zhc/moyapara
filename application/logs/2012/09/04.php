
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