<?php
require_once "Hello.php";
require_once "User.php";
require_once "Task.php";
require_once "Admin.php";
require_once "Storage.php";
require_once "MySQL.php";
require_once "MongoDB.php";
require_once "User.class.php";

//$name = 'Sumon';
//$profession = 'Software Engineer';
//$email = 'me@sumonselim.com';
//
//$user1 = new User();
//$user1->register($name, $profession, $email);
//
//$task1 = new Task($user1);
//$task1->setTitle('Finish Breakfast');
//$task1->setDuration('10 mins');
//
//echo $task1->getTask();
//
//echo '<br/>';
//
//$name = 'Mahfuz';
//$profession = 'WordPress Engineer';
//$email = 'mahfuz@sumonselim.com';
//$user2 = new User();
//$user2->register($name, $profession, $email);
//
//$task1 = new Task($user2);
//$task1->setTitle('Finish Breakfast');
//$task1->setDuration('20 mins');
//
//echo $task1->getTask();

$mysql = new MySQL();
//
// create an user
echo 'Creating an user...<br/>';
$name = 'Mahfuz';
$profession = 'WordPress Engineer';
$email = 'mahfuz@sumonselim.com';
$user2 = new User($mysql);
$user2->register($name, $profession, $email);
$user2->hello();

$task1 = new Task($user2, $mysql);
$task1->setTitle('Finish Breakfast');
$task1->setDuration('20 mins');

echo $task1->getTask();
$task1->hello();


//// create an admin
//echo 'Creating an admin...<br/>';
//$admin = new Admin();
//$admin->register('Admin', 'Admin', 'me@admin.com');
//
//echo 'Deleting the user...<br/>';
//$admin->deleteUser($user2);
//
//var_dump($user2);

//$storage = new OurStorage();
//$storage->connection();
//$storage->create();



