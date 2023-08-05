<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use PDF;
use App\Models\Items;
use App\Models\Order;
use App\Models\SignUp;
class pdfController extends Controller
{
    //
    public function export_user_pdf(){
        $users=SignUp::get();
        $pdf=PDF::loadView('pdf.users',[
            'users'=>$users
        ]);
        return $pdf->download('users.pdf');
    }
    public function export_order_pdf(){
        $orders=Order::get();
        $pdf=PDF::loadView('pdf.orders',[
            'orders'=>$orders
        ]);
        return $pdf->download('orders.pdf');
    }
    public function export_item_pdf(){
        $items=Items::get();
        $pdf=PDF::loadView('pdf.items',[
            'items'=>$items
        ]);
        return $pdf->download('items.pdf');
    }

}
