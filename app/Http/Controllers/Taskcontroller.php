<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use App\Comp;
use App\department;
use App\succeses;
use App\batch;
use App\branch;
use Alert;
Use DB;
use Session;
use App\midtable;
use App\finalmarks;
class Taskcontroller extends Controller

{
   public function store(Request $request){


   // dd($request->all());
     
    $student=new student;
     
    $this->validate($request,[
     'stindex'=>'required|max:100|min:5',
     'stname'=>'required|max:100|min:5',
     'stemail'=>'required|max:100|min:5',
     'stmobile'=>'required|max:100|min:5',
    ]);  

  
    $student->index=$request->stindex;
    $student->name=$request->stname;
    $student->email=$request->stemail;
    $student->mobile=$request->stmobile;
    $student->course=$request->stcourse;
    $student->dep=$request->stdep;
    $student->batch=$request->stbatch;
    $student->branch=$request->stbranch;
    
    $student->save();
  

   }


  public function compstore(Request $request){

  $comp=new Comp;

  $comp->compid=$request->compid;
  $comp->compname=$request->comname;
  $comp->des=$request->compdes;
  $comp->tel=$request->comptel;
  $comp->email=$request->compmail;

  $comp->save();

  $comp=Comp::all();
  return view('company')->with('comps',$comp);
  
  }

  public function updatetaskview($id){

  $update=Comp::find($id);
  return view('updateview')->with('updatedata',$update);
  }
  

  public function updatetask(Request $request){

    
    $id=$request->id;
    $compid=$request->compid;
    $compname=$request->comname;
    $compdes=$request->compdes;
    $comptel=$request->comptel;
    $compmail=$request->compmail;
    
    $data=Comp::find($id);
    $data->compid=$compid;
    $data->compname=$compname;
    $data->des=$compdes;
    $data->tel=$comptel;
    $data->email=$compmail;
    
    $data->save();
    $datas=Comp::all();
    return view('company')->with('comps',$datas);

  }
  
  public function deletetask($id){

  $task=Comp::find($id);

  $task->delete();
  $task=Comp::all();
  return view('company')->with('comps',$task);


  }

  public function savedep(Request $request){
      
    $this->validate($request,[
         
      'depno'=>'required | max:10 | min:1',
      'depname'=>'required | max:20|min:3'
       
     ]);

    $depval=DB::table('departments')->where('dpt_code',$request->depno)->count();
   
   if($depval==1)
   {
    return view('dashboard')->with('dep',$depval);
   }
   else
   {
    $dep=new department;
   
    $dep->dpt_code=$request->depno;
    $dep->description=$request->depname;
   
    $dep->save();
 
   }


  }

  public function savebatch(Request $request){
    $this->validate($request,[
         
      'batchno'=>'required | max:10 | min:1',
      'batch'=>'required | max:20|min:3'
       
     ]);
    $depval=DB::table('batches')->where('batch_code',$request->batchno)->count();
   
   if($depval==1)
   {
     return view('dashboard')->with('dep',$depval);

   }
   else
   {
    $dep=new batch;
   
    $dep->batch_code=$request->batchno;
    $dep->description=$request->batch;
   
    $dep->save();
 
   }


  }
  public function savebranch(Request $request){
    $this->validate($request,[
         
      'branch_no'=>'required | max:10 | min:1',
      'branch'=>'required | max:20|min:3'
       
     ]);
    $depval=DB::table('branches')->where('bcode',$request->branch_no)->count();
   
   if($depval==1)
   {
     return view('dashboard')->with('dep',$depval);
   }
   else
   {
    $dep=new branch;
   
    $dep->bcode=$request->branch_no;
    $dep->name=$request->branch;
   
    $dep->save();
 
   }


  }
  public function setcontrol($index,$email,$mobile)
  {

    return view('gpaadd')->with('index',$index)->with('email',$email)->with('mobile',$mobile);

  }

  public function addgpa(Request $request){
    
    $gpa= $request->gpa;

    if($gpa>=3.3)
    {
       $gpa=new succeses;

  $gpa->index=$request->index;
  $gpa->mail=$request->email;
  $gpa->mobil=$request->mobile;
  $gpa->gpa=$request->gpa;

  $gpa->save();

  return "OK";
 }
    else
  {
     return "fail";
  }

  }
  
public function showmid(){

 $mid=new succeses;

 $mid=succeses::all();
 return view('midviva')->with('mids',$mid);

}

public function addmidmrk($index,$mobil,$mail,$gpa){

  return view('addmid')->with('index',$index)->with('mobil',$mobil)->with('mail',$mail)->with('gpa',$gpa);

}

public function savemid(Request $request){

  $mrk=new midtable;

  $mrk->index=$request->index;
  $mrk->mail=$request->mail;
  $mrk->mobil=$request->mobil;
  $mrk->gpa=$request->gpa;
  $mrk->midmark=$request->midmrk;

  $mrk->save();

}

public function showfinal(){

 $fin=new midtable;
 $fin=midtable::all();
 return view('finalviva')->with('fins',$fin);
}


public function addfinal($index,$mobil,$mail,$gpa,$midmrk){
 
    return view('addfinal')->with('index',$index)->with('mobil',$mobil)->with('mail',$mail)->with('gpa',$gpa)->with('midmrk',$midmrk);
  
}
public function savefinal(Request $request){
  
$fin=new finalmarks; 

$fin->index=$request->index;
$fin->mail=$request->mail;
$fin->mobil=$request->mobil;
$fin->midmrk=$request->midmrk;
$fin->finalmrk=$request->finmrk;

$fin->save();
return view('finalviva');

}

/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index(Request $request)
    {  
      $depval=DB::table('branches')->where('bcode',$request->branch_no)->count();
      return view('dashboard')->with('dep',$depval);
    }

}
