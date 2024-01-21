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
                            <p>Add lightweight datatables to your project with using the <a
                                    href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple
                                    DataTables</a> library. Just add <code>.datatable</code> class name to any table you
                                wish to conver to a datatable. Check for <a
                                    href="https://fiduswriter.github.io/simple-datatables/demos/" target="_blank">more
                                    examples</a>.</p>
                            {{-- error msg --}}
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            {{-- session msg --}}
                            @if (session('msg'))
                            <div class="alert alert-success">
                                {{ session('msg') }}
                            </div>
                        @endif
                            {{-- session delete --}}
                            @if (session('delete_msg'))
                            <div class="alert alert-danger">
                                {{ session('delete_msg') }}
                            </div>
                        @endif



                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                        <th>Category</th>
                                        <th>Tags</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $item)
                                        <tr>
                                            <td> {{ $item['id'] }} </td>
                                            <td>{{ $item['name'] }}</td>
                                            <td> {!! $item['description'] !!} </td>
                                            <td>{{ $item['price'] }}</td>
                                            <td>  <img src="{{asset('images/'.$item['image'])}}" height="50px" width="50px" alt="">  </td>
                                            <td>{{ $item->category->name }}</td>
                                            {{-- <td> {{$item['tags']}} </td> --}}
                                            <td>
                                              {{-- {{ implode(",", $item->tags) ?? 'No data' }} --}}
                                              @foreach ($item->tags as $tag)                                              
                                                <li> {{$tag}} </li>
                                              @endforeach
                                          </td>
                                          
                                            <td>
                                                <a onclick="return confirm('are you sure ??')" href="{{route('product.delete', $item['id'])}}"> <button
                                                        class="btn btn-danger">delete</button> </a>
                                                <a href="{{route('product.edit', $item['id'])}}"> <button class="btn btn-warning"> Edit </button> </a>
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
