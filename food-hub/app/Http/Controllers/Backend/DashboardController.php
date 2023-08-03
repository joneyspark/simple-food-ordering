<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = auth()->user()->type == 'admin';

        $users = User::where('type', 'customer')->orderBy('name', 'asc')->get();

        if ($admin) {

            $today_total = DB::table('orders')
                ->join('carts', 'orders.id', '=', 'carts.order_id')
                ->whereDate('orders.created_at', Carbon::today())
                ->sum('carts.total');

            $startDate = Carbon::now()->startOfWeek();
            $endDate = Carbon::now()->endOfWeek();

            $weekly_total = DB::table('orders')
                ->join('carts', 'orders.id', '=', 'carts.order_id')
                ->whereBetween('orders.created_at', [$startDate, $endDate])
                ->sum('carts.total');

            $startDate = Carbon::now()->startOfMonth();
            $endDate = Carbon::now()->endOfMonth();

            $monthly_total = DB::table('orders')
                ->join('carts', 'orders.id', '=', 'carts.order_id')
                ->whereBetween('orders.created_at', [$startDate, $endDate])
                ->sum('carts.total');

            $startDate = Carbon::now()->startOfYear();
            $endDate = Carbon::now()->endOfYear();

            $yearly_total = DB::table('orders')
                ->join('carts', 'orders.id', '=', 'carts.order_id')
                ->whereBetween('orders.created_at', [$startDate, $endDate])
                ->sum('carts.total');

            // $sales = Sale::select(
            //     DB::raw('month(created_at) as month'),
            //     DB::raw('sum(total) as total'),
            // )
            //     ->where(DB::raw('date(created_at)'), '>=', Carbon::now()->startOfYear())
            //     ->orderBy('month')
            //     ->groupBy('month')
            //     ->get();

            $currentYear = Carbon::now()->year;

            $monthly_sales = DB::table('orders')
                ->join('carts', 'orders.id', '=', 'carts.order_id')
                ->select(
                    DB::raw('MONTH(orders.created_at) as month'),
                    DB::raw('SUM(carts.total) as total_sales')
                )
                ->whereYear('orders.created_at', $currentYear)
                ->groupBy(DB::raw('MONTH(orders.created_at)'))
                ->orderBy(DB::raw('MONTH(orders.created_at)'))
                ->get();

                

            $month_total_report = [];

            foreach ($monthly_sales as $data) {
                $month_total_report[] = $data->total_sales;
            }

            // return $month_total_report;


            return view('dashboard', compact(
                'today_total',
                'weekly_total',
                'monthly_total',
                'yearly_total',
                'month_total_report',
                'users'
            ));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
