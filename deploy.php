<?php
namespace Deployer;

require 'recipe/laravel.php';

set('repository','git@github.com:datcal/steam-app.git');

// env file


set('shared_files', [
    '.env'
]);



host('burak.fun')
    ->set('remote_user', 'root')
    ->set('hostname', '139.144.183.99')
    ->set('deploy_path', '/var/www/burak.fun/steam');

// Hooks

after('deploy:failed', 'deploy:unlock');
