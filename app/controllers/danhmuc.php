<?php
    class danhmuc extends DController{
      
        public function __construct(){
            $data=array();
            parent::__construct();
         }
         public function index(){
           $this->danhmuc();
            
         }
        public function danhmuc(){
            $this->load->view('header');
            //$this->load->view('silder');
            
            $this->load->view('categoryproduct');
            $this->load->view('footer');
        }
        // public function chitietsanpham(){
        //     $this->load->view('header');
        //     //$this->load->view('silder');
        //     $this->load->view('details_product');
        //     $this->load->view('footer');
        // }
        
       
        
    }

?>