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

{{csrf_field()}}
<div class="form-row">
    <div class="form-row">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control"
                               name="name"
                               value="{{$earthquake ? $earthquake->name : old('name')}}"
                               placeholder="Наименование"
                               id="name"
                               required>
                        <label class="form-control-plaintext" for="name">Атын еңгізіңіз</label>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control"
                               name="longitude"
                               value="{{$earthquake ? $earthquake->longitude : old('longitude')}}"
                               placeholder="Бойлық"
                               id="longitude"
                               required>
                        <label class="form-control-plaintext" for="longitude">Бойлық</label>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control"
                               name="latitude"
                               value="{{$earthquake ? $earthquake->latitude : old('latitude')}}"
                               placeholder="Ендік"
                               id="latitude"
                               required>
                        <label class="form-control-plaintext" for="latitude">Ендік</label>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control"
                               name="magnitude"
                               value="{{$earthquake ? $earthquake->magnitude : old('magnitude')}}"
                               placeholder="Магнитуда"
                               id="magnitude"
                               required>
                        <label class="form-control-plaintext" for="magnitude">Магнитуда</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="form-group col-md-12 text-right">
    <button class="mb-2 btn btn-primary mr-1  mt-3" type="submit">Сақтау
        <i class="fa fa-save"></i>
    </button>
</div>



@section('scripts')
    <script>

        var lat = 43.30501195673838;

        @if($earthquake->latitude)
            lat = {{$earthquake->latitude}};
        @endif
        var lng = 76.93238495134216;

        @if($earthquake->longitude)
            lng = {{$earthquake->longitude}};
        @endif
        mapboxgl.accessToken = 'pk.eyJ1Ijoia2FzeWEiLCJhIjoiY2p2eDhqMGN1MDJoMjQ5bHNxMjg2anVoOCJ9.KImOL8iBBHCIVCHp0SZUSg';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [lng, lat],
            zoom: 8
        });

        var marker = new mapboxgl.Marker()
            .setLngLat([12.550343, 55.665957])
            .addTo(map);

        map.on('click', (event) => {
            const lat = event.lngLat.lat;
            const lng = event.lngLat.lng;
            putMarker(lng, lat);
        });


        function mapFlyTo(lng, lat) {
            map.flyTo({
                center: [lng, lat]
            });
            this.putMarker(lng, lat);
        }

        function putMarker(lng, lat) {

            document.getElementById('longitude').value = lng;
            document.getElementById('latitude').value = lat;
            if (this.marker) {
                this.marker.remove();
            }
            this.marker = new mapboxgl.Marker()
                .setLngLat([lng, lat])
                .addTo(this.map);
        }

        mapFlyTo(lng, lat);
    </script>
@endsection