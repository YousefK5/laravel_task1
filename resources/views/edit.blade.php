@extends('master')

@section('content')
    <div class="container mx-auto mt-4">
        <div class="form-body">
            <div class="row">
                <div class="form-holder">
                    <div class="form-content">
                        <div class="form-items">
                            <h3 class="text-white">Edit Book</h3>
                            <p class="text-white">Fill in the data below.</p>
                            <form method="POST" action="/update/{{ $book['id'] }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="col-md-8 m-4">
                                    <input class="form-control" type="text" name="name" placeholder="Book Name"
                                        value="{{ $book['name'] }}" required>
                                </div>
                                @error('name')
                                    <div class="alert-danger"></div>
                                @enderror

                                <div class="col-md-8 m-4">
                                    <input class="form-control" type="text" name="author" placeholder="Author Name"
                                        value="{{ $book['author'] }}" required>
                                </div>

                                <div class="col-md-8 m-4">
                                    <input class="form-control" type="text" name="description"
                                        value="{{ $book['description'] }}" placeholder="Short Description ..." required>
                                </div>


                                <div class="col-md-8 m-4">
                                    <input class="form-control" type="file" name="image" placeholder="Image URL">
                                </div>


                                <div class="form-button m-4">
                                    <button id="submit" type="submit" class="btn btn-primary">Update Book</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
