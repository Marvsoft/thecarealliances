<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::R2hliPSI7a9UAf1n',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ui.front.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::THTAcYIRB9n1m50i',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.session.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.session.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.forgot_password.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.forgot_password.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reset_password.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/customers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customers.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/resources' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.resources.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/alliance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.alliance.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.alliance.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/services' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.services.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/who-am-i' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.who-am-i.main-category.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/who-am-i/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.who-am-i.main-category.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.who-am-i.main-category.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/who-am-i/sub-category/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.who-am-i.sub-category.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/who-am-i/sub-category/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.who-am-i.sub-category.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.who-am-i.sub-category.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.session.destroy',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/template' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard.template',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/api/dashboard/cards' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.api.dashboard.cards.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.api.dashboard.cards.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/groups' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.groups.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/groups/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.groups.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.groups.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.account.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/account/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.account.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.roles.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/roles/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.roles.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.roles.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.users.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.users.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ui.datagrid.export',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/create-your-plan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ui.front.create-plan',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/create-new-community' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ui.front.create-new-community',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/i-can-help' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ui.front.i-can-help',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/who-am-i' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ui.front.who-am-i',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/i-need-help' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ui.front.i-need-help',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/share-experiences' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ui.front.share-experiences',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mentoring-portal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ui.front.mentoring-portal',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/getzipcode' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ui.front.zipcode',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/getCategory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ui.front.category',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/searchCategory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ui.front.searchcateory',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/posts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.posts.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/posts/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.posts.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.posts.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/category/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tags' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tags.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tags/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tags.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tags.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/_debugbar/c(?|lockwork/([^/]++)(*:39)|ache/([^/]++)(?:/([^/]++))?(*:73))|/admin/(?|reset\\-password/([^/]++)(*:115)|groups/(?|edit/([^/]++)(?|(*:149))|([^/]++)(*:166))|settings/(?|roles/(?|edit/([^/]++)(?|(*:212))|([^/]++)(*:229))|users/(?|edit(?|(?:/([^/]++))?(*:268)|/([^/]++)(*:285))|([^/]++)(*:302)|mass\\-(?|update(*:325)|destroy(*:340))))|posts/(?|edit/([^/]++)(?|(*:376))|([^/]++)(*:393))|category/(?|edit/([^/]++)(?|(*:430))|([^/]++)(*:447)|mass\\-(?|destroy(*:471)|update(*:485)))|tags/(?|edit/([^/]++)(?|(*:519))|([^/]++)(*:536)|mass\\-(?|destroy(*:560)|update(*:574)))))/?$}sDu',
    ),
    3 => 
    array (
      39 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      73 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      115 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reset_password.create',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      149 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.groups.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.groups.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      166 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.groups.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      212 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.roles.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.roles.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      229 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.roles.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      268 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.users.edit',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      285 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.users.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      302 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.users.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      325 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.users.mass_update',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      340 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.users.mass_delete',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      376 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.posts.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.posts.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      393 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.posts.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      430 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      447 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      471 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.mass_delete',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      485 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.mass_update',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      519 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tags.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tags.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      536 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tags.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      560 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tags.mass_delete',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      574 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tags.mass_update',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R2hliPSI7a9UAf1n' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006fa0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::R2hliPSI7a9UAf1n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ui.front.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
        ),
        'uses' => 'Devi\\UI\\Http\\Controllers\\FrontController@index',
        'controller' => 'Devi\\UI\\Http\\Controllers\\FrontController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'ui.front.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::THTAcYIRB9n1m50i' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\Controller@redirectToLogin',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\Controller@redirectToLogin',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::THTAcYIRB9n1m50i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.session.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\User\\SessionController@create',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\User\\SessionController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.session.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.session.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\User\\SessionController@store',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\User\\SessionController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.session.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.forgot_password.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\User\\ForgotPasswordController@create',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\User\\ForgotPasswordController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.forgot_password.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.forgot_password.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\User\\ForgotPasswordController@store',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\User\\ForgotPasswordController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.forgot_password.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reset_password.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reset-password/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\User\\ResetPasswordController@create',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\User\\ResetPasswordController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.reset_password.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reset_password.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\User\\ResetPasswordController@store',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\User\\ResetPasswordController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.reset_password.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\Customers\\CustomerController@index',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\Customers\\CustomerController@index',
        'namespace' => NULL,
        'prefix' => 'admin/customers',
        'where' => 
        array (
        ),
        'as' => 'admin.customers.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.resources.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/resources',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\Resources\\ResourceController@index',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\Resources\\ResourceController@index',
        'namespace' => NULL,
        'prefix' => 'admin/resources',
        'where' => 
        array (
        ),
        'as' => 'admin.resources.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.alliance.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/alliance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\Alliance\\AllianceController@create',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\Alliance\\AllianceController@create',
        'namespace' => NULL,
        'prefix' => 'admin/alliance',
        'where' => 
        array (
        ),
        'as' => 'admin.alliance.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.alliance.edit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/alliance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\Alliance\\AllianceController@store',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\Alliance\\AllianceController@store',
        'namespace' => NULL,
        'prefix' => 'admin/alliance',
        'where' => 
        array (
        ),
        'as' => 'admin.alliance.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.services.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\Services\\ServiceController@index',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\Services\\ServiceController@index',
        'namespace' => NULL,
        'prefix' => 'admin/services',
        'where' => 
        array (
        ),
        'as' => 'admin.services.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.who-am-i.main-category.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/who-am-i',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\Who_Am_I\\WhoAmIController@index',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\Who_Am_I\\WhoAmIController@index',
        'namespace' => NULL,
        'prefix' => 'admin/who-am-i',
        'where' => 
        array (
        ),
        'as' => 'admin.who-am-i.main-category.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.who-am-i.main-category.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/who-am-i/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\Who_Am_I\\WhoAmIController@create',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\Who_Am_I\\WhoAmIController@create',
        'namespace' => NULL,
        'prefix' => 'admin/who-am-i',
        'where' => 
        array (
        ),
        'as' => 'admin.who-am-i.main-category.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.who-am-i.main-category.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/who-am-i/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\Who_Am_I\\WhoAmIController@store',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\Who_Am_I\\WhoAmIController@store',
        'namespace' => NULL,
        'prefix' => 'admin/who-am-i',
        'where' => 
        array (
        ),
        'as' => 'admin.who-am-i.main-category.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.who-am-i.sub-category.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/who-am-i/sub-category/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\Who_Am_I\\WhoAmIController@subCategory',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\Who_Am_I\\WhoAmIController@subCategory',
        'namespace' => NULL,
        'prefix' => 'admin/who-am-i',
        'where' => 
        array (
        ),
        'as' => 'admin.who-am-i.sub-category.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.who-am-i.sub-category.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/who-am-i/sub-category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\Who_Am_I\\WhoAmIController@createSubCategory',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\Who_Am_I\\WhoAmIController@createSubCategory',
        'namespace' => NULL,
        'prefix' => 'admin/who-am-i',
        'where' => 
        array (
        ),
        'as' => 'admin.who-am-i.sub-category.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.who-am-i.sub-category.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/who-am-i/sub-category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\Who_Am_I\\WhoAmIController@storeSubCategory',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\Who_Am_I\\WhoAmIController@storeSubCategory',
        'namespace' => NULL,
        'prefix' => 'admin/who-am-i',
        'where' => 
        array (
        ),
        'as' => 'admin.who-am-i.sub-category.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.session.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\User\\SessionController@destroy',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\User\\SessionController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.session.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dashboard.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\Admin\\DashboardController@index',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\Admin\\DashboardController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.dashboard.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dashboard.template' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\Admin\\DashboardController@template',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\Admin\\DashboardController@template',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.dashboard.template',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.api.dashboard.cards.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/api/dashboard/cards',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\Admin\\DashboardController@getCards',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\Admin\\DashboardController@getCards',
        'namespace' => NULL,
        'prefix' => 'admin/api/dashboard',
        'where' => 
        array (
        ),
        'as' => 'admin.api.dashboard.cards.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.api.dashboard.cards.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/api/dashboard/cards',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\Admin\\DashboardController@updateCards',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\Admin\\DashboardController@updateCards',
        'namespace' => NULL,
        'prefix' => 'admin/api/dashboard',
        'where' => 
        array (
        ),
        'as' => 'admin.api.dashboard.cards.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.groups.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/groups',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'GroupController@index',
        'controller' => 'GroupController@index',
        'namespace' => NULL,
        'prefix' => 'admin/groups',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.groups.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.groups.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/groups/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'GroupController@create',
        'controller' => 'GroupController@create',
        'namespace' => NULL,
        'prefix' => 'admin/groups',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.groups.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.groups.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/groups/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'GroupController@store',
        'controller' => 'GroupController@store',
        'namespace' => NULL,
        'prefix' => 'admin/groups',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.groups.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.groups.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/groups/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'GroupController@edit',
        'controller' => 'GroupController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/groups',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.groups.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.groups.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/groups/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'GroupController@update',
        'controller' => 'GroupController@update',
        'namespace' => NULL,
        'prefix' => 'admin/groups',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.groups.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.groups.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/groups/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'GroupController@destroy',
        'controller' => 'GroupController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/groups',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.groups.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.account.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\User\\AccountController@edit',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\User\\AccountController@edit',
        'namespace' => 'Devi\\Admin\\Http\\Controllers\\User',
        'prefix' => 'admin/account',
        'where' => 
        array (
        ),
        'as' => 'admin.user.account.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.account.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/account/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\User\\AccountController@update',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\User\\AccountController@update',
        'namespace' => 'Devi\\Admin\\Http\\Controllers\\User',
        'prefix' => 'admin/account',
        'where' => 
        array (
        ),
        'as' => 'admin.user.account.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\Setting\\SettingController@index',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\Setting\\SettingController@index',
        'namespace' => 'Devi\\Admin\\Http\\Controllers\\Setting',
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.roles.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\Setting\\RoleController@index',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\Setting\\RoleController@index',
        'namespace' => 'Devi\\Admin\\Http\\Controllers\\Setting',
        'prefix' => 'admin/settings/roles',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.roles.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.roles.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/roles/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\Setting\\RoleController@create',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\Setting\\RoleController@create',
        'namespace' => 'Devi\\Admin\\Http\\Controllers\\Setting',
        'prefix' => 'admin/settings/roles',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.roles.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.roles.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/roles/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\Setting\\RoleController@store',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\Setting\\RoleController@store',
        'namespace' => 'Devi\\Admin\\Http\\Controllers\\Setting',
        'prefix' => 'admin/settings/roles',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.roles.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.roles.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/roles/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\Setting\\RoleController@edit',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\Setting\\RoleController@edit',
        'namespace' => 'Devi\\Admin\\Http\\Controllers\\Setting',
        'prefix' => 'admin/settings/roles',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.roles.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.roles.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/roles/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\Setting\\RoleController@update',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\Setting\\RoleController@update',
        'namespace' => 'Devi\\Admin\\Http\\Controllers\\Setting',
        'prefix' => 'admin/settings/roles',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.roles.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.roles.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/settings/roles/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\Setting\\RoleController@destroy',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\Setting\\RoleController@destroy',
        'namespace' => 'Devi\\Admin\\Http\\Controllers\\Setting',
        'prefix' => 'admin/settings/roles',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.roles.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\Setting\\UserController@index',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\Setting\\UserController@index',
        'namespace' => 'Devi\\Admin\\Http\\Controllers\\Setting',
        'prefix' => 'admin/settings/users',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.users.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.users.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\Setting\\UserController@create',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\Setting\\UserController@create',
        'namespace' => 'Devi\\Admin\\Http\\Controllers\\Setting',
        'prefix' => 'admin/settings/users',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.users.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.users.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\Setting\\UserController@store',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\Setting\\UserController@store',
        'namespace' => 'Devi\\Admin\\Http\\Controllers\\Setting',
        'prefix' => 'admin/settings/users',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.users.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.users.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/users/edit/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\Setting\\UserController@edit',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\Setting\\UserController@edit',
        'namespace' => 'Devi\\Admin\\Http\\Controllers\\Setting',
        'prefix' => 'admin/settings/users',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.users.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.users.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/users/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\Setting\\UserController@update',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\Setting\\UserController@update',
        'namespace' => 'Devi\\Admin\\Http\\Controllers\\Setting',
        'prefix' => 'admin/settings/users',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.users.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.users.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/settings/users/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\Setting\\UserController@destroy',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\Setting\\UserController@destroy',
        'namespace' => 'Devi\\Admin\\Http\\Controllers\\Setting',
        'prefix' => 'admin/settings/users',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.users.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.users.mass_update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/users/mass-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\Setting\\UserController@massUpdate',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\Setting\\UserController@massUpdate',
        'namespace' => 'Devi\\Admin\\Http\\Controllers\\Setting',
        'prefix' => 'admin/settings/users',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.users.mass_update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.users.mass_delete' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/users/mass-destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Admin\\Http\\Controllers\\Setting\\UserController@massDestroy',
        'controller' => 'Devi\\Admin\\Http\\Controllers\\Setting\\UserController@massDestroy',
        'namespace' => 'Devi\\Admin\\Http\\Controllers\\Setting',
        'prefix' => 'admin/settings/users',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.users.mass_delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ui.datagrid.export' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
        ),
        'uses' => 'Devi\\UI\\Http\\Controllers\\ExportController@export',
        'controller' => 'Devi\\UI\\Http\\Controllers\\ExportController@export',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'ui.datagrid.export',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ui.front.create-plan' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'create-your-plan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
        ),
        'uses' => 'Devi\\UI\\Http\\Controllers\\FrontController@create_plan',
        'controller' => 'Devi\\UI\\Http\\Controllers\\FrontController@create_plan',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'ui.front.create-plan',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ui.front.create-new-community' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'create-new-community',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
        ),
        'uses' => 'Devi\\UI\\Http\\Controllers\\FrontController@create_new_community',
        'controller' => 'Devi\\UI\\Http\\Controllers\\FrontController@create_new_community',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'ui.front.create-new-community',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ui.front.i-can-help' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'i-can-help',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
        ),
        'uses' => 'Devi\\UI\\Http\\Controllers\\FrontController@i_can_help',
        'controller' => 'Devi\\UI\\Http\\Controllers\\FrontController@i_can_help',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'ui.front.i-can-help',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ui.front.who-am-i' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'who-am-i',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
        ),
        'uses' => 'Devi\\UI\\Http\\Controllers\\FrontController@who_am_i',
        'controller' => 'Devi\\UI\\Http\\Controllers\\FrontController@who_am_i',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'ui.front.who-am-i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ui.front.i-need-help' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'i-need-help',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
        ),
        'uses' => 'Devi\\UI\\Http\\Controllers\\FrontController@i_need_help',
        'controller' => 'Devi\\UI\\Http\\Controllers\\FrontController@i_need_help',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'ui.front.i-need-help',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ui.front.share-experiences' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'share-experiences',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
        ),
        'uses' => 'Devi\\UI\\Http\\Controllers\\FrontController@share_experiences',
        'controller' => 'Devi\\UI\\Http\\Controllers\\FrontController@share_experiences',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'ui.front.share-experiences',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ui.front.mentoring-portal' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mentoring-portal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
        ),
        'uses' => 'Devi\\UI\\Http\\Controllers\\FrontController@mentoring_portal',
        'controller' => 'Devi\\UI\\Http\\Controllers\\FrontController@mentoring_portal',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'ui.front.mentoring-portal',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ui.front.zipcode' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/getzipcode',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
        ),
        'uses' => 'Devi\\UI\\Http\\Controllers\\SearchApiController@getAllZipcode',
        'controller' => 'Devi\\UI\\Http\\Controllers\\SearchApiController@getAllZipcode',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'ui.front.zipcode',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ui.front.category' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/getCategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
        ),
        'uses' => 'Devi\\UI\\Http\\Controllers\\SearchApiController@getCategory',
        'controller' => 'Devi\\UI\\Http\\Controllers\\SearchApiController@getCategory',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'ui.front.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ui.front.searchcateory' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/searchCategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
        ),
        'uses' => 'Devi\\UI\\Http\\Controllers\\SearchApiController@searchCategory',
        'controller' => 'Devi\\UI\\Http\\Controllers\\SearchApiController@searchCategory',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'ui.front.searchcateory',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.posts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Post\\Http\\Controllers\\Post\\PostController@index',
        'controller' => 'Devi\\Post\\Http\\Controllers\\Post\\PostController@index',
        'namespace' => NULL,
        'prefix' => 'admin/posts',
        'where' => 
        array (
        ),
        'as' => 'admin.posts.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.posts.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/posts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Post\\Http\\Controllers\\Post\\PostController@create',
        'controller' => 'Devi\\Post\\Http\\Controllers\\Post\\PostController@create',
        'namespace' => NULL,
        'prefix' => 'admin/posts',
        'where' => 
        array (
        ),
        'as' => 'admin.posts.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.posts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/posts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Post\\Http\\Controllers\\Post\\PostController@store',
        'controller' => 'Devi\\Post\\Http\\Controllers\\Post\\PostController@store',
        'namespace' => NULL,
        'prefix' => 'admin/posts',
        'where' => 
        array (
        ),
        'as' => 'admin.posts.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.posts.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/posts/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Post\\Http\\Controllers\\Post\\PostController@edit',
        'controller' => 'Devi\\Post\\Http\\Controllers\\Post\\PostController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/posts',
        'where' => 
        array (
        ),
        'as' => 'admin.posts.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.posts.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/posts/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Post\\Http\\Controllers\\Post\\PostController@update',
        'controller' => 'Devi\\Post\\Http\\Controllers\\Post\\PostController@update',
        'namespace' => NULL,
        'prefix' => 'admin/posts',
        'where' => 
        array (
        ),
        'as' => 'admin.posts.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.posts.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/posts/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Post\\Http\\Controllers\\Post\\PostController@destroy',
        'controller' => 'Devi\\Post\\Http\\Controllers\\Post\\PostController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/posts',
        'where' => 
        array (
        ),
        'as' => 'admin.posts.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Post\\Http\\Controllers\\Category\\CategoryController@index',
        'controller' => 'Devi\\Post\\Http\\Controllers\\Category\\CategoryController@index',
        'namespace' => NULL,
        'prefix' => 'admin/category',
        'where' => 
        array (
        ),
        'as' => 'admin.category.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Post\\Http\\Controllers\\Category\\CategoryController@create',
        'controller' => 'Devi\\Post\\Http\\Controllers\\Category\\CategoryController@create',
        'namespace' => NULL,
        'prefix' => 'admin/category',
        'where' => 
        array (
        ),
        'as' => 'admin.category.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Post\\Http\\Controllers\\Category\\CategoryController@store',
        'controller' => 'Devi\\Post\\Http\\Controllers\\Category\\CategoryController@store',
        'namespace' => NULL,
        'prefix' => 'admin/category',
        'where' => 
        array (
        ),
        'as' => 'admin.category.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/category/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Post\\Http\\Controllers\\Category\\CategoryController@edit',
        'controller' => 'Devi\\Post\\Http\\Controllers\\Category\\CategoryController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/category',
        'where' => 
        array (
        ),
        'as' => 'admin.category.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/category/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Post\\Http\\Controllers\\Category\\CategoryController@update',
        'controller' => 'Devi\\Post\\Http\\Controllers\\Category\\CategoryController@update',
        'namespace' => NULL,
        'prefix' => 'admin/category',
        'where' => 
        array (
        ),
        'as' => 'admin.category.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/category/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Post\\Http\\Controllers\\Category\\CategoryController@destroy',
        'controller' => 'Devi\\Post\\Http\\Controllers\\Category\\CategoryController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/category',
        'where' => 
        array (
        ),
        'as' => 'admin.category.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.mass_delete' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/category/mass-destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Post\\Http\\Controllers\\Category\\CategoryController@massDestroy',
        'controller' => 'Devi\\Post\\Http\\Controllers\\Category\\CategoryController@massDestroy',
        'namespace' => NULL,
        'prefix' => 'admin/category',
        'where' => 
        array (
        ),
        'as' => 'admin.category.mass_delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.mass_update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/category/mass-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Post\\Http\\Controllers\\Category\\CategoryController@massUpdate',
        'controller' => 'Devi\\Post\\Http\\Controllers\\Category\\CategoryController@massUpdate',
        'namespace' => NULL,
        'prefix' => 'admin/category',
        'where' => 
        array (
        ),
        'as' => 'admin.category.mass_update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tags.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tags',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Post\\Http\\Controllers\\Tag\\TagController@index',
        'controller' => 'Devi\\Post\\Http\\Controllers\\Tag\\TagController@index',
        'namespace' => NULL,
        'prefix' => 'admin/tags',
        'where' => 
        array (
        ),
        'as' => 'admin.tags.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tags.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tags/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Post\\Http\\Controllers\\Tag\\TagController@create',
        'controller' => 'Devi\\Post\\Http\\Controllers\\Tag\\TagController@create',
        'namespace' => NULL,
        'prefix' => 'admin/tags',
        'where' => 
        array (
        ),
        'as' => 'admin.tags.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tags.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tags/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Post\\Http\\Controllers\\Tag\\TagController@store',
        'controller' => 'Devi\\Post\\Http\\Controllers\\Tag\\TagController@store',
        'namespace' => NULL,
        'prefix' => 'admin/tags',
        'where' => 
        array (
        ),
        'as' => 'admin.tags.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tags.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tags/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Post\\Http\\Controllers\\Tag\\TagController@edit',
        'controller' => 'Devi\\Post\\Http\\Controllers\\Tag\\TagController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/tags',
        'where' => 
        array (
        ),
        'as' => 'admin.tags.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tags.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/tags/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Post\\Http\\Controllers\\Tag\\TagController@update',
        'controller' => 'Devi\\Post\\Http\\Controllers\\Tag\\TagController@update',
        'namespace' => NULL,
        'prefix' => 'admin/tags',
        'where' => 
        array (
        ),
        'as' => 'admin.tags.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tags.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/tags/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Post\\Http\\Controllers\\Tag\\TagController@destroy',
        'controller' => 'Devi\\Post\\Http\\Controllers\\Tag\\TagController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/tags',
        'where' => 
        array (
        ),
        'as' => 'admin.tags.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tags.mass_delete' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/tags/mass-destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Post\\Http\\Controllers\\Tag\\TagController@massDestroy',
        'controller' => 'Devi\\Post\\Http\\Controllers\\Tag\\TagController@massDestroy',
        'namespace' => NULL,
        'prefix' => 'admin/tags',
        'where' => 
        array (
        ),
        'as' => 'admin.tags.mass_delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tags.mass_update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/tags/mass-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'user',
        ),
        'uses' => 'Devi\\Post\\Http\\Controllers\\Tag\\TagController@massUpdate',
        'controller' => 'Devi\\Post\\Http\\Controllers\\Tag\\TagController@massUpdate',
        'namespace' => NULL,
        'prefix' => 'admin/tags',
        'where' => 
        array (
        ),
        'as' => 'admin.tags.mass_update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
