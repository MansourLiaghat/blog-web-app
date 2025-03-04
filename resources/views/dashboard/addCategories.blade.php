@extends('layout.dashboard.layoutDashboard')
@section('content')
    <main>

        <!-- =======================
      Main contain START -->
        <section class="py-4">
            <div class="container">
                <div class="row pb-4">
                    <div class="col-12">
                        <!-- Title -->
                        <div class="d-sm-flex justify-content-sm-between align-items-center">
                            <h1 class="mb-2 mb-sm-0 h3">دسته بندی ها <span class="badge bg-primary bg-opacity-10 text-primary">07</span></h1>
                            <a href="#" class="btn btn-sm btn-primary mb-0"><i class="fas fa-plus me-2"></i>ثبت دسته بندی جدید</a>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-xl-4">
                        <!-- Category item START -->
                        <div class="card border h-100">
                            <!-- Card header -->
                            <div class="card-header border-bottom p-3">
                                <div class="d-flex align-items-center">
                                    <div class="icon-lg shadow bg-body rounded-circle">⛰️</div>
                                    <h4 class="mb-0 ms-3">گردشگری</h4>
                                </div>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body p-3">
                                <p>پسر کی با کفش های پاره و پای برهنه با توپ پلاستیکی فوتبال بازی می کند.</p>

                                <!-- Followers and Post -->
                                <div class="d-flex justify-content-between">
                                    <!-- Total post -->
                                    <div>
                                        <h5 class="mb-0">846</h5>
                                        <h6 class="mb-0 fw-light">کل اخبار</h6>
                                    </div>

                                    <!-- Avatar group -->
                                    <ul class="avatar-group mb-0">
                                        <li class="avatar avatar-xs">
                                            <img class="avatar-img rounded-circle"
                                                 src="{{Vite::images('avatar/01.jpg')}}"
                                                 alt="avatar">
                                        </li>
                                        <li class="avatar avatar-xs">
                                            <img class="avatar-img rounded-circle" src="{{Vite::images('avatar/02.jpg')}}" alt="avatar">
                                        </li>
                                        <li class="avatar avatar-xs">
                                            <img class="avatar-img rounded-circle" src="{{Vite::images('avatar/03.jpg')}}" alt="avatar">
                                        </li>
                                        <li class="avatar avatar-xs">
                                            <div class="avatar-img rounded-circle bg-primary"><i class="fas fa-plus text-white position-absolute top-50 start-50 translate-middle"></i></div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <!-- Card body END -->

                            <!-- Card footer -->
                            <div class="card-footer border-top text-center p-3">
                                <a href="#" class="btn btn-primary-soft w-100 mb-0">مشاهده اخبار</a>
                            </div>
                        </div>
                        <!-- Category item END -->
                    </div>

                    <div class="col-md-6 col-xl-4">
                        <!-- Category item START -->
                        <div class="card border h-100">
                            <!-- Card header -->
                            <div class="card-header border-bottom p-3">
                                <div class="d-flex align-items-center">
                                    <div class="icon-lg shadow bg-body rounded-circle">🩸</div>
                                    <h4 class="mb-0 ms-3">اقتصاد</h4>
                                </div>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body p-3">
                                <p>پسر کی با کفش های پاره و پای برهنه با توپ پلاستیکی فوتبال بازی می کند.</p>

                                <!-- Followers and Post -->
                                <div class="d-flex justify-content-between">
                                    <!-- Total post -->
                                    <div>
                                        <h5 class="mb-0">486</h5>
                                        <h6 class="mb-0 fw-light">کل اخبار</h6>
                                    </div>

                                    <!-- Avatar group -->
                                    <ul class="avatar-group mb-0">
                                        <li class="avatar avatar-xs">
                                            <img class="avatar-img rounded-circle" src="{{Vite::images('avatar/04.jpg')}}" alt="avatar">
                                        </li>
                                        <li class="avatar avatar-xs">
                                            <img class="avatar-img rounded-circle" src="{{Vite::images('avatar/05.jpg')}}" alt="avatar">
                                        </li>
                                        <li class="avatar avatar-xs">
                                            <img class="avatar-img rounded-circle" src="{{Vite::images('avatar/06.jpg')}}" alt="avatar">
                                        </li>
                                        <li class="avatar avatar-xs">
                                            <div class="avatar-img rounded-circle bg-primary"><i class="fas fa-plus text-white position-absolute top-50 start-50 translate-middle"></i></div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <!-- Card body END -->

                            <!-- Card footer -->
                            <div class="card-footer border-top text-center p-3">
                                <a href="#" class="btn btn-primary-soft w-100 mb-0">مشاهده اخبار</a>
                            </div>
                        </div>
                        <!-- Category item END -->
                    </div>

                    <div class="col-md-6 col-xl-4">
                        <!-- Category item START -->
                        <div class="card border h-100">
                            <!-- Card header -->
                            <div class="card-header border-bottom p-3">
                                <div class="d-flex align-items-center">
                                    <div class="icon-lg shadow bg-body rounded-circle">🤝</div>
                                    <h4 class="mb-0 ms-3">استارت آپ</h4>
                                </div>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body p-3">
                                <p> پسر کی با کفش های پاره و پای برهنه با توپ پلاستیکی فوتبال بازی می کند.</p>

                                <!-- Followers and Post -->
                                <div class="d-flex justify-content-between">
                                    <!-- Total post -->
                                    <div>
                                        <h5 class="mb-0">657</h5>
                                        <h6 class="mb-0 fw-light">کل اخبار</h6>
                                    </div>

                                    <!-- Avatar group -->
                                    <ul class="avatar-group mb-0">
                                        <li class="avatar avatar-xs">
                                            <img class="avatar-img rounded-circle" src="{{Vite::images('avatar/07.jpg')}}" alt="avatar">
                                        </li>
                                        <li class="avatar avatar-xs">
                                            <img class="avatar-img rounded-circle" src="{{Vite::images('avatar/08.jpg')}}" alt="avatar">
                                        </li>
                                        <li class="avatar avatar-xs">
                                            <img class="avatar-img rounded-circle" src="{{Vite::images('avatar/09.jpg')}}" alt="avatar">
                                        </li>
                                        <li class="avatar avatar-xs">
                                            <div class="avatar-img rounded-circle bg-primary"><i class="fas fa-plus text-white position-absolute top-50 start-50 translate-middle"></i></div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <!-- Card body END -->

                            <!-- Card footer -->
                            <div class="card-footer border-top text-center p-3">
                                <a href="#" class="btn btn-primary-soft w-100 mb-0">مشاهده اخبار</a>
                            </div>
                        </div>
                        <!-- Category item END -->
                    </div>

                    <div class="col-md-6 col-xl-4">
                        <!-- Category item START -->
                        <div class="card border h-100">
                            <!-- Card header -->
                            <div class="card-header border-bottom p-3">
                                <div class="d-flex align-items-center">
                                    <div class="icon-lg shadow bg-body rounded-circle">🤖</div>
                                    <h4 class="mb-0 ms-3">تکنولوژی</h4>
                                </div>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body p-3">
                                <p>پسر کی با کفش های پاره و پای برهنه با توپ پلاستیکی فوتبال بازی می کند.</p>

                                <!-- Followers and Post -->
                                <div class="d-flex justify-content-between">
                                    <!-- Total post -->
                                    <div>
                                        <h5 class="mb-0">846</h5>
                                        <h6 class="mb-0 fw-light">کل اخبار</h6>
                                    </div>

                                    <!-- Avatar group -->
                                    <ul class="avatar-group mb-0">
                                        <li class="avatar avatar-xs">
                                            <img class="avatar-img rounded-circle" src="{{Vite::images('avatar/10.jpg')}}" alt="avatar">
                                        </li>
                                        <li class="avatar avatar-xs">
                                            <img class="avatar-img rounded-circle" src="{{Vite::images('avatar/11.jpg')}}pg" alt="avatar">
                                        </li>
                                        <li class="avatar avatar-xs">
                                            <img class="avatar-img rounded-circle" src="{{Vite::images('avatar/12.jpg')}}" alt="avatar">
                                        </li>
                                        <li class="avatar avatar-xs">
                                            <div class="avatar-img rounded-circle bg-primary"><i class="fas fa-plus text-white position-absolute top-50 start-50 translate-middle"></i></div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <!-- Card body END -->

                            <!-- Card footer -->
                            <div class="card-footer border-top text-center p-3">
                                <a href="#" class="btn btn-primary-soft w-100 mb-0">مشاهده اخبار</a>
                            </div>
                        </div>
                        <!-- Category item END -->
                    </div>

                    <div class="col-md-6 col-xl-4">
                        <!-- Category item START -->
                        <div class="card border h-100">
                            <!-- Card header -->
                            <div class="card-header border-bottom p-3">
                                <div class="d-flex align-items-center">
                                    <div class="icon-lg shadow bg-body rounded-circle">🔥</div>
                                    <h4 class="mb-0 ms-3">سیاست</h4>
                                </div>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body p-3">
                                <p>پسر کی با کفش های پاره و پای برهنه با توپ پلاستیکی فوتبال بازی می کند.</p>

                                <!-- Followers and Post -->
                                <div class="d-flex justify-content-between">
                                    <!-- Total post -->
                                    <div>
                                        <h5 class="mb-0">486</h5>
                                        <h6 class="mb-0 fw-light">کل اخبار</h6>
                                    </div>

                                    <!-- Avatar group -->
                                    <ul class="avatar-group mb-0">
                                        <li class="avatar avatar-xs">
                                            <img class="avatar-img rounded-circle" src="{{Vite::images('avatar/05.jpg')}}" alt="avatar">
                                        </li>
                                        <li class="avatar avatar-xs">
                                            <img class="avatar-img rounded-circle" src="{{Vite::images('avatar/08.jpg')}}" alt="avatar">
                                        </li>
                                        <li class="avatar avatar-xs">
                                            <img class="avatar-img rounded-circle" src="{{Vite::images('avatar/10.jpg')}}" alt="avatar">
                                        </li>
                                        <li class="avatar avatar-xs">
                                            <div class="avatar-img rounded-circle bg-primary"><i class="fas fa-plus text-white position-absolute top-50 start-50 translate-middle"></i></div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <!-- Card body END -->

                            <!-- Card footer -->
                            <div class="card-footer border-top text-center p-3">
                                <a href="#" class="btn btn-primary-soft w-100 mb-0">مشاهده اخبار</a>
                            </div>
                        </div>
                        <!-- Category item END -->
                    </div>

                    <div class="col-md-6 col-xl-4">
                        <!-- Category item START -->
                        <div class="card border h-100">
                            <!-- Card header -->
                            <div class="card-header border-bottom p-3">
                                <div class="d-flex align-items-center">
                                    <div class="icon-lg shadow bg-body rounded-circle">📷</div>
                                    <h4 class="mb-0 ms-3">رسانه</h4>
                                </div>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body p-3">
                                <p>پسر کی با کفش های پاره و پای برهنه با توپ پلاستیکی فوتبال بازی می کند.</p>

                                <!-- Followers and Post -->
                                <div class="d-flex justify-content-between">
                                    <!-- Total post -->
                                    <div>
                                        <h5 class="mb-0">657</h5>
                                        <h6 class="mb-0 fw-light">کل اخبار</h6>
                                    </div>

                                    <!-- Avatar group -->
                                    <ul class="avatar-group mb-0">
                                        <li class="avatar avatar-xs">
                                            <img class="avatar-img rounded-circle" src="{{Vite::images('avatar/02.jpg')}}" alt="avatar">
                                        </li>
                                        <li class="avatar avatar-xs">
                                            <img class="avatar-img rounded-circle" src="{{Vite::images('avatar/10.jpg')}}" alt="avatar">
                                        </li>
                                        <li class="avatar avatar-xs">
                                            <img class="avatar-img rounded-circle" src="{{Vite::images('avatar/12.jpg')}}" alt="avatar">
                                        </li>
                                        <li class="avatar avatar-xs">
                                            <div class="avatar-img rounded-circle bg-primary"><i class="fas fa-plus text-white position-absolute top-50 start-50 translate-middle"></i></div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <!-- Card body END -->

                            <!-- Card footer -->
                            <div class="card-footer border-top text-center p-3">
                                <a href="#" class="btn btn-primary-soft w-100 mb-0">مشاهده اخبار</a>
                            </div>
                        </div>
                        <!-- Category item END -->
                    </div>

                    <div class="col-12">
                        <!-- Blog list table START -->
                        <div class="card border bg-transparent rounded-3">
                            <!-- Card header START -->
                            <div class="card-header bg-transparent border-bottom p-3">
                                <div class="d-sm-flex justify-content-sm-between align-items-center">
                                    <h5 class="mb-2 mb-sm-0">تکنولوژی <span class="badge bg-primary bg-opacity-10 text-primary">105</span></h5>
                                    <a href="#" class="btn btn-sm btn-primary mb-0"><i class="fas fa-plus me-2"></i>ثبت خبر جدید</a>
                                </div>
                            </div>
                            <!-- Card header END -->

                            <!-- Card body START -->
                            <div class="card-body p-3">

                                <!-- Search and select START -->
                                <div class="row g-3 align-items-center justify-content-between mb-3">
                                    <!-- Search -->
                                    <div class="col-md-8">
                                        <form class="rounded position-relative">
                                            <input class="form-control pe-5 bg-transparent" type="search" placeholder="جستجو" aria-label="Search">
                                            <button class="btn bg-transparent border-0 px-2 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 "></i></button>
                                        </form>
                                    </div>

                                    <!-- Select option -->
                                    <div class="col-md-3">
                                        <!-- Short by filter -->
                                        <form>
                                            <select class="form-select z-index-9 bg-transparent" aria-label=".form-select-sm">
                                                <option value="">مرتب سازی</option>
                                                <option>رایگان</option>
                                                <option>جدیدترین</option>
                                                <option>قدیمی ترین</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                                <!-- Search and select END -->

                                <!-- Blog list table START -->
                                <div class="table-responsive border-0">
                                    <table class="table table-dark-gray align-middle p-4 mb-0 table-hover table-shrink">
                                        <!-- Table head -->
                                        <thead>
                                        <tr>
                                            <th scope="col" class="border-0 rounded-start">عنوان خبر</th>
                                            <th scope="col" class="border-0">نام نویسنده</th>
                                            <th scope="col" class="border-0">تاریخ انتشار</th>
                                            <th scope="col" class="border-0">تعداد بازدید</th>
                                            <th scope="col" class="border-0">وضعیت</th>
                                            <th scope="col" class="border-0 rounded-end">فعالیت</th>
                                        </tr>
                                        </thead>

                                        <!-- Table body START -->
                                        <tbody>
                                        <!-- Table item -->
                                        <tr>
                                            <!-- Table data -->
                                            <td>
                                                <h6 class="course-title mt-2 mt-md-0 mb-0"><a href="#">حضور ایرانسل در رویداد فناورانه خودروهای آینده</a></h6>
                                            </td>
                                            <!-- Table data -->
                                            <td>
                                                <h6 class="mb-0"><a href="#">مریم ترابی</a></h6>
                                            </td>
                                            <!-- Table data -->
                                            <td>22 آذر، 1400</td>
                                            <!-- Table data -->
                                            <td>2,546</td>
                                            <!-- Table data -->
                                            <td>
                                                <span class="badge bg-success bg-opacity-10 text-success mb-2">فعال</span>
                                            </td>
                                            <!-- Table data -->
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <a href="#" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="حذف"><i class="bi bi-trash"></i></a>
                                                    <a href="#" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="ویرایش"><i class="bi bi-pencil-square"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Table item -->
                                        <tr>
                                            <!-- Table data -->
                                            <td>
                                                <h6 class="course-title mt-2 mt-md-0 mb-0"><a href="#">رازهای کوچک کثیف در مورد صنعت تجارت</a></h6>
                                            </td>
                                            <!-- Table data -->
                                            <td>
                                                <h6 class="mb-0"><a href="#">المیرا کرمی</a></h6>
                                            </td>
                                            <!-- Table data -->
                                            <td>19 تیر، 1400</td>
                                            <!-- Table data -->
                                            <td>1,456</td>
                                            <!-- Table data -->
                                            <td>
                                                <span class="badge bg-warning bg-opacity-15 text-warning mb-2">پیش نویس</span>
                                            </td>
                                            <!-- Table data -->
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <a href="#" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="حذف"><i class="bi bi-trash"></i></a>
                                                    <a href="#" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="ویرایش"><i class="bi bi-pencil-square"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Table item -->
                                        <tr>
                                            <!-- Table data -->
                                            <td>
                                                <h6 class="course-title mt-2 mt-md-0 mb-0"><a href="#">طرح مجلس برای گرفتن مالیات از سفته بازها</a></h6>
                                            </td>
                                            <!-- Table data -->
                                            <td>
                                                <h6 class="mb-0"><a href="#">نیلوفر راد</a></h6>
                                            </td>
                                            <!-- Table data -->
                                            <td>11 دی، 1400</td>
                                            <!-- Table data -->
                                            <td>3,456</td>
                                            <!-- Table data -->
                                            <td>
                                                <span class="badge bg-success bg-opacity-10 text-success mb-2">فعال</span>
                                            </td>
                                            <!-- Table data -->
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <a href="#" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="حذف"><i class="bi bi-trash"></i></a>
                                                    <a href="#" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="ویرایش"><i class="bi bi-pencil-square"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Table item -->
                                        <tr>
                                            <!-- Table data -->
                                            <td>
                                                <h6 class="course-title mt-2 mt-md-0 mb-0"><a href="#">رونمایی از طرح بزرگترین تلسکوپ نوری آسیا</a></h6>
                                            </td>
                                            <!-- Table data -->
                                            <td>
                                                <h6 class="mb-0"><a href="#">علی صادقی</a></h6>
                                            </td>
                                            <!-- Table data -->
                                            <td>22 آذر، 1400</td>
                                            <!-- Table data -->
                                            <td>5,456</td>
                                            <!-- Table data -->
                                            <td>
                                                <span class="badge bg-success bg-opacity-10 text-success mb-2">فعال</span>
                                            </td>
                                            <!-- Table data -->
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <a href="#" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="حذف"><i class="bi bi-trash"></i></a>
                                                    <a href="#" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="ویرایش"><i class="bi bi-pencil-square"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Table item -->
                                        <tr>
                                            <!-- Table data -->
                                            <td>
                                                <h6 class="course-title mt-2 mt-md-0 mb-0"><a href="#">عادات بدی که افراد در صنعت باید آنها را ترک کنند!</a></h6>
                                            </td>
                                            <!-- Table data -->
                                            <td>
                                                <h6 class="mb-0"><a href="#">سارا موحد</a></h6>
                                            </td>
                                            <!-- Table data -->
                                            <td>21 مهر، 1400</td>
                                            <!-- Table data -->
                                            <td>2,845</td>
                                            <!-- Table data -->
                                            <td>
                                                <span class="badge bg-warning bg-opacity-10 text-warning mb-2">پیش نویس</span>
                                            </td>
                                            <!-- Table data -->
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <a href="#" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="حذف"><i class="bi bi-trash"></i></a>
                                                    <a href="#" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="ویرایش"><i class="bi bi-pencil-square"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Table item -->
                                        <tr>
                                            <!-- Table data -->
                                            <td>
                                                <h6 class="course-title mt-2 mt-md-0 mb-0"><a href="#">سال 2022 رویایی و فوق العاده برای طارمی</a></h6>
                                            </td>
                                            <!-- Table data -->
                                            <td>
                                                <h6 class="mb-0"><a href="#">مهدی رزاق</a></h6>
                                            </td>
                                            <!-- Table data -->
                                            <td>10 دی، 1400</td>
                                            <!-- Table data -->
                                            <td>1,456</td>
                                            <!-- Table data -->
                                            <td>
                                                <span class="badge bg-success bg-opacity-10 text-success mb-2">فعال</span>
                                            </td>
                                            <!-- Table data -->
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <a href="#" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="حذف"><i class="bi bi-trash"></i></a>
                                                    <a href="#" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="ویرایش"><i class="bi bi-pencil-square"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        </tbody>
                                        <!-- Table body END -->
                                    </table>
                                </div>
                                <!-- Blog list table END -->

                                <!-- Pagination START -->
                                <div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-4 mt-sm-3">
                                    <!-- Content -->
                                    <p class="mb-sm-0 text-center text-sm-start">نمایش 1 تا 8 از 20</p>
                                    <!-- Pagination -->
                                    <nav class="mb-sm-0 d-flex justify-content-center" aria-label="navigation">
                                        <ul class="pagination pagination-sm pagination-bordered mb-0">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">قبل</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item disabled"><a class="page-link" href="#">..</a></li>
                                            <li class="page-item"><a class="page-link" href="#">15</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">بعد</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Pagination END -->
                            </div>
                        </div>
                        <!-- Blog list table END -->
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
        Main contain END -->

    </main>
@endsection
