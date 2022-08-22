@include('admin.layout.header')
<!-- sweet -->

<body>


  <!-- Left Panel -->

  @include('admin.layout.menu')

  <!-- Left Panel -->

  <!-- Right Panel -->

  <div id="right-panel" class="right-panel">
    @include('admin.layout.top')



    <div class="breadcrumbs">
      <div class="col-sm-4">
        <div class="page-header float-left">
          <div class="page-title">
            <h1>Dashboard</h1>
          </div>
        </div>
      </div>
      <div class="col-sm-8">
        <div class="page-header float-right">
          <div class="page-title">
            <ol class="breadcrumb text-right">
              <li><a>Dashboard</a></li>
              <li><a>Table</a></li>
              <li class="active">{{ Request::segment(2) }}</li>
            </ol>
          </div>
        </div>
      </div>
    </div>



    @yield('content')

  </div><!-- /#right-panel -->

  <!-- Right Panel -->

  @include('admin.layout.footer')
  @include('sweetalert::alert')

  @yield('script')
</body>

</html>