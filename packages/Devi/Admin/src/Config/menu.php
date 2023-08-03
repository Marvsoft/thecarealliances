<?php

return [
    [
        'key'        => 'dashboard',
        'name'       => 'admin::app.layouts.dashboard',
        'route'      => 'admin.dashboard.index',
        'sort'       => 1,
        'icon-class' => 'dashboard-icon',
    ], [
        'key'        => 'post',
        'name'       => 'admin::app.layouts.post',
        'route'      => 'admin.posts.index',
        'sort'       => 2,
        'icon-class' => 'settings-icon',
    ],
    [
        'key'        => 'post.posts',
        'name'       => 'admin::app.layouts.post',
        'route'      => 'admin.posts.index',
        'sort'       => 1,
        'icon-class' => 'posts-icon',
    ], [
        'key'        => 'post.category',
        'name'       => 'admin::app.layouts.category',
        'route'      => 'admin.category.index',
        'sort'       => 2,
        'icon-class' => 'posts-icon',
    ], [
        'key'        => 'post.tags',
        'name'       => 'admin::app.layouts.tags',
        'route'      => 'admin.tags.index',
        'sort'       => 2,
        'icon-class' => 'posts-icon',
    ], [
        'key'        => 'customer',
        'name'       => 'Customer List',
        'route'      => 'admin.customers.index',
        'sort'       => 3,
        'icon-class' => 'avatar-icon',
    ], [
        'key'        => 'alliance',
        'name'       => 'Alliance',
        'route'      => 'admin.resources.index',
        'sort'       => 4,
        'icon-class' => 'tools-icon',
    ], [
        'key'        => 'alliance.who-am-i',
        'name'       => 'admin::app.alliance.title',
        'route'      => 'admin.resources.index',
        // 'info'       => 'admin::app.layouts.user-info',
        'sort'       => 1,
    ], [
        'key'        => 'alliance.resource',
        'name'       => 'Resource',
        'route'      => 'admin.resources.index',
        // 'info'       => 'admin::app.layouts.user-info',
        'sort'       => 2,
    ], [
        'key'        => 'alliance.i-can-help',
        'name'       => 'I Can Help',
        'route'      => 'admin.resources.index',
        // 'info'       => 'admin::app.layouts.user-info',
        'sort'       => 3,
    ], [
        'key'        => 'alliance.i-need-help',
        'name'       => 'I Need Help',
        'route'      => 'admin.resources.index',
        // 'info'       => 'admin::app.layouts.user-info',
        'sort'       => 4,
    ], [
        'key'        => 'services',
        'name'       => 'Services',
        'route'      => 'admin.services.index',
        'sort'       => 5,
        'icon-class' => 'leads-icon',
    ], [
        'key'        => 'settings',
        'name'       => 'admin::app.layouts.settings',
        'route'      => 'admin.settings.index',
        'sort'       => 6,
        'icon-class' => 'settings-icon',
    ], [
        'key'        => 'settings.user',
        'name'       => 'admin::app.layouts.user',
        'route'      => 'admin.settings.groups.index',
        'info'       => 'admin::app.layouts.user-info',
        'sort'       => 1,
    ], [
        'key'        => 'settings.user.roles',
        'name'       => 'admin::app.layouts.roles',
        'info'       => 'admin::app.layouts.roles-info',
        'route'      => 'admin.settings.roles.index',
        'sort'       => 2,
        'icon-class' => 'role-icon',
    ], [
        'key'        => 'settings.user.users',
        'name'       => 'admin::app.layouts.users',
        'info'       => 'admin::app.layouts.users-info',
        'route'      => 'admin.settings.users.index',
        'sort'       => 3,
        'icon-class' => 'user-icon',
    ],
];
