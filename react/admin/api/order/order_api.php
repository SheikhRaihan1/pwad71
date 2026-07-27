<?php

class OrderApi extends Api
{
    public function __construct()
    {
       if(!$this->authenticated()){   
			if ($_SERVER['REQUEST_METHOD'] == 'GET') {			  
				http_response_code(401);//Not Authorized
		  	    die("401 Unauthorized");
			}
			
         }	
    } 

    function index()
    {
        echo "working";
    }


    function process()
    {

        $products = array_map( fn($data)=> (object) $data , $_POST["products"]); 
        $total = array_reduce( $products, fn($acc , $data)=> $acc + ($data->qty * $data->price) , 0);

        $order = new Order();
        $order->customer_id = $_POST["customer_id"];
        $order->order_date = date("Y-m-d");
        $order->delivery_date = date("Y-m-d", strtotime("+ 7 days"));
        $order->shipping_address = $_POST["address"];
        $order->order_total = $total;
        $order->paid_amount = 0;
        $order->mobile = $_POST["mobile"];
        $order->email = $_POST["email"];
        $order->status_id = 1;
        $order->discount = 0;
        $order->vat = 0;
        $order->created_at = date("Y-m-d H:i:s");
        $order->updated_at = date("Y-m-d H:i:s");
        $order_id=  $order->save();

       
        foreach ($products as $key => $value) {
           
            $order_detail= new OrderDetail();
            $order_detail->order_id=$order_id;
            $order_detail->product_id=$value->id;
            $order_detail->qty=$value->qty;
            $order_detail->price=$value->price;
            $order_detail->vat=0;
            $order_detail->discount=0;
            $order_detail->created_at= date("Y-m-d H:i:s");
            $order_detail->updated_at= date("Y-m-d H:i:s");
            $order_detail->save();


            $stock = new Stock();
            $stock->product_id = $value->id;
            $stock->qty = $value->qty * -1;
            $stock->transaction_type_id = 2;
            $stock->remark = "";
            $stock->created_at = date("Y-m-d H:i:s");
            $stock->warehouse_id = 1;
            $stock->lot_id = "LOT" . date("Y-m-d H:i:s") . $value->id;

            $stock->save();


        }





        echo  json_encode(["success" => $_POST]);
    }
}
