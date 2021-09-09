<?php

namespace App\Http\Controllers;
use Session;
use App\Models\journalist;
use Illuminate\Http\Request;

class JournalistController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data)
    {
    
        $file= $data->file('image');
        if(!empty($file))
            {
            $obj= new journalist;
            $name = $data->name;
            $idproof = $data->idproof;
            $fathername = $data->fathername;
            $number = $data->number;
            $adress = $data->adress;
            $gender = $data->gender;
            $idnumber = $data->idnumber;
            $email = $data ->email;
            $bankname = $data->bankname;
            $bankaccount= $data->bankaccount;
            $psw = $data->psw;   
            $file= $data->file('image');
            $ext = $file->getClientOriginalExtension();
            $new_image=rand().".".$ext;
            $path= public_path("/assets/images/");
            
            if($file->move($path,$new_image))
            {
                $obj->name = $name;
                $obj->idproof = $idproof;
                $obj->fathername = $fathername;
                $obj->idnumber = $idnumber;
                $obj->gender = $gender;
                $obj->number= $number;
                $obj->adress= $adress;
                $obj->email = $email;
                $obj->bankname = $bankname;
                $obj->bankaccount = $bankaccount;
                $obj->psw= $psw;
                $obj->image = $new_image;

                if($obj->save())
                {
                    # echo "data inserted";
                    Session::flash('message', 'Successfully Added!');
                    // return redirect("getnews/");
                }

                }
            else
            {
                 #echo "invalid data";
                Session::flash('message', 'Invalid data');
            }
        }
        else
        {
              $obj= new journalist;
              $name = $data->name;
              $idproof = $data->idproof;
              $fathername = $data->fathername;
              $idnumber = $data->idnumber;
              $number = $data->number;
              $gender = $data->gender;
              $adress= $data->adress;
              $email = $data ->email;
              $bankname = $data->bankname;
              $bankaccount= $data->bankaccount;
              $psw = $data->psw;   

              $obj->name = $name;
              $obj->idproof = $idproof;
              $obj->fathername = $fathername;
              $obj->idnumber = $idnumber;
              $obj->gender= $gender;
              $obj->number = $number;
              $obj->adress =$adress;
              $obj->email = $email;
              $obj->bankname = $bankname;
              $obj->bankaccount = $bankaccount;
              $obj->psw = $psw;

              if($obj->save())
              {
                   #echo "data inserted";
                    Session::flash('message', 'Successfully Added!');
                //   return redirect("getnews/");
              }

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\journalist  $journalist
     * @return \Illuminate\Http\Response
     */
    public function show(journalist $journalist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\journalist  $journalist
     * @return \Illuminate\Http\Response
     */
    public function edit(journalist $journalist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\journalist  $journalist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, journalist $journalist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\journalist  $journalist
     * @return \Illuminate\Http\Response
     */
    public function destroy(journalist $journalist)
    {
        //
    }
}
