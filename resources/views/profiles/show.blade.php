@extends('layouts.app')

@section('template_title')
	{{ $user->name }}'s Profile
@endsection

@section('template_fastload_css')

	#map-canvas{
		min-height: 300px;
		height: 100%;
		width: 100%;
	}

@endsection

@section('content')
<div class="container">
    <div class="row my-2">
        <div class="col-lg-8 order-lg-2">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#messages" data-toggle="tab" class="nav-link">Messages</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#details" data-toggle="tab" class="nav-link">Details</a>
                </li>
            </ul>
            <div class="tab-content py-4">
                <div class="tab-pane active" id="profile">
                    <h5 class="mb-3">
                        {{ $user->first_name . " " . $user->last_name }}
                    </h5>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>About</h6>
                            <p>
                                Web Designer, UI/UX Engineer
                            </p>
                            <h6>Hobbies</h6>
                            <p>
                                Indie music, skiing and hiking. I love the great outdoors.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h6>Recent badges</h6>
                            <a href="#" class="badge badge-dark badge-pill">html5</a>
                            <a href="#" class="badge badge-dark badge-pill">react</a>
                            <a href="#" class="badge badge-dark badge-pill">codeply</a>
                            <a href="#" class="badge badge-dark badge-pill">angularjs</a>
                            <a href="#" class="badge badge-dark badge-pill">css3</a>
                            <a href="#" class="badge badge-dark badge-pill">jquery</a>
                            <a href="#" class="badge badge-dark badge-pill">bootstrap</a>
                            <a href="#" class="badge badge-dark badge-pill">responsive-design</a>
                            <hr>
                            <span class="badge badge-primary">
                                <i class="fa fa-user"></i> 900 Followers</span>
                            <span class="badge badge-success">
                                <i class="fa fa-cog"></i> 43 Forks</span>
                            <span class="badge badge-danger">
                                <i class="fa fa-eye"></i> 245 Views</span>
                        </div>
                        <div class="col-md-12">
                            <h5 class="mt-2">
                                <span class="fa fa-clock-o ion-clock float-right"></span> Recent Activity</h5>
                            <table class="table table-sm table-hover table-striped">
                                <tbody>
                                    <tr>
                                        <td>
                                            <strong>Abby</strong> joined ACME Project Team in
                                            <strong>`Collaboration`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Gary</strong> deleted My Board1 in
                                            <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Kensington</strong> deleted MyBoard3 in
                                            <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>John</strong> deleted My Board1 in
                                            <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Skell</strong> deleted his post Look at Why this is.. in
                                            <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--/row-->
                </div>
                <div class="tab-pane" id="messages">
                    <div class="alert alert-info alert-dismissable">
                        <a class="panel-close close" data-dismiss="alert">×</a> This is an
                        <strong>.alert</strong>. Use this to show important messages to the user.
                    </div>
                    <table class="table table-hover table-striped">
                        <tbody>
                            <tr>
                                <td>
                                    <span class="float-right font-weight-bold">3 hrs ago</span> Here is your a link to the latest summary report from the..
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="float-right font-weight-bold">Yesterday</span> There has been a request on your account since that was..
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="float-right font-weight-bold">9/10</span> Porttitor vitae ultrices quis, dapibus id dolor. Morbi venenatis lacinia
                                    rhoncus.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="float-right font-weight-bold">9/4</span> Vestibulum tincidunt ullamcorper eros eget luctus.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="float-right font-weight-bold">9/4</span> Maxamillion ais the fix for tibulum tincidunt ullamcorper eros.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane" id="details">
                    <div class="card">
                        <div class=" col-md-9 col-lg-9 ">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>{{ trans('profile.showProfileUsername') }}</td>
                                        <td>{{ $user->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('profile.showProfileFirstName') }}</td>
                                        <td>{{ $user->first_name }}</td>
                                    </tr>
                                    @if ($user->last_name)
                                    <tr>
                                        <td>{{ trans('profile.showProfileLastName') }}</td>
                                        <td>{{ $user->last_name }}</td>
                                    </tr>
                                    @endif
                                    <tr>
                                        <td>{{ trans('profile.showProfileEmail') }}</td>
                                        <td>{{ $user->email }}</td>
                                    </tr>

                                    @if ($user->profile)
                                        @if ($user->profile->theme_id)
                                        <tr>
                                            <td>{{ trans('profile.showProfileTheme') }}</td>
                                            <td>{{ $currentTheme->name }}</td>
                                        </tr>
                                        @endif
                                        
                                        @if ($user->profile->location)
                                        <tr>
                                            <td>{{ trans('profile.showProfileLocation') }}</td>
                                            <td>{{ $user->profile->location }} <br />
                                                @if(config('settings.googleMapsAPIStatus'))
                                                    Latitude: <span id="latitude"></span> / Longitude: <span id="longitude"></span> <br />
                                                    <div id="map-canvas"></div>
                                                @endif
                                            </td>
                                        </tr>
                                        @endif

                                        @if ($user->profile->bio)
                                        <tr>
                                            <td>{{ trans('profile.showProfileBio') }}</td>
                                            <td>{{ $user->profile->bio }}</td>
                                        </tr>
                                        @endif

                                        @if ($user->profile->twitter_username)
                                        <tr>
                                            <td>{{ trans('profile.showProfileTwitterUsername') }}</td>
                                            <td>{!! HTML::link('https://twitter.com/'.$user->profile->twitter_username, $user->profile->twitter_username, array('class' => 'twitter-link', 'target' => '_blank')) !!}</td>
                                        </tr>
                                        @endif

                                        @if ($user->profile->github_username)
                                        <tr>
                                            <td>{{ trans('profile.showProfileGitHubUsername') }}</td>
                                            <td>{!! HTML::link('https://github.com/'.$user->profile->github_username, $user->profile->github_username, array('class' => 'github-link', 'target' => '_blank')) !!}</td>
                                        </tr>
                                        @endif
                                    @endif

                                </tbody>
                            </table>

                            @if ($user->profile)
                                @if (Auth::user()->id == $user->id)

                                    {!! HTML::icon_link(URL::to('/profile/'.Auth::user()->name.'/edit'), 'fa fa-fw fa-cog', trans('titles.editProfile'), array('class' => 'btn btn-small btn-info btn-block')) !!}

                                @endif
                            @else

                                <p>{{ trans('profile.noProfileYet') }}</p>
                                {!! HTML::icon_link(URL::to('/profile/'.Auth::user()->name.'/edit'), 'fa fa-fw fa-plus ', trans('titles.createProfile'), array('class' => 'btn btn-small btn-info btn-block')) !!}

                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 order-lg-1 text-center">
            <img src="@if ($user->profile->avatar_status == 1) {{ $user->profile->avatar }} 
                          @else {{ Gravatar::get($user->email) }} 
                          @endif" alt="{{ $user->name }}" class="mx-auto img-fluid img-circle d-block" alt="avatar">
        </div>
    </div>
</div>
@endsection

@section('footer_scripts')

	@if(config('settings.googleMapsAPIStatus'))
		@include('scripts.google-maps-geocode-and-map')
	@endif

@endsection
