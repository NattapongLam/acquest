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
                                    <h5 class="my-0 text-primary"><i class="mdi mdi-bullseye-arrow me-3"></i>MSC-Treatment</h5>
                            </div>
                            <form class="custom-validation" action="{{ route('msc-treatments.store') }}" method="POST" enctype="multipart/form-data" validate>
                            @csrf   
                            <div class="card-body">
                                <div class="row mt-3">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Matherial No.</label>
                                            <input class="form-control" type="text" name="msc_treatment_list_no" value="">
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
                                            <label class="form-label">Date of treatment</label>
                                            <input class="form-control" type="date" name="msc_treatment_list_data" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Time ot treatment</label>
                                            <input class="form-control" type="time" name="msc_treatment_list_time" value="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Cells (MCs)</label>
                                            <input class="form-control" type="text" name="msc_treatment_list_cells" value="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Volume (ml)</label>
                                            <input class="form-control" type="text" name="msc_treatment_list_volume" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label class="form-label">Comment</label>
                                            <input class="form-control" type="text" name="msc_treatment_list_comment" value="">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label class="form-label">processing</label>
                                            <input class="form-control" type="text" name="msc_treatment_list_processing" value="">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label class="form-label"> observe</label>
                                            <input class="form-control" type="text" name="msc_treatment_list_observe" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">LOT. MSC cells</label>
                                            <input class="form-control" type="text" name="lot_msc_cells" value="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">DD.MM.YYYY, MCs/Tube,Number of tube</label>
                                            <input class="form-control" type="text" name="number_msc_cells" value="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Matherial No.</label>
                                            <input class="form-control" type="text" name="matherial_no" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Baateria culture</label>
                                            <input class="form-control" type="text" name="baateria_culture" value="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Fungus culture</label>
                                            <input class="form-control" type="text" name="fungus_culture" value="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Endotoxin</label>
                                            <input class="form-control" type="text" name="endotoxin" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form-label">Cell quantity % (million cells)</label>
                                            <textarea class="form-control" name="quantity_msc_cells"></textarea>
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