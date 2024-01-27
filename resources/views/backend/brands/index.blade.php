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
              <h5 class="card-title">Datatables</h5>
              <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable. Check for <a href="https://fiduswriter.github.io/simple-datatables/demos/" target="_blank">more examples</a>.</p>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    {{-- <th>Image</th> --}}
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($brands as $item)
                        
                    <tr>
                        <td> {{$item['id']}} </td>
                        <td>{{$item['name']}}</td>
                        {{-- <td>{{$item['logo']}}</td> --}}
                        <td>{{$item['description']}}</td>
                        <td> 
                        <a href="category/delete/{{$item['id']}}"> <button class="btn btn-danger">delete</button>  </a>
                        <button class="btn btn-warning"> <a href="category/edit/{{$item['id']}}"> Edit </a> </button> 
                        <button class="btn btn-warning"> <a href="{{route('brands.show', $item['id'])}}"> Show </a> </button> 
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
{{-- {!! $brands->links() !!} --}}
{!! $brands->withQueryString()->links('pagination::bootstrap-5') !!}

</main>


@endsection