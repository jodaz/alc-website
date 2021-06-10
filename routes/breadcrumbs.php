<?php

// Dashboard
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Inicio', route('dashboard'));
});

// Dashboard > Users
Breadcrumbs::for('users.index', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Usuarios', route('users.index'));
});

// Dashboard > Users > Create
Breadcrumbs::for('users.create', function ($trail) {
    $trail->parent('users.index');
    $trail->push('Nuevo Usuario', route('users.create'));
});

// Dashboard > Users > Show
Breadcrumbs::for('users.show', function ($trail, $row) {
    $trail->parent('users.index');
    $trail->push($row->title, route('users.show', $row->id));
});

// Dashboard > Users > Edit
Breadcrumbs::for('users.edit', function ($trail, $row) {
    $trail->parent('users.index');
    $trail->push($row->email, route('users.edit', $row->id));
});

// Dashboard > Roles
Breadcrumbs::for('roles.index', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Roles', route('roles.index'));
});

// Dashboard > Roles > Create
Breadcrumbs::for('roles.create', function ($trail) {
    $trail->parent('roles.index');
    $trail->push('Nuevo Rol', route('roles.create'));
});

// Dashboard > Roles > Edit
Breadcrumbs::for('roles.edit', function ($trail, $row) {
    $trail->parent('roles.index');
    $trail->push($row->name, route('roles.edit', $row->id));
});

// Dashboard > Notifications
Breadcrumbs::for('notifications.index', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Notificaciones', route('notifications.index'));
});

// Dashboard > Notifications > Create
Breadcrumbs::for('notifications.create', function ($trail) {
    $trail->parent('notifications.index');
    $trail->push('Nueva', route('notifications.create'));
});

// Dashboard > Notifications > Edit
Breadcrumbs::for('notifications.edit', function ($trail, $row) {
    $trail->parent('notifications.index');
    $trail->push($row->id, route('notifications.edit', $row->id));
});

// Dashboard > Posts
Breadcrumbs::for('posts.index', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Artículo', route('posts.index'));
});

// Dashboard > Posts > Create
Breadcrumbs::for('posts.create', function ($trail) {
    $trail->parent('posts.index');
    $trail->push('Nuevo Artículo', route('posts.create'));
});

// Dashboard > Posts > Show
Breadcrumbs::for('posts.show', function ($trail, $row) {
    $trail->parent('posts.index');
    $trail->push($row->title, route('posts.show', $row->id));
});

// Dashboard > Posts > Edit
Breadcrumbs::for('posts.edit', function ($trail, $row) {
    $trail->parent('posts.index');
    $trail->push($row->title, route('posts.edit', $row->id));
});

// Dashboard > Services
Breadcrumbs::for('services.index', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Trámites y Servicios', route('services.index'));
});

// Dashboard > Services > Create
Breadcrumbs::for('services.create', function ($trail) {
    $trail->parent('services.index');
    $trail->push('Nuevo', route('services.create'));
});

// Dashboard > Services > Edit
Breadcrumbs::for('services.edit', function ($trail, $row) {
    $trail->parent('services.index');
    $trail->push($row->name, route('services.edit', $row->id));
});

// Dashboard > Galleries
Breadcrumbs::for('galleries.index', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Galerías', route('galleries.index'));
});

// Dashboard > Galleries > Create
Breadcrumbs::for('galleries.create', function ($trail) {
    $trail->parent('galleries.index');
    $trail->push('Nueva Galería', route('galleries.create'));
});

// Dashboard > Galleries > Show
Breadcrumbs::for('galleries.show', function ($trail, $row) {
    $trail->parent('galleries.index');
    $trail->push($row->title, route('galleries.show', $row->id));
});
