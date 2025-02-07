@extends('layout.dashboard.layoutDashboard')
@section('content')
    <!-- **************** MAIN CONTENT START **************** -->
    <main>
        <section class="py-4">
            <div class="container">
                <div class="row g-4">
                    @include('dashboard.partials.index.statistics')
                    @include('dashboard.partials.index.chart')
                    @include('dashboard.partials.index.viewsStatistics')
                    @include('dashboard.partials.index.newsList')
                </div>
            </div>
        </section>
    </main>
    <!-- **************** MAIN CONTENT END **************** -->
@endsection
