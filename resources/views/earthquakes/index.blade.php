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
        <section class="panel">
            <header class="panel-heading">

                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Жер сілкіністер тізімі
                    <a href="{{route('earthquake.create')}}" type="button" class="mb-2 btn btn-medium btn-primary mr-1">
                        <i class="fa fa-plus"></i>
                    </a>
                </h2>
            </header>
            <div class="panel-body">
                <table class="table table-bordered table-striped mb-none">
                    <thead>
                    <tr>
                        <th>Аты</th>
                        <th>Магнитудда</th>
                        <th>Действия</th>
                    </tr>
                    </thead>
                    <tbody>


                    @foreach($earthquakes as $earthquake)
                        <tr>
                            <td>{{$earthquake->name}}</td>
                            <td>{{$earthquake->magnitude}}</td>
                            <td>
                                <a href="{{route('earthquake.update', ['id' => $earthquake->id])}}">Жаңарту <span
                                            class="fa fa-edit"></span></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                    <tfoot>
                        {{$earthquakes->links()}}
                    </tfoot>
                </table>
            </div>
        </section>
    </section>
@endsection
