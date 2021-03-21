<?php
	session_start();
	require_once('../model/productModel.php');

	if(isset($_POST['save'])){
		if (isset($_POST['display']))
		{
			$display = 'yes';
		}
		else
		{
			$display = 'no';
		}

		$name = $_POST['name'];
		$bprice = $_POST['bprice'];
		$sprice = $_POST['sprice'];
		

		if($name == "" || $sprice == "" || $bprice == ""){
			echo "null submission...";
		}else{

		

				$product = [
							'name' => $name,
							'sprice' => $sprice,
							'bprice' => $bprice,
							'display' => $display
						];

				$status = insertProduct($product);

				if($status){
					header('location: ../view/displayProduct.php');
				}else{
					echo "error";
				}
				
		}

	}
?>