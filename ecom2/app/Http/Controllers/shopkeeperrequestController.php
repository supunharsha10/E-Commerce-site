<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\shopkeeperrequest;

class shopkeeperrequestController extends Controller
{
    public function StoreRequest(Request $request){
        $this -> validate( $request, [
            'firstname'=>'required',
            'lastname'=>'required',
            'PhoneNumber'=>'required',
            'Address'=>'required',
            'NIC'=>'required',
            'NameOftheBusinessOrganization'=>'required',
           'file'=>'nullable',
            'businessType'=>'required',
            'merchant'=>'required',
            'MainSellingItem'=>'required',
            'Organizationemail'=>'required',
            'email'=>'required',
            'agreement'=>'required'
        ]);
        //return 'Validation Passed ';

    
        $shopkeeperrequest = new ShopkeeperRequest ;
        $shopkeeperrequest->firstname= $request->input('firstname');
        $shopkeeperrequest->lastname=$request->input('lastname');
        $shopkeeperrequest->PhoneNumber=$request->input('PhoneNumber');
        $shopkeeperrequest->Address=$request->input('Address');
        $shopkeeperrequest->NIC=$request->input('NIC');
        $shopkeeperrequest->NameOftheBusinessOrganization=$request->input('NameOftheBusinessOrganization');
        if($request->file('file')){
            $file=$request->file('file');
            $filename=time();
            $file->getClientOriginalName();
            $file->storeAs('public/product', $filename);
        }
        $shopkeeperrequest->businessType= $request->input('businessType');
        $shopkeeperrequest->merchant=$request->input('merchant');
        $shopkeeperrequest->MainSellingItem=$request->input('MainSellingItem');
        $shopkeeperrequest->Organizationemail=$request->input('Organizationemail');
        $shopkeeperrequest->email=$request->input('email');
        $shopkeeperrequest->agreement=$request->input('agreement');

        if($request->file('file')){

            $shopkeeperrequest->file=url('/').'/storage/product/'.$filename;
            $shopkeeperrequest->file=$file;
        }
        $shopkeeperrequest->save();
        return redirect('/')->with('response','Register Successfully');

    }
}
