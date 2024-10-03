<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showStudentData(){
        $std_data = DB::table("students")
                    ->get();
        return view("welcome",["data"=>$std_data]);
    }

    public function singleStudentInfo(int $id){
        $single_std = DB::table("students")->where("id",$id)->get();
        return $single_std;
    }

    public function addStudentInfo(){
        $std = DB::table("students")
               ->insertGetId([
                        "name" => "Azad Bhai",
                        "age" => "29",
                        "email" => "bhai@gmail.com",
                        "address" => "Comilla, Bangladesh",
                        "city" => "Comilla",
                        "phone" => "+880151819140",
                        "password" => "bhai123",
                        "created_at" => now(),
                        "updated_at" => now()
               ]);
        return $std;
    }

    public function updateStudentInfo(){
        $std = DB::table("students")
               ->where("id",1)
               ->decrement("age",2,['city'=>"Chittagong"]);

        if ($std){
           echo "<h3>Data updated successfully</h3>";
        }
        else{
            echo "<h3>Data not updated</h3>";
        }
    }

    public function deleteStudentInfo(int $id){
        $std = DB::table("students")->where('id',$id)->delete();

        if($std){
            return redirect()->route('home'); 
        }
        else{
            echo "<h3>Not Deleted</h3>";
        }
    }
}

//city name = "Pearlieburgh"
// return view("welcome",["data"=>$std_data]);
// foreach($std_data as $std){
        //     echo $std->name ."<br>";
        // }