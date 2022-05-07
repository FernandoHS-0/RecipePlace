@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="row">
                    <img src="{{asset($receta['multimedia'])}}" alt="{{$receta['titulo']}}" class="img-fluid">
                </div>
                <div class="row">
                    <div class="col">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}" class="fa fa-facebook" target="_blank"></a>
                        <a href="https://twitter.com/intent/tweet?text=Mira%20la%20receta%20que%20encontr%C3%A9! {{url()->current()}}" class="fa fa-twitter" target="_blank"></a>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <h1>{{$receta['titulo']}}</h1>
                <form action="{{url('/perfilUsuario/'.$usuario['id'])}}" method="get">
                    <h5>Publicado por: <button type="submit" style="border: none; background: none; color:#D92534;">{{$usuario['name']}}</button></h5>
                </form>
                <h3>Descripción:</h3>
                <p>{{$receta['descripcion']}}</p>
                <h3>Tiempo de preparación:</h3>
                <p>{{$receta['tiempo']}}</p>
                <h3>Ingredientes:</h3>
                <textarea name="ingredientes" cols="100" rows="10" disabled style="border: none;">{{$receta['ingredientes']}}</textarea>
                <h3>Instrucciones:</h3>
                <textarea name="instrucciones" cols="100" rows="10" disabled style="border: none;">{{$receta['instrucciones']}}</textarea>
            </div>
        </div>
        <div class="row">
            <div id="disqus_thread"></div>
            <script>
                /**
                *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */

                var disqus_config = function () {
                this.page.url = '{{ url()->current() }}';  // Replace PAGE_URL with your page's canonical URL variable
                this.page.identifier = '{{ request()->path() }}'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                };

                (function() { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                s.src = 'https://reciplace.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
                })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        </div>
    </div>

@endsection
