<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('login_show'); #default action

//App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('login_show', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');

Utils::addRoute('register', 'RegisterCtrl');
Utils::addRoute('register_show', 'RegisterCtrl');

Utils::addRoute('reader', 'ReaderCtrl');
Utils::addRoute('reader_search', 'ReaderCtrl');
Utils::addRoute('reader_list', 'ReaderCtrl');
Utils::addRoute('borrowBook', 'ReaderCtrl');

Utils::addRoute('admin_show', 'AdminCtrl');
Utils::addRoute('updateRole', 'AdminCtrl');

Utils::addRoute('librarian_show', 'LibrarianCtrl');
Utils::addRoute('reclaim', 'LibrarianCtrl');

//Utils::addRoute('action_name', 'controller_class_name');