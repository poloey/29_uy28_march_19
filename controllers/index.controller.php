<?php 
// require __DIR__ . '/../views/index.view.php';

// require 'views/index.view.php';
require __DIR__ . '/../models/Teacher.php';
$teachers = Teacher::all();

require __DIR__ . '/../views/index.view.php';

