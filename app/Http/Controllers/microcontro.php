<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;


class microcontro extends Controller
{




    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename='microp';
    }

    public function index(){
        return view('welcome');
    }

    public function store(Request $request){
        $postData = [
            'Device_Model'=>$request->device_model,
            'Device_Name'=>$request->device_name,
            'No_Of_Pins'=>$request->no_of_pins,
            'Status'=>$request->status,
        ];
        $postRef = $this->database->getReference($this->tablename)->push($postData);
        if($postRef){
            return redirect('/')->with('status',' Added Successfully');
        }
        else{
            return redirect('/')->with('status',' Not Added ');
        }
    }

    public function show(){
        $data = $reference = $this->database->getReference($this->tablename)->getValue();
        return view('main', compact('data'));
    }

    public function edit($id){
        $key=$id;
        $editdata= $this->database->getReference($this->tablename)->getChild($key)->getValue();
        if($editdata){

            return view('edit',compact('editdata','key'));
        }
        else{
            return redirect('/')->with('status',' Not Found ');
        }
    }
    public function update(Request $request, $id){
        $key=$id;
        $updatetData = [
            'Device_Model'=>$request->device_model,
            'Device_Name'=>$request->device_name,
            'No_Of_Pins'=>$request->no_of_pins,
            'Status'=>$request->status,
        ];
        $res_updated=$this->database->getReference($this->tablename."/".$key)->update($updatetData);
        if($res_updated){
            return redirect('show')->with('status','Data Updated Successfully');
        }
        else{
            return redirect('show')->with('status','Data Not Updated');
        }

    }
}

