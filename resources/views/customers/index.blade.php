@extends('layouts.master')
@section('styles')
     <!-- DataTables -->
    <link href="{{asset('admin/assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
    <link href="{{asset('admin/assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@stop
@section('title')
    Customers
@stop
@section('content')
      
            <div class="container-fluid">
                
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="btn-group pull-right m-t-15">
                            <button type="button" class="btn btn-custom dropdown-toggle waves-effect waves-light"
                                    data-toggle="dropdown" aria-expanded="false">More <span class="m-l-5"></span></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="{{ url('/customers/create') }}" class="dropdown-item"> New Customer</a>
                                
                            </div>

                        </div>
                        <h4 class="page-title">Customers</h4>
                    </div>
                </div>
               
               @include('layouts.alerts')


                <div class="row">
                  
                    <div class="col-md-12">
                        <div class="card-box table-responsive">
                          
                            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Date Created</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>


                                <tbody>
                                @foreach($customers as $customer)  
                                
                                    <tr>
                                        <td>{{@$customer->fname }} {{@$customer->lname }}</td>
                                        <td>{{@$customer->email }}</td>
                                        <td>{{@$customer->msisdn }}</td>
                                        <td>{{@$customer->status }}</td>
                                        <td>{{@$customer->created_at }}</td>
                                        <td>
                                            <a class="btn waves-effect waves-light btn-primary" href="{{url('customers/view/details')}}?id={{$customer->id}}"> <i class="fa fa-pencil"></i></a>
                                            <a href="{{url('/customers/delete')}}?id={{$customer->id}}" onclick="alert('areyou sure yoeu want ot delete this account?')" class="btn waves-effect waves-light btn-danger"> <i class="fa fa-remove"></i> </a>
                                        </td>
                                    </tr>

                                @endforeach


                                </tbody>
                            </table>    
                        </div>
                    </div>
                </div>            

        </div> <!-- container -->
@stop
@section('scripts')
     <!-- Required datatable js -->
    <script src="{{asset('admin/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script>
           //Buttons examples
            var table = $('#datatable').DataTable({
            
               
            });

            table.buttons().container().appendTo('#datatable_wrapper .col-md-6:eq(0)');
    </script>
@stop
