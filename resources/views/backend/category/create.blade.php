@extends('backend.layouts.app')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1> Insert Category </h1>

    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">General Form Elements</h5>

              <!-- General Form Elements -->
              <form action="{{route('category/store')}}" method="POST">
                @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Category Name:</label>
                  <div class="col-sm-10">
                    <input type="text" name="name" class="form-control">
                  </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary px-5 p-2">Submit</button>
                </div>
              </form>
              <!-- End General Form Elements -->
            </div>
          </div>

        </div>
      </div>
    </section>

  </main>    


@endsection