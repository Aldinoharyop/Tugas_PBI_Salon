<!-- CRUD Admin -->
<?php 
	
	/**
	 * 
	 */
	class M_Admins extends CI_Model
	{
		
		function __construct()
		{
			parent ::__construct();
		}

		public function select_all_admin(){
			$this->db->select('*');
			$this->db->from('admins');
			return $this->db->get();
		}

		public function create_admin($arr){
			$this->db->insert('admins',$arr);
			return $this->db->affected_rows();
		}

		public function update_admin($id,$arr){
			$this->db->where('id_admin',$id);
			$this->db->update('admins',$arr);
			return $this->db->affected_rows();
		}

		public function delete_admin($id){
			$this->db->where('id_admin', $id);
			$this->db->delete('admins');
			return $this->db->affected_rows();
		}
	}
 ?>