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
                <form method="POST" action="{{route('blogs')}}">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label">Titolo:</label>
                      <input name="title" type="text" class="form-control" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tempo di preparazione:</label>
                        <input name="time" type="text" class="form-control" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 form-floating">
                        <textarea name="description" class="form-control" placeholder="descrizione" id="floatingTextarea2" style="height: 200px"></textarea>
                      </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>
