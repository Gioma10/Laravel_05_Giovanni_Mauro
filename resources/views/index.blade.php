<x-layout>
    {{-- header  --}}
    <header>
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center">
                    <img src="/public/storage/img/header.jpeg" alt="">
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
                    <h1 class="display-1"><span class="acca1">B</span> <span class="acca1">E</span> <span class="acca1">N</span> <span class="acca1">V</span> <span class="acca1">E</span> <span class="acca1">N</span> <span class="acca1">U</span> <span class="acca1">T</span> <span class="acca1">I</span> </h1>
                </div>
            </div>
        </div>
    </header>
    {{-- section 1  --}}
    <section>
    <div class="container-fluid ">
        <div class="row h-100 justify-content-center">
            @foreach ($blogs as $blog)
            <div class="col-4 my-3">   
                <div class="card" style="width: 18rem;">
                    <img src="{{Storage::url($blog->img)}}" class="card-img-top" alt="...">
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
</section>
</x-layout>