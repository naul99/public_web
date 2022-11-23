<?php
    class index extends DController{
      
        public function __construct(){
            $data=array();
            parent::__construct();
         }
         public function index(){
            
           $this->home();
            
         }
         public function home(){
            $table='tbl_category_product';
            $table_product='tbl_product';
            $categorymodel=$this->load->model('categorymodel');
            $data['category']=$categorymodel->category_home($table);
            $data['product']=$categorymodel->list_product_index($table_product);
            $this->load->view('header',$data); 
            $this->load->view('silder');
            $this->load->view('home',$data);
            $this->load->view('footer');
        }
         public function notfound(){
            $this->load->view('header'); 
            $this->load->view('silder');
            $this->load->view('home');
            $this->load->view('footer');
        }
        // public function danhmuc(){
        //     $this->load->view('header');
        //     //$this->load->view('silder');
        //     $this->load->view('categoryproduct');
        //     $this->load->view('footer');
        // }
        // public function chitietsanpham(){
        //     $this->load->view('header');
        //     //$this->load->view('silder');
        //     $this->load->view('details_product');
        //     $this->load->view('footer');
        // }
        
       
        
    }

?>