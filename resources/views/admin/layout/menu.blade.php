<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{route('home')}}"><img src="{{isset($site->photo) ? asset('storage/site/' . $site->photo->file) : 'http://placehold.it/50x50'}}" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="{{asset('storage/site/' . $site->photo->file)}}" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{route('admin')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <h3 class="menu-title">Dashboard Menu Item</h3><!-- /.menu-title -->

                <li class="menu-item-has-children dropdown  {{Route::is('slider.create') || Route::is('service.create') || Route::is('admin.servicebox') || Route::is('admin.chooseus') || Route::is('workprocess.create')|| Route::is('latestproject.create') || Route::is('admin.latestprojectslider') || Route::is('admin.pricingarea') || Route::is('admin.pricingtable') || Route::is('testimonial.create') || Route::is('admin.testimonialslider') || Route::is('admin.workprocessproject') ? 'open show active' : ''}}">

                    <a href=" #" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="menu-icon fa fa-laptop"></i>Home Page</a>

                    <ul class="sub-menu children dropdown-menu {{Route::is('slider.create') || Route::is('service.create') || Route::is('admin.servicebox') || Route::is('admin.chooseus') || Route::is('workprocess.create')|| Route::is('latestproject.create') || Route::is('admin.latestprojectslider') || Route::is('admin.pricingarea') || Route::is('admin.pricingtable') || Route::is('testimonial.create') || Route::is('admin.testimonialslider') || Route::is('admin.workprocessproject') ? 'show' : ''}}">
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('slider.create') ? 'active' : ''}}" href="{{route('slider.create')}}">Banner</a></li>
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('service.create') ? 'active' : ''}}" href="{{route('service.create')}}">Service</a></li>
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('admin.servicebox') ? 'active' : ''}}" href="{{route('admin.servicebox')}}">Service Box</a></li>
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('admin.chooseus') ? 'active' : ''}}" href="{{route('admin.chooseus')}}">Chooseus</a></li>
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('workprocess.create') ? 'active' : ''}}" href="{{route('workprocess.create')}}">Workprocess</a></li>
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('admin.workprocessproject') ? 'active' : ''}}" href="{{route('admin.workprocessproject')}}">Workprocess Projects</a></li>
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('latestproject.create') ? 'active' : ''}}" href="{{route('latestproject.create')}}">Latestproject</a></li>
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('admin.latestprojectslider') ? 'active' : ''}}" href="{{route('admin.latestprojectslider')}}">Latestproject slider</a></li>
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('admin.pricingarea') ? 'active' : ''}}" href="{{route('admin.pricingarea')}}">Pricing area</a></li>
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('admin.pricingtable') ? 'active' : ''}}" href="{{route('admin.pricingtable')}}">Pricing table</a></li>
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('testimonial.create') ? 'active' : ''}}" href="{{route('testimonial.create')}}">Testimonial</a></li>
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('admin.testimonialslider') ? 'active' : ''}}" href="{{route('admin.testimonialslider')}}">Testimonial Slider</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children dropdown  {{Route::is('aboutuspage.create') || Route::is('contact.create') || Route::is('servicepage.create') || Route::is('termspage.create') || Route::is('faq.create') || Route::is('faqtab.index') || Route::is('commingsoon.create') || Route::is('team.create') || Route::is('portfolio.index') || Route::is('portfoliocategories.index') || Route::is('teammember.index') || Route::is('servicepage.create') ? 'open show' : ''}}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="menu-icon fa fa-laptop"></i>Other Pages </a>
                    <ul class="sub-menu children dropdown-menu {{Route::is('aboutuspage.create') || Route::is('contact.create') || Route::is('servicepage.create') || Route::is('termspage.create') || Route::is('faq.create') || Route::is('faqtab.index') || Route::is('commingsoon.create') || Route::is('team.create') || Route::is('portfolio.index') || Route::is('portfoliocategories.index') || Route::is('teammember.index') ? 'show' : ''}}">
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('aboutuspage.create') ? 'active' : ''}}" href="{{route('aboutuspage.create')}}">About Us page</a></li>
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('servicepage.create') ? 'active' : ''}}" href="{{route('servicepage.create')}}">Service page</a></li>
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('contact.create') ? 'active' : ''}}" href="{{route('contact.create')}}">Contact page</a></li>
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('termspage.create') ? 'active' : ''}}" href="{{route('termspage.create')}}">Terms page</a></li>
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('faq.create') ? 'active' : ''}}" href="{{route('faq.create')}}">Faq page</a></li>
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('faqtab.index') ? 'active' : ''}}" href="{{route('faqtab.index')}}">Faqtab page</a></li>
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('commingsoon.create') ? 'active' : ''}}" href="{{route('commingsoon.create')}}">Coming Soon page</a></li>
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('team.create') ? 'active' : ''}}" href="{{route('team.create')}}">Team page</a></li>
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('teammember.index') ? 'active' : ''}}" href="{{route('teammember.index')}}">Add Teammember </a></li>
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('portfolio.index') ? 'active' : ''}}" href="{{route('portfolio.index')}}">Portfolio</a></li>
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('portfoliocategories.index') ? 'active' : ''}}" href="{{route('portfoliocategories.index')}}">Portfolio Categories</a></li>
                    </ul>
                </li>

                @if(auth()->user()->role == 'admin')
                <li class="menu-item-has-children dropdown  {{Route::is('user.index') || Route::is('user.create') ? 'open show' : ''}}">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="menu-icon fa fa-laptop"></i>User </a>

                    <ul class="sub-menu children dropdown-menu {{Route::is('user.index') || Route::is('user.create') ? 'show' : ''}}">
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('user.index') ? 'active' : ''}}" href="{{route('user.index')}}">All User</a></li>
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('user.create') ? 'active' : ''}}" href="{{route('user.create')}}">Add User</a></li>

                    </ul>
                </li>
                @endif

                @if(auth()->user()->role == 'admin')
                <li class="menu-item-has-children dropdown  {{Route::is('adminuser.index') || Route::is('adminuser.create') ? 'open show' : ''}}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="menu-icon fa fa-laptop"></i>Admin Manager </a>
                    <ul class="sub-menu children dropdown-menu {{Route::is('adminuser.index') || Route::is('adminuser.create') ? 'show' : ''}}">
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('adminuser.index') ? 'active' : ''}}" href="{{route('adminuser.index')}}">All Admin</a></li>
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('adminuser.create') ? 'active' : ''}}" href="{{route('adminuser.create')}}">Add New Admin</a></li>

                    </ul>
                </li>
                @endif

                <li class="menu-item-has-children dropdown  {{Route::is('posts.index') || Route::is('categories.index') || Route::is('tags.index') || Route::is('singlepagesettings.create') || Route::is('blogpagesetting.create') ? 'open show' : ''}}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="menu-icon fa fa-laptop"></i>Blog</a>
                    <ul class="sub-menu children dropdown-menu {{Route::is('posts.index') || Route::is('categories.index') || Route::is('tags.index') || Route::is('singlepagesettings.create') || Route::is('blogpagesetting.create') ? 'show' : ''}}">
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('posts.index') ? 'active' : ''}}" href="{{route('posts.index')}}">Posts</a></li>
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('categories.index') ? 'active' : ''}}" href="{{route('categories.index')}}">Categories</a></li>
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('tags.index') ? 'active' : ''}}" href="{{route('tags.index')}}">Tags</a></li>
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('singlepagesettings.create') ? 'active' : ''}}" href="{{route('singlepagesettings.create')}}">Singel Blog Page Settings</a></li>
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('blogpagesetting.create') ? 'active' : ''}}" href="{{route('blogpagesetting.create')}}">Blog Single Settings</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children dropdown  {{Route::is('pages.index') || Route::is('pages.create') ? 'open show' : ''}}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="menu-icon fa fa-laptop"></i>Pages</a>
                    <ul class="sub-menu children dropdown-menu {{Route::is('pages.index') || Route::is('pages.create') ? 'show' : ''}}">
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('pages.index') ? 'active' : ''}}" href="{{route('pages.index')}}">All Pages</a></li>
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('pages.create') ? 'active' : ''}}" href="{{route('pages.create')}}">Add Page</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children dropdown {{Route::is('subscribers.index') || Route::is('subscribers.create') || Route::is('subscribers.mail') ? 'open show' : ''}}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="menu-icon fa fa-laptop"></i>Newsletter</a>
                    <ul class="sub-menu children dropdown-menu {{Route::is('subscribers.index') || Route::is('subscribers.create') || Route::is('subscribers.mail') ? 'show' : ''}}">
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('subscribers.index') ? 'active' : ''}}" href="{{route('subscribers.index')}}">All Subscribers</a></li>
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('subscribers.create') ? 'active' : ''}}" href="{{route('subscribers.create')}}">Add Subscribers</a></li>
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('subscribers.mail') ? 'active' : ''}}" href="{{route('subscribers.mail')}}">Send Mail to All</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children dropdown  {{Route::is('sites.create') || Route::is('seos.create') || Route::is('css.create') || Route::is('preloader.create') ? 'open show' : ''}}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="menu-icon fa fa-laptop"></i>General Setting</a>
                    <ul class="sub-menu children dropdown-menu {{Route::is('sites.create') || Route::is('seos.create') || Route::is('css.create') || Route::is('preloader.create') ? 'show' : ''}}">
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('sites.create') ? 'active' : ''}}" href="{{route('sites.create')}}">Site Setting</a></li>
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('seos.create') ? 'active' : ''}}" href="{{route('seos.create')}}">Seo Setting</a></li>
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('css.create') ? 'active' : ''}}" href="{{route('css.create')}}">Css Setting</a></li>
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('preloader.create') ? 'active' : ''}}" href="{{route('preloader.create')}}">Preloader Setting</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children dropdown  {{Route::is('jobs.index') || Route::is('jobs.create') || Route::is('jobsfacility.create') || Route::is('jobspage.create') || Route::is('jobsfacility.index') ? 'open show' : ''}}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="menu-icon fa fa-laptop"></i>Career Setting</a>
                    <ul class="sub-menu children dropdown-menu {{Route::is('jobs.index') || Route::is('jobs.create') || Route::is('jobsfacility.create') || Route::is('jobspage.create') || Route::is('jobsfacility.index') ? 'show' : ''}}">
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('jobs.index') ? 'active' : ''}}" href="{{route('jobs.index')}}">Show Job</a></li>
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('jobs.create') ? 'active' : ''}}" href="{{route('jobs.create')}}">Add new Job</a></li>
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('jobsfacility.index') ? 'active' : ''}}" href="{{route('jobsfacility.index')}}">Show Job Facilities</a></li>
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('jobspage.create') ? 'active' : ''}}" href="{{route('jobspage.create')}}">Job Single Page setting</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children dropdown  {{Route::is('menu.index') ? 'open show' : ''}}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="menu-icon fa fa-laptop"></i>Menu</a>
                    <ul class="sub-menu children dropdown-menu {{Route::is('menu.index') ? 'show' : ''}}">
                        <li><i class="fa fa-chevron-right"></i><a class="{{Route::is('menu.index') ? 'active' : ''}}" href="{{route('menu.index')}}">Menu</a></li>
                    </ul>
                </li>



            </ul>
        </div>
    </nav>
</aside><!-- /#left-panel -->