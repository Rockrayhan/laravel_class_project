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

                            {{--======== erros ========--}}

                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                            <!-- General Form Elements -->
                            <form action="{{ route('product/store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Product Name:</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control" value="{{old('name')}}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Description:</label>
                                    <div class="col-sm-10">
                                        <textarea name="desc" cols="50" rows="5"> {{old('desc')}} </textarea>
                                    </div>
                                </div>

                                {{-- price --}}
                                <div class="row mt-5 mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Price:</label>
                                    <div class="col-sm-10"> 
                                        <input type="number" name="price" class="form-control" value="{{old('price')}}">
                                    </div>
                                </div>

                                {{-- category --}}
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Category</label>
                                    <div class="col-sm-10">
                                        <select name="category" id="">
                                            <option value=""> select a category </option>
                                            @foreach ($cats as $item)
                                                <option value="{{ $item['id'] }}"  {{old('category')== $item['id'] ? 'selected' : ''}}> {{ $item['name'] }}  </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{-- ===== radios ======= --}}
                                <fieldset class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Product Status</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="available" id="gridRadios1"
                                                value="1" {{old('available') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="gridRadios1">
                                                Available
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="available" id="gridRadios2"
                                                value="0" {{old('available') ? '' : 'checked'}}>
                                            <label class="form-check-label" for="gridRadios2">
                                                Not Available
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>

                                {{-- ===== checkbox ======= --}}
                                <div class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Tags</legend>
                                    <div class="col-sm-10">

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck1" name="tags[]"
                                                value="easy" {{in_array('easy', old('tags', [])) ? 'checked': '' }}>
                                            <label class="form-check-label" for="gridCheck1">
                                                Easy
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck2" name="tags[]"
                                                value="colors" {{in_array('colors', old('tags', [])) ? 'checked': '' }}>
                                            <label class="form-check-label" for="gridCheck2">
                                                Colors
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck2" name="tags[]"
                                                value="richman" {{in_array('richman', old('tags', [])) ? 'checked': '' }}>
                                            <label class="form-check-label" for="gridCheck2">
                                                Richman
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck2" name="tags[]"
                                                value="odc" {{in_array('odc', old('tags', [])) ? 'checked': '' }}>
                                            <label class="form-check-label" for="gridCheck2">
                                                O_D_C
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                {{-- Image --}}
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Image Upload</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="photo" type="file" id="formFile">
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
