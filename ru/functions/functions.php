<?php
	$mysqli = false;
	function connectDB() {
		global $mysqli;
		$mysqli = new mysqli("withcare.mysql.ukraine.com.ua", "withcare_db", "28bcj2l3", "withcare_db");
		$mysqli->query("SET NAMES 'utf8'");
	}

	function closeDB() {
		global $mysqli;
		$mysqli->close ();
	}

	function getArticle($limit, $id) {
		global $mysqli;
		connectDB();
		if ($id) 
			$where = "WHERE `id` = ".$id;
		else
			$where = '';
		$result = $mysqli->query("SELECT * FROM `Articles_ru` $where ORDER BY `id` DESC LIMIT $limit");
		closeDB();
		if (!$id) 
			return resultToArray ($result);
		else
			return $result->fetch_assoc();
		
	}

	function resultToArray ($result) {
		$array = array();
		while (($row = $result->fetch_assoc()) != false)
			$array[] = $row;
		return $array;
	}
?>