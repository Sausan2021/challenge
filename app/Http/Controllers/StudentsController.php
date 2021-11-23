<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
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
        $validates = $request->validate([
            
            'name' => 'required',
            'date_of_birth' => 'required'
        ]);

        $id = $request->id;
        $name = $request->name;
        $date_of_birth=$request->date_of_birth;
        $stud = new Student();
        $stud->id=$id;
        $stud->name=$name;
        $stud->date_of_birth=$date_of_birth;
        $stud->save();
        return back()->with('success','Student Data Added successfully!');
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $students = Student::all();
        $data['students'] = Student::all();
        return view('Students.ViewData')->with($data);
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
