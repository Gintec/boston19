
  @extends('master')
  @section('content')
  <main id="main" class="main-page">

    <!--==========================
      Speaker Details Section
    ============================-->
    <section id="speakers-details" class="wow fadeIn">
      <div class="container">
        <div class="section-header">
          <h2>Registration Confirmation</h2>
          <p>Your registration been confirmed.</p>
          
          <p>Your Ticket No is: {{$regno}}</p>
          <hr>
          <p style="text-transform: capitalize !important;">Payment Status: {{$message}}.</p>
          <p><a href="/ticket/{{$regno}}">Click Here to Print Ticket</a></p>
        </div>
      </div>

    </section>

  </main>
  @endsection