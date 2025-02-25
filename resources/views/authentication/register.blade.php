@extends('layout.dashboard.layoutDashboard')
@section('content')
    <main>


        @if($errors->has('g-recaptcha-response'))
            <div class="alert alert-danger">

                <ul class="list-group">
                        <li class="list-item">
                            {{$errors->first('g-recaptcha-response')}}
{{--                            @error('g-recaptcha-response')--}}
{{--                            {{$message}}--}}
{{--                            @enderror--}}
                        </li>

                </ul>
            </div>

        @endif


        <!-- =======================
        Inner intro START -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8 col-xl-8 mx-auto ">
                        <div class="rounded custom-box-shadow rounded p-4 p-sm-5">
                            <h2>ثبت نام در سایت </h2>
                            <!-- Form START -->
                            <form class="mt-4" id="registerForm" action="{{route('register')}}" method="POST">
                                @csrf
                                <!-- Name -->
                                <div class="mb-3">
                                    <label class="form-label" for="exampleInputEmail1">نام کاربری</label>
                                    <input type="text" class="form-control @error('name') border-danger @enderror "
                                           name="name"
                                           id="exampleInputEmail1"
                                           aria-describedby="emailHelp" value="{{old('name')}}"
                                           placeholder="نام کاربری">
                                    @error('name')
                                    <p>{{$message}}</p>
                                    @enderror
                                </div>
                                <!-- Email -->
                                <div class="mb-3">
                                    <label class="form-label" for="exampleInputEmail1">ایمیل</label>
                                    <input type="email" class="form-control @error('email') border-danger @enderror "
                                           name="email"
                                           id="exampleInputEmail1"
                                           aria-describedby="emailHelp" placeholder="ایمیل" value="{{old('email')}}">
                                    @error('email')
                                    <p>{{$message}}</p>
                                    @enderror
                                </div>
                                <!-- Password -->
                                <div class="mb-3">
                                    <label class="form-label" for="exampleInputPassword1">رمز عبور</label>
                                    <input type="password"
                                           class="form-control @error('password') border-danger @enderror"
                                           name="password"
                                           id="exampleInputPassword1"
                                           placeholder="*********">
                                    @error('password')
                                    <p>{{$message}}</p>
                                    @enderror
                                </div>
                                <!-- Password -->
                                <div class="mb-3">
                                    <label class="form-label" for="exampleInputPassword2">تایید رمز عبور</label>
                                    <input type="password"
                                           class="form-control @error('password_confirmation') border-danger @enderror"
                                           name="password_confirmation"
                                           id="exampleInputPassword2"
                                           placeholder="*********">
                                    @error('password_confirmation')
                                    <p>{{$message}}</p>
                                    @enderror
                                </div>
                                <!-- Button -->
                                <div class="row align-items-center">
                                    <div class="col-sm-4">
                                        <button type="submit" class="g-recaptcha btn btn-success"
                                                data-sitekey="{{config('services.google_repactcha_v3.site_key')}}"
                                                data-callback='onSubmit'
                                                data-action='submitRegister'>ثبت نام
                                        </button>
                                    </div>
                                    <div class="col-sm-8 text-sm-end">
                                        <span>آیا قبلا ثبت نام کرده اید؟ <a href="{{route('login')
                                        }}"><u>ورود</u></a></span>
                                    </div>
                                </div>
                            </form>
                            <!-- Form END -->
                            <hr>
                            <!-- Social-media btn -->
                            <div class="text-center">
                                <p>برای دسترسی سریع با شبکه اجتماعی خود وارد شوید</p>
                                <ul class="list-unstyled d-flex mt-3 justify-content-center">
                                    <li class="mx-2">
                                        <a href="#" class="btn btn-light d-inline-block fs-6">github<i
                                                class="fab fa-github text-dark align-middle ms-2 fs-5"></i></a>
                                    </li>
                                    <li class="mx-2">
                                        <a href="#" class="btn btn-light d-inline-block fs-6">google<i
                                                class="fab fa-google text-danger align-middle ms-2 fs-5"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
        Inner intro END -->

    </main>
@endsection
