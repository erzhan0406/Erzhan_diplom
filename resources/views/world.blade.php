@extends('layouts.admin')

@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2></h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="/">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Мониторинг</span></li>
                </ol>

                <a class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>

        <!-- start: page -->
        <section class="panel">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">Мониторинг</div>

                            <div class="card-body">

                                <h2>Әлем бойынша жер сілкіністері мониторингі</h2>

                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item"
                                            src="https://app.powerbi.com/reportEmbed?reportId=a459942e-b213-47ae-94ed-4534159d3d09&autoAuth=true&ctid=70c1157a-941c-4b39-98e6-a0634f2759e7&config=eyJjbHVzdGVyVXJsIjoiaHR0cHM6Ly93YWJpLXdlc3QtZXVyb3BlLWQtcHJpbWFyeS1yZWRpcmVjdC5hbmFseXNpcy53aW5kb3dzLm5ldC8ifQ%3D%3D"
                                            frameborder="0" allowFullScreen="true"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: page -->
    </section>

@endsection
