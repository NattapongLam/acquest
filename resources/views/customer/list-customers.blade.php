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
                                    <h5 class="my-0 text-primary"><i class="mdi mdi-bullseye-arrow me-3"></i>Customer List</h5>
                                <div class="page-title-right">
                                    <h5 class="my-0 text-primary">
                                        <a href="{{route('customers.create')}}">
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
                                                <th>Patient ID</th>
                                                <th>Date Register</th>
                                                <th>Patient Name</th>
                                                <th>Nationality</th>
                                                <th>Age</th>
                                                <th>Height</th>
                                                <th>Weight</th>
                                                <th>Blood Group</th>
                                                <th>Gender</th>
                                                <th></th>
                                            </tr>                                       
                                        </thead>
                                        <tbody>
                                            @foreach ($hd as $item)
                                            <tr>
                                                <td>{{$item->customer_list_code}}</td>
                                                <td>{{$item->customer_list_date}}</td>
                                                <td>{{$item->customer_list_name}}</td>
                                                <td>{{$item->customer_list_nationality}}</td>
                                                <td>{{$item->customer_list_age}}</td>
                                                <td>{{$item->customer_list_height}}</td>
                                                <td>{{$item->customer_list_weight}}</td>
                                                <td>{{$item->customer_list_bloodgroup}}</td>
                                                <td>{{$item->customer_list_gender}}</td>
                                                <td>
                                                    <a href="{{ route('customers.edit', $item->customer_list_id) }}"class="btn btn-warning btn-sm"><i class="bx bx-edit-alt"></i> แก้ไข</a>                                                        
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