<?php

include_once 'Grade.php';

class SlythStudent extends Slytherin {
    public $name;
    public $surname;    
}

class GryfStudent extends Gryffindor {
    public $name;
    public $surname;    
}

$regulusBlack = new SlythStudent();
$regulusBlack->name = 'Regulus';
$regulusBlack->surname = 'Black';

$tomRiddle = new SlythStudent();
$tomRiddle->name = 'Tom';
$tomRiddle->surname = 'Riddle';

$severusSnape = new SlythStudent();
$severusSnape->name = 'Severus';
$severusSnape->surname = 'Snape';

$siriusBlack = new Gryffindor();
$siriusBlack->name = 'Sirius';
$siriusBlack->surname = 'Black';

$albusDumbledore = new Gryffindor();
$albusDumbledore->name = 'Albus';
$albusDumbledore->surname = 'Dumbledore';

$remusLupin = new Gryffindor();
$remusLupin->name = 'Remus';
$remusLupin->surname = 'Lupin';