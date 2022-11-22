<?php
    class product extends DController{
       public function __construct(){
            parent::__construct();
         }
        public function index(){
            $this->add_product();
        }
        public function add_product(){
            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');
            $this->load->view('cpanel/product/add_category');
            $this->load->view('cpanel/footer');
        }
        public function insert_product(){
             $title=$_POST['title_category_product'];
             $desc=$_POST['desc_category_product'];
             $table='tbl_category_product';
             $data=array(
                'title_category_product'=>$title,
                'desc_category_product'=>$desc
             );
             $categorymodel=$this->load->model('categorymodel');
             $result=$categorymodel->insertcategory($table,$data);
             if($result==1){
                $message['msg']="Thêm danh mục thành công";
                header("Location:".BASE_URL."/product?msg=".urldecode(serialize($message)));
             }else{
                $message['msg']="Thêm danh mục thất bại";
                header("Location:".BASE_URL."/product?msg=".urldecode(serialize($message)));


             }
        }
        public function list_category(){
            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');

            $table='tbl_category_product';
            $categorymodel=$this->load->model('categorymodel');
            $data['category']=$categorymodel->category($table);

            $this->load->view('cpanel/product/list_category',$data);
            $this->load->view('cpanel/footer');

           
        }
        public function delete_category($id){
            $table='tbl_category_product';
            $cond="id_category_product='$id'";
            $categorymodel=$this->load->model('categorymodel');
            $result=$categorymodel->deletecategory($table,$cond);
            if($result==1){
                $message['msg']="Xóa danh mục thành công";
                header("Location:".BASE_URL."/product/list_category?msg=".urldecode(serialize($message)));
             }else{
                $message['msg']="Xóa danh mục thất bại";
                header("Location:".BASE_URL."/product/list_category?msg=".urldecode(serialize($message)));


             }
        }
    }

?>