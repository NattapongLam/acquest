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
                                <div class="page-title-right">
                                    <h5 class="my-0 text-primary">
                                        <a href="{{route('msc-treatments.create')}}">
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
                                                <th>Matherial No.</th>
                                                <th>Patient ID</th>
                                                <th>Prefix</th>
                                                <th>Patient Name</th>
                                                <th>Date of Birth</th>
                                                <th>Age</th>
                                                <th>Date of treatment</th>
                                                <th>Time ot treatment</th>
                                                <th>Cells(MCs)</th>
                                                <th>Volume(ml)</th>
                                                <th>Comment</th>
                                                <th></th>
                                            </tr>                                       
                                        </thead>
                                        <tbody>
                                            @foreach ($hd as $item)
                                                <tr>
                                                    <td>{{$item->msc_treatment_list_no}}</td>
                                                    <td>{{$item->customer->customer_list_code}}</td>
                                                    <td>{{$item->customer->customer_list_prefix}}</td>
                                                    <td>{{$item->customer->customer_list_name}}</td>
                                                    <td>{{$item->customer->customer_list_birthdate}}</td>
                                                    <td>{{$item->customer->customer_list_age}}</td>
                                                    <td>{{$item->msc_treatment_list_data}}</td>
                                                    <td>{{$item->msc_treatment_list_time}}</td>
                                                    <td>{{$item->msc_treatment_list_cells}}</td>
                                                    <td>{{$item->msc_treatment_list_volume}}</td>
                                                    <td>{{$item->msc_treatment_list_comment}}</td>
                                                    <td>
                                                        <a href="{{ route('msc-treatments.edit', $item->msc_treatment_list_id) }}"class="btn btn-warning btn-sm"><i class="bx bx-edit-alt"></i> แก้ไข</a>
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