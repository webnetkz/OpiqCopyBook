<?php

namespace App\Libs\Connectors;
use PDO;
use App\Libs\Connector;


require_once "./app/libs/Connector.php";

class Sign extends Connector
{
    public $db;

	public function __construct()
	{
        parent::__construct($config);
    }
}


