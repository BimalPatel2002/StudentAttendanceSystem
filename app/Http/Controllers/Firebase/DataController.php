<?php

namespace App\Http\Controllers\Firebase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kreait\Firebase\Database;

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Auth;
use Kreait\Firebase\Exception\FirebaseException;
use Session;

class DataController extends Controller
{
    public function __construct(Database $database)
    {
        $this->middleware('auth');
        $this->database = $database;
        $this->tablename = 'students_registration_data';
        $this->tablename1 = 'Attendance';
    }

    public function index()
    {
        try {
            $data = $this->database->getReference($this->tablename)->getValue();
            $total_registrations = $this->database->getReference($this->tablename)->getSnapshot()->numChildren();
            $uid = Session::get('uid');
            $user = app('firebase.auth')->getUser($uid);
            return view('firebase.data.index', compact('data','total_registrations'));
            } catch (\Exception $e) {
            return $e;
            }

        // $data = $this->database->getReference($this->tablename)->getValue();
        // $total_registrations = $this->database->getReference($this->tablename)->getSnapshot()->numChildren();
        // return view('firebase.data.index', compact('data','total_registrations'));
    }

    public function index1()
    {
        try {
        $data = $this->database->getReference($this->tablename1)->getValue();
        $total_Attendance = $this->database->getReference($this->tablename1)->getSnapshot()->numChildren();
        $uid = Session::get('uid');
        $user = app('firebase.auth')->getUser($uid);
        return view('firebase.data.index1', compact('data','total_Attendance'));
        } catch (\Exception $e) {
        return $e;
        }
    }

    public function create()
    {
        return view('firebase.data.create');
    }

    public function store(Request $request)
    {
        $postData = [
            'email' =>$request->email,
            'fullname' =>$request->full_name,
            'password' =>$request->password,
            'phone' =>$request->phone_no,
            'rfidno' =>$request->rfid_no,
            'rollno' =>$request->roll_no,
            'standard' =>$request->standard,
            'division' =>$request->division,
        ];
        $postRef = $this->database->getReference($this->tablename)->push($postData);
        if ($postRef) 
        {
           return redirect('data')->with('status','Registration Details Added Successfully');
        }
        else
        {
            return redirect('data')->with('status','Registration Details Not Added');
        }
    }

    public function edit($id)
    {
        $key = $id;
        $editdata = $this->database->getReference($this->tablename)->getChild($key)->getValue();
        if($editdata)
        {
            return view('firebase.data.edit', compact('editdata','key'));
        }
        else
        {
            return redirect('data')->with('status','Registration ID Not Found');
        }
    }

    public function update(Request $request, $id)
    {
        $key = $id;
        $updateData = [
            'email' =>$request->email,
            'fullname' =>$request->full_name,
            'password' =>$request->password,
            'phone' =>$request->phone_no,
            'rfidno' =>$request->rfid_no,
            'rollno' =>$request->roll_no,
            'standard' =>$request->standard,
            'division' =>$request->division,
        ];
        $res_updated = $this->database->getReference($this->tablename.'/'.$key)->update($updateData);
        if ($res_updated)
        {
            return redirect('data')->with('status','Registration Details updated Successfully');
        }
        else
        {
            return redirect('data')->with('status','Registration Details Not Updated');
        }
    }

    public function destroy($id)
    {
        $key = $id;
        $del_data = $this->database->getReference($this->tablename.'/'.$key)->remove();
        if ($del_data) 
        {
            return redirect('data')->with('status','Registration Details Deleted Successfully');
        }
        else
        {
            return redirect('data')->with('status','Registration Details Not Deleted');
        }
    }
}