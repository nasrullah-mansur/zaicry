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
                    </div>
                    <div class="card-body">

                        <table id="noman" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Section Name</th>
                                    <th>Show Hide</th>

                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>slider</td>
                                    <td>
                                        <form action="{{route('showhides.slider')}}" method="POST">
                                            @csrf
                                            @if($slider->show_hide == 0)
                                            <button class="btn btn-danger" type="submit">Show</button>
                                            @else
                                            <button class="btn btn-info" type="submit">Hide</button>
                                            @endif
                                        </form>
                                    </td>

                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>service</td>
                                    <td>
                                        <form action="{{route('showhides.service')}}" method="POST">
                                            @csrf
                                            @if($service->show_hide == 0)
                                            <button class="btn btn-danger" type="submit">Show</button>
                                            @else
                                            <button class="btn btn-info" type="submit">Hide</button>
                                            @endif
                                        </form>
                                    </td>

                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>Choose Us</td>
                                    <td>
                                        <form action="{{route('showhides.chooseus')}}" method="POST">
                                            @csrf
                                            @if($chooseus->show_hide == 0)
                                            <button class="btn btn-danger" type="submit">Show</button>
                                            @else
                                            <button class="btn btn-info" type="submit">Hide</button>
                                            @endif
                                        </form>
                                    </td>

                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td>Progress Area</td>
                                    <td>
                                        <form action="{{route('showhides.progressarea')}}" method="POST">
                                            @csrf
                                            @if($progressarea->show_hide == 0)
                                            <button class="btn btn-danger" type="submit">Show</button>
                                            @else
                                            <button class="btn btn-info" type="submit">Hide</button>
                                            @endif
                                        </form>
                                    </td>

                                </tr>

                                <tr>
                                    <td>5</td>
                                    <td>Case Study Area</td>
                                    <td>
                                        <form action="{{route('showhides.casestudy')}}" method="POST">
                                            @csrf
                                            @if($casestudy->show_hide == 0)
                                            <button class="btn btn-danger" type="submit">Show</button>
                                            @else
                                            <button class="btn btn-info" type="submit">Hide</button>
                                            @endif
                                        </form>
                                    </td>

                                </tr>

                                <tr>
                                    <td>6</td>
                                    <td>Pricing Area</td>
                                    <td>
                                        <form action="{{route('showhides.pricingarea')}}" method="POST">
                                            @csrf
                                            @if($pricingarea->show_hide == 0)
                                            <button class="btn btn-danger" type="submit">Show</button>
                                            @else
                                            <button class="btn btn-info" type="submit">Hide</button>
                                            @endif
                                        </form>
                                    </td>

                                </tr>

                                <tr>
                                    <td>8</td>
                                    <td>Blog Area</td>
                                    <td>
                                        <form action="{{route('showhides.blog')}}" method="POST">
                                            @csrf
                                            @if($blog->show_hide == 0)
                                            <button class="btn btn-danger" type="submit">Show</button>
                                            @else
                                            <button class="btn btn-info" type="submit">Hide</button>
                                            @endif
                                        </form>
                                    </td>

                                </tr>

                                <tr>
                                    <td>9</td>
                                    <td>Testimonial Area</td>
                                    <td>
                                        <form action="{{route('showhides.testimonial')}}" method="POST">
                                            @csrf
                                            @if($testimonial->show_hide == 0)
                                            <button class="btn btn-danger" type="submit">Show</button>
                                            @else
                                            <button class="btn btn-info" type="submit">Hide</button>
                                            @endif
                                        </form>
                                    </td>

                                </tr>

                                <tr>
                                    <td>10</td>
                                    <td>Subscriber Area</td>
                                    <td>
                                        <form action="{{route('showhides.subscriber')}}" method="POST">
                                            @csrf
                                            @if($subscriber->show_hide == 0)
                                            <button class="btn btn-danger" type="submit">Show</button>
                                            @else
                                            <button class="btn btn-info" type="submit">Hide</button>
                                            @endif
                                        </form>
                                    </td>

                                </tr>

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