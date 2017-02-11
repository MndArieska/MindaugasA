@include("layout.header")

@yield("content")

  
    <div class="container">
        <h1>isirink sau idomiausia</h1>
        <div class="row">
    @foreach ($books as $book)    
            <div class="col-md-2">
                <div class="book-box">
                    <div class="description">
                        <p>{{ $book->pavadinimas }}</p>
                    </div>
                    <div class="photo">
                        <a href="{{ route('book.show', $book->id) }}"><img class="img-responsive" src="{{ $book->nuotrauka }}"></a>
                    </div>
                    <div class="year-type">
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li>Metai</li>
                                    <li>Zanras</li>
                                </ul>
                            </div>
                            <div class="col-md-6 book-info">
                                <ul>
                                    <li>{{ $book->metai}}</li>
                                    <li>{{ $book->zanras }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @endforeach    
        </div>
    </div>






@include("layout.footer")
