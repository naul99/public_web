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
            Session::init();
            $table='tbl_category_product';
            $categorymodel=$this->load->model('categorymodel');
            $data['category']=$categorymodel->category_home($table);
            $this->load->view('header',$data);
            //$this->load->view('silder');
            $this->load->view('cart');
            $this->load->view('footer');
        }
        public function themgiohang(){
            Session::init();
            //Session::destroy();
            if(isset($_SESSION["shopping_cart"])){
                $avaiable=0;
                foreach($_SESSION["shopping_cart"] as $key=>$value){
                    if($_SESSION["shopping_cart"][$key]['product_id']==$_POST['product_id']){
                        $avaiable++;
                        $_SESSION["shopping_cart"][$key]['product_quantity']+=$_POST['product_quantity'];
                    }
                }
                if($avaiable==0){
                    $item=array(
                        'product_id'=>$_POST["product_id"],
                        'product_title'=>$_POST["product_title"],
                        'product_price'=>$_POST["product_price"],
                        'product_image'=>$_POST["product_image"],
                        'product_quantity'=>$_POST["product_quantity"]
                    );
                    $_SESSION["shopping_cart"][]=$item;
                }
            }else{
                $item=array(
                    'product_id'=>$_POST["product_id"],
                    'product_title'=>$_POST["product_title"],
                    'product_price'=>$_POST["product_price"],
                    'product_image'=>$_POST["product_image"],
                    'product_quantity'=>$_POST["product_quantity"]
                );
                $_SESSION["shopping_cart"][]=$item;
            }
            header("Location:".BASE_URL.'/giohang');
        }
        public function updategiohang(){
            Session::init();
            if(isset($_POST["delete_cart"])){
                if(isset($_SESSION["shopping_cart"])){
                    foreach($_SESSION["shopping_cart"] as $key=>$value){
                        if($_SESSION["shopping_cart"][$key]['product_id']==$_POST['delete_cart']){
                            
                           unset($_SESSION["shopping_cart"][$key]);
                        }
                    }
                    header("Location:".BASE_URL.'/giohang');
                }
            else{
                header("Location:".BASE_URL);
            }
            }else{
                foreach($_POST['qty'] as $key => $qty){
                    echo $qty;
                    foreach($_SESSION["shopping_cart"] as $session=>$value){
                        if($value['product_id']==$key && $qty>=1){
                            $_SESSION["shopping_cart"][$session]['product_quantity']=$qty;
                       }elseif($value['product_id']==$key && $qty<=0){
                        unset($_SESSION["shopping_cart"][$session]);
                       }
                }
            }
            header("Location:".BASE_URL.'/giohang');
            }      
    } 
}  
    

?>