<?php 
	//file model.php su dung de thao tac voi csdl
	class model{
		//lay tat ca cac ban ghi
		public function get_all($sql){
			global $db;
			$result = mysqli_query($db,$sql) ;
			$arr = array();
			while($rows = mysqli_fetch_object($result))
				$arr[] = $rows;
			return $arr;
		}
		//lay mot ban ghi
		public function get_a_record($sql){
			global $db;
			$result = mysqli_query($db,$sql) or die("error!");
			return mysqli_fetch_object($result);
		}
		//thuc thi cau truy van
		public function execute($sql){
			global $db;
			mysqli_query($db,$sql) or die("error!");
			$inert_id = mysqli_insert_id($db);
			return $inert_id;
		}
		//lay so luong ban ghi (co bao nhieu ban ghi?)
		public function num_rows($sql){
			global $db;
			$result = mysqli_query($db,$sql) ;
			return mysqli_num_rows($result);
		}
	}
 ?>