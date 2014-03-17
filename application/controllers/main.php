<?php
class Main extends CI_Controller{
	public function _construc(){
		parent::_construct();
	}
	public function index(){
		$data['topscore'] = $this->mmain->topscore();
		$this->load->view("main_view",$data);
		
	}
	public function indexadmin(){
		if(!$this->session->userdata('username')||$this->session->userdata('username')!="admin"){
			header('Location: ' .base_url().'index.php/main/index');
			exit();
		}
		$data['topscore'] = $this->mmain->topscore();
		$this->load->view("admin_view",$data);
		
	}
	public function admin(){
		$this->load->view("admin/view_admin");
		
	}
	public function speakingformat(){
		$data['topscore'] = $this->mmain->topscore();
		$this-> load-> view("speakingformat",$data);
	}/*mo trang gioi thieu format bai thi spe va wri*/
	public function listeningformat(){
		$data['topscore'] = $this->mmain->topscore();
		$this-> load-> view("listeningformat",$data);
	}/*mo trang gioi thieu format bai thi lis va rea*/
	public function score(){
		$data['topscore'] = $this->mmain->topscore();
		$this-> load-> view("score",$data);
	}/*mo trang quy doi diem*/
	public function listening(){
		$data['topscore'] = $this->mmain->topscore();
		$this-> load-> view("listening",$data);
	}/*mo trang listening*/
	public function speaking(){
		$data['topscore'] = $this->mmain->topscore();
		$this-> load-> view("speaking",$data);
	}/*mo trang speaking*/
	public function reading(){
		$data['topscore'] = $this->mmain->topscore();
		$this-> load-> view("reading",$data);
	}/*mo trang speaking*/
	public function writting(){
		$data['topscore'] = $this->mmain->topscore();
		$this-> load-> view("writting",$data);
	}
	public function fulltest(){
		$data['topscore'] = $this->mmain->topscore();
		$this-> load-> view("fulltest",$data);
	}
	public function funny_english(){
		$data['topscore'] = $this->mmain->topscore();
		$this->load->view('funny_english',$data);
	}
	public function contact(){
		$data['topscore'] = $this->mmain->topscore();
		$this->load->view('contact',$data);
	}
	public function process_login(){
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if($this->form_validation->run()==TRUE)
		{
			$info['username']=$this->input->post('username');
			$info['password']=$this->input->post('password');
			$infocheck=$this->mmain->check_login($info);
			if($infocheck)
			{
				$this->session->set_userdata('username', $info['username']);
				if($info['username']=="admin"){
					echo "admin";
				}
				else
					echo "ok";

			}
			else
				echo "err";
		}
	}

	public function process_signup(){
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('fullname', 'Fullname', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		if($this->form_validation->run()==TRUE)
		{
			$data["fullname"]=$this->input->post('fullname');
			$data["username"]=$this->input->post('username');
			$data["password"]=$this->input->post('password');
			$data["email"]=$this->input->post('email');
			$this->mmain->signup($data);
		}

	}
	
	public function process_logout(){
		$this->session->unset_userdata('username');
	}

	
	
	/*mo trang speaking*/
	// Luyen tap photo level 250-500
	public function practice_photo_500(){
		$data['link_xml']=base_url().'application/data_test/photo/500/photo_de1_500.xml';
		$data['link_image']=base_url().'application/data_test/photo/picture/';
		$data['link_audio']=base_url().'application/data_test/photo/audio/';
		$this->load->view("listening/photo/practice_photo_500",$data);
	}	
	public function list_sharing_listening($level, $start=0){
		$limit=6;
		$config['base_url'] = base_url("index.php/main/list_sharing_listening/$level");
        $config['total_rows'] = $this->mmain->count_all_sharing_listening($level); 
        $config['per_page'] = $limit; 
        $config['uri_segment'] = 4; 
        $this->pagination->initialize($config); 
		$data['sharing_id']=$this->mmain->get_id_name_sharing_ex($level,$start,$limit);
		$data['level']=$level;
		$data['topscore'] = $this->mmain->topscore();
		$this-> load-> view("list_sharing_listening",$data);
	}
	public function show_detail_sharing_listening($id){
		$data['sharing_content']=$this->mmain->get_sharing_ex($id);
		$data['topscore'] = $this->mmain->topscore();
		$this->load->view('show_detail_sharing_listening',$data);
	}
	public function show_detail_sharing_writing($id){
		$data['sharing_content']=$this->mmain->get_sharing_writing($id);
		$data['topscore'] = $this->mmain->topscore();
		$this->load->view('writing/show_detail_sharing_writing',$data);
	}
	public function show_detail_sharing_speaking($id){
		$data['sharing_content']=$this->mmain->get_sharing_speaking($id);
		$data['topscore'] = $this->mmain->topscore();
		$this->load->view('speaking/show_detail_sharing_speaking',$data);
	}
	public function list_sharing_reading($level, $start=0){
		$limit=8;
		$config['base_url'] = base_url("index.php/main/list_sharing_reading/$level");
        $config['total_rows'] = $this->mmain->count_all_sharing_reading($level); 
        $config['per_page'] = $limit; 
        $config['uri_segment'] = 4; 
        $this->pagination->initialize($config); 
		$data['sharing_id']=$this->mmain->get_id_name_sharing_reading($level, $start, $limit);
		$data['level']=$level;
		$data['topscore'] = $this->mmain->topscore();
		$this-> load-> view("list_sharing_reading",$data);
	}
	public function show_detail_sharing_reading($id){
		$data['sharing_content']=$this->mmain->get_sharing_reading($id);
		$data['topscore'] = $this->mmain->topscore();
		$this->load->view('show_detail_sharing_reading',$data);
	}
	public function list_book($level, $start=0){
		$limit=4;
		$config['base_url'] = base_url("index.php/main/list_book/$level");
		$config['total_rows'] = $this->mmain->count_all_book($level); 
        $config['per_page'] = $limit; 
        $config['uri_segment'] = 4; 
        $this->pagination->initialize($config); 
		$data['book_id']=$this->mmain->get_id_name_book($level, $start, $limit);
		$data['level']=$level;
		$data['topscore'] = $this->mmain->topscore();
		$this-> load-> view("book",$data);
	}
	public function show_book_detail($id){
		$data['book_content']=$this->mmain->get_book_content($id);
		$data['topscore'] = $this->mmain->topscore();
		$this->load->view('show_book_detail',$data);
	}
	//PHan luyen tap Reading
	public function list_incom($level){
		$data['incom_id']=$this->mmain->get_id_name_incom($level);
		$data['level']=$level;
		$data['topscore'] = $this->mmain->topscore();
		$this-> load-> view("/reading/incom",$data);
	}
	
	public function show_incom_detail($id, $start=0){
		$data['incom_content']=$this->mmain->get_incom_content($id);
		$feeds = simplexml_load_file($data['incom_content']);
		$items = $feeds->xpath('/questions/question');
		$config['base_url'] = base_url("index.php/main/show_incom_detail/$id");
		$config['uri_segment'] = 4; 
		//$config['num_links'] = 5; // number of page links
		$config['per_page'] = 4; // number of items per page
		$config['total_rows'] = count($items); // count total items
		$this->pagination->initialize($config); // initialise pagination
		$data['feed'] = array_slice($items, $this->uri->segment(4), $config['per_page']); // create feed items
		//$data['pages'] = $this->pagination->create_links(); // create page links
		$data['topscore'] = $this->mmain->topscore();
		$this->load->view('/reading/show_incom_detail',$data);
	}
	public function show_photo_detail($id,$start=0){
		$data['photo_content']=$this->mmain->get_photo_content($id);
		$feeds = simplexml_load_file($data['photo_content']);
		$items = $feeds->xpath('/part_picture/question');
		$config['base_url'] = base_url("index.php/main/show_photo_detail/$id");
		$config['uri_segment'] = 4; 
		$config['per_page'] = 2;
		$config['total_rows'] = count($items); 
		$this->pagination->initialize($config); 
		$data['feed'] = array_slice($items, $this->uri->segment(4), $config['per_page']); 

		$data['link_image']=base_url().'application/data_test/photo/picture/';
		$data['link_audio']=base_url().'application/data_test/photo/audio/';
		$data['pathxml']=$this->mmain->get_photo_pathxml($id);
		$data['topscore'] = $this->mmain->topscore();
		$this->load->view('/listening/show_photo_detail',$data);
	}
	public function show_qr_detail($id,$start=0){
		$data['qr_content']=$this->mmain->get_qr_content($id);
		$feeds = simplexml_load_file($data['qr_content']);
		$items = $feeds->xpath('/QR/question');
		$config['base_url'] = base_url("index.php/main/show_qr_detail/$id");
		$config['uri_segment'] = 4; 
		$config['per_page'] = 3;
		$config['total_rows'] = count($items); 
		$this->pagination->initialize($config); 
		$data['feed'] = array_slice($items, $this->uri->segment(4), $config['per_page']);
		$data['link_audio']=base_url().'application/data_test/qr/audio/';
		//$data['pathxml']=$this->mmain->get_qr_pathxml($id);
		$data['topscore'] = $this->mmain->topscore();
		$this->load->view('/listening/show_qr_detail',$data);
	}
	public function list_text_complextion($level){
		$data['text_complextion_id']=$this->mmain->get_id_name_text_complextion($level);
		$data['level']=$level;
		$data['topscore'] = $this->mmain->topscore();
		$this-> load-> view("/reading/text_complextion",$data);
	}
	public function show_text_complextion($id, $start=0){
		$data['text_complextion_content']=$this->mmain->get_text_complextion_content($id);
		$feeds = simplexml_load_file($data['text_complextion_content']);
		$items = $feeds->xpath('/text_complextion/group');
		$config['base_url'] = base_url("index.php/main/show_text_complextion/$id");
		$config['uri_segment'] = 4;
		$config['per_page'] = 1; // number of items per page
		$config['total_rows'] = count($items); // count total items
		$this->pagination->initialize($config); // initialise pagination
		$data['feed'] = array_slice($items, $this->uri->segment(4), $config['per_page']);
		$data['topscore'] = $this->mmain->topscore();
		$this->load->view('/reading/show_text_complextion',$data);
	}
	public function list_reading_comprehen($level){
		$data['reading_comprehen_id']=$this->mmain->get_id_name_reading_comprehen($level);
		$data['level']=$level;
		$data['topscore'] = $this->mmain->topscore();
		$this-> load-> view("/reading/reading_comprehen",$data);
	}
	public function show_reading_comprehen($id, $start=0){
		$data['reading_comprehen_content']=$this->mmain->get_reading_comprehen_content($id);
		$feeds = simplexml_load_file($data['reading_comprehen_content']);
		$items = $feeds->xpath('/reading_comprehen/group');
		$config['base_url'] = base_url("index.php/main/show_reading_comprehen/$id");
		$config['uri_segment'] = 4;
		$config['per_page'] = 1; // number of items per page
		$config['total_rows'] = count($items); // count total items
		$this->pagination->initialize($config); // initialise pagination
		$data['feed'] = array_slice($items, $this->uri->segment(4), $config['per_page']);
		$data['topscore'] = $this->mmain->topscore();
		$this->load->view('/reading/show_reading_comprehen',$data);
	}
	//ket thuc phan reading
	public function list_photo($level){
		$data['photo_id']=$this->mmain->get_id_name_photo($level);
		$data['level']=$level;
		$data['topscore'] = $this->mmain->topscore();
		$this-> load-> view("/listening/photo",$data);
	}
	
	
	
	public function list_qr($level){
		$data['qr_id']=$this->mmain->get_id_name_qr($level);
		$data['level']=$level;
		$data['topscore'] = $this->mmain->topscore();
		$this-> load-> view("/listening/qr",$data);
	}
	
	
	
	public function list_short_con($level){
		$data['short_con_id']=$this->mmain->get_id_name_short_con($level);
		$data['level']=$level;
		$data['topscore'] = $this->mmain->topscore();
		$this-> load-> view("/listening/short_con",$data);
	}
	
	public function show_short_con_detail($id, $start=0){
		$data['short_con_pathxml']=$this->mmain->get_short_con_pathxml($id);
		$feeds = simplexml_load_file($data['short_con_pathxml']);
		$items = $feeds->xpath('/short_con/group');
		$config['base_url'] = base_url("index.php/main/show_short_con_detail/$id");
		$config['uri_segment'] = 4;
		$config['per_page'] = 1; // number of items per page
		$config['total_rows'] = count($items); // count total items
		$this->pagination->initialize($config); // initialise pagination
		$data['feed'] = array_slice($items, $this->uri->segment(4), $config['per_page']);
		$data['link_audio']=base_url().'application/data_test/short_con/audio/';
		//$data['pathxml']=$this->mmain->get_short_con_pathxml($id);
		$data['topscore'] = $this->mmain->topscore();
		$this->load->view('/listening/show_short_con_detail',$data);
	}
	public function list_short_talk($level){
		$data['short_talk_id']=$this->mmain->get_id_name_short_talk($level);
		$data['level']=$level;
		$data['topscore'] = $this->mmain->topscore();
		$this-> load-> view("/listening/short_talk",$data);
	}
	public function show_short_talk_detail($id, $start=0){
		$data['short_talk_pathxml']=$this->mmain->get_short_talk_pathxml($id);
		$feeds = simplexml_load_file($data['short_talk_pathxml']);
		$items = $feeds->xpath('/short_talk/group');
		$config['base_url'] = base_url("index.php/main/show_short_talk_detail/$id");
		$config['uri_segment'] = 4;
		$config['per_page'] = 1; // number of items per page
		$config['total_rows'] = count($items); // count total items
		$this->pagination->initialize($config); // initialise pagination
		$data['feed'] = array_slice($items, $this->uri->segment(4), $config['per_page']);
		$data['link_audio']=base_url().'application/data_test/short_talk/audio/';
		$data['pathxml']=$this->mmain->get_short_talk_pathxml($id);
		$data['topscore'] = $this->mmain->topscore();
		$this->load->view('/listening/show_short_talk_detail',$data);
	}
	
	public function sharing_writing($type, $start=0){
		$limit=6;
		$config['base_url'] = base_url("index.php/main/sharing_writing/$type");
        $config['total_rows'] = $this->mmain->count_all_sharing_writing($type); 
        $config['per_page'] = $limit; 
        $config['uri_segment'] = 4; 
        $this->pagination->initialize($config); 
		$data['sharing_id']=$this->mmain->get_id_name_sharing_writing($type,$start,$limit);
		$data['topscore'] = $this->mmain->topscore();
		$this-> load-> view("/writing/sharing_writing",$data);

	}
	public function sharing_speaking($type, $start=0){
		$limit=6;
		$config['base_url'] = base_url("index.php/main/sharing_writing/$type");
        $config['total_rows'] = $this->mmain->count_all_sharing_speaking($type); 
        $config['per_page'] = $limit; 
        $config['uri_segment'] = 4; 
        $this->pagination->initialize($config); 
		$data['sharing_id']=$this->mmain->get_id_name_sharing_speaking($type,$start,$limit);
		$this-> load-> view("/speaking/sharing_speaking",$data);

	}
	public function list_w_sentence(){
		$data['topscore'] = $this->mmain->topscore();
		$data['w_sen_id']=$this->mmain->get_id_w_sentence();
		$this-> load-> view("/writing/show_list_w_sentence",$data);

	}
	
	public function list_w_essay(){
		$data['topscore'] = $this->mmain->topscore();
		$data['w_sen_id']=$this->mmain->get_id_w_essay();
		$this-> load-> view("/writing/show_list_w_essay",$data);

	}
	public function show_w_sentence_detail($id, $start=0){
		$data['w_sen_pathxml']=$this->mmain->get_w_sentence_pathxml($id);
		$feeds = simplexml_load_file($data['w_sen_pathxml']);
		$items = $feeds->xpath('/w_sentence/group');
		$config['base_url'] = base_url("index.php/main/show_w_sentence_detail/$id");
		$config['uri_segment'] = 4;
		$config['per_page'] = 1; // number of items per page
		$config['total_rows'] = count($items); // count total items
		$this->pagination->initialize($config); // initialise pagination
		$data['feed'] = array_slice($items, $this->uri->segment(4), $config['per_page']);
		$data['image']=base_url().'application/data_test/short_con/audio/';
		$data['link_image']=base_url().'application/template/image/';
		$data['topscore'] = $this->mmain->topscore();
		$this->load->view('/writing/show_w_sentence_detail',$data);
	}
	
	public function show_w_essay_detail($id, $start=0){
		$data['w_ess_pathxml']=$this->mmain->get_w_essay_pathxml($id);
		$feeds = simplexml_load_file($data['w_ess_pathxml']);
		$items = $feeds->xpath('/w_essay/group');
		$config['base_url'] = base_url("index.php/main/show_w_essay_detail/$id");
		$config['uri_segment'] = 4;
		$config['per_page'] = 1; // number of items per page
		$config['total_rows'] = count($items); // count total items
		$this->pagination->initialize($config); // initialise pagination
		$data['feed'] = array_slice($items, $this->uri->segment(4), $config['per_page']);
		$data['image']=base_url().'application/data_test/short_con/audio/';
		$data['link_image']=base_url().'application/template/image/';
		$data['topscore'] = $this->mmain->topscore();
		$this->load->view('/writing/show_w_essay_detail',$data);
	}
	public function w_response($start=0){
		$limit=1;
		$config['base_url'] = base_url("index.php/main/w_response/$type");
        $config['total_rows'] = $this->mmain->count_all_w_response($type); 
        $config['per_page'] = $limit; 
        $config['uri_segment'] = 3; 
        $this->pagination->initialize($config); 
		$data['resp']=$this->mmain->get_data_w_response();
		$data['topscore'] = $this->mmain->topscore();
		$this->load->view("/writing/show_w_response",$data);

	}
	public function show_video($start=0){
		$limit=1;
		$config['base_url']=base_url("index.php/main/show_video");
		$config['total_rows']=$this->mmain->count_all_video();
		$config['per_page']=$limit;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$data['aaaa']=$this->mmain->get_data_video();
		$data['topscore'] = $this->mmain->topscore();
		$this->load->view("show_video",$data);
	}
	public function list_fulltest(){
		$data['fulltest_id']=$this->mmain->get_id_name_fulltest();
		$data['topscore'] = $this->mmain->topscore();
		$this-> load-> view("test/fulltest",$data);
	}
	public function show_fulltest($id){
		$data['fulltest_path']=$this->mmain->get_fulltest_pathxml($id);
		$data['link_image']=base_url().'application/data_test/fulltest/picture/';
		$data['link_audio']=base_url().'application/data_test/fulltest/audio/';
		$data['topscore'] = $this->mmain->topscore();
		$this->load->view('test/show_fulltest',$data);
	}
	public function list_minitest(){
		$data['minitest_id']=$this->mmain->get_id_name_minitest();
		$data['topscore'] = $this->mmain->topscore();
		$this-> load-> view("test/minitest",$data);
	}
	public function show_minitest($id){
		$data['minitest_path']=$this->mmain->get_minitest_pathxml($id);
		$data['link_image']=base_url().'application/data_test/minitest/picture/';
		$data['link_audio']=base_url().'application/data_test/minitest/audio/';
		$data['topscore'] = $this->mmain->topscore();
		$this->load->view('test/show_minitest',$data);
	}
	public function rank(){
			$username=$this->input->post('username');
			$score=$this->input->post('score');
			$this->mmain->rank($username,$score);
	}
}
?>