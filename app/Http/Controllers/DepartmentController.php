<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Department;
use App\Department_team;
use Auth;
use Validator;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    //
    public function index()
    {
        return view('Departments.add_department');
    }

    public function add_department(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'department_name' => 'required',
            'description' => 'required',
            'image' => 'required|image',
        ]);

        //save image
        $filenamewithExt = $request->file('image')->getClientOriginalName();
        
        $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
        // RETURN $filename;
        $extension = $request->file('image')->getClientOriginalExtension();
        //create new filename

        $filenametostore = $filename .'_'.time().'.'.$extension;
        //upload image

        $path= $request->file('image')->storeAs('public/department',$filenametostore);


        $department = new Department();
        $department->department_name = $request->department_name;
        $department->description = $request->description;
        // $department->image = $request->image;
        $department->image = '/department'.$request->$filename;
        $department->department_id = Auth::user()->id;
        $department->save();

        Toastr::success('Post successfully Created.','Success',["positionClass" => "toast-top-right"]);
        return redirect()->route('dashboard')->with('success','Welcome to Lake Hospital Dashboard');
       
    }

    public function add_member()
    {
        return ('Department.team');
    }

    public function post_member(Request $request)
    {
    
        //add a member to a department

        //take a project , add a doctor to it
        $department = Department::find($request->input('department_id'));

        if(Auth::user()->id == $department->user_id){

            $user = User::where('email', $request->input('email'))->first(); //single record
   
            //check if user is already added to the project
            $departmentteman = Department_team::where('user_id',$user->id)
                                       ->where('department_id',$department->id)
                                       ->first();
                
                                       dd($request->all());
               if($projectUser){
                   //if user already exists, exit 
                   return redirect()->route('department.show', ['department'=> $department->id])
                   ->with('success' ,  $request->input('email').' is already a member of this project');
                  
               }

               if($doctor && $department){

                $department->users()->attach($doctor->id); 

                        return redirect()->route('department.show', ['project'=> $project->id])
                        ->with('success' ,  $request->input('email').' was added to the project successfully');
                       
                    }
                    
         }

         return redirect()->route('projects.show', ['department'=> $department->id])
         ->with('errors' ,  'Error adding Doctors to a Team');
        
   
          
        

    }
}
