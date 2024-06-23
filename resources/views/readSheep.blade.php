<!-- resources/views/sheep/index.blade.php -->

@extends('layouts.template')

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Sheep List</h1>
    </div>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Sheep</h5>
              <a href="{{ route('sheep.create') }}" class="btn btn-primary mb-3">Add Sheep</a>
              @if ($message = Session::get('success'))
                  <div class="alert alert-success">
                      <p>{{ $message }}</p>
                  </div>
              @endif
              <table class="table">
                  <thead>
                      <tr>
                          <th>ID Domba</th>
                          <th>Keturunan</th>
                          <th>Tanggal Lahir</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($sheep as $item)
                      <tr>
                          <td>{{ $item->id_domba }}</td>
                          <td>{{ $item->keturunan }}</td>
                          <td>{{ $item->tanggal_lahir }}</td>
                          <td>
                              <a class="btn btn-info" href="{{ route('sheep.show', $item->id) }}">Show</a>
                              <a class="btn btn-primary" href="{{ route('sheep.edit', $item->id) }}">Edit</a>
                              <form action="{{ route('sheep.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger">Delete</button>
                              </form>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
</main>
@endsection