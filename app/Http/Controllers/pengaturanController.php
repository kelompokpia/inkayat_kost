<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengaturan;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;

class pengaturanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = pengaturan::all();
        return view('pengaturan.pengaturan')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    
        Session::flash('name',$request->name);
        Session::flash('email',$request->email);
        Session::flash('password',$request->password);

        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:users,email',
            'password'=>'required',
        ]);
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'email_verified_at'=>$request->email_verified_at,
            'password'=>Hash::make($request->password),
            'remember_token'=>$request->remember_token,
            'created_at'=>$request->created_at,
            'updated_at'=>$request->updated_at
        ];

        pengaturan::create($data);
        return redirect ()->to('home/pengaturan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = pengaturan::where('id', $id)->first();
        $item = pengaturan::all();
        return view('pengaturan.edit_admin')->with('data', $data)->with('item',$item);
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
        {
    
            $rules=$request->validate([
                'name'=>'required',
                
                'password'=>'required',
            ]);

            if($request->email !=Auth()->user()->email){
                $rules['email']='required|unique:users,email';
            }

            $data = [
            'name'=>$request->name,
            'password'=>Hash::make($request->password),
            ];

            if($request->email !=Auth()->user()->email){
                $data['email']=$request->email;
            }
    
            pengaturan::where('id',$id)->update($data);
            return redirect ()->to('home/pengaturan')->with('success','Berhasil Mengubah data Inkayat Kost');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        pengaturan::where('email',$id)->delete();
        return redirect()->to('home/pengaturan');
    }
}
