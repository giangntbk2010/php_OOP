<?php
/**
* abstract class: la lop chua cac phuong thuc truu tuong
* cac lop ke thua lop abstract phai dn lai cac phuong thuc truu tuong
* mot class bt chi duoc ke thua mot lop abstract
* abstract class van duoc xem la mot lop bt va co day du tinh nang cua mot lop bt
* vai tro abstract: tao ra mot lop ma o do dinh nghia cac phuong thuc chung cho nhieu lop khac
* cac lop ke thua lop abstract co the dinh nghia lai cac phuong thuc chung tuy vao nhiem vu cu the cua no
* la lop cha cho cac lop con co chung ban chat-> moi lop con chi ke thua 1 lop abstract
*/

abstract class employee 
{
	protected $empname;
	protected $empage;

	public function setData($empname, $empage)
	{
		$this->empname = $empname;
		$this->empage = $empage;
	}

	abstract function outputData();
}

/**
* 
*/
class EmployeeData extends employee
{
	
	public function __construct($name, $age)
	{
		$this->setData($name, $age);
	}

	public function outputData()
	{
		echo $this->empname;
		echo $this->empage;
	}
}

$a = new EmployeeData("giang", "25");
$a->outputData();
?>