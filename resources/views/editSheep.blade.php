@extends('layouts.template')

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Edit Sheep</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('sheep.index') }}">Sheep</a></li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>
      </nav>
    </div>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Sheep</h5>
              <form action="{{ route('sheep.update', $sheep->id) }}" method="POST" class="row g-3">
                  @csrf
                  @method('PUT')
                  <div class="col-6">
                      <label for="inputId-domba" class="form-label">ID DOMBA</label>
                      <input type="text" name="id_domba" class="form-control" id="inputId-domba" value="{{ $sheep->id_domba }}" required>
                  </div>
                  <div class="col-6">
                      <label for="inputKeturunan" class="form-label">KETURUNAN</label>
                      <input type="text" name="keturunan" class="form-control" id="inputKeturunan" value="{{ $sheep->keturunan }}">
                  </div>
                  <div class="col-6">
                      <label for="inputTanggal-lahir" class="form-label">TANGGAL LAHIR</label>
                      <input type="date" name="tanggal_lahir" class="form-control" id="inputTanggal-lahir" value="{{ $sheep->tanggal_lahir }}" required>
                  </div>
                  <div class="text-center">
                      <button type="submit" class="btn btn-primary">Update</button>
                      <a href="{{ route('sheep.index') }}" class="btn btn-secondary">Cancel</a>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
</main>
@endsection