function getUserLocation() {
  const latitude = position.coords.latitude;
  const longitude = position.coords.longitude;
  return latitude + "," + longitude;
  if (navigator.geolocation) {
      try{
          const latitude = position.coords.latitude;
          const longitude = position.coords.longitude;
          return "hi";
      }
      catch{

      }
      //navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
  } else {
      console.log("Geolocation is not supported by this browser.");
  }
}
let root = window.location.origin;
var {long,lat} = getUserLocation();
console.log("Geolocation: " + long + " " + latitude );
url = `http://localhost:8080/places?long=${long}&lat=${lat}`;
var res = get(url);
console.log(url);
res.then(function (data) {
    data.forEach(function (info) {
        var short = info.Description.substring(0,50);
        var price = (info.isFree == 1) ? "Free" : info.Payment;
        var template = `
        <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
        <div class="card">
          <img src="http://localhost:8080/image/${info.Image}"
            class="card-img-top" alt="${info.Name}" />
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <p class="small"><a href="#!" class="text-muted">Distance</a></p>
              <p class="small text-danger">${info.distance} KM</p>
            </div>

            <div class="d-flex justify-content-between mb-3">
              <h5 class="mb-0">${info.Name}</h5>
              <h5 class="text-dark mb-0">${price}</h5>
            </div>

            <div class="d-flex justify-content-between mb-2">
              <p class="text-muted mb-0">Available: <span class="fw-bold">6</span></p>
              <div class="ms-auto text-warning">
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
              </div>
            </div>
          </div>
        </div>
      </div>`
        $('.listing').append(template);

    })
})

$('.apply-filter').click(() => {
    var res = get(`${root}/places`);
    res.then(function (data) {
        data.forEach(function (info) {
            var short = info.Description.substring(0,50);
            var price = (info.isFree == 1) ? "Free" : info.Payment;
            var template = `
            <div class="col-md-12 col-lg-4 mb-4 my-3 mb-lg-0">
        <div class="card">
          <img src="http://localhost:8080/image/places/nallur.jpg"
            class="card-img-top" alt="Laptop" />
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <p class="small"><a href="#!" class="text-muted">Distance</a></p>
              <p class="small text-danger"><s>$1099</s></p>
            </div>

            <div class="d-flex justify-content-between mb-3">
              <h5 class="mb-0">${info.Name}</h5>
              <h5 class="text-dark mb-0">${price}</h5>
            </div>

            <div class="d-flex justify-content-between mb-2">
              <p class="text-muted mb-0">Available: <span class="fw-bold">6</span></p>
              <div class="ms-auto text-warning">
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
              </div>
            </div>
          </div>
        </div>
      </div>`;
            $('.listing').append(template);

        })
    })
})