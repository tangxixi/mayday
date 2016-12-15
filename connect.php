<?PHP

	header("Content-type: text/html; charset=utf-8");
	error_reporting(E_ALL^E_DEPRECATED);
	$con = mysql_connect('localhost','root','');
	mysql_select_db('ajaxmusic');
	mysql_query('set names utf8');

?>