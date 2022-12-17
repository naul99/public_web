<?php
    class order extends DController{
      public function __construct(){
            Session::checkSession();
            parent::__construct();
         }
         public function index(){
            $this->order();
         }
         public function order(){
            $ordermodel=$this->load->model('ordermodel');
            $table_order="tbl_order";
            $data['order']= $ordermodel->list_order($table_order);
            
            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');
            
            $this->load->view('cpanel/order/order',$data);
            $this->load->view('cpanel/footer');
        }
        // public function add_order(){
            
        //     $this->load->view('cpanel/header');
        //     $this->load->view('cpanel/menu');
        //     $this->load->view('cpanel/order/add_order');
        //     $this->load->view('cpanel/footer');
        // }

        public function order_detail($order_code){
            // echo $order_code;
            $ordermodel=$this->load->model('ordermodel');
            $table_order_detail="tbl_order_detail";
            $table_product="tbl_product";
            $cond="$table_product.id_product=$table_order_detail.product_id AND $table_order_detail.order_code ='$order_code'";
            $cond_info="$table_order_detail.order_code ='$order_code'";

            $data['order_detail']= $ordermodel->list_order_detail($table_product,$table_order_detail,$cond);
            $data['order_info']= $ordermodel->list_info($table_order_detail,$cond_info);
            
            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');
            
            $this->load->view('cpanel/order/order_detail',$data);
            $this->load->view('cpanel/footer');

        }
        public function order_confirm($order_code){
            $ordermodel=$this->load->model('ordermodel');
            $table_order="tbl_order";
            $cond="$table_order.order_code='$order_code'";
            $data=array(
                'order_status'=>1
            );
            $result= $ordermodel->order_confirm($table_order,$data,$cond);
            if($result==1){
                $message['msg']="Đã xử lý đơn hàng thành công.";
                header('Location:'.BASE_URL."/order?msg=".urldecode(serialize($message)));
            }else{
                $message['msg']="Đã xử lý đơn hàng thất bại!!";
                header('Location:'.BASE_URL."/order?msg=".urldecode(serialize($message)));
            }
        }

    }

?>