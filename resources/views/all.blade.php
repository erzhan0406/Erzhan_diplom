@extends('layouts.admin')
@section('styles')
    <script src="https://api.mapbox.com/mapbox-gl-js/v1.10.1/mapbox-gl.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v1.10.1/mapbox-gl.css" rel="stylesheet"/>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        #map {
            width: 100%;
            height: 500px;
        }
    </style>
@endsection
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

                                <h2>Әлемдік мониторинг</h2>

                                <div class="row">
                                    <div id="map">

                                    </div>
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
@section('scripts')
    <script>
        var lat = 43.30501195673838;
        var lng = 76.93238495134216;
        mapboxgl.accessToken = 'pk.eyJ1Ijoia2FzeWEiLCJhIjoiY2p2eDhqMGN1MDJoMjQ5bHNxMjg2anVoOCJ9.KImOL8iBBHCIVCHp0SZUSg';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [lng, lat],
            zoom: 8
        });

        var allInfo = {!! html_entity_decode(json_encode($all))!!};


        function putMarker(lng, lat, name, magnitude) {
            var popup = new mapboxgl.Popup({offset: 25}).setText(
                `Аты: ${name}, магнитудасы: ${magnitude}`
            );
            var marker = new mapboxgl.Marker()
                .setLngLat([lng, lat])
                .setPopup(popup)
                .addTo(this.map);
        }


        for (var i = 0; i < allInfo.length; i++) {
            var info = allInfo[i];
            this.putMarker(info.longitude, info.latitude, info.name, info.magnitude);
        }
    </script>
@endsection