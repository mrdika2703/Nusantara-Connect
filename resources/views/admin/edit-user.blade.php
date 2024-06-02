<x-admin.layouts>
    <x-slot:title>{{ $title }}</x-slot:title>


    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('admin.update', ['user' => $user->id]) }}" method="POST">
                @method('PUT')
                @csrf

                <div class="mb-3">
                    <label class="form-label" for="username">Username</label>
                    <input type="text" id="username" name="username" value="{{ old('username') ?? $user->username }}"
                        class="form-control @error('username') is-invalid @enderror">
                    @error('username')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                  <div class="mb-3">
                      <label class="form-label" for="password">Password</label>
                      <input type="text" id="password" name="password" value="{{ old('password') ?? $user->password }}"
                          class="form-control @error('password') is-invalid @enderror">
                      @error('password')
                          <div class="text-danger">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="mb-3">
                      <label class="form-label" for="name">Nama Lengkap</label>
                      <input type="text" id="name" name="name"
                          value="{{ old('name') ?? $user->name }}"
                          class="form-control @error('name') is-invalid @enderror">
                      @error('name')
                          <div class="text-danger">{{ $message }}</div>
                      @enderror
                  </div>


                  <div class="mb-3">
                      <label class="form-label">Jenis Kelamin</label>
                      <div class="d-flex">
                          <div class="form-check me-3">
                              <input class="form-check-input" type="radio" name="gender" id="L"
                                  value="L"
                                  {{ (old('gender') ?? $user->gender) == 'L' ? 'checked' : '' }}>
                              <label class="form-check-label" for="L">Laki-laki</label>
                          </div>
                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="gender" id="P"
                                  value="P"
                                  {{ (old('gender') ?? $user->gender) == 'P' ? 'checked' : '' }}>
                              <label class="form-check-label" for="P">Perempuan</label>
                          </div>
                      </div>
                      @error('gender')
                          <div class="text-danger">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="mb-3">
                    <label class="form-label" for="nim">NIM</label>
                    <input type="text" id="nim" name="nim" value="{{ old('nim') ?? $user->nim }}"
                        class="form-control @error('nim') is-invalid @enderror">
                    @error('nim')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                  <div class="mb-3">
                      <label class="form-label" for="email">Email</label>
                      <textarea class="form-control" id="email" rows="3" name="email">{{ old('email') ?? $user->email }}</textarea>
                  </div>




                <button type="submit" class="btn btn-primary mb-2">Update</button>
            </form>
            {{-- <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Quick Example</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div> --}}
        </div>
    </section>

</x-admin.layouts>
