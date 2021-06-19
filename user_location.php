<style media="screen">
    .container-popup
    {
      background:none;
      text-align: left;
      max-width: 400px;
      margin: 40px auto;
      position: relative;
      box-sizing: border-box;
      border-radius: 4px;
      z-index: 200;
    }

    .pac-container {
        z-index: 2002 !important;
    }

    .geolocator-container
    {
      display: flex;
      align-items: center;
      justify-content: center;
      top: 50%;
      left: 50%;
      height: 50%;
      transform: translate(-50%, -50%);
      position: fixed;
      background-color: none;
    }
    .geolocator-content
    {
      background-color: white;
      padding-top: 5%;
      padding-bottom: 5%;
      border-radius: 5px;
    }

    .geolocator-title
    {
      color: white;
      font-weight: 800;
    }
    #autocomplete-container .pac-container
    {
        left: 0 !important;
        top: 51px !important;
    }

</style>

<div id="geolocator-popup" class="container-popup mfp-hide PopupDTA zoom-anim-dialog">
  <div id="geolocator-container" class="geolocator-popup">
    <div class="row">
      <div class="row">
        <div class="row" style="margin-bottom: 10%; text-align: center">
          <h1 class="geolocator-title">EMPECEMOS</h1>
        </div>
        <div class="row" style="margin-bottom: 10%; text-align: center">
          <h2 class="geolocator-title">¿DONDE QUIERES BUSCAR?</h1>
        </div>
      </div>
      <div class="row">
        <div class="geolocator-content centered-content">
          <div class="row">
            <div class="geolocator-menu">
              <div class="col-md-12">
                <div class="row">
                  <button id="geolocator-button-popup" type="button" class="button" name="button" onclick="">USAR MI UBICACIÓN ACTUAL</button>
                </div>
                <div class="row">
                  <span>O</span>
                </div>
                <div class="row">
                  <form id="geolocator-form-popup" class="geolocator-form-popup" action="geolocation.php" method="post">
                    <div id="autocomplete-container">
                        <input id="geolocator-input1" class="geolocator-input" type="text" name="geolocator-input" value="" placeholder="Ingrese su dirección" required>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
