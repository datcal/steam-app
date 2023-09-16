<?php
namespace Deployer;

require 'recipe/laravel.php';

host('prod')
    ->set('remote_user', 'root')
    ->set('hostname', '139.162.190.96')
    ->set('deploy_path', '/var/www/burak.fun/steam');

// Hooks

after('deploy:failed', 'deploy:unlock');
