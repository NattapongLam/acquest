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
                                <div class="page-title-right">
                                    <h5 class="my-0 text-primary">
                                        <a href="{{route('nk-treatments.create')}}">
                                            เพิ่มข้อมูล
                                        </a>
                                    </h5>                  
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row"> 
                                    <table id="DataTableList" class="table table-bordered dt-responsive nowrap w-100 text-center table-sm">
                                        <thead>     
                                            <tr>
                                                <th>*NOTE*</th>
                                                <th>No.</th>
                                                <th>D/M/Y Register</th>
                                                <th>Batch code NK/NKT</th>
                                                <th>Patient ID</th>
                                                <th>Prefix</th>
                                                <th>Patient Name</th>
                                                <th>Date of Birth</th>
                                                <th>Age</th>
                                                <th>Height (cm.)</th>
                                                <th>Weight (kg)</th>
                                                <th>Health condition</th>
                                                <th>Typs of NK</th>
                                                <th>Time of culture days</th>
                                                <th></th>
                                            </tr>                                                                   
                                        </thead>
                                        <tbody>
                                            @foreach ($hd as $item)
                                                <tr>
                                                    <td>
                                                        @if($item->nk_treatment_list_note = 'Finished')
                                                          <span class="bg-success">{{$item->nk_treatment_list_note}}</span>  
                                                        @elseif($item->nk_treatment_list_note = 'Inprogress')
                                                         <span class="bg-warning">{{$item->nk_treatment_list_note}}</span>  
                                                        @else  
                                                         <span class="bg-danger">{{$item->nk_treatment_list_note}}</span>   
                                                        @endif
                                                    </td>
                                                    <td>{{ $item->nk_treatment_list_no}}</td>
                                                    <td>{{ $item->nk_treatment_list_date}}</td>
                                                    <td>{{ $item->nk_treatment_list_batchcode}}</td>
                                                    <td>{{$item->customer->customer_list_code}}</td>
                                                    <td>{{$item->customer->customer_list_prefix}}</td>
                                                    <td>{{$item->customer->customer_list_name}}</td>
                                                    <td>{{$item->customer->customer_list_birthdate}}</td>
                                                    <td>{{$item->customer->customer_list_age}}</td>
                                                    <td>{{$item->customer->customer_list_height}}</td>
                                                    <td>{{$item->customer->customer_list_weight}}</td>
                                                    <td>{{ $item->health_condition}}</td>
                                                    <td>{{ $item->typsofnk}}</td>
                                                    <td>{{ $item->timeofculturedays}}</td>
                                                    <td>
                                                        <a href="{{ route('nk-treatments.edit', $item->nk_treatment_list_id) }}"class="btn btn-warning btn-sm"><i class="bx bx-edit-alt"></i> แก้ไข</a>
                                                    </td>
                                                </tr> 
                                            @endforeach
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
$(document).ready(function() {
    $('#DataTableList').DataTable({
        "paging": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "order": [[1, "desc"]], // <-- เรียงวันที่ล่าสุดก่อน
        "language": {
            "lengthMenu": "แสดง _MENU_ รายการต่อหน้า",
            "zeroRecords": "ไม่พบข้อมูล",
            "info": "แสดง _START_ ถึง _END_ จาก _TOTAL_ รายการ",
            "infoEmpty": "ไม่มีข้อมูล",
            "search": "ค้นหา:",
            "paginate": {
                "first": "หน้าแรก",
                "last": "หน้าสุดท้าย",
                "next": "ถัดไป",
                "previous": "ก่อนหน้า"
            }
        },
        "columnDefs": [
            { "className": "text-center", "targets": "_all" }
        ]
    });
});
</script>
@endsection