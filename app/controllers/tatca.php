<?php
    class tatca extends DController{
      
        public function __construct(){
            $data=array();
            parent::__construct();
         }
         public function index(){
           $this->tatca();
            
         }
         public function tatca(){
            $table='tbl_category_product';
            $table_product='tbl_product';
            
            $categorymodel=$this->load->model('categorymodel');
            $data['category']=$categorymodel->category_home($table);
            $data['list_product']=$categorymodel->list_product_home($table_product);
            
            //$this->load->view('silder');
            
            $this->load->view('header',$data);
            $this->load->view('list_product',$data);
            $this->load->view('footer');
         }
       
        
       
        
    }

?>