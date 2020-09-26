<?php 
class database
{
	private $host;
	private $db;
	private $user;
	private $password;
	private $charset;

	public function __construct()
	{
		$this->host= 'localhost';
		$this->db= 'orcl';
		$this->user= 'proyectobd2';
		$this->password= 'proyectobd2';
		$this->charset= 'utf8mb4';
	}

	function connect()
	{

		//$connection = new PDO('oci:dbname=XE', 'USUARIO', 'CONTRASEÑA');
		try
		{
			$connection="oci:dbname=" . $this->db;

			$options=
			[
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
				PDO::ATTR_EMULATE_PREPARES=> false,
			];
			
			$pdo=new PDO($connection,$this->user,$this->password);

			return $pdo;			
		}
		catch(PDOException $e)
		{
			print_r("Error connection: ".$e->getMessage());
		}
	}

}
?>