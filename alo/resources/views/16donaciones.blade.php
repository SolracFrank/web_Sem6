@extends('plantilla')
@section('content')
    <div class="donaciones">
      <div class="row">
        <div class="col l4 m6 s12">
          <div class="donacion">
            <h5>Bitcoin</h5>
            <img src="./imagesfree/portada-bitcoin.jpg" alt="" />
          </div>
        </div>

        <div class="col l4 m6 s12">
          <div class="donacion">
            <h5>Mastercard</h5>
            <img src="./imagesfree/mastercard.png" alt="" />
          </div>
        </div>

        <div class="col l4 m6 s12">
          <div class="donacion">
            <h5>PayPal</h5>
            <img src="./imagesfree//paypal.png" alt="" />
          </div>
        </div>
      </div>
    </div>

    <section class="black">
      <div class="container">
        <section class="center-align">
          <form action="">
            <div class="donacion">
              <label for="" name="donar" class="donacion"
                >Select payment method</label
              >
            </div>
          </form>

          <h2 class="yellow-text text-accent-4 grey darken-3">
            VIDEO FROM A DONOR OF THE WEEK!
          </h2>
          <video
            width="75%"
            src="./imagesfree/Aldrich Good.mp4"
            controls
            preload="auto"
          ></video>
        </section>
      </div>
    </section>
    @endsection()