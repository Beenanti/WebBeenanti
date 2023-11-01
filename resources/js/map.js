function initMap() {
    showMap() //show map , polygon, legend
    directionsRenderer = new google.maps.DirectionsRenderer(); //render route
    if (datas && url) { loopingAllMarker(datas, url) } // detail object
    mata_angin() // mata angin compas on map
    highlightCurrentManualLocation() //highligth when button location not clicked
    showUpcoming()//showing upcoming 
}
function showMap() {
    map = new google.maps.Map(document.getElementById("map"), { center: { lat: latApar, lng: lngApar }, zoom: 16, clickableIcons: false, styles: mapStyles });
    addAparPolygon(geomApar, '#ffffff')
    // remove unecessary button when in mobile
    if (window.location.pathname.split('/').pop() == 'mobile'){
        map.setOptions({ mapTypeControl: false });
    }
}
function showUpcoming() {
    $('#panel').html(`<div class="card-header"><h5 class="card-title text-center">UNIQE ATRACTION</h5></div><div class="card-body">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class=""></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active"><img src="${base_url}/assets/images/dashboard-images/mangrove.jpg" onclick="showObject('atraction','01')" style="cursor: pointer;" width="100%"></div>
            <div class="carousel-item"><img src="${base_url}/assets/images/dashboard-images/turtle.jpg" onclick="showObject('atraction','02')" style="cursor: pointer;" width="100%"></div>
        </div>
        <a class=" carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div></div>`)
}
function highlightCurrentManualLocation() {
    google.maps.event.addListener(map, "click", (event) => {
        if (userPosition == null) {
            $('#currentLocation').addClass('highligth')
            $('#manualLocation').addClass('highligth')
            setTimeout(() => {
                $('#currentLocation').removeClass('highligth')
                $('#manualLocation').removeClass('highligth')
            }, 400)
        }
    })
}
function mata_angin() {
    const legendIcon = `${base_url}/assets/images/marker-icon/`
    const centerControlDiv = document.createElement("div");
    centerControlDiv.style.marginLeft = "10px";
    centerControlDiv.style.marginBottom = "-10px";
    centerControlDiv.innerHTML = `<div class="mb-4"><img src="${legendIcon}mata_angin.png" width="25"></img><div>`
    map.controls[google.maps.ControlPosition.LEFT_BOTTOM].push(centerControlDiv);
}
function loopingAllMarker(datas, url) {
    showPanelList(datas, url) // show list panel
    for (let i = 0; i < datas.length; i++) { addMarkerToMap(datas[i], url) }
}