<?php
    class category extends DController{
      
        public function __construct(){
            $data=array();
            $message=array();
            parent::__construct();
         }
         
        
        public function list_category(){
            $this->load->view('header');
            $categorymodel=$this->load->model('categorymodel');

            $table_category_product='tbl_category_product';
            $data['category']=$categorymodel->category($table_category_product);

            $this->load->view('category',$data);
            $this->load->view('footer');
        }
        public function catebyid(){
            $this->load->view('header');
            $categorymodel=$this->load->model('categorymodel');
            $id=2;
            $table_category_product='tbl_category_product';
            $data['categorybyid']=$categorymodel->categorybyid($table_category_product,$id);

            $this->load->view('categorybyid',$data);
            $this->load->view('footer');
        }
        public function addcategory(){
            $this->load->view('addcategory');
        }


        public function insertcategory(){
            
            $categorymodel=$this->load->model('categorymodel');
            
            $table_category_product='tbl_category_product';
            
            $title=$_POST['title'];
            $desc=$_POST['description'];
            
            $data=array(
                'title_category_product'=>$title,
                'desc_category_product'=>$desc
            );
            $result=$categorymodel->insertcategory($table_category_product,$data);


            if($result==1){
                $message['msg']="them data thanh cong";
            }else{
                $message['msg']="them data that bai";
            }
            $this->load->view('addcategory',$message);

        }
        
        
    }

?>