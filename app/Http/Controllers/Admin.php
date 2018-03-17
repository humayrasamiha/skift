<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Models\AdminModel;

use App\SkiftNew;


use App\hotel;



use App\Http\Requests;

class Admin extends Controller
{
    public function login1(){

    	return view('admin.login');
    }

    public function login2(Request $data){

    	 $email=$data->email;

  		$password=$data->password;

  		$users = DB::table('logins')->where([

  			['email', '=', $email],

  			['password', '=', $password],

				])->get();

  		if($users){

    			return view('admin.admin');
    		}

    	
   }

          public function hotelnews(){

          return view('admin.hotel_news');

          }

           public function addHotel(Request $data){

            $model= new SkiftNew();

            $logo=$data->file('image');

            $upload='uploads/logo';

            $filename=$logo->getClientOriginalName();

            $success=$logo->move($upload,$filename);

            $model->image=$filename;
            
            $model->title=$data->title;

            $model->description=$data->description;

            $model->save();

           return view('admin.hotel_news');



            

          }

          public function hotelmaintain(){

          $user = DB::table('skift_news')->get();

          

          return view('admin.hotel_maintain', ['user' => $user]);
          

          }
          public function delete($id){

          DB::table('skift_news')->where(['id'=>$id])->delete();

          return redirect('hotelmaintain');


          }

          public function edit($id){

 	        $user=DB::select('select * from skift_news where id = :id', ['id' => $id]);

          return view('admin.update_hotel',['user'=>$user]);




 }

         public function update(Request $data){

         	      $id=$data->id;
                
        	    $model= SkiftNew::find($id);

              $logo=$data->file('image');

            $upload='uploads/logo';

            $filename=$logo->getClientOriginalName();

            $success=$logo->move($upload,$filename);

            $model->image=$filename;

        	    $model->title=$data->title;

        	    $model->description=$data->description;

        	    $model->save();

              return redirect('hotelmaintain');


         }

         

          

}
