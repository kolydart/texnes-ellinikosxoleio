<nav class="navbar navbar-expand-sm navbar-light bg-light" id="gw-nav">
        <div class="container">
            {{-- <a class="navbar-brand" href="/"></a> --}}

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav">

                    <li class="nav-item {{ Route::currentRouteName() == 'frontend.home' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('frontend.home') }}">
                            <i class="fa fa-home"></i> @lang('gw.home')
                        </a>
                    </li>

                    <li class="nav-item {{ Route::currentRouteName() == 'frontend.calendar' ? 'active' : '' }}">
                        <a class="nav-link" href="{{route('frontend.calendar')}}">
                          <i class="far fa-calendar-alt"></i>
                          <span class="title"> @lang('Calendar') </span>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" >
                            <i class="fab fa-searchengin"></i> @lang('Αναζήτηση')
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('frontend.papers.index')}}">
                              <i class="fa fa-newspaper"></i>
                              <span class="title"> @lang('Εισηγήσεις & Εργαστήρια') </span>
                            </a>

                            <a class="dropdown-item" href="{{ route('frontend.sessions.index') }}">
                                <i class="far fa-clock"></i>
                                <span>@lang('quickadmin.sessions.title')</span>
                            </a>

                            <a class="dropdown-item" href="{{ route('frontend.rooms.index') }}">
                                <i class="fa fa-map-marker-alt"></i>
                                <span>@lang('quickadmin.rooms.title')</span>
                            </a>


                            <a class="dropdown-item" href="{{ route('frontend.arts.index') }}">
                                <i class="fa fa-paint-brush"></i>
                                <span>@lang('quickadmin.arts.title')</span>
                            </a>

                            {{-- <a class="dropdown-item" href="{{route('frontend.papers.index',['type'=>'Εργαστήριο%'])}}">
                              <i class="fa fa-newspaper"></i>
                              <span class="title"> @lang('Εργαστήρια μόνο') </span>
                            </a> --}}

                        </div>
                    </li>

                    @if (App\Fullpaper::find(13) && App::environment() == 'production')
                        <li class="nav-item">
                            <a class="nav-link" href="{{"/storage/".App\Fullpaper::find(13)->getMedia('finaltext')->first()->id."/".rawurlencode(App\Fullpaper::find(13)->getMedia('finaltext')->first()->file_name)}}">
                              <i class="far fa-file-alt"></i> 
                              <span class="title"> @lang('Έντυπο Πρόγραμμα') </span>
                            </a>
                        </li>
                    @endif

                    @if (App::environment() == 'production')
                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" >
                            <i class="fas fa-info-circle"></i> @lang('Πληροφορίες')
                        </a>
                        <div class="dropdown-menu">

                            <a class="dropdown-item" href="/storage/607/%CE%A0%CE%BF%CF%81%CE%B9%CC%81%CF%83%CE%BC%CE%B1%CF%84%CE%B1%20%CE%A3%CF%85%CE%BD%CE%B5%CE%B4%CF%81%CE%B9%CC%81%CE%BF%CF%85%20%CE%B3%CE%B9%CE%B1%20%CF%84%CE%B9%CF%82%20%CE%A4%CE%B5%CC%81%CF%87%CE%BD%CE%B5%CF%82%20%CF%83%CF%84%CE%BF%20%CE%95%CE%BB%CE%BB%CE%B7%CE%BD%CE%B9%CE%BA%CE%BF%CC%81%20%CE%A3%CF%87%CE%BF%CE%BB%CE%B5%CE%B9%CC%81%CE%BF.pdf">
                                <i class="fas fa-file-contract"></i> Πορίσματα του Συνεδρίου
                            </a>

                            <a class="dropdown-item" href="{{ route('frontend.pages.show','faq') }}" target="_blank">
                                <i class="fas fa-feather-alt"></i> {{App\ContentPage::where('alias','faq')->first()->title ?? ''}}
                            </a>

                            <a class="dropdown-item" href="{{ route('frontend.pages.show','map') }}">
                                <i class="fa fa-map"></i> {{App\ContentPage::where('alias','map')->first()->title ?? ''}}
                            </a>

                            <a class="dropdown-item" href="{{ route('frontend.pages.show','wifi') }}">
                                <i class="fas fa-wifi"></i> {{App\ContentPage::where('alias','wifi')->first()->title ?? ''}}
                            </a>

                            <a class="dropdown-item" href="{{ route('frontend.pages.show','faq-2') }}">
                                <i class="far fa-question-circle"></i> {{App\ContentPage::where('alias','faq-2')->first()->title ?? ''}}
                            </a>

                            <a class="dropdown-item" href="{{ route('frontend.pages.show','sponsors') }}">
                                <i class="far fa-flag"></i> {{App\ContentPage::where('alias','sponsors')->first()->title ?? ''}}
                            </a>
                            
                            <a class="dropdown-item" href="{{ route('frontend.pages.show','committees') }}">
                                <i class="fas fa-users"></i> {{App\ContentPage::where('alias','committees')->first()->title ?? ''}}
                            </a>

                            @can('backend_access')
                                
                            <a class="dropdown-item text-warning" href="{{ route('frontend.pages.show','keynote') }}">
                                <i class="fas fa-microphone"></i> {{App\ContentPage::where('alias','keynote')->first()->title ?? ''}}
                            </a>

                            <a class="dropdown-item text-warning" href="{{ route('frontend.pages.show','organizers') }}">
                                <i class="fas fa-university"></i> {{App\ContentPage::where('alias','organizers')->first()->title ?? ''}}
                            </a>

                            @endcan

                            <a class="dropdown-item" href="{{ route('frontend.pages.show','trailer') }}">
                                <i class="fas fa-film"></i> {{App\ContentPage::where('alias','trailer')->first()->title ?? ''}}
                            </a>

                            <a class="dropdown-item" href="{{ route('frontend.contact') }}">
                                <i class="fa fa-envelope"></i> @lang('Επικοινωνία')
                            </a>

                            <a class="dropdown-item" href="{{ route('frontend.pages.show','call-for-papers') }}">
                                <i class="fas fa-bullhorn"></i> {{App\ContentPage::where('alias','call-for-papers')->first()->title ?? ''}}
                            </a>

                            <a class="dropdown-item" href="{{ route('frontend.pages.show','credits') }}">
                                <i class="fas fa-wrench"></i> {{App\ContentPage::where('alias','credits')->first()->title ?? ''}}
                            </a> 

                        </div>
                        
                    </li>
                    @endif




                </ul>

                <ul class="navbar-nav ml-auto">

                    @if (Auth::check())
                        <li class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" >
                                <i class="fa fa-user"></i> {{Auth::user()->name}}
                            </a>
                            <div class="dropdown-menu">

                                @can('backend_access')
                                <a href="{{route('admin.home')}}" class="dropdown-item">
                                    <i class="fa fa-tachometer-alt"></i> @lang('Διαχείριση backend')
                                </a>@endcan

                                <a class="dropdown-item" href="{{ route('frontend.attend.index') }}">
                                    <i class="fa fa-newspaper"></i>
                                    <span>@lang('Τα Εργαστήριά μου')</span>
                                </a>

                                <a href="{{route('auth.change_password')}}" class="dropdown-item">
                                    <i class="fa fa-key"></i> @lang('quickadmin.qa_change_password')
                                </a>

                                <a href="#" onclick="$('#logout').submit();" class="dropdown-item">
                                    <i class="fa fa-arrow-left"></i> @lang('quickadmin.qa_logout')
                                </a>

                            </div>
                        </li>
                    @else

                        {{-- <li class="nav-item {{ Route::currentRouteName() == 'register' ? 'active' : '' }} ">
                            <a class="nav-link" href="{{route('auth.register')}}"><i class="fab fa-get-pocket"></i> @lang('Εγγραφή ακροατών')</a>
                        </li> --}}

                        <li class="nav-item">
                            <a href="{{route('login')}}" class="nav-link">
                                <i class="fa fa-sign-in-alt"></i> @lang('Login')
                            </a>
                        </li>
                    @endif
                </ul>

            </div>
        </div>
    </nav>
