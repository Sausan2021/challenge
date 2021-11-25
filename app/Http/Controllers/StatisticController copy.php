<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Country;
use App\Models\Student;
use App\Models\Statistic;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
class StatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Statistic::join('statistics','statistics.student_id','=','students.id')
        //                     ->join('countries','countries.id','=','statistics.country_id')
        //                     ->join('categories','categories.id','=','statistics.class_id')
        //                     ->get(['students.students.id','countries.country_id','categories.category_id']);
        //                  // $data['statistics'] = Statistic::all();
                         $statistics=DB::table('statistics');
                         $students=DB::table('students');
                         $categories=DB::table('categories');
                         $countries=DB::table('countries');
                           return view('Home',compact('statistics','students','countries','categories'));
        // $students= DB::table('students')->avg();
        // $countries=DB::table('countries')->count();
        // $categories=DB::table('categories')->cont();
        // $statistics = Statistic::all();
        //return view('Home',compact('students','countries','categories'));
         //$statistics = Statistic::all();
                        //   $data['statistic'] = $this->Satistic::get('statistics');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['students'] = Student::all()->avg();
        $data['countries'] = Country::all()->count();
        $data['categories'] = Category::all()->count();
        return view('Home',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            
            'student_name' => 'required',
            'country_name' => 'required',
            'class_name' => 'required',
            'count_per_class' => 'required',
            'count_per_country' => 'required',
            'average' => 'required',
        ]);
        $record = Statistic::where(['student_name'=>$request->name, 'country_name'=>$request->name ,'class_name'=>$request->class_name])->first();
    
        if($record)
        {
            return redirect()->back()->with('failed','Data Already Exist');
        }
        
        $statistics = new Statistic;
        $statistics->student_name     =  $request->student_name;
        $statistics->country_name =  $request->category_name;
        $statistics->class_name=  $request->class_name;
        $statistics->count_per_class     =  $request->count_per_class;
        $statistics->count_per_country     =  $request->count_per_country;
        $statistics->count_per_class     =  $request->average;
        $statistics->save();

        return redirect()->back()->with('success','Statistics Successfully Recorded');
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
