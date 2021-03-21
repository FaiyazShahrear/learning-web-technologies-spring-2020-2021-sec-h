<?php
	
	require_once('db.php');

	
	function getproductByname($name){

		$conn = getConnection();

		$sql = "select * from product where name='{$name}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getAllproduct(){
		$conn = getConnection();
		$sql = "select * from product";
		$result = mysqli_query($conn, $sql);
		
		$products =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($products, $row); 
			global $products;
		}

		return $user;

	}

	function insertProduct($product){

		$conn = getConnection();
		$sql = "insert into product values('{$product['name']}', '{$product['bprice']}', '{$product['sprice']}','{$product['display']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateProduct($product){

		$conn = getConnection();
		$sql = "update product set name=['{$product['name']}'], bprice=['{$product['bprice']}'], sprice=['{$product['sprice']}'], display=['{$product['display']}] where name = {$product['name']} ";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteProduct($name){
		$conn = getConnection();
		$sql = "delete from product where name={$name}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>