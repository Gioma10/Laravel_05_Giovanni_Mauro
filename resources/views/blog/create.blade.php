<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h1 class="text-center display-3">Aggiungi un articolo!</h1>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-6">
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
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('blog-store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Titolo:</label>
                        <input name="title" type="text" class="form-control" ">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tempo di preparazione:</label>
                        <input name="time" type="text" class="form-control" ">
                    </div>
                    <label for="flotingtextarea2" class="form-label">Descrizione:</label>
                    <div class="mb-3 form-floating">
                        <textarea name="description" class="form-control" placeholder="descrizione" id="floatingTextarea2"
                            style="height: 200px"></textarea>
                    </div>
                    <div class="mb-3 form-floating">
                        <label class="form-label" for="">Seleziona categoria:</label>
                        <select class="form-control" name="categories[]" multiple id="selectCategory">
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">
                                    {{$category->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Immagine:</label>
                        <input name="img" type="file" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
