<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use PDF;

class OrderController extends Controller
{
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $orders = Order::all(); //This contains all registers for orders
        return view('orders.index')-> with('orders', $orders);

    }

    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $orders = new Order();

        $orders->date_order = $request->get('date_order');
        $orders->customer_name = $request->get('customer_name');
        $orders->customer_id = $request->get('customer_id');
        $orders->customer_address = $request->get('customer_address');
        $orders->customer_email = $request->get('customer_email');
        $orders->order_currency = $request->get('order_currency');
        $orders->product_id = $request->get('product_id');
        $orders->product_name = $request->get('product_name');
        $orders->product_quantity = $request->get('product_quantity');
        $orders->product_unit_of_measure = $request->get('product_unit_of_measure');
        $orders->net_product_value = $request->get('net_product_value');
        
        $orders->save();
        return redirect('/orders');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {   
        $orders = Order::where('product_id', $request->get('product_id'))
                    ->Where('date_order', $request->get('date_order'))
                    ->Where('customer_id', $request->get('customer_id'))
                    ->orderBy('id','ASC')->get();
        return view('orders.showregister',[ 
            'orders' => $orders
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::find($id);
        return view('orders.edit')->with('order',$order);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::find($id);

        $order->date_order = $request->get('date_order');
        $order->customer_name = $request->get('customer_name');
        $order->customer_id = $request->get('customer_id');
        $order->customer_address = $request->get('customer_address');
        $order->customer_email = $request->get('customer_email');
        $order->order_currency = $request->get('order_currency');
        $order->product_id = $request->get('product_id');
        $order->product_name = $request->get('product_name');
        $order->product_quantity = $request->get('product_quantity');
        $order->product_unit_of_measure = $request->get('product_unit_of_measure');
        $order->net_product_value = $request->get('net_product_value');

        $order->save();
        return redirect('/orders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect('/orders');
    }

    public function input()
    {   
        return view('orders.inputparams');
    }

    public function inputPdf()
    {   
        return view('orders.pdfinput');
    }

    public function search()
    {
        $orders = Order::all(); //This contains all registers for orders
        return view('orders.search')-> with('orders', $orders);
    }

    public function orderspdf()
    {
        $orders = Order::all(); //This contains all registers for orders
        return view('orders.orderspdf')-> with('orders', $orders);
    }

    public function ordersedit()
    {
        $orders = Order::all(); //This contains all registers for orders
        return view('orders.ordersedit')-> with('orders', $orders);
    }

    public function pdf($id)
    {
        $order =  Order::find($id);
        $data = [
            'title' => 'PDF',
            'date' => date('02/16/2022'),
            'order' => $order,
        ];
        $pdf = PDF::loadView('orders.pdf', $data);
        return $pdf->download('order.pdf');
    }
 
}



