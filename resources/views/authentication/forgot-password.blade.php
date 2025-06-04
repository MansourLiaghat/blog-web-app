@extends('layout.dashboard.layoutDashboard')
@section('content')
    <main>

        <!-- =======================
        Inner intro START -->

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8 col-xl-8 mx-auto ">
                        <div class="p-4 p-sm-5  rounded custom-box-shadow">
                            <h2>فراموشی رمز عبور</h2>
                            <!-- Form START -->

                            @if(session()->has('error'))
                                <div class="alert alert-danger">
                                    {{session()->get('error')}}
                                </div>
                            @endif

                            {{--message print for with--}}
                            @error('email')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror

                            <form class="mt-4" action="{{route('forgot.password')}}" method="POST">
                                @csrf
                                <!-- Email -->
                                <div class="mb-3">
                                    <label class="form-label" for="exampleInputEmail1">پست الکترونیکی</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                           placeholder="ایمیل">
                                </div>

                                <!-- Button -->
                                <div class="row align-items-center">
                                    <div class="col-sm-4">
                                        <button type="submit" class="btn btn-success">ورود</button>
                                    </div>

                                </div>

                                <span>آیا قبلا ثبت نام کرده اید؟ <a href="{{route('login')
                                        }}"><u>ورود</u></a></span>
                            </form>
                            <!-- Form END -->
                            <hr>
                            <!-- Social-media btn -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
        Inner intro END -->

    </main>
@endsection
