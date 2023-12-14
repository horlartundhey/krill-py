<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\HomeModel;
use Illuminate\Http\Request;

use Illuminate\Support\Str;


class DashboardController extends Controller
{
    //

    public function dashboard(Request $request){
         return view('panel.dashboard.list');
        
    }

    public function admin_home(Request $request){

        $data['getrecord'] = HomeModel::all();

        return view('panel.home.list', $data);
    }

    public function admin_home_post(Request $request){
        //dd($request->all());

        if($request->add_and_update == "Add"){

            $insertRecord = request()->validate([
                'image' => 'required'
            ]);
            $insertRecord = new HomeModel;
            
        }else{
            $insertRecord = HomeModel::find($request->id);
        }
        
        $insertRecord->main_text = trim($request->main_text);
        $insertRecord->sub_text = trim($request->sub_text);
        $insertRecord->step1_title = trim($request->step1_title);
        $insertRecord->step1_desc = trim($request->step1_desc);
        $insertRecord->step2_title = trim($request->step2_title);
        $insertRecord->step2_desc = trim($request->step2_desc);
        $insertRecord->step3_title = trim($request->step3_title);
        $insertRecord->step3_desc = trim($request->step3_desc);

        if(!empty($request->file('image'))){

            if(!empty($insertRecord->profile) && file_exists('public/assets/images/'.$insertRecord->images))
            {
                unlink('public/assets/images'. $insertRecord->profile);
            }

            $file =$request->file('image');
            $randomStr= Str::random(30);
            $filename=$randomStr.'.' .$file->getClientOriginalExtension();
            $file->move('public/assets/images/', $filename);
            $insertRecord->image = $filename;
        }
        $insertRecord->save();

        return redirect()->back()->with('success', "Home page set successfully");


        
    }
    
    public function admin_about(Request $request){
        return view('panel.about.list');
    }

    public function admin_faq(Request $request){
        return view('panel.faq.list');
    }

    public function admin_contact(Request $request){
        return view('panel.contact.list');
    }
}

