<?php

class Product implements JsonSerializable {
	public function jsonSerialize()
    {
        return array(
			 'id' => $this->_id,
             'name' => $this->_name,
             'Stock' => $this->Stock,
             'image' => $this->_image,
             'Quantity' => $this->_Quantity,
        );
    }
	private $_id;
	private $_name;
	private $Stock;
	private $_image;
	private $_Quantity;
	
	public function __construct() {
	
	}
	// public function __construct($data) {
	// 	$this->fill($data);
	// }
		public function getId() { return $this->_id; }
		public function getName() { return $this->_name; }
		public function getLast() { return $this->_Stock; }
		public function getimage() { return $this->_image; }
		public function getQuantity() { return $this->_Quantity; }


		public function setId($id){
			$this->_id = (int) $id;
		}

		public function setFirst($name){	
					$this->_name = $name;
			
		}
		public function setLast($Stock){
					$this->_Stock = $Stock;
		}

		public function setimage($image){
				$this->_image = $image;
		}

		public function setQuantity($Quantity){
					$this->_Quantity = $Quantity;
		}

}
?>