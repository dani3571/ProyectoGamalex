<?php
	
	header('Content-type: application/json; charset=UTF-8');
	
	$response = array();
	
	if ($_POST['delete']) {
		
		require_once 'dbcon.php';
		
		$pid = intval($_POST['delete']);
		$query = "UPDATE laboratorio SET Estado= 1 WHERE IdLaboratorio=:pid";
		$stmt = $DBcon->prepare( $query );
		$stmt->execute(array(':pid'=>$pid));
		
		if ($stmt) {
			$response['status']  = 'success';
			$response['message'] = 'Laboratorio repuesto correctamente...';
		} else {
			$response['status']  = 'error';
			$response['message'] = 'No se puede reponer el laboratorio ...';
		}
		echo json_encode($response);
	}
