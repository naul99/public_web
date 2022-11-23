<?php
    class giohang extends DController{
      
        public function __construct(){
            $data=array();
            parent::__construct();
         }
         public function index(){
           $this->giohang();
            
         }
        
        public function giohang(){
            $table='tbl_category_product';
            $categorymodel=$this->load->model('categorymodel');
            $data['category']=$categorymodel->category_home($table);
            $this->load->view('header',$data);
            //$this->load->view('silder');
            $this->load->view('cart');
            $this->load->view('footer');
        }
        
        
       
        
    }

?>