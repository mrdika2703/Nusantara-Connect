<x-admin.layouts>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:authhName>{{ $authh->name }}</x-slot:authhName>
    <x-slot:authhNim>{{ $authh->nim }}</x-slot:authhNim>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <form action="{{ route('admin.update', ['user' => $user->id]) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label" for="username">Username</label>
                            <input type="text" id="username" name="username"
                                value="{{ old('username') ?? $user->username }}"
                                class="form-control @error('username') is-invalid @enderror">
                            @error('username')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="password">Password</label>
                            <input type="text" id="password" name="password"
                                value="{{ old('password') ?? $user->password }}"
                                class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="name">Nama Lengkap</label>
                            <input type="text" id="name" name="name" value="{{ old('name') ?? $user->name }}"
                                class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label class="form-label">Jenis Kelamin</label>
                            <div class="d-flex">
                                <div class="form-check me-3">
                                    <input class="form-check-input" type="radio" name="gender" id="L"
                                        value="L" {{ (old('gender') ?? $user->gender) == 'L' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="L">Laki-laki</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="P"
                                        value="P" {{ (old('gender') ?? $user->gender) == 'P' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="P">Perempuan</label>
                                </div>
                            </div>
                            @error('gender')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="nim">NIM</label>
                            <input type="text" id="nim" name="nim" value="{{ old('nim') ?? $user->nim }}"
                                class="form-control @error('nim') is-invalid @enderror">
                            @error('nim')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="email">Email</label>
                            <textarea class="form-control" id="email" rows="3" name="email">{{ old('email') ?? $user->email }}</textarea>
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
