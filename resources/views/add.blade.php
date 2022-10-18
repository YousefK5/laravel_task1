@extends('master')

@section('content')
    <div class="container mx-auto mt-4">
        <div class="form-body">
            <div class="row">
                <div class="form-holder">
                    <div class="form-content">
                        <div class="form-items">
                            <h3 class="text-white">Add Book</h3>
                            <p class="text-white">Fill in the data below.</p>
                            <form method="POST" action="/store" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-8 m-4">
                                    <input class="form-control" type="text" name="name" placeholder="Book Name"
                                        required>
                                </div>
                                @error('name')
                                    <div class="alert-danger"></div>
                                @enderror

                                <div class="col-md-8 m-4">
                                    {{-- <input class="form-control" type="text" name="author" placeholder="Author Name"
                                        required> --}}
                                    <label for="authorName" class="text-white">Author Name</label>
                                    <select name="author_id" id="authorName">
                                        @foreach ($authorsArr as $author)
                                            <option value="{{ $author['id'] }}">{{ $author['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-8 m-4">
                                    <input class="form-control" type="text" name="description"
                                        placeholder="Short Description ..." required>
                                </div>

                                <div class="col-md-8 m-4">
                                    <input class="form-control" type="file" name="image" placeholder="Image URL"
                                        required>
                                </div>

                                <div class="form-button m-4">
                                    <button id="submit" type="submit" class="btn btn-primary">Add Book</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
