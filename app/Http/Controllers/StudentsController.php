<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Category;
use App\Models\Country;
use Illuminate\Http\Request;
use Auth;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.ViewData', compact('students'));
    }
   
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Students.Students');
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
            'class_id'         =>'required',
            'country_id'     => 'required',
            'name' => 'required',
            'date_of_birth'  => 'required'
        ]);

    
        // $categories = Auth::categories()->class_id;
        // $countries = Auth::countries()->country_id;
        
        //$students = Student::all();
        $id = $request->id;
        $class_id=$request->class_id;
        $country_id=$request->country_id;
        $name = $request->name;
        $std = new Student();
        $std->class_id    =  $request->class_id;
        $std->country_id =  $request->country_id;
        $std->name  =  $request->name;
        $std->date_of_birth  =  $request->date_of_birth;
        $std->save();

        return back()->with('success','Student Data Added successfully!');
        //return redirect()->route('Students', ['students' => $std->class_id,'students' => $std->country_id]);
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       
        $data['categories'] = Category::select('id')->get();
        $data['countries'] = Country::select('id')->get();
        $students = Student::all(); 
        $data['students'] = Student::all(); 
        return view('Students.ViewData',$data);

        // $students = Student::all();
        // $data['students'] = Student::all();
        // return view('Students.ViewData')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['students']=Student::findOrfail($id);
        return view('Students.Edit',$data);

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
        $this->validate($request, [
            'name' => 'required',
            'date_of_birth' => 'required'
        ]);
         $students = Student::findOrfail($id);
        $students->name = $request->input('name');
        $students->date_of_birth = $request->input('date_of_birth');
        $students->update();
        return back()->with('success','Student Data Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $students= Student::findOrfail($id);
        $students->delete();
        return back()->with('success','Student Data Deleted successfully!');
    }
}
