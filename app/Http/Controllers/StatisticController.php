<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Country;
use App\Models\Student;
use App\Models\Statistic;
use Illuminate\Http\Request;
use Carbon\Carbon;
class StatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Home');
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
    public function show()
   {
       $data['statistics'] = Statistic::all();
        return view('Home',$data);
     }
     //get age from birthdate
    public function getAge()
    {
        $data['students'] =Carbon::parse($students->date_of_birth)->diff(\Carbon\Carbon::now())->format('%y years, %m months and %d days');
        
        return view('Home',$data);
    }
            //country details
    public function checkoutCountries()
    {
        $data['countries'] = \Country::getContent();
        return view('countries.ViewData',$data);
    }
    public function checkoutStudents()
    {
        $data['students'] = \Student::getContent();
        return view('Students.ViewData',$data);
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
