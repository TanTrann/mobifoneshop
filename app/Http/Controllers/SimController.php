<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\http\Requests;
use Session;
use Illuminate\support\facades\redirect;
session_start();


class SimController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
   	
   	public function add_sim(){
        
  
      return view ('admin.sim.add_sim');
    }

public function save_sim(Request $Request){
      $this->AuthLogin();
      $data =array();
      $data['sim_number']= $Request->sim_number;
      $data['sim_desc']= $Request->sim_desc;
      $data['sim_status']= $Request->sim_status;
      $data['sim_price']= $Request->sim_price;
      DB::table('tbl_sim')->insert($data);
      Session::put('message','Thêm sim thành công');
      return Redirect::to('add-sim');
   }
  
public function all_sim (){
      $this->AuthLogin();
      $all_sim = DB::table('tbl_sim')->get();
      $manager_sim = view('admin.sim.all_sim')->with('all_sim',$all_sim);
      return view ('admin_layout')->with('admin.sim.all_sim',$manager_sim);
   }

   public function unactive_sim($sim_id){
         $this->AuthLogin();
        DB::table('tbl_sim')->where('sim_id',$sim_id)->update(['sim_status'=>1]);
        Session::put('message','Ẩn sim');
        return Redirect::to('all-sim');

    }

  public function active_sim($sim_id){
         $this->AuthLogin();
        DB::table('tbl_sim')->where('sim_id',$sim_id)->update(['sim_status'=>0]);
        Session::put('message','Hiện sim');
        return Redirect::to('all-sim');
    }

     public function edit_sim($sim_id){
        $this->AuthLogin();
        $edit_sim = DB::table('tbl_sim')->where('sim_id',$sim_id)->get();

        $manager_sim  = view('admin.sim.edit_sim')->with('edit_sim',$edit_sim);
        return view('admin_layout')->with('admin.sim.edit_sim', $manager_sim);
    }

    public function update_sim(Request $request,$sim_id){
        $this->AuthLogin();
        $data = array();
        $data['sim_number'] = $request->sim_number;  
        $data['sim_price']= $request->sim_price;   
        $data['sim_desc'] = $request->sim_desc;
       
        DB::table('tbl_sim')->where('sim_id',$sim_id)->update($data);
        Session::put('message','Cập nhật sim thành công');
        return Redirect::to('all-sim');
    }
    public function delete_sim($sim_id){
        $this->AuthLogin();
        DB::table('tbl_sim')->where('sim_id',$sim_id)->delete();
        Session::put('message','Xóa sim thành công');
        return Redirect::to('all-sim');
    }

    //end admin
}
