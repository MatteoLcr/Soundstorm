<x-layout>

    <h5>Modifica della traccia</h5>

    <div class="container">
        <div class="row">
            <div class="col-5">
                <div class="d-flex flex-column align-items-center mb-4">
                    <label for="" class="form-label fw-bold">Cover attuale</label>
                    <img width="200" class="rounded-pill" src="{{Storage::url($track->cover)}}" alt="Cover {{$track->title}}">
                </div>
                <div class="d-flex flex-column align-items-center">
                    <label for="" class="form-label fw-bold"></label>
                    <audio class="w-100" controls>
                        <source src="{{Storage::url($track->path)}}" type="audio/mpeg"> your browser doesn't support the audio tag.
                    </audio>
                </div>
            </div>
            <div class="col-6">
                <form class="rounded p-5 border" action="{{route('track.update', compact('track'))}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{old('title', $track->title)}}">
                        @error('title')
                        <span class="small fst-italic text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="cover" class="form-label">Cover</label>
                        <input type="file" name="cover" class="form-control" id="cover">
                        @error('cover')
                        <span class="small fst-italic text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="path" class="form-label">Brano</label>
                        <input type="file" name="path" class="form-control" id="path">
                        @error('path')
                        <span class="small fst-italic text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione del brano</label>
                        <textarea name="description" class="form-control" id="description" rows="3">{{old('description', $track->description)}}</textarea>
                        @error('description')
                        <span class="small fst-italic text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Generi</label>
                        <div>
                            @foreach ($genres as $genre)
                            <input
                                type="checkbox"
                                name="genres[]"
                                value="{{$genre->id}}"
                                class="btn-check"
                                id="btn-check-{{$genre->id}}"
                                autocomplete="off"
                                {{ $genre->tracks->contains($track) ? 'checked' : ''}}>
                            <label class="btn btn-outline-dark my-1" for="btn-check-{{$genre->id}}">{{$genre->name}}</label>
                            @endforeach
                        </div>
                        @error('genres')
                        <span class="small fst-italic text-danger">{{$message}}</span>">
                        @enderror
                    </div>
                    <div class="mt-5">
                        <a href="{{route('welcome')}}" class="btn btn-outline-dark">Torna alla home</a>
                        <button type="submit" class="btn btn-dark">Modifica brano</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>