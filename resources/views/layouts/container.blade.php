@include('layouts.header')
@include('layouts.navbar')
@include('layouts.sidebar')
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                @yield('content')
            </div>
        </div>
    </div>
    @include('layouts.footer')
