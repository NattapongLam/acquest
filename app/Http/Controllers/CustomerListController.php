<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\CustomerList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CustomerListController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hd = CustomerList::get();
        return view('customer.list-customers',compact('hd'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hd = null;
        return view('customer.create-customers',compact('hd'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'customer_list_code' => $request->customer_list_code,
            'customer_list_info' => $request->customer_list_info,
            'customer_list_date' => $request->customer_list_date,
            'customer_list_prefix' => $request->customer_list_prefix,
            'customer_list_name' => $request->customer_list_name,
            'customer_list_nationality' => $request->customer_list_nationality,
            'customer_list_birthdate' => $request->customer_list_birthdate,
            'customer_list_age' => $request->customer_list_age,
            'customer_list_height' => $request->customer_list_height,
            'customer_list_weight' => $request->customer_list_weight,
            'customer_list_bloodgroup' => $request->customer_list_bloodgroup,
            'customer_list_gender' => $request->customer_list_gender,
            'customer_list_address' => $request->customer_list_address,
            'customer_list_city' => $request->customer_list_city,
            'customer_list_country' => $request->customer_list_country,
            'customer_list_zipcode' => $request->customer_list_zipcode,
            'customer_list_contractnumber' => $request->customer_list_contractnumber,
            'customer_list_email' => $request->customer_list_email,
            'emergencycontract_name' => $request->emergencycontract_name,
            'emergencycontract_email' => $request->emergencycontract_email,
            'emergencycontract_number' => $request->emergencycontract_number,
            'customer_list_note' => $request->customer_list_note,
            'customer_list_flag'=> true,      
            'person_at' => Auth::user()->name,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        try {
            DB::beginTransaction();
            CustomerList::create($data);
            DB::commit();
            return redirect()->back()->with('success', 'บันทึกข้อมูลเรียบร้อย');
        } catch (\Exception $e) {
            DB::rollback();
            $message = $e->getMessage();
            dd($message);
            return redirect()->back()->with('error', 'บันทึกข้อมูลไม่สำเร็จ');
        }      
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
        $hd = CustomerList::find($id);
        return view('customer.edit-customers',compact('hd'));
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
        $data = [
            'customer_list_info' => $request->customer_list_info,
            'customer_list_date' => $request->customer_list_date,
            'customer_list_prefix' => $request->customer_list_prefix,
            'customer_list_name' => $request->customer_list_name,
            'customer_list_nationality' => $request->customer_list_nationality,
            'customer_list_birthdate' => $request->customer_list_birthdate,
            'customer_list_age' => $request->customer_list_age,
            'customer_list_height' => $request->customer_list_height,
            'customer_list_weight' => $request->customer_list_weight,
            'customer_list_bloodgroup' => $request->customer_list_bloodgroup,
            'customer_list_gender' => $request->customer_list_gender,
            'customer_list_address' => $request->customer_list_address,
            'customer_list_city' => $request->customer_list_city,
            'customer_list_country' => $request->customer_list_country,
            'customer_list_zipcode' => $request->customer_list_zipcode,
            'customer_list_contractnumber' => $request->customer_list_contractnumber,
            'customer_list_email' => $request->customer_list_email,
            'emergencycontract_name' => $request->emergencycontract_name,
            'emergencycontract_email' => $request->emergencycontract_email,
            'emergencycontract_number' => $request->emergencycontract_number,
            'customer_list_note' => $request->customer_list_note,
            'customer_list_flag'=> true,      
            'person_at' => Auth::user()->name,
            'updated_at' => Carbon::now(),
        ];
        try {
            DB::beginTransaction();
            CustomerList::where('customer_list_id',$id)->update($data);
            DB::commit();
            return redirect()->back()->with('success', 'บันทึกข้อมูลเรียบร้อย');
        } catch (\Exception $e) {
            DB::rollback();
            $message = $e->getMessage();
            dd($message);
            return redirect()->back()->with('error', 'บันทึกข้อมูลไม่สำเร็จ');
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
        //
    }
}
