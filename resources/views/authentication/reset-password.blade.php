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
                            <h2>ایجاد رمز عبور جدید</h2>
                            <!-- Form START -->

                            @if(session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            {{--message print for with--}}
                            @error('email')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror

                            <form class="mt-4" action="{{route('update.password')}}" method="POST">
                                @csrf
                                <input type="hidden" name="token" value="{{$token}}">
                                <!-- Email -->
                                <div class="mb-3">
                                    <label class="form-label" for="exampleInputEmail1">پست الکترونیکی</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                           placeholder="ایمیل">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="exampleInputEmail1">رمز عبور</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputEmail1"
                                           placeholder="رمز عبور">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="exampleInputEmail1">رمز عبور مجدد</label>
                                    <input type="text" name="password_confirmation" class="form-control"
                                           id="exampleInputEmail1"
                                           placeholder="رمز عبور مجدد">
                                </div>

                                <!-- Button -->
                                <div class="row align-items-center">
                                    <div class="col-sm-4">
                                        <button type="submit" class="btn btn-success">ثبت</button>
                                    </div>

                                </div>
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
