<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Singleton Pattern</title>
</head>
<body>
<?php
class Example
{
    private static $instance;
    private $count = 0;

    private function __construct()
    {
    }

    public static function singleton()
    {
        if (!isset(self::$instance)) {
            echo 'Creating new instance.';
            $className = __CLASS__;
            self::$instance = new $className;
        }
        return self::$instance;
    }

    public function increment()
    {
        return $this->count++;
    }

    public function __clone()
    {
        trigger_error('Clone is not allowed.', E_USER_ERROR);
    }

    public function __wakeup()
    {
        trigger_error('Unserializing is not allowed.', E_USER_ERROR);
    }
}
?>
<?php
$singleton = Example::singleton(); // prints "Creating new instance."
echo $singleton->increment(); // 0
echo $singleton->increment(); // 1

$singleton = Example::singleton(); // reuses existing instance now
echo $singleton->increment(); // 2
echo $singleton->increment(); // 3
?>
</body>
</html>