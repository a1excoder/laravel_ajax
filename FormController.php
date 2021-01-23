<?php

namespace App\Http\Controllers;

use App\Models\form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function setForm(Request $req)
    {

        $valid = Validator::make($req->all(), [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'phoneNumber' => 'required'
        ]);



        if ($valid->fails()) {
            return Response()->json(array(
                'success' => false,
                'errors' => $valid->errors()->all()
            ), 422);
        } else {

            // to db
            $data = new form();
            $data->firstName = $req->input('firstName');
            $data->lastName = $req->input('lastName');
            $data->email = $req->input('email');
            $data->phoneNumber = $req->input('phoneNumber');
            $data->save();

            return Response()->json(array('success' => true), 200);
        }



    }
}
