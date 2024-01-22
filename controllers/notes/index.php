<?php

use App\Database;
use App\Agent;

$db = Agent::resolve(Database::class);

$notes = $db->query('SELECT * FROM notes WHERE userID = 1')->findAll();
$viewData = ['page' => 'My Notes', 'notes' => $notes];

viewPath('notes/index.view.php', $viewData);