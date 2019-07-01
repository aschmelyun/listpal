<!DOCTYPE html>
<html lang="en">
@include('common.head')
<body>
    <div id="app">
        @include('common.header')
        <main class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 offset-md-3">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>
    @include('common.footer')
</body>
</html>