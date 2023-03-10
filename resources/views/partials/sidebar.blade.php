@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

             <img src="/img/banner.jpg" class="img-responsive img-fluid" alt="Image">

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ route('admin.home') }}">
                    <i class="fa fa-home"></i>
                    <span class="title">@lang('gw.home')</span>
                </a>
            </li>
            @can('paper_access')
            <li>
                <a href="{{ route('admin.proceedings.papers') }}">
                    <i class="fa fa-book"></i>
                    <span>@lang('Πρακτικά Εισηγήσεων')</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.proceedings.labs') }}">
                    <i class="fa fa-flask"></i>
                    <span>@lang('Πρακτικά Εργαστηρίων')</span>
                </a>
            </li>            
            @endcan
            <li>
                <a href="{{url('admin/calendar')}}">
                  <i class="fa fa-calendar"></i>
                  <span class="title">
                    Calendar
                  </span>
                </a>
            </li>
        
            @can('session_access')
            <li>
                <a href="{{ route('admin.sessions.index') }}">
                    <i class="fa fa-clock-o"></i>
                    <span>@lang('quickadmin.sessions.title')</span>
                </a>
            </li>@endcan
            
            @can('room_access')
            <li>
                <a href="{{ route('admin.rooms.index') }}">
                    <i class="fa fa-map-marker"></i>
                    <span>@lang('quickadmin.rooms.title')</span>
                </a>
            </li>@endcan
            
            @can('paper_access')
            <li>
                <a href="{{ route('admin.papers.index') }}">
                    <i class="fa fa-newspaper-o"></i>
                    <span>@lang('quickadmin.papers.title')</span>
                </a>
            </li>
            @endcan
            
            @can('fullpaper_access')
            <li>
                <a href="{{ route('admin.fullpapers.index') }}">
                    <i class="fa fa-paperclip"></i>
                    <span>@lang('quickadmin.fullpaper.title')</span>
                </a>
            </li>@endcan
            
            @can('art_access')
            <li>
                <a href="{{ route('admin.arts.index') }}">
                    <i class="fa fa-paint-brush"></i>
                    <span>@lang('quickadmin.arts.title')</span>
                </a>
            </li>@endcan
            
            @can('user_access')
            <li>
                <a href="{{ route('admin.users.index') }}">
                    <i class="fa fa-graduation-cap"></i>
                    <span>@lang('quickadmin.users.title')</span>
                </a>
            </li>@endcan
            
            @can('review_access')
            <li>
                <a href="{{ route('admin.reviews.index') }}">
                    <i class="fa fa-gavel"></i>
                    <span>@lang('quickadmin.reviews.title')</span>
                </a>
            </li>@endcan
            
            @can('content_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-book"></i>
                    <span>@lang('quickadmin.content-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @can('content_page_access')
                    <li>
                        <a href="{{ route('admin.content_pages.index') }}">
                            <i class="fa fa-file-o"></i>
                            <span>@lang('quickadmin.content-pages.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('content_category_access')
                    <li>
                        <a href="{{ route('admin.content_categories.index') }}">
                            <i class="fa fa-folder"></i>
                            <span>@lang('quickadmin.content-categories.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('content_tag_access')
                    <li>
                        <a href="{{ route('admin.content_tags.index') }}">
                            <i class="fa fa-tags"></i>
                            <span>@lang('quickadmin.content-tags.title')</span>
                        </a>
                    </li>@endcan
                    
                </ul>
            </li>@endcan
            
            @can('management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gear"></i>
                    <span>@lang('quickadmin.management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @can('lunch_access')
                    <li>
                        <a href="{{ route('admin.lunches.index') }}">
                            <i class="fa fa-spoon"></i>
                            <span>@lang('quickadmin.lunch.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('availability_access')
                    <li>
                        <a href="{{ route('admin.availabilities.index') }}">
                            <i class="fa fa-calendar-times-o"></i>
                            <span>@lang('quickadmin.availability.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('color_access')
                    <li>
                        <a href="{{ route('admin.colors.index') }}">
                            <i class="fa fa-adjust"></i>
                            <span>@lang('quickadmin.colors.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('message_access')
                    <li>
                        <a href="{{ route('admin.messages.index') }}">
                            <i class="fa fa-envelope-o"></i>
                            <span>@lang('quickadmin.messages.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('role_access')
                    <li>
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span>@lang('quickadmin.roles.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('activitylog_access')
                    <li>
                        <a href="{{ route('admin.activitylogs.index') }}">
                            <i class="fa fa-space-shuttle"></i>
                            <span>@lang('quickadmin.activitylog.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('loguseragent_access')
                    <li>
                        <a href="{{ route('admin.loguseragents.index') }}">
                            <i class="fa fa-user-secret"></i>
                            <span>@lang('quickadmin.loguseragent.title')</span>
                        </a>
                    </li>@endcan
                    
                </ul>
            </li>@endcan
            

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-line-chart"></i>
                    <span class="title">Generated Reports</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                   <li class="{{ $request->is('/reports/fullpaper-uploads') }}">
                        <a href="{{ url('/admin/reports/fullpaper-uploads') }}">
                            <i class="fa fa-line-chart"></i>
                            <span class="title">fullpaper uploads</span>
                        </a>
                    </li>   <li class="{{ $request->is('/reports/user-registrations') }}">
                        <a href="{{ url('/admin/reports/user-registrations') }}">
                            <i class="fa fa-line-chart"></i>
                            <span class="title">User registrations</span>
                        </a>
                    </li>
                </ul>
            </li>

            



            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">@lang('quickadmin.qa_change_password')</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('quickadmin.qa_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>

