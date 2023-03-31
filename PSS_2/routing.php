<?php

    use core\App;
    use core\Utils;

    App::getRouter()->setDefaultRoute('showMainPage'); #default action
    App::getRouter()->setLoginRoute('login');

    Utils::addRoute('showMainPage', 'MainControl');
    Utils::addRoute('login', 'LoginControl');
    Utils::addRoute('register', 'RegisterControl');
    Utils::addRoute('logout', 'LoginControl');
    Utils::addRoute('adminLogs', 'LogsControl', ['admin']);
    Utils::addRoute('addOpinion', 'AddOpinionControl', ['admin', 'moderator' , 'user', 'zbanowany']);
    Utils::addRoute('manageUsers', 'UserManagerControl', ['admin']);
    Utils::addRoute('manageOpinions', 'OpinionManagerControl', ['admin', 'moderator']);
    Utils::addRoute('opinions', 'OpinionsControl');
    Utils::addRoute('userEdit', 'UserEditControl', ['admin', 'moderator']);
    Utils::addRoute('profile', 'ProfileControl', ['admin', 'moderator', 'user', 'zbanowany']);
    Utils::addRoute('panel', 'PanelControl', ['admin', 'moderator', 'user', 'zbanowany']);
