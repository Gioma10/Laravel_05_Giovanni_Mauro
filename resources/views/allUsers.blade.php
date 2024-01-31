<x-layout>
    <div class="container-fluid ">
        <div class="row h-100 justify-content-center">
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

          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
              <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>
                    <a class="btn btn-danger " href="#" onclick="event.preventDefault(); document.querySelector('#form-delete-{{$user->id}}').submit();">Elimina</a>
                  <form id="form-delete-{{$user->id}}" action="{{route('user-delete', $user)}}" method="POST" class="d-none">
                    @method('delete')
                    @csrf</form> 
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
            {{-- @foreach ($categories as $category)
            <div class="col-4 my-3">   
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">{{$category->name}}</h5>
                      <a href="{{route('category-show', $category)}}" class="btn btn-primary">Vai al dettaglio</a>
                    </div>
                  </div>
                </div>
                @endforeach --}}
        </div>
    </div>
</x-layout>