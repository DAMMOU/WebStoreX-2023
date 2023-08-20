<nav class = "navbar navbar-expand-lg navbar-light bg-white py-4 fixed-top">
    <div class = "container">
        <a class = "navbar-brand d-flex justify-content-between align-items-center order-lg-0" href = "{{url('/')}}">
            <img src = "{{asset('images/shopping-bag-icon.png')}}" alt = "site icon">
            <span class = "text-uppercase fw-lighter ms-2">WebStoreX</span>
        </a>
        <div class = "order-lg-2 nav-btns">
            <button type = "button" class = "btn position-relative">
                <i class = "fa fa-shopping-cart"></i>
                <span class = "position-absolute top-0 start-100 translate-middle badge bg-primary">5</span>
            </button>
            <button type = "button" class = "btn position-relative">
                <i class = "fa fa-heart"></i>
                <span class = "position-absolute top-0 start-100 translate-middle badge bg-primary">2</span>
            </button>
            <button type = "button" class = "btn position-relative">
                <i class = "fa fa-search"></i>
            </button>      
        </div>
        <div class="dropdown header-locale" id="frontend-local">
            <a class="nav-link icon" data-bs-toggle="dropdown">
            	<span class="fs-17 fa fa-globe pr-2"></span>
                <span class="fs-12" style="vertical-align:middle">
                    {{ Config::get('locale')[App::getLocale()]['code']}}
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow animated">
            	<div class="local-menu">
            		@foreach (Config::get('locale') as $lang => $language)
            			@if ($lang != App::getLocale())
            				<a href="{{ route('locale', $lang) }}" class="dropdown-item d-flex">
            					<div class="text-info"><i class="flag flag-{{ $language['flag'] }} mr-3"></i></div>
            					<div>
            						<span class="font-weight-normal fs-12">{{ $language['display'] }}</span>
            					</div>
            				</a>                                        
            			@endif
            		@endforeach
            	</div>
            </div>
        </div>
        <button class = "navbar-toggler border-0" type = "button" data-bs-toggle = "collapse" data-bs-target = "#navMenu">
            <span class = "navbar-toggler-icon"></span>
        </button>
        <div class = "collapse navbar-collapse order-lg-1" id = "navMenu">
            <ul class = "navbar-nav mx-auto text-center">
                <li class = "nav-item px-2 py-2">
                    <a class = "nav-link text-uppercase text-dark" href = "{{url('/')}}">{{__('Home')}}</a>
                </li>
                <li class = "nav-item px-2 py-2">
                    <a class = "nav-link text-uppercase text-dark" href = "#collection">{{__('Collection')}}</a>
                </li>
                <li class = "nav-item px-2 py-2">
                    <a class = "nav-link text-uppercase text-dark" href = "#special">{{__('Specials')}}</a>
                </li>
                <li class = "nav-item px-2 py-2">
                    <a class = "nav-link text-uppercase text-dark" href = "#blogs">{{__('Blogs')}}</a>
                </li>
                <li class = "nav-item px-2 py-2">
                    <a class = "nav-link text-uppercase text-dark" href = "#about">{{__('About us')}} </a>
                </li>
                <li class = "nav-item px-2 py-2 border-0">
                    <a class = "nav-link text-uppercase text-dark" href = "#popular">{{__('Popular')}}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>