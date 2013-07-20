<?php 
use Buchin\Madmimi\Madmimi;

class MadmimiTest extends PHPUnit_Framework_TestCase {

	public function setUp()
	{
		parent::setUp();
		$this->mimi = new Madmimi('buchin@dropsugar.com', 'xx');
	}

	public function testMadmimiIsLoaded()
	{
		$this->assertInstanceOf('Buchin\Madmimi\Madmimi', $this->mimi, 'Madmimi instance cannot be loaded');
	}

	public function testAddUser()
	{
		$user = array('email' => 'emailaddress@example.com', 'firstName' => 'nicholas', 'lastName' => 'young', 'Music' => 'Rock and roll', 'add_list' => 'Test List 2');
		$status = $this->mimi->addUser($user, true);
		var_dump($status);
	}
}
