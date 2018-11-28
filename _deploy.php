<?php

namespace Deployer;

require 'recipe/symfony3.php';
// require 'recipe/slack.php';

inventory('app/config/hosts.yml');


// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', []);


// Writable dirs by web server 
add('writable_dirs', []);

// Project repository
set('repository', 'https://github.com/Chokapix/deployer-demo');

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');