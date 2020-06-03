@extends('layouts.admin')

@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Жер сілкіністері</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="/">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Жер сілкіністері</span></li>
                </ol>
                <a class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>

        <!-- start: page -->
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>
                <h2 class="panel-title"><h6 class="m-0">Жер сілкінісін қосу</h6>
                    <a href="{{route('earthquake.index')}}" type="button" class="mb-2 btn btn-medium btn-primary mr-1">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                </h2>
            </header>
            <div class="panel-body">
                <div class="row">
                    <div class="col">
                        <div class="card card-small mb-4">
                            <div class="card-body p-2 pb-4 text-center">
                                <form method="post" action="{{route('earthquake.update', ['id' => $earthquake->id])}}">
                                    @include('earthquakes.form')
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: page -->
    </section>
@endsection