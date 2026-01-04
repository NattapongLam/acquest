<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\CustomerList;
use Illuminate\Http\Request;
use App\Models\NkTreatmentList;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class NkTreatmentController extends Controller
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
        $hd = NkTreatmentList::get();
        return view('nk-treatment.list-nk-treatment',compact('hd'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cust = CustomerList::where('customer_list_flag',true)->get();
        return view('nk-treatment.create-nk-treatment',compact('cust'));
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
            'customer_list_id' => $request->customer_list_id,
            'nk_treatment_list_no' => $request->nk_treatment_list_no,
            'nk_treatment_list_note' => $request->nk_treatment_list_note,
            'nk_treatment_list_date' => $request->nk_treatment_list_date,
            'nk_treatment_list_batchcode' => $request->nk_treatment_list_batchcode,
            'health_condition' => $request->health_condition,
            'typsofnk' => $request->typsofnk,
            'timeofculturedays' => $request->timeofculturedays,
            'dateofbloodcollection' => $request->dateofbloodcollection,
            'dateofstartcellculture' => $request->dateofstartcellculture,
            'dateofdelivery_treatment' => $request->dateofdelivery_treatment,
            'nk_treatment_list_processing' => $request->nk_treatment_list_processing,
            'nk_treatment_list_observe' => $request->nk_treatment_list_observe,
            'doctorandnursefortreatment' => $request->doctorandnursefortreatment,
            'adverseeffects' => $request->adverseeffects,
            'note_comment' => $request->note_comment,
            'nk_treatment_list_flag' => true,
            'person_at' => Auth::user()->name,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
         try {
            DB::beginTransaction();
            NkTreatmentList::create($data);
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
        $hd = NkTreatmentList::find($id);
        $cust = CustomerList::where('customer_list_flag',true)->get();
        return view('nk-treatment.edit-nk-treatment',compact('hd','cust'));
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
            'customer_list_id' => $request->customer_list_id,
            'nk_treatment_list_no' => $request->nk_treatment_list_no,
            'nk_treatment_list_note' => $request->nk_treatment_list_note,
            'nk_treatment_list_date' => $request->nk_treatment_list_date,
            'nk_treatment_list_batchcode' => $request->nk_treatment_list_batchcode,
            'health_condition' => $request->health_condition,
            'typsofnk' => $request->typsofnk,
            'timeofculturedays' => $request->timeofculturedays,
            'dateofbloodcollection' => $request->dateofbloodcollection,
            'dateofstartcellculture' => $request->dateofstartcellculture,
            'dateofdelivery_treatment' => $request->dateofdelivery_treatment,
            'nk_treatment_list_processing' => $request->nk_treatment_list_processing,
            'nk_treatment_list_observe' => $request->nk_treatment_list_observe,
            'doctorandnursefortreatment' => $request->doctorandnursefortreatment,
            'adverseeffects' => $request->adverseeffects,
            'note_comment' => $request->note_comment,
            'nk_treatment_list_flag' => true,
            'person_at' => Auth::user()->name,
            'updated_at' => Carbon::now(),
        ];
         try {
            DB::beginTransaction();
            NkTreatmentList::where('nk_treatment_list_id',$id)->update($data);
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
