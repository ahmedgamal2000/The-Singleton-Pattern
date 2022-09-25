<?php

class SchoolSingleton
{

    private static $schoolName;
    private static $schoolAdd;
    private static $singleInstance;

    private function __construct($name, $add)
    {
        self::$schoolName = $name;
        self::$schoolAdd = $add;
    }

    public static function getInstance($name, $add)
    {
        if (!(self::$singleInstance instanceof self)) {
            self::$singleInstance = new self($name, $add);
            return self::$singleInstance;
        }
        return self::$singleInstance;
    }

    public function getSchoolName()
    {
        return self::$schoolName;
    }

    public function getSchoolAdd()
    {
        return self::$schoolAdd;
    }

    public function __clone()
    {

    }

}

$instance = SchoolSingleton::getInstance('fgfdgs', 'gfdgfd');
echo 'School Name ' . $instance->getSchoolName();
echo "<br/>";
echo 'School Address ' . $instance->getSchoolAdd();
echo "<br/>";
$instance2 = SchoolSingleton::getInstance('mahalla', 'kubraa');
echo 'School Name ' . $instance2->getSchoolName();
echo "<br/>";
echo 'School Address ' . $instance2->getSchoolAdd();
