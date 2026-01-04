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
                            <form class="custom-validation" action="{{ route('customers.store') }}" method="POST" enctype="multipart/form-data" validate>
                             @csrf   
                            <div class="card-body">                               
                                <h5>Personal Info.</h5>
                                <div class="row mt-3">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">ACQUEST Patient ID</label>
                                            <input class="form-control" type="text" name="customer_list_code" value="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Out Lab HN</label>
                                            <input class="form-control" type="text" name="customer_list_info" value="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Date register</label>
                                            <input class="form-control" type="date" name="customer_list_date" value="">
                                        </div>
                                   </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Prefix</label>
                                            <input class="form-control" type="text" name="customer_list_prefix" value="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Patient Name</label>
                                            <input class="form-control" type="text" name="customer_list_name" value="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Nationalitye</label>
                                            <input class="form-control" type="text" name="customer_list_nationality" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Date of Birth</label>
                                            <input class="form-control" type="date" name="customer_list_birthdate" value="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Age</label>
                                            <input class="form-control" type="text" name="customer_list_age" value="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Height(cm.)</label>
                                            <input class="form-control" type="text" name="customer_list_height" value="">
                                        </div>
                                    </div>                                 
                                </div>
                                <div class="row mt-3">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Weight(kg)</label>
                                            <input class="form-control" type="text" name="customer_list_weight" value="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Blood Group</label>
                                            <input class="form-control" type="text" name="customer_list_bloodgroup" value="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Gender</label>
                                            <input class="form-control" type="text" name="customer_list_gender" value="">
                                        </div>
                                    </div>                                 
                                </div>
                                <div class="row mt-3">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Address</label>
                                            <input class="form-control" type="text" name="customer_list_address" value="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">City</label>
                                            <input class="form-control" type="text" name="customer_list_city" value="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Country</label>
                                            <input class="form-control" type="text" name="customer_list_country" value="">
                                        </div>
                                    </div>                                 
                                </div>
                                <div class="row mt-3">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Zip code</label>
                                            <input class="form-control" type="text" name="customer_list_zipcode" value="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Contract Number</label>
                                            <input class="form-control" type="text" name="customer_list_contractnumber" value="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <input class="form-control" type="text" name="customer_list_email" value="">
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
                                            <input class="form-control" type="text" name="emergencycontract_name" value="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <input class="form-control" type="text" name="emergencycontract_email" value="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label">Contract Number</label>
                                            <input class="form-control" type="text" name="emergencycontract_number" value="" >
                                        </div>
                                    </div>                                 
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form-label">Note</label>
                                            <input class="form-control" type="text" name="customer_list_note" value="">
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