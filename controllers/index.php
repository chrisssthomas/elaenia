<?php

$tasks = $app['database']->selectAll('todo');

require 'views/index.views.php';