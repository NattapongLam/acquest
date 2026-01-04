@extends('layouts.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-transparent border-primary">
                <div class="row">
                        @if(Session::has('error'))
                            <div class="alert alert-danger alert-block">
                                <strong>{{ Session::get('error') }}</strong>
                            </div>
                        @endif
                        @if(Session::has('success'))
                            <div class="alert alert-success alert-block">
                                <strong>{{ Session::get('success') }}</strong>
                            </div>
                        @endif       
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h5 class="my-0 text-primary"><i class="mdi mdi-bullseye-arrow me-3"></i>NK-Treatment</h5>
                            </div>
                            <form class="custom-validation" action="{{ route('nk-treatments.store') }}" method="POST" enctype="multipart/form-data" validate>
                            @csrf   
                            <div class="card-body">
                                <div class="row mt-3">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">*NOTE*</label>
                                            <select class="form-select" name="nk_treatment_list_note">
                                                <option value="">กรุณาเลือก</option>
                                                <option value="Finished">Finished</option>
                                                <option value="Inprogress">Inprogress</option>
                                                <option value="Pending">Pending</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">No.</label>
                                            <input class="form-control" type="text" name="nk_treatment_list_no" value="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Date Register</label>
                                            <input class="form-control" type="date" name="nk_treatment_list_date" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Batch code NK/NKT</label>
                                            <input class="form-control" type="text" name="nk_treatment_list_batchcode" value="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Patient ID</label>
                                            <select class="form-control" name="customer_list_id">
                                                <option value="">กรุณาเลือก</option>
                                                @foreach ($cust as $item)
                                                    <option value="{{$item->customer_list_id}}">{{$item->customer_list_code}} / {{$item->customer_list_name}} ({{$item->customer_list_age}})</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Health condition</label>
                                            <input class="form-control" type="text" name="health_condition" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Typs of NK</label>
                                            <input class="form-control" type="text" name="typsofnk" value="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Time of culture days</label>
                                            <input class="form-control" type="text" name="timeofculturedays" value="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Date/time of blood collection</label>
                                            <input class="form-control" type="date" name="dateofbloodcollection" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Date/time of start cell culture</label>
                                            <input class="form-control" type="date" name="dateofstartcellculture" value="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Date/time of delivery/treatment</label>
                                            <input class="form-control" type="date" name="dateofdelivery_treatment" value="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">processing</label>
                                            <input class="form-control" type="text" name="nk_treatment_list_processing" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">observe</label>
                                            <input class="form-control" type="text" name="nk_treatment_list_observe" value="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Doctor and Nurse for Treatment</label>
                                            <input class="form-control" type="text" name="doctorandnursefortreatment" value="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Adverse effects</label>
                                            <input class="form-control" type="text" name="adverseeffects" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form-label">Note/Comment</label>
                                            <input class="form-control" type="text" name="note_comment" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <br>
                                <div class="form-group">
                                    <div class="d-flex flex-wrap gap-2 justify-content">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light" >
                                            บันทึก
                                            </button>
                                        </div>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
</script>
@endsection