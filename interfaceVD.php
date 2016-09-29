<?php
/**
* interface
* mang nguyen tac giong nhu mo hinh truu tuong
* khac: mot lop co the xu dung nhieu interface
* interface chi chua ten co phuong thuc 
* tao ra ca phuong thuc tuong tu nhau cho cac lop co hoat dong giong nhau, nhung khac nhau ve ban chat
* do do, mot lop co the su dung nhieu interface ( nhieu mat na cho mot bo mat)
*/
interface ParentOne{
	const pOne = 1;
	function printParentOne();
}

interface ParentTwo{
	const pTwo = 2;
	function printParentTwo();
}

interface Child extends ParentOne, ParentTwo
{
	const child = 3;
	function printChild();
}

class InheritClass implements Child
{
	public function printParentOne()
	{
		echo 'print '.ParentOne::pOne.' from "',__CLASS__,'" <br />';
	}

	public function printParentTwo()
	{
		echo 'print '.ParentTwo::pTwo.' from "',__CLASS__,'" <br />';
	}

	public function printChild()
	{
		echo 'print '.Child::child.' from "',__CLASS__,'" <br />';
	}
	
}

$newobj = new InheritClass();
$newobj->printParentOne();
$newobj->printParentTwo();
$newobj->printChild();
?>