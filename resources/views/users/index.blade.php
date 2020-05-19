@extends('layouts.admin')

@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Қолданушылар</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="/">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Қолданушылар</span></li>
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

                <h2 class="panel-title">Қолданушылар тізімі</h2>
            </header>
            <div class="panel-body">
                <table class="table table-bordered table-striped mb-none" id="datatable-default">
                    <thead>
                    <tr>
                        <th>Аты</th>
                        <th>Жөні</th>
                        <th>Email</th>
                        <th>Роль</th>
                    </tr>
                    </thead>
                    <tbody>


                    @foreach($users as $user)
                        <tr>
                            <td>{{$user -> first_name}}</td>
                            <td>{{$user -> last_name}}</td>
                            <td>{{$user -> email}}</td>
                            <td>{{$user -> role}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>
        <!-- end: page -->
    </section>

@endsection
