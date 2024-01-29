 <x-lyout>
     <div class="container">
         <div class="row">
             <div class="col-12 mt-5">
                 <h1 class="text-center display-3">Accedi!</h1>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-6">
                    {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif --}}
                        <form method="POST" action="{{route('login')}}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Email:</label>
                                <input name="email" type="text" class="form-control" ">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password:</label>
                                <input name="password" type="password" class="form-control" ">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </x-lyout>  
            