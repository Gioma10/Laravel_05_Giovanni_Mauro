<x-layout>

        <div class="col-4 my-3">   
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$blog->name}}</h5>
                    <h4>Inserito da:</h4>
                    @Auth
                    @if (Auth::user())
                    <p>{{$blog->user->name}}</p>
                    
                    @else
                        <p>Nessun utente collegato</p>
                    @endif
                    @endauth
                    
                    <a href="{{route('category-index')}}" class="btn btn-primary">Torna indietro</a>
                </div>
            </div>
        </div>

        
 
</x-layout>