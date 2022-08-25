<?php

namespace App\Http\Controllers;

use App\Models\report_products;
use App\Models\Store;
use App\Models\Store_Account;
use App\Models\Store_Area;
use App\Models\Product;
use App\Models\Product_Brand;
use Illuminate\Http\Request;

use App\Charts\Report_productChart;

class ReportProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $report_products=report_products::all();
        $store= Store::all();
        $store_account=Store_Account::all();
        $store_area=Store_Area::pluck('area_name');
        $product=Product::all();
        $product_brand=Product_Brand::all();

        $nilai = 


        $chart = new Report_productChart;

        $chart->labels($store_area);

        $chart->dataset('Nilai', 'bar', [1, 2, 3, 4]);



        return view('index', compact('chart'));
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
     * @param  \App\Models\report_products  $report_products
     * @return \Illuminate\Http\Response
     */
    public function show(report_products $report_products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\report_products  $report_products
     * @return \Illuminate\Http\Response
     */
    public function edit(report_products $report_products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\report_products  $report_products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, report_products $report_products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\report_products  $report_products
     * @return \Illuminate\Http\Response
     */
    public function destroy(report_products $report_products)
    {
        //
    }
}
