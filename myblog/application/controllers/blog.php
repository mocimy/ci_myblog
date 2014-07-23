<?php
class Blog extends CI_Controller {
	public function index()
	{
		header('Location: /myblog/index.php/blog/welcome/1');
	}

 	public function welcome($id=1){

 		$this->load->view('bootstrap');
 		$data['id']=$id;

		$this->load->view('welcome',$data);
 	}

 	public function article(){

 		$this->load->view('bootstrap');

		$data['res']=$this->db->get('article');

		$this->load->view('list', $data);
 	}

 	 public function detail($id){

 		$this->load->view('bootstrap');

		if(isset($_POST['name'])){
			$data = array(
              			'article' => $id,
               			'name' => $this->input->post('name'),
              			'content' => $this->input->post('content'),
              			'time' => $this->input->post('time'),
           	 	);
			$this->db->insert('review', $data);
		}

		$query = $this->db->get_where('article', array('id' => $id) );
		$data['res']=$query->row();



		$data['review']=$query = $this->db->get_where('review', array('article' => $id) );

		$this->load->view('detail',$data);
 	}

  	public function login(){

 		$this->load->view('bootstrap');

 		if(isset($_POST['username'])){
			$username= $this->input->post('username');
			$password=md5( $this->input->post('password'));
			$query = $this->db->get_where('user', array('username' => $username  ,  'password' => $password ));
			if($query->row()) {
				setcookie("username",$username);
				 header('Location: ./welcome/2');
			}
			else header('Location: ./welcome/3');
		}

		if(isset($_POST['new_username'])){
			$data = array(
               			'username' => $this->input->post('new_username'),
              			'password' => md5($this->input->post('new_password')),
              			'email' => $this->input->post('email'),
           	 	);
			$this->db->insert('new_user', $data);
			header('Location: ./welcome/4');
		}

		$this->load->view('login');
 	}

  	public function publish(){

 		$this->load->view('bootstrap');

		if(isset($_POST['title'])){
			$data = array(
               			'title' => $this->input->post('title'),
              			'content' => $this->input->post('content'),
              			'time' => $this->input->post('time'),
							'name' => $this->input->post('name'),
           		 );
			$this->db->insert('article', $data);		
 		}

 		$this->load->view('publish');
 	}

 	 public function admin(){
		$this->load->view('bootstrap');

 		$data['user1']=$this->db->get('user');
 		$data['user2']=$this->db->get('new_user');
 		$this->load->view('admin',$data);
	}

 	public function delcook(){
 		setcookie("username", '');  
 		header('Location: ./welcome/5');
	}

	 public function delarticle($id){
 		$this->db->delete('article', array('id' => $id)); 
 		header('Location: ../article');
	}

	public function del_user($id){
 		$this->db->delete('user', array('id' => $id)); 
 		header('Location: ../admin');
	}

	public function allow_user($id){
 		$query = $this->db->get_where('new_user', array('id' => $id) );
 		$query = $query->row();
 		$data = array(
               		'username' => $query->username ,
               		'password' => $query->password ,
               		'email' => $query->email
            	);
		$this->db->insert('user', $data); 
		$this->db->delete('new_user', array('id' => $id)); 
 		header('Location: ../admin');
	}

	public function refuse_user($id){
 		$this->db->delete('new_user', array('id' => $id)); 
 		header('Location: ../admin');
	}
}

?>
