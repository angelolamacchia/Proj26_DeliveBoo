<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plate;
use App\Order;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $orders = DB::table('orders')
        ->join('order_plate', 'orders.id', '=', 'order_plate.order_id')
        ->join('plates', 'plate_id', '=', 'plates.id')
        ->where('user_id', Auth::user()->id)
        ->OrderBy('order_id', 'DESC')
        ->get();

        $id = [];
        $order_details = [];

        foreach ($orders as $order) {
            if(!in_array($order->order_id, $id)) {
                array_push($id, $order->order_id); 

                $array = [
                    'name' => $order->nome,
                    'surname' => $order->cognome,
                    'order_id' => $order->order_id,
                    'total' => $order->totale,
                    'info' => $order->info,
                    'indirizzo' => $order->indirizzo
                ];
                array_push($order_details, $array);
            }
        }


        $data = [
            'orders' => $orders,
            'order_details' => $order_details,
        ];

        return view('admin.orders.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('guest.order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => ['required', 'string', 'max:255'],
            'cognome' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'numero_telefono' => ['required', 'string', 'max:10', 'min:10'],
        ]);
        // @dd($request->ids);

        $data = $request->all();
        $new_order = new Order();
        $new_order->fill($data);
        $new_order->minuti_consegna = 30;
        $new_order->save();

        if(array_key_exists('ids', $data)) {
            $new_order->plates()->attach( $data['ids'] );
        }  
        
        return redirect()->route('guest.order.payment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $orders = DB::table('users')
        ->join('plates', 'users.id', '=', 'plates.user_id')
        ->join('order_plate', 'plates.id', '=', 'order_plate.plate_id')
        ->join('orders', 'order_plate.order_id', '=', 'orders.id')
        ->where('users.id', Auth::user()->id)
        ->get();


        $id = [];
        $order_details = [];

        foreach ($orders as $order) {
            if(!in_array($order->order_id, $id)) {
                array_push($id, $order->order_id); 

                $array = [
                    'order_id' => $order->order_id,
                    'data' => $order->created_at,
                ];
                array_push($order_details, $array);
            }
        }


        $data = [
            'orders' => $orders,
            'order_details' => $order_details,
        ];

        return view('admin.orders.chart', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
