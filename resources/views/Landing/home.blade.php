@extends('landing.tem')
@section('custom-style')
<style>
  .text-intro {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: transparent;
    padding: 60px 20px;
    color: #1c1c1c; /* Deep black-gray for contrast */
  }

  .text-intro h1 {
    font-size: 2.8rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
  }

  .text-intro .highlight {
    color: #ffffff;
    background-color: #1c1c1c;
    padding: 0 8px;
    border-radius: 4px;
  }

  .text-intro .tagline {
    font-size: 1.25rem;
    font-weight: 400;
    color: #333333;
    letter-spacing: 0.5px;
    margin-top: 10px;
  }

  @media (max-width: 768px) {
    .text-intro h1 {
      font-size: 2rem;
    }

    .text-intro .tagline {
      font-size: 1rem;
    }
  }
</style>
@endsection
@section('content-empty')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Top Navigation <small>Example 3.0</small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Top Navigation</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection
@section('content-body')
<!-- Main content -->
<div class="content p-0">
  <section id="About"  style="background-color: rgb(234, 191, 20); width: 100%; margin: 0; padding: 50px 0;">
    <div class="container">
              <div class="row">
                  <div class="col-6">
                      <div class="container d-flex justify-content-center">
                        <img src="{{asset('pics')}}/1.jpg" class="img-fluid rounded-circle" style="height: 600px; background-size: contain; background-repeat: no-repeat;">
                      </div>
                  </div>
                  <div class="col-6">
                    <div class="container d-flex align-items-center justify-content-center h-100">
                      <div class="text-intro text-center">
                        <h1>Hey, I'm <span class="highlight">Farrel Fachrezaqy</span></h1>
                        <p class="tagline">Freelance Web Developer & Coder</p>

                      </div>
                    </div>
                  </div>
              </div>
      </div><!-- /.container-fluid -->
  </section>
  <section id="Projects" style="background-color: rgb(0, 0, 0); margin: 0; padding: 50px 0;">
    <div class="row">
        <div class="container d-flex justify-content-center">
          <h1 class="m-0 text-light font-weight-bold" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"> Projects </h1>
        </div>
    </div>
    <div class="row">

    </div>
  </section>
  <section id="Contact" style="background-color: #FFF6E0; margin: 0; padding: 50px 0;">
    <div class="container">
      <div class="row">
          <div class="container d-flex justify-content-center">
            <h1 class="m-0 text-dark font-weight-bold" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"> Contact </h1>
          </div>
      </div>
      <div class="row">
        <div class="col 12">
        <div class="container justify-content-center">
                <form>
                  <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="text" id="Name" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="text" id="Email" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="NoWA">No. WA</label>
                    <input type="text" id="NoWA" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="Message">Message</label>
                    <textarea id="Message" class="form-control"></textarea>
                  </div>

                  <button type="submit" class="btn" style="background-color: #FFD447; color:rgb(0, 0, 0); box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">Send Message</button>
              </form>
        </div>
        </div>  
      </div>
    </div>
  </section>
</div>
    <!-- /.content -->
@endsection