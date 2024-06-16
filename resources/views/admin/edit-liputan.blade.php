<x-admin.layouts>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:authhName>{{ $authh->name }}</x-slot:authhName>
    <x-slot:authhNim>{{ $authh->nim }}</x-slot:authhNim>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <form action="{{ route('admin.update.liputan', ['liputan' => $liputan->id]) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label" for="judul">Judul Liputan</label>
                            <input type="text" id="judul" name="judul"
                                value="{{ old('judul') ?? $liputan->nama_liputan }}"
                                class="form-control @error('judul') is-invalid @enderror">
                            @error('judul')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis Budaya</label>
                            <select class="form-control select2" id="jenis" name="jenis">
                                <option value="tradisi" {{ old('jenis', $liputan->jenis_budaya) == 'tradisi' ? 'selected' : '' }}>Tradisi</option>
                                <option value="kesenian" {{ old('jenis', $liputan->jenis_budaya) == 'kesenian' ? 'selected' : '' }}>Kesenian</option>
                                <option value="kuliner" {{ old('jenis', $liputan->jenis_budaya) == 'kuliner' ? 'selected' : '' }}>Kuliner</option>
                            </select>
                            @error('jenis')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="asal">Asal Berita</label>
                            <select class="form-control select2" style="width: 100%;" id="asal" name="asal">
                                @forelse ($provinsi as $provinsis)
                                <option 
                                @if ( old('asal') == $provinsis->id )
                                selected="selected"
                                @endif 
                                value="{{ $provinsis->id }}">{{ $provinsis->nama_provinsi }}</option>
                                @empty
                                <option selected="selected">Jawa Timur</option>
                                <option>Jawa Tengah</option>
                                <option>Jawa Barat</option>
                                @endforelse
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="penjelasan">Penjelasan</label>
                            <textarea class="form-control" rows="3" id="penjelasan" name="penjelasan">{{ old('penjelasan') ?? $liputan->penjelasan_liputan }}</textarea>
                            @error('penjelasan')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                    <label class="custom-file-label" for="gambar">Choose file</label>
                                </div>
                            </div>
                            @if ($liputan->gambar_liputan)
                                <img src="{{ asset($liputan->gambar_liputan) }}" alt="Gambar Liputan" class="img-thumbnail mt-2" width="150">
                            @endif
                            @error('gambar')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mb-2">Update</button>
                    </div>
                </form>
                
                
            </div>
        </div>
    </section>

</x-admin.layouts>
