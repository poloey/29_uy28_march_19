<?php 
// model 
include 'models/Teacher.php';
$teachers = Teacher::all();

 //view
include 'views/index.php';


route page loading controller page
controller page  doing logic stuff at the end loading view
view page  - brainless html 
