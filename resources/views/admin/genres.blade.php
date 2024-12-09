<x-layout>
    <x-dashboard-nav></x-dashboard-nav>
    @if(session('success'))
    <div class="col-6 alert alert-success">
        {{session('success')}}
    </div>
    @endif
    @error('name')
    <div class="col-6 alert alert-dange">
        {{$message}}
    </div>
    @enderror
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <form action="{{route('admin.dashboard.genres.store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Crea un nuovo genere musicale</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-dark">Crea</button>
                </form>
            </div>

            <div class="col-12 col-md-6">
                <table class="table striped border">
                    <thead>
                        <tr class="table-dark">
                            <th scope="col">#</th>
                            <th scope="col">Genere</th>
                            <th scope="col" class="px-5">Modifica nome genere</th>
                            <th scope="col"><p class="d-none">modifica</p></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($genres as $genre)
                        <tr>
                            <th scope="row">{{$genre->id}}</th>
                            <td>{{$genre->name}}</td>

                            <td class="border-start">
                                <form action="{{route('admin.dashboard.genres.update', compact('genre'))}}" method="post">
                                    @csrf
                                    @method('put')
                                    <div class="d-flex align-items-center">
                                        <input type="text" name="name" id="name" class="form-control me-3">
                                        <button class="btn btn-sm btn-outline-dark">Aggiorna</button>
                                    </div>
                                </form>
                            </td>

                            <td>
                                <form action="{{route('admin.dashboard.genres.destroy', compact('genre') )}}" method="POST">
                                    @csrf
                                 @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger mt-1">Elimina</button>
                                </form>
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-layout>