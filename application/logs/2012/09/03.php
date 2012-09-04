<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-09-03 01:35:12 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1-1346504400' for key 'subject_id_2' [ INSERT INTO `classes` (`subject_id`, `date`) VALUES ('1', 1346504400) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-03 01:35:12 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '1-1346504400' for key 'subject_id_2' [ INSERT INTO `classes` (`subject_id`, `date`) VALUES ('1', 1346504400) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Coding\StudRating\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `cl...', false, Array)
#1 C:\Coding\StudRating\modules\orm\classes\kohana\orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Coding\StudRating\modules\orm\classes\kohana\orm.php(1348): Kohana_ORM->create(NULL)
#3 C:\Coding\StudRating\application\classes\controller\class.php(29): Kohana_ORM->save()
#4 [internal function]: Controller_Class->action_save()
#5 C:\Coding\StudRating\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Class))
#6 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-03 01:39:02 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1-1346504400' for key 'subject_id_2' [ INSERT INTO `classes` (`subject_id`, `date`) VALUES ('1', 1346504400) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-03 01:39:02 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '1-1346504400' for key 'subject_id_2' [ INSERT INTO `classes` (`subject_id`, `date`) VALUES ('1', 1346504400) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Coding\StudRating\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `cl...', false, Array)
#1 C:\Coding\StudRating\modules\orm\classes\kohana\orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Coding\StudRating\modules\orm\classes\kohana\orm.php(1348): Kohana_ORM->create(NULL)
#3 C:\Coding\StudRating\application\classes\controller\class.php(30): Kohana_ORM->save()
#4 [internal function]: Controller_Class->action_save()
#5 C:\Coding\StudRating\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Class))
#6 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-03 01:39:05 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1-1346504400' for key 'subject_id_2' [ INSERT INTO `classes` (`subject_id`, `date`) VALUES ('1', 1346504400) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-03 01:39:05 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '1-1346504400' for key 'subject_id_2' [ INSERT INTO `classes` (`subject_id`, `date`) VALUES ('1', 1346504400) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Coding\StudRating\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `cl...', false, Array)
#1 C:\Coding\StudRating\modules\orm\classes\kohana\orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Coding\StudRating\modules\orm\classes\kohana\orm.php(1348): Kohana_ORM->create(NULL)
#3 C:\Coding\StudRating\application\classes\controller\class.php(30): Kohana_ORM->save()
#4 [internal function]: Controller_Class->action_save()
#5 C:\Coding\StudRating\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Class))
#6 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-03 01:39:07 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1-1346504400' for key 'subject_id_2' [ INSERT INTO `classes` (`subject_id`, `date`) VALUES ('1', 1346504400) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-03 01:39:07 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '1-1346504400' for key 'subject_id_2' [ INSERT INTO `classes` (`subject_id`, `date`) VALUES ('1', 1346504400) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Coding\StudRating\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `cl...', false, Array)
#1 C:\Coding\StudRating\modules\orm\classes\kohana\orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Coding\StudRating\modules\orm\classes\kohana\orm.php(1348): Kohana_ORM->create(NULL)
#3 C:\Coding\StudRating\application\classes\controller\class.php(30): Kohana_ORM->save()
#4 [internal function]: Controller_Class->action_save()
#5 C:\Coding\StudRating\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Class))
#6 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-03 01:39:18 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1-1346504400' for key 'subject_id_2' [ INSERT INTO `classes` (`subject_id`, `date`) VALUES ('1', 1346504400) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-03 01:39:18 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '1-1346504400' for key 'subject_id_2' [ INSERT INTO `classes` (`subject_id`, `date`) VALUES ('1', 1346504400) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Coding\StudRating\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `cl...', false, Array)
#1 C:\Coding\StudRating\modules\orm\classes\kohana\orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Coding\StudRating\modules\orm\classes\kohana\orm.php(1348): Kohana_ORM->create(NULL)
#3 C:\Coding\StudRating\application\classes\controller\class.php(30): Kohana_ORM->save()
#4 [internal function]: Controller_Class->action_save()
#5 C:\Coding\StudRating\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Class))
#6 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-03 02:30:53 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete class model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1360 ]
2012-09-03 02:30:53 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete class model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1360 ]
--
#0 C:\Coding\StudRating\application\classes\controller\class.php(23): Kohana_ORM->delete()
#1 [internal function]: Controller_Class->action_delete()
#2 C:\Coding\StudRating\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Class))
#3 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-03 02:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL class/info/78 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-03 02:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL class/info/78 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-03 02:31:44 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete class model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1360 ]
2012-09-03 02:31:44 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete class model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1360 ]
--
#0 C:\Coding\StudRating\application\classes\controller\class.php(23): Kohana_ORM->delete()
#1 [internal function]: Controller_Class->action_delete()
#2 C:\Coding\StudRating\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Class))
#3 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-03 02:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL subject/info/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-03 02:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL subject/info/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-03 02:33:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL class/info/106 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-03 02:33:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL class/info/106 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-03 02:33:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL class/info/107 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-03 02:33:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL class/info/107 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-03 02:34:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL class/info/106 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-03 02:34:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL class/info/106 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-03 03:04:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL student/list/7 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-03 03:04:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL student/list/7 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-03 07:56:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL class/info/145 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-03 07:56:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL class/info/145 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-03 07:57:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL subject/info/6 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-03 07:57:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL subject/info/6 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\Coding\StudRating\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Coding\StudRating\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\Coding\StudRating\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-03 20:16:41 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-09-03 20:16:41 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /home/vitek/Repos/StudRating/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /home/vitek/Repos/StudRating/modules/database/classes/kohana/database/mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /home/vitek/Repos/StudRating/modules/orm/classes/kohana/orm.php(1538): Kohana_Database_MySQL->list_columns('groups')
#3 /home/vitek/Repos/StudRating/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns()
#4 /home/vitek/Repos/StudRating/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /home/vitek/Repos/StudRating/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /home/vitek/Repos/StudRating/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /home/vitek/Repos/StudRating/application/classes/controller/group.php(17): Kohana_ORM::factory('group')
#8 [internal function]: Controller_Group->action_list()
#9 /home/vitek/Repos/StudRating/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Group))
#10 /home/vitek/Repos/StudRating/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/vitek/Repos/StudRating/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/vitek/Repos/StudRating/index.php(109): Kohana_Request->execute()
#13 {main}
2012-09-03 20:18:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL subject/info/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-09-03 20:18:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL subject/info/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/vitek/Repos/StudRating/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/vitek/Repos/StudRating/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/vitek/Repos/StudRating/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-03 20:18:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL subject/info/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-09-03 20:18:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL subject/info/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/vitek/Repos/StudRating/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/vitek/Repos/StudRating/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/vitek/Repos/StudRating/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-03 20:18:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL subject/info/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-09-03 20:18:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL subject/info/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/vitek/Repos/StudRating/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/vitek/Repos/StudRating/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/vitek/Repos/StudRating/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-03 20:18:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL subject/info/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-09-03 20:18:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL subject/info/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/vitek/Repos/StudRating/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/vitek/Repos/StudRating/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/vitek/Repos/StudRating/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-03 20:18:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL subject/info/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-09-03 20:18:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL subject/info/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/vitek/Repos/StudRating/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/vitek/Repos/StudRating/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/vitek/Repos/StudRating/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-03 20:18:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL subject/info/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-09-03 20:18:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL subject/info/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/vitek/Repos/StudRating/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/vitek/Repos/StudRating/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/vitek/Repos/StudRating/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-03 20:18:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL subject/info/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-09-03 20:18:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL subject/info/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/vitek/Repos/StudRating/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/vitek/Repos/StudRating/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/vitek/Repos/StudRating/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-03 20:18:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL class/info/125 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-09-03 20:18:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL class/info/125 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/vitek/Repos/StudRating/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/vitek/Repos/StudRating/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/vitek/Repos/StudRating/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-03 23:51:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-03 23:51:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/vitek/Repos/StudRating/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-03 23:59:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: group_id ~ APPPATH/classes/controller/student.php [ 44 ]
2012-09-03 23:59:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: group_id ~ APPPATH/classes/controller/student.php [ 44 ]
--
#0 /home/vitek/Repos/StudRating/application/classes/controller/student.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vitek/Rep...', 44, Array)
#1 [internal function]: Controller_Student->action_save()
#2 /home/vitek/Repos/StudRating/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Student))
#3 /home/vitek/Repos/StudRating/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/vitek/Repos/StudRating/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/vitek/Repos/StudRating/index.php(109): Kohana_Request->execute()
#6 {main}