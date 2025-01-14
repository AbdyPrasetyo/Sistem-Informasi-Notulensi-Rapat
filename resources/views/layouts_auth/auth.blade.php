
@include('layouts_auth.h_auth')
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
            <div class="row flex-grow">
                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                    <div class="auth-form-transparent text-left p-3">
                        <div>
                            <img src="{{ asset('template/images/janajana.svg') }}" alt="logo" width="250px">
                        </div>
                @yield('content')

            </div>
        </div>
        <div class="col-lg-6 login-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy;
                2021 All rights reserved.</p>
        </div>
    </div>
</div>
<!-- content-wrapper ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
  @include('layouts_auth.f_auth')
