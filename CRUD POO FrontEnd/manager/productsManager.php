<?php
require_once('../model/product.php');

class productsManager {

	public function getList(){
		$dbh = new PDO("mysql:host=localhost;dbname=crud","root","");
		$stack = array();
		$req = "SELECT * FROM users";
		$result = $dbh->query($req)->fetchAll();
		foreach ($result as $row){
			$item = new Product();
			$item->setId($row["id"]);
			$item->setFirst($row["name"]);
			$item->setLast($row["stock"]);
			$item->setimage($row["image"]);
			$item->setQuantity($row["Quantity"]);
			array_push($stack, $item);
		}
		return $stack;

	}
//Add Product
		public function add($product){
			$dbh = new PDO("mysql:host=localhost;dbname=crud","root","");
			$req = "INSERT INTO `users`(`id`,`name`, `stock`,`image`,`Quantity`) VALUES (:id,:name,:stock,:image,:Quantity)";

			$updateProductQuery = $dbh ->prepare($req);
			$updateProductQuery -> bindParam(":id",$product->getId(),PDO::PARAM_STR);	
			$updateProductQuery -> bindParam(":name",$product->getName(),PDO::PARAM_STR);
            $updateProductQuery -> bindParam(":stock",$product->getLast(),PDO::PARAM_STR);
            $updateProductQuery -> bindParam(":image",$product->getimage(),PDO::PARAM_STR);
            $updateProductQuery -> bindParam(":Quantity",$product->getQuantity(),PDO::PARAM_STR);
			$updateProductQuery->execute();
        }
		// delete product

		public function delete($id){
			$dbh = new PDO("mysql:host=localhost;dbname=crud","root","");

			$req = "DELETE FROM users WHERE id = $id";
			$deleteProduct = $dbh->prepare($req);
            $deleteProduct->execute();
        }
		// update product		
		public function update($product){
			$id = $product->getId();
			$dbh = new PDO("mysql:host=localhost;dbname=crud","root","");
			$req = "UPDATE users SET name = :name,stock = :stock,image = :image,Quantity = :Quantity WHERE id = $id";
			$updateProductQuery = $dbh ->prepare($req);
			$updateProductQuery -> bindParam(":name",$product->getName(),PDO::PARAM_STR);
            $updateProductQuery -> bindParam(":stock",$product->getLast(),PDO::PARAM_STR);
            $updateProductQuery -> bindParam(":image",$product->getimage(),PDO::PARAM_STR);
            $updateProductQuery -> bindParam(":Quantity",$product->getQuantity(),PDO::PARAM_STR);
			$updateProductQuery->execute();
        }
}
?>