<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center my-5">

                <span id="element" class="fs-1"></span>
                <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
                <script>
                    var typed = new Typed('#element', {
                        strings: ['inserisci una nuova traccia'],
                        typeSpeed: 50,
                    });
                </script>
                </body>

            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6">
                <form action="{{route('track.create')}}" method="POST" class="rounded p-5 border" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{old('title')}}">
                        @error('title')
                        <span class="small text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="cover" class="form-label">Cover</label>
                        <input type="file" name="cover" class="form-control" id="cover" value="{{old('cover')}}">
                        @error('cover')
                        <span class="small text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="path" class="form-label">Brano</label>
                        <input type="file" name="path" class="form-control" id="path">
                        @error('path')
                        <span class="small fst-italic text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea name="description" class="form-control" id="description">{{old('description')}}</textarea>
                        @error('description')
                        <span class="small text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-dark">Pubblica</button>
                    <a href="{{route('welcome')}}" class="btn btn-outline-dark">Torna alla home</a>

                </form>
            </div>
        </div>
    </div>








</x-layout>