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
                                    <h5 class="my-0 text-primary"><i class="mdi mdi-bullseye-arrow me-3"></i>Customer Data</h5>
                            </div>
                            <form class="custom-validation" action="{{ route('customers.update',$hd->customer_list_id) }}" method="POST" enctype="multipart/form-data" validate>
                            @csrf   
                            @method('PUT')     
                            <div class="card-body">                               
                                <h5>Personal Info.</h5>
                                <div class="row mt-3">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">ACQUEST Patient ID</label>
                                            <input class="form-control" type="text" name="customer_list_code" value="{{$hd->customer_list_code}}">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Out Lab HN</label>
                                            <input class="form-control" type="text" name="customer_list_info" value="{{$hd->customer_list_info}}">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Date register</label>
                                            <input class="form-control" type="date" name="customer_list_date" value="{{$hd->customer_list_date}}">
                                        </div>
                                   </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Prefix</label>
                                            <input class="form-control" type="text" name="customer_list_prefix" value="{{$hd->customer_list_prefix}}">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Patient Name</label>
                                            <input class="form-control" type="text" name="customer_list_name" value="{{$hd->customer_list_name}}">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Nationalitye</label>
                                            <input class="form-control" type="text" name="customer_list_nationality" value="{{$hd->customer_list_nationality}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Date of Birth</label>
                                            <input class="form-control" type="date" name="customer_list_birthdate" value="{{$hd->customer_list_birthdate}}">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Age</label>
                                            <input class="form-control" type="text" name="customer_list_age" value="{{$hd->customer_list_age}}">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Height(cm.)</label>
                                            <input class="form-control" type="text" name="customer_list_height" value="{{$hd->customer_list_height}}">
                                        </div>
                                    </div>                                 
                                </div>
                                <div class="row mt-3">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Weight(kg)</label>
                                            <input class="form-control" type="text" name="customer_list_weight" value="{{$hd->customer_list_weight}}">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Blood Group</label>
                                            <input class="form-control" type="text" name="customer_list_bloodgroup" value="{{$hd->customer_list_bloodgroup}}">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Gender</label>
                                            <input class="form-control" type="text" name="customer_list_gender" value="{{$hd->customer_list_gender}}">
                                        </div>
                                    </div>                                 
                                </div>
                                <div class="row mt-3">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Address</label>
                                            <input class="form-control" type="text" name="customer_list_address" value="{{$hd->customer_list_address}}">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">City</label>
                                            <input class="form-control" type="text" name="customer_list_city" value="{{$hd->customer_list_city}}">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Country</label>
                                            <input class="form-control" type="text" name="customer_list_country" value="{{$hd->customer_list_country}}">
                                        </div>
                                    </div>                                 
                                </div>
                                <div class="row mt-3">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Zip code</label>
                                            <input class="form-control" type="text" name="customer_list_zipcode" value="{{$hd->customer_list_zipcode}}">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Contract Number</label>
                                            <input class="form-control" type="text" name="customer_list_contractnumber" value="{{$hd->customer_list_contractnumber}}">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <input class="form-control" type="text" name="customer_list_email" value="{{$hd->customer_list_email}}">
                                        </div>
                                    </div>                                 
                                </div>
                            </div>
                            <div class="card-body">
                                <h5>Emergency Contract</h5>
                                 <div class="row mt-3">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Name</label>
                                            <input class="form-control" type="text" name="emergencycontract_name" value="{{$hd->emergencycontract_name}}">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <input class="form-control" type="text" name="emergencycontract_email" value="{{$hd->emergencycontract_email}}">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Contract Number</label>
                                            <input class="form-control" type="text" name="emergencycontract_number" value="{{$hd->emergencycontract_number}}" >
                                        </div>
                                    </div>                                 
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form-label">Note</label>
                                            <input class="form-control" type="text" name="customer_list_note" value="{{$hd->customer_list_note}}">
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
                <div class="card-body">
                    <div class="row">
                                <ul class="nav nav-tabs nav-tabs-custom justify-content-center pt-2" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#archive1" role="tab" aria-selected="true">
                                        MSC-Treatment
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#archive2" role="tab" aria-selected="false" tabindex="-1">
                                        NK-Treatment
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#archive3" role="tab" aria-selected="false" tabindex="-1">
                                        CIK-Treatment
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#archive4" role="tab" aria-selected="false" tabindex="-1">
                                        SNK-Treatment
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content p-4">
                                    <div class="tab-pane active show" id="archive1" role="tabpanel">
                                        <table class="table table-responsive text-center">
                                            <thead>
                                                <tr>
                                                    <th>Matherial No.</th>
                                                    <th>Date of treatment</th>
                                                    <th>Time ot treatment</th>
                                                    <th>Cells(MCs)</th>
                                                    <th>Volume(ml)</th>
                                                    <th>Comment</th>
                                                    <th>processing</th>
                                                    <th>observe</th>
                                                    <th>LOT. MSC cells</th>
                                                    <th>DD.MM.YYYY, MCs/Tube,Number of tube</th>
                                                    <th>Cell quantity %(million cells)</th>
                                                </tr>            
                                            </thead>
                                            <tbody>
                                                @foreach ($hd->msctreatment as $item)
                                                    <tr>
                                                        <td>{{$item->msc_treatment_list_no}}</td>
                                                        <td>{{$item->msc_treatment_list_data}}</td>
                                                        <td>{{$item->msc_treatment_list_time}}</td>
                                                        <td>{{$item->msc_treatment_list_cells}}</td>
                                                        <td>{{$item->msc_treatment_list_volume}}</td>
                                                        <td>{{$item->msc_treatment_list_comment}}</td>
                                                        <td>{{$item->msc_treatment_list_processing}}</td>
                                                        <td>{{$item->msc_treatment_list_observe}}</td>
                                                        <td>{{$item->lot_msc_cells}}</td>
                                                        <td>{{$item->number_msc_cells}}</td>
                                                        <td>{{$item->quantity_msc_cells}}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="archive2" role="tabpanel">
                                        <table class="table table-responsive text-center">
                                            <thead>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="archive3" role="tabpanel">
                                        <table class="table table-responsive">
                                            <thead>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="archive4" role="tabpanel">
                                        <table class="table table-responsive">
                                            <thead>                                             
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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