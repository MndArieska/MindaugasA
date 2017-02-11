@include("layout.header")




    @yield("content")

  
    <div class="container">

        <div class="enter-book">
            <a href="{{ route('book.index') }}" title="Sarasas"><h1>Knygu Sarasas</h1></a>
        </div>
    
    </div>






@include("layout.footer")
