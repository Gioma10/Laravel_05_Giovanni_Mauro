<x-layout>
    <div class="container-fluid vh-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif
                <h1>Benvenuti a tutti</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid ">
        <div class="row h-100 justify-content-center">
            @foreach ($blogs as $blog)
            <div class="col-4 my-3">   
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$blog->title}}</h5>
                      <p class="card-text">{{$blog->time}}</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
                @endforeach
        </div>
    </div>
</x-layout>