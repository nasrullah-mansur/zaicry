@extends('admin.layout.master')

@section('content')

<link rel="stylesheet" href="{{asset('admin/assets/css/normalize.css')}}">
<link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/assets/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/assets/css/themify-icons.css')}}">
<link rel="stylesheet" href="{{asset('admin/assets/css/flag-icon.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/assets/css/cs-skin-elastic.css')}}">
<link rel="stylesheet" href="{{asset('admin/assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">
<!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
<link rel="stylesheet" href="{{asset('admin/assets/scss/style.css')}}">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>




<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">

      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <strong class="card-title">Data Table</strong>
            @if($testimonials->isEmpty())
            <a href="{{route('testimonial.create')}}" type="button" class="btn btn-primary float-right">Add</a>
            @endif


          </div>
          <div class="card-body">

            <table id="noman" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Image</th>
                  <th>testimonial main heading</th>
                  <th>testimonial heading</th>
                  <th>testimonial description </th>
                  <th>Created at</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($testimonials as $testimonial)
                <tr>
                  <td><img height="100px" width="100px" src="{{asset('storage/testimonial/' . $testimonial->photo->file)}}"></td>
                  <td>{{$testimonial->testimonial_main_heading}}</td>
                  <td>{{$testimonial->testimonial_heading}}</td>
                  <td>{!!$testimonial->testimonial_description!!}</td>
                  <td>{{$testimonial->created_at->diffForHumans()}}</td>

                  <td width="18%">
                    <a href="{{route('testimonial.edit', $testimonial->id)}}" type="button" class="btn btn-primary">Edit</a>

                    <a href="{{route('testimonial.destroy', $testimonial->id)}}" onclick="return confirm('Are you sure want to delete?')" type="button" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>


    </div>
  </div><!-- .animated -->
</div><!-- .content -->



<script src="{{asset('admin/assets/js/lib/data-table/datatables.min.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/jszip.min.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/pdfmake.min.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/vfs_fonts.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/buttons.print.min.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/datatables-init.js')}}"></script>


<script type="text/javascript">
  $(document).ready(function() {
    $('#noman').DataTable();
  });
</script>
@endsection