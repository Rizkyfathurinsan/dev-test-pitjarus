<?php

namespace App\Http\Controllers;

use App\Models\report_products;
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

        $chart = new Report_productChart;

        $chart->labels(['One', 'Two', 'Three']);

        $chart->dataset('My dataset 1', 'line', [1, 2, 3, 4]);



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
