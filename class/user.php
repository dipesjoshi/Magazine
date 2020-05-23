<?php
	// class user extends database{
	// 	function __construct(){
	// 		$this->table = 'users';
	// 		database:: __construct();
	// 	}

	// 	public function addUser($data , $is_die=false){
	// 		return $this->addData($data,$is_die);
	// 	}

	// 	public function getUserbyId(){
			

	// 		$args = array(
	// 			'fields' => array('id','username','email','password'),
	// 			'where'=> array(
	// 				'and' => array(
	// 					'columnname' => 'value',
	// 					'columnname1' => 'value1',
	// 				)
	// 			),
	// 			'order' =>'ASC',
	// 			'limit' => array(
	// 				'offset'=>6,
	// 				'no_of_data'=>7

	// 			)
	// 		);
	// 		$this->getData($args,true);

	// 	}
	// }

	// $args = array(
			// 	'fields' => array('id','username','email','password'),
			// 	'where'=> array(
			// 		'and' => array(
			// 			columnname => value,
			// 			columnname => value,
			// 		),
			// 		'or' =>array(
			// 			columnname => value,
			// 			columnname => value,
			// 		)
			// 	)
			// 	'order' =.'ASC|DESC',
			// 	'limit' => array(
			// 		'offset'=>6,
			// 		'no_of_data'=>7

			// 	)
			// )
	class user extends database{
		function __construct(){
			$this->table = 'users';
			$this->table = 'users';
			database::__construct();
		}
		// public function addUser($data){}
		// public function addUser($data,$is_die=false){
		// 	return $this->addData($data,$is_die);
		// }
		public function getUserbyId($user_id,$is_die=false){

			$args = array(
				'fields' => array('id','username','email','password'),
				'where'	=> array(
					'and' => array(
							'id' => $user_id,
						)
					)
				// ,
				// 'order' => 'ASC',
				// 'limit' => array(
				// 		'offset' => 6,
				// 		'no_of_data'=>7
				//	)
				);

			return $this->getData($args,$is_die);
		}
		public function getUserbyEmail($email,$is_die=false){

			$args = array(
				'fields' => array('id','username','email','password'),
				'where'	=> array(
					'and' => array(
							'email' => $email,
						)
					)
				);

			return $this->getData($args,$is_die);
		}

		public function updateUserbyEmail($data,$email,$is_die=false){
			$args = array(
				'where'	=> array(
					'and' => array(
							'email' => $email,
						)
					)
				);

			return $this->updateData($data,$args,$is_die);
		}

		public function deleteUserbyEmail($email,$is_die=false){
			$args = array(
				'where'	=> array(
					'and' => array(
							'email' => $email,
						)
					)
				);

			return $this->deleteData($args,$is_die);
		}
	}




?>