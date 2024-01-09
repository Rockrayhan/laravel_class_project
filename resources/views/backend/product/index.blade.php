@extends('backend.layouts.app')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Categories</h5>
              <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable. Check for <a href="https://fiduswriter.github.io/simple-datatables/demos/" target="_blank">more examples</a>.</p>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item)
                        
                    <tr>
                        <td> {{$item['id']}} </td>
                        <td>{{$item['name']}}</td>
                        <td>{{$item['desc']}}</td>
                        <td>{{$item['price']}}</td>
                        <td>{{$item['category_id']}}</td>
                        <td> 
                        <a href="category/delete/{{$item['id']}}"> <button class="btn btn-danger">delete</button>  </a>
                        <button class="btn btn-warning"> Edit </button> 
                        </td>

                    </tr>
                    
                    @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main>


@endsection