<?
define("PATH","http://MVC");
define("CONTR","controller/controller.php");
define("MODEL","model/model.php");
define("THEME", PATH."/views/theme/");

global $conn;

$conn = mysqli_connect("localhost","root","","mvc") or die();
?>