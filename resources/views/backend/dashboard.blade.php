@extends('backend.master')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            
           <div class="card-body table-responsive">
               <h2>Website Contacts</h2><br><br>
                <table class="mb-0 table table-bordered table-striped" id="data_table">
                     <thead>
                        <tr>
                            
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contacts as $data) 
                        <tr>
                            
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->subject }}</td>
                            <td>{{ $data->message }}</td>
                            <td>{{ $data->created_at }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

           
        </div>
    </div>
</div>
@endsection
@push('js')
<script type="text/javascript">
    $(document).ready(function(){
        $('#data_table').DataTable();
    });
 </script>

@endpush
