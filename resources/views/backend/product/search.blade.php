@extends('backend.layouts.app')
{{-- @section('title', 'Search') --}}
@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>General Tables</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">General</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Default Table</h5>

            <form action="">
                <input type="text" name="search" placeholder="Search Your Product">
            </form>
            <!-- Default Table -->
            <table class="table">
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
            <!-- End Default Table Example -->
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection