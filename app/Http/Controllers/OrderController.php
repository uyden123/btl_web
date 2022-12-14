<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shipping;
use App\Order;
use App\OrderDetails;
use App\Customer;
use App\Product;
use DB;
use Illuminate\Support\Facades\Redirect;
use PDF;
session_start();

class OrderController extends Controller
{

    public function edit_order($order_code){
        $edit_order = DB::table('tbl_order')->where('order_code', $order_code)->get();
        $manageer_product = view('admin.edit_order')->with('edit_order', $edit_order);
        return view('admin_layout')->with('admin.edit_order', $manageer_product);
    }

    public function update_order(Request $request,$order_code){
        $this->validate($request, [
            "order_status" => "required",
        ]);
        $data=array();
        $data['order_status'] = $request->order_status;

        DB::table('tbl_order')->where('order_code',$order_code)->update($data);
        return Redirect::to('manage-order');
    }

    public function delete_order($order_code){
        DB::table('tbl_order')->where('order_code',$order_code)->delete();
        DB::table('tbl_order_details')->where('order_code',$order_code)->delete();
        return Redirect::back();
    }

    public function print_order($checkout_code){
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->print_order_convert($checkout_code));
        return $pdf->stream();
    }

    public function print_order_convert($checkout_code){
        $order_details = OrderDetails::where('order_code',$checkout_code)->get();
        $order = Order::where('order_code',$checkout_code)->get();

        foreach ($order as $key => $ord){
            $customer_id = $ord->customer_id;
            $shipping_id = $ord->shipping_id;
        }

        $customer = Customer::where('customer_id',$customer_id)->first();
        $shipping = Shipping::where('shipping_id',$shipping_id)->first();

        $order_details_product = OrderDetails::with('product')->where('order_code',$checkout_code)->get();

        $output ='';
        $output .= '
<!DOCTYPE html>
<html>
<head>
<style>
body{
font-family: DejaVu Sans;
}
table,tr, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 100%;
}

td {
  text-align:left;
}
</style>
</head>
<body>';
$output .= '
<h2>H??A ????N:#'.$checkout_code.'
</h2>';
        $output .= '
<p type="text">Ng??y ?????t:#'.'
</p>';
        $output .= '
<p>This property sets the horizontal alignment (like left, right, or center) of the content in th or td.</p>
<table style="border: 1px solid white;">
  <tr>
    <th style="width: 50%; border: 1px solid white; text-align:left;">From:</th>
    <th style="width: 50%; border: 1px solid white; text-align:left;">To:</th>
  </tr>
  <tr>
    <td style="border: 1px solid white;">
    CAFENOD
    <br>
    ?????a ch???: 484 L???ch Tray, Ng?? Quy???n, H???i Ph??ng
    <br>
    SDT: 0877716438
    <br>
    Email: cafenod@gmail.com
    </td>

    <td style="border: 1px solid white;">';
    $output .= 'T??n: '.
    $shipping->shipping_name.'
    <br> ?????a ch???:
    '.$shipping->shipping_address.'
    <br> SDT:
    '.$shipping->shipping_phone.'
    <br> Ghi chu:
    '.$shipping->shipping_desc;
    $output .='
    </td>
  </tr>
</table>
<br><br>
<table>
  <tr>
    <th>T??n s???n ph???m</th>
    <th>S??? l?????ng</th>
    <th>Gi??</th>
    <th>T???ng Ti???n</th>
  </tr>';
        $total = 0;
    foreach ($order_details_product as $key => $product) {
        $subtotal = $product->product_sales_quantity * $product->product_price;
        $total += $subtotal;

        $output .= '
  <tr>
    <td>' . $product->product_name . '</td>
    <td>' . $product->product_sales_quantity . '</td>
    <td>' . number_format($product->product_price) . ' ' . '??' . '</td>
    <td>' . number_format($subtotal) . ' ' . '??' . '</td>
  </tr>';
    }

    $output .='
</table>';
        $output .='
           <p>T???ng thi???t h???i: ' . number_format($total) . ' ' . '??' . '</p>

</body>
</html>';

        return $output;
    }

    public function manage_order(){
        $order = Order::orderby('created_at','desc')->get();
        return view('admin.manage_order')->with(compact('order'));
    }

    public function history_order(){
        $order = Order::orderby('created_at','desc')->get();
        return view('admin.history_order')->with(compact('order'));
    }

    public function view_order($order_code){
        $order_details = OrderDetails::where('order_code',$order_code)->get();
        $order = Order::where('order_code',$order_code)->get();

        foreach ($order as $key => $ord){
            $customer_id = $ord->customer_id;
            $shipping_id = $ord->shipping_id;
        }

        $customer = Customer::where('customer_id',$customer_id)->first();
        $shipping = Shipping::where('shipping_id',$shipping_id)->first();

        $order_details_product = OrderDetails::with('product')->where('order_code',$order_code)->get();

        return view('admin.view_order')->with(compact('order','customer','shipping','order_details_product'));
    }
}
