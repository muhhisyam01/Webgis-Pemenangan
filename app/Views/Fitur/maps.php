<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Peta Pemenangan</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>                            
                            <li class="breadcrumb-item">Peta</li>
                            <li class="breadcrumb-item active">Peta Pemenangan</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                                <!-- <button type="button" class="btn btn-primary"><i class="fa fa-download"></i>Tambah Data</button> -->
                                <!-- <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i> Send report</button> -->
                            </div>
                            <div class="p-2 d-flex">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Peta Pemenangan</h2>
                        </div>
                        <div class="body">
                        <div id="map" style="width: 100%; height: 100vh;"></div>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </div>


    <script async='async' type='text/javascript'>
        var map = L.map('map').setView([-2.6741178771240004, 118.88759154912997], 20);
        var tiles =  L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibXVoaGlzeWFtIiwiYSI6ImNsbGd4YmQxaTE3Nm0zZXFoOGNhbGFoeHQifQ.XbJsHa41Xb9yBluWg_V9qg', {
                maxZoom: 18,
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                    '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox/streets-v11',
                tileSize: 512,
                zoomOffset: -1
        }).addTo(map);


   
        $.getJSON("<?= base_url('kelurahanbinanga/tps2.geojson') ?>", function(data){
            geoLayer = L.geoJson(data, {
            // style: function(feature) {
            //     return {
                  
            //         color: 'blue',
            //         fillOpacity: 0.3,
            //         weight: 0.5,
            //     }
            // }
            }).addTo(map);

        geoLayer.eachLayer(function(layer) {
            layer.bindPopup("kelurahan binanga");
        });
    });

    </script>