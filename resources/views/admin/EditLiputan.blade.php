<x-admin.layouts>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:authhName>{{ $authh->name }}</x-slot:authhName>
    <x-slot:authhNim>{{ $authh->nim }}</x-slot:authhNim>

    @if (session('success'))
        <script>
            swal({
                title: "Berhasil!",
                text: "{{ session('success') }}",
                icon: "success",
                button: "OK",
            });
        </script>
    @endif

    <!-- Menampilkan pesan error menggunakan SweetAlert -->
    @if (session('error'))
        <script>
            swal({
                title: "Gagal!",
                text: "{{ session('error') }}",
                icon: "error",
                button: "OK",
            });
        </script>
    @endif

    <!-- Menampilkan pesan error dari validasi -->
    @if ($errors->any())
        <script>
            let errorMessage = '';
            @foreach ($errors->all() as $error)
                errorMessage += '{{ $error }}\n';
            @endforeach

            swal({
                title: "Gagal!",
                text: errorMessage,
                icon: "error",
                button: "OK",
            });
        </script>
    @endif


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-primary" type="button" class="btn btn-default" data-toggle="modal"
                                data-target="#modal-tambah-user">
                                Tambah Data
                            </button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Jenis Budaya</th>
                                        <th>Daerah</th>
                                        <th>Judul</th>
                                        <th>Penjelasan</th>
                                        <th>Dibuat</th>
                                        <th>Gambar</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($liputan as $liputanItem)
                                        <tr>
                                            <td>{{ $liputanItem->id }}</td>
                                            <td>{{ $liputanItem->jenis_budaya }}</td>
                                            <td>{{ $liputanItem->provinsi->nama_provinsi }}</td>
                                            <td>{{ $liputanItem->nama_liputan }}</td>
                                            <td>{{ Str::limit($liputanItem->penjelasan_liputan, 15) }}</td>
                                            <td>{{ $liputanItem->created_at }}</td>
                                            <td class="h-25" style="width: 120px;">
                                                <div class="ratio ratio-16x9">
                                                    <img src="{{ asset($liputanItem->gambar_liputan) }}" alt="image"
                                                        class="img-fluid w-100">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ route('admin.edit-liputan', ['liputan' => $liputanItem->id]) }}"
                                                    class="btn btn-sm btn-primary btn-edit" type="button">Edit</a>
                                                {{-- <button class="btn btn-sm btn-primary btn-edit" type="button" data-toggle="modal"
                                            data-target="#modal-edit-user" data-id="{{ $liputanItem->id }}" data-username="{{ $liputanItem->username }}"
                                            data-name="{{ $liputanItem->name }}" data-gender="{{ $liputanItem->gender }}" data-nim="{{ $liputanItem->nim }}"
                                            data-email="{{ $liputanItem->email }}">
                                                Edit
                                            </button> --}}
                                                <form method="POST"
                                                    action="{{ route('admin.destroy.liputan', ['liputan' => $liputanItem->id]) }}"
                                                    class="d-inline delete-form">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="button"
                                                        class="btn btn-sm btn-danger btn-delete">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan='7' class='text-center'>
                                                <span class='badge bg-danger'> Data Kosong </span>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Jenis Budaya</th>
                                        <th>Daerah</th>
                                        <th>Judul</th>
                                        <th>Penjelasan</th>
                                        <th>Dibuat</th>
                                        <th>Gambar</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->

        <div class="modal fade" id="modal-tambah-user">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Data</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('admin.liputan') }}" method="POST" enctype="multipart/form-data" class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="jenis">Jenis Budaya</label>
                            <select class="form-control select2" style="width: 100%;" id="jenis" name="jenis">
                                <option selected="selected" value="tradisi">Tradisi</option>
                                <option value="kesenian">Kesenian</option>
                                <option value="kuliner">Kuliner</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="liputan_daerah">Asal Berita</label>
                            <select class="form-control select2" style="width: 100%;" id="liputan_daerah" name="liputan_daerah">
                                @forelse ($provinsi as $provinsis)
                                <option 
                                @if ( old('liputan_daerah') == $provinsis->nama_provinsi )
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
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul"
                                placeholder="Masukkan Judul" value="{{ old('judul') }}">
                        </div>
                        <div class="form-group">
                            <label for="penjelasan">Penjelasan</label>
                            <textarea class="form-control" rows="3" placeholder="Masukkan Penjelasan" id="penjelasan" name="penjelasan"></textarea>
                        </div>
                    
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                    <label class="custom-file-label" for="gambar">Choose file</label>
                                </div>
                            </div>
                        </div>
                    
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                    
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const deleteForms = document.querySelectorAll('.delete-form');

                deleteForms.forEach(form => {
                    const deleteButton = form.querySelector('.btn-delete');

                    deleteButton.addEventListener('click', function(event) {
                        event.preventDefault();

                        Swal.fire({
                            title: 'Apakah Anda yakin?',
                            text: "Anda tidak akan bisa mengembalikan ini!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Ya, hapus!'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                form.submit();
                            }
                        });
                    });
                });
            });
        </script>

    </section>



</x-admin.layouts>
