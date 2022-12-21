<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Holiday GunungKidul</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@300&display=swap" rel="stylesheet"> 
    <style>
      #mapid1, #mapid2, #mapid3 {height: 300px;}
      .row{margin-top: 30px;}
      h1{
        font-family: 'Bitter', serif;
        font-size: 50px
        }
      body{
        min-width: 1300px;
        }
    </style>
</head>
</body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #18075e;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Geodatabase Holiday GunungKidul</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" href="index.php">Data</a>
            <a class="nav-link" href="map.php">Map Collection</a>
          </div>
        </div>
      </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1>Holiday Jogja Lantai 2</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row" style="margin-top: 30px;">
            <div class="col-sm-4">
                <div id="mapid1"></div>
            </div>
            <div class="col-sm-8">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Shapefile Batas Administrasi</h4>
                    <p>Batas Administrasi Kecamatan pada Kabupaten Gunung Kidul</p>
                    <hr>
                    <p class="mb-0">Terdiri dari 18 Kecamatan</p>
                </div>
                <a class="btn btn-success" href="#" role="button">Batas Kecamatan</a>
                <br></br>
                <a class="btn btn-outline-success" href="#" role="button">Penggunaan Data</a>
            </div>
        </div>
    </div>
    
    <div class="container" style="margin-top: 70px;">
        <div class="row" style="margin-top: 30px;">
            <div class="col-sm-8">
                <div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading">Shapefile Jalan</h4>
                    <p>Jalan Kolektor sebagai jalan utama yang menghubungkan antar kota-kabupaten</p>
                    <hr>
                    <p class="mb-0">Jalan Kolektor GunungKidul</p>
                </div>
                <a class="btn btn-warning" href="#" role="button">Jalan Kolektor</a>
                <br></br>
                <a class="btn btn-outline-warning" href="#" role="button">Penggunaan Data</a>
            </div>
            <div class="col-sm-4">
                <div id="mapid2"></div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 70px;">
        <div class="row" style="margin-top: 30px;">
            <div class="col-sm-4">
                <div id="mapid3"></div>
            </div>
            <div class="col-sm-8">
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Shapefile Titik Wisata</h4>
                    <p>Titik-titik wisata yang ada pada Kabupaten Gunung Kidul</p>
                    <hr>
                    <p class="mb-0">Terdiri dari pantai, goa dan lain sebagainya.</p>
                </div>
                <a class="btn btn-danger" href="#" role="button">Wisata</a>
                <br></br>
                <a class="btn btn-outline-danger" href="#" role="button">Penggunaan Data</a>
            </div>
        </div>
    </div>

</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>
    <script src="assets/leaflet.ajax.js"></script>
    <script src="assets/leaflet.ajax.min.js"></script>
    <script>
        var mymap = L.map('mapid1').setView([-7.957228379360718, 110.62703299110323], 11);
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
        }).addTo(mymap);

        var Kecamatan = {
            "color": "#fad25a",
            "weight": 3,
            "opacity": 0.65,
        };

        var Jalan = {
            "color": "red",
            "weight": 2,
            "opacity": 0.65,
        };

        function popUp(f,l){
            var out = [];
            if (f.properties){
                for(key in f.properties){
                     out.push(key+": "+f.properties[key]);
                }
                l.bindPopup(out.join("<br />"));
            }
        }
        var jsonTest = new L.GeoJSON.AJAX(["assets/GunungK.geojson"],{onEachFeature:popUp,style: Kecamatan}).addTo(mymap);
    </script>

    <script>
        var mymap2 = L.map('mapid2').setView([-7.957228379360718, 110.62703299110323], 11);
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
        }).addTo(mymap2);

        var Kecamatan = {
            "color": "#fad25a",
            "weight": 3,
            "opacity": 0.65,
        };

        var Jalan = {
            "color": "red",
            "weight": 2,
            "opacity": 0.65,
        };

        function popUp(f,l){
            var out = [];
            if (f.properties){
                for(key in f.properties){
                     out.push(key+": "+f.properties[key]);
                }
                l.bindPopup(out.join("<br />"));
            }
        }
        var jsonTest = new L.GeoJSON.AJAX(["assets/Jalan_Kolektor.geojson"],{onEachFeature:popUp,style: Jalan}).addTo(mymap2);
    </script>

    <script>
        var mymap3 = L.map('mapid3').setView([-7.957228379360718, 110.62703299110323], 11);
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
        }).addTo(mymap3);

        var Kecamatan = {
            "color": "#fad25a",
            "weight": 3,
            "opacity": 0.65,
        };

        var Jalan = {
            "color": "red",
            "weight": 2,
            "opacity": 0.65,
        };

        function popUp(f,l){
            var out = [];
            if (f.properties){
                for(key in f.properties){
                     out.push(key+": "+f.properties[key]);
                }
                l.bindPopup(out.join("<br />"));
            }
        }
        var jsonTest = new L.GeoJSON.AJAX(["assets/Wisata.geojson"],{onEachFeature:popUp,style: Kecamatan}).addTo(mymap3);
    </script>
</html>