<?php


class Connection
{
	public static function make(array $config)
	{
		try {
			return new PDO(
				'sqlsrv:server=' . $config['host'] . ';Database=' . $config['name'],
				$config['username'],
				$config['password'],
				// $config['options']
			);
		} catch	
		(PDOException $e) {
			// dd($e);
			echo $e->getMessage();
			die();
		}
	}
}