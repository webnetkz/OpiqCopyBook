<?php

namespace App\Libs;
use PDO;

class Connector
{
	public $db;
	public $config;

	public function __construct()
	{
		$this->config = $config;
		
		$driver = 'mysql';
		$host = $this->config['host'].':3306';
		$db_name = $this->config['db_name'];
		$db_user = $this->config['db_user'];
		$db_pass = $this->config['db_pass'];
		$charset = 'utf8';
		$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
		
		try {
			$this->db = new PDO("$driver:host=$host;dbname=$db_name;charset=$charset",$db_user,$db_pass,$options);
		} catch(PDOException $e) {
			exit('Ошибка подключения к базе данных'.$e);
		}
	}

	public function __destruct()
    {
        $this->db = null;
    }
}
