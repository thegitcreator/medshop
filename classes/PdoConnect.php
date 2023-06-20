<?php

class PdoConnect {

    // Параметры для подключения к базе данных
    private const HOST = "localhost"; // Адрес сервера базы данных
    private const USER = "root"; // Имя пользователя базы данных
    private const PASS = ""; // Пароль пользователя базы данных
    private const DB = "medshop"; // Название базы данных

    protected static $_instance;

    protected $DSN;
    protected $OPD;
    public $PDO;

    function __construct()
    {

        $this->DSN = "mysql:host=" . self::HOST . ";dbname=" . self::DB;

        $this->OPD = array(
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
          PDO::ATTR_EMULATE_PREPARES => false,
        );

        $this->PDO = new PDO($this->DSN, self::USER, self::PASS, $this->OPD);
    }

    public static function getInstance()
    {
        if(self::$_instance === null)
            self::$_instance = new self;

        return self::$_instance;
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

}
