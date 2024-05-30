@extends('layouts.template')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Layouts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Layouts</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Vertical Form</h5>

              <!-- Vertical Form -->
              <form class="row g-3">
                <div class="col-6">
                  <label for="inputId-domba" class="form-label">ID DOMBA</label>
                  <input type="text" class="form-control" id="inputId-domba">
                </div>
                <div class="col-6">
                  <i class="upc-scan"></i>
                </div>
                <div class="col-6">
                  <label for="inputKeturunan" class="form-label">KETURUNAN</label>
                  <select id="inputKeturunan" class="form-select">
                    <option selected="">Choose...</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="col-6">
                </div>
                <div class="col-6">
                  <label for="inputTanggal-lahir" class="form-label">TANGGAL LAHIR</label>
                  <input type="date" class="form-control" id="inputTanggal-lahir" placeholder="1234 Main St">
                </div>
                <div class="col-6">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main>
  
  @endsection