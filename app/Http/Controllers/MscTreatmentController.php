<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\CustomerList;
use Illuminate\Http\Request;
use App\Models\MscTreatmentList;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MscTreatmentController extends Controller
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
        $hd = MscTreatmentList::get();
        return view('msc-treatment.list-msc-treatment',compact('hd'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cust = CustomerList::where('customer_list_flag',true)->get();
        return view('msc-treatment.create-msc-treatment',compact('cust'));
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
            'msc_treatment_list_no' => $request->msc_treatment_list_no,
            'msc_treatment_list_data' => $request->msc_treatment_list_data,
            'msc_treatment_list_time' => $request->msc_treatment_list_time,
            'msc_treatment_list_cells' => $request->msc_treatment_list_cells,
            'msc_treatment_list_volume' => $request->msc_treatment_list_volume,
            'msc_treatment_list_comment' => $request->msc_treatment_list_comment,
            'msc_treatment_list_processing' => $request->msc_treatment_list_processing,
            'msc_treatment_list_observe' => $request->msc_treatment_list_observe,
            'lot_msc_cells' => $request->lot_msc_cells,
            'number_msc_cells' => $request->number_msc_cells,
            'quantity_msc_cells' => $request->quantity_msc_cells,
            'matherial_no' => $request->matherial_no,
            'baateria_culture' => $request->baateria_culture,
            'fungus_culture' => $request->fungus_culture,
            'endotoxin' => $request->endotoxin,
            'msc_treatment_list_flag' => true,
            'person_at' => Auth::user()->name,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        try {
            DB::beginTransaction();
            MscTreatmentList::create($data);
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
        $hd = MscTreatmentList::find($id);
        $cust = CustomerList::where('customer_list_flag',true)->get();
        return view('msc-treatment.edit-msc-treatment',compact('hd','cust'));
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
            'msc_treatment_list_no' => $request->msc_treatment_list_no,
            'msc_treatment_list_data' => $request->msc_treatment_list_data,
            'msc_treatment_list_time' => $request->msc_treatment_list_time,
            'msc_treatment_list_cells' => $request->msc_treatment_list_cells,
            'msc_treatment_list_volume' => $request->msc_treatment_list_volume,
            'msc_treatment_list_comment' => $request->msc_treatment_list_comment,
            'msc_treatment_list_processing' => $request->msc_treatment_list_processing,
            'msc_treatment_list_observe' => $request->msc_treatment_list_observe,
            'lot_msc_cells' => $request->lot_msc_cells,
            'number_msc_cells' => $request->number_msc_cells,
            'quantity_msc_cells' => $request->quantity_msc_cells,
            'matherial_no' => $request->matherial_no,
            'baateria_culture' => $request->baateria_culture,
            'fungus_culture' => $request->fungus_culture,
            'endotoxin' => $request->endotoxin,
            'msc_treatment_list_flag' => true,
            'person_at' => Auth::user()->name,
            'updated_at' => Carbon::now(),
        ];
        try {
            DB::beginTransaction();
            MscTreatmentList::where('msc_treatment_list_id',$id)->update($data);
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
