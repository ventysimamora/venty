 <?php

class Bapak
{
	//variabel gelobal
	public $nama;
	public $marga;
	public $status;


	public function __construct(string $nama = "Aref",
	 string $marga= "Margarin",
	  string $status= "Bapak")
	{
		$this->nama = $nama;
		$this->marga = $marga;
		$this->status = $status;
	}

	public function getNama():string
	{
		return $this->nama;
	}

	public function getMarga():string
	{

		return $this->marga;
	}

	public function getStatus():string
	{
		return $this->status;
	}
	public function display():void
	{
		echo $this->judul()."<br>";//overloading
		echo "Nama = ".$this->getNama() . "<br>";
		echo "Marga = ".$this->getMarga() . "<br>";
		echo "Status= ".$this->getStatus() . "<br>";
		//echo
	}
	
	public function judul() : void
	{
		echo "ini dari class ".$this->getStatus();
			
		
	}


}

Class Anak extends Bapak
{
	public $role;
	
	public function __construct(string $nama = "Asep",
	 string $marga = "Margarin",
	  string $status = "Anak",
	   string $role = "Murid")
	{
		//overriding constructor
		parent::__construct($nama,$marga,$status);
	$this->role = $role;
	}

	public function displaychild():void
	{
		echo $this->display();
		echo "Role : ".$this->role;
	}
	
}
//inisialisasi object
$bapak = new Bapak();

$anak1 = new Anak();
echo $bapak->display()."<hr>";
echo $anak1->displaychild();
