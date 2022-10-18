@extends('master')

@section('content')
    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="delete" method="post">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Book</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="bookid" id="book_id">
                        <h5>Are You Sure To Delete This Book ?</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Yes Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="container mx-auto mt-4">
        <div class="row m-5">
            <div class="col-md-6">
                <a href="/add"><button type="button" class="btn btn-primary btn-lg">ADD NEW BOOK</button>
                </a>
            </div>
            <div class="col-md-6">
                <a href="/trash"><button type="button" class="btn btn-primary btn-lg">Trash Page</button>
                </a>
            </div>
        </div>
        <div class="row">
            @foreach ($booksArr as $book)
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="data:image/jpg;charset=utf8;base64,
                    {{ $book['image'] }}"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $book['name'] }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $book['author']['name'] }}</h6>
                            <p class="card-text">{{ $book['description'] }}</p>
                            <a href="edit/{{ $book['id'] }}" class="btn mr-2"><i class="fas fa-edit"></i> Edit</a>
                            {{-- <a href="delete/{{ $book['id'] }}" class="btn "><i class="fab fa-del"></i> Delete</a> --}}
                            <button type="button" class="btn mr-2 deleteBook" value="{{ $book['id'] }}"><i
                                    class="fab fa-del"></i>
                                Delete</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.deleteBook').click(function(e) {
                e.preventDefault();
                let bookId = $(this).val();
                $('#book_id').val(bookId);
                $('#deleteModal').modal('show');
            });
        });
    </script>
@endsection
