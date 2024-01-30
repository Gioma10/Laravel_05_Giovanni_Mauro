<x-layout>

        <div class="col-4 my-3">   
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$category->name}}</h5>
                    <a href="{{route('category-index')}}" class="btn btn-primary">Torna indietro</a>
                </div>
            </div>
        </div>
 
</x-layout>