<?php
    class lienhe extends DController{
      
        public function __construct(){
            $data=array();
            parent::__construct();
         }
         public function index(){
           $this->lienhe();
            
         }
        
        public function lienhe(){
            $table='tbl_category_product';
            $categorymodel=$this->load->model('categorymodel');
            $data['category']=$categorymodel->category_home($table);
            $this->load->view('header',$data);
            //$this->load->view('silder');
            $this->load->view('contact');
            $this->load->view('footer');
        }
        
        
       
        
    }

?>