<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guest Form</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('/images/favicon.svg') }}" type="image/x-icon">

</head>

<body>
    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card shadow">
                    <div class="card-header">
                        GUEST FORM
                    </div>
                    <div class="card-body">
                        <p>Silahkan masukkan data kamu sebagai tamu pada form di bawah:</p>

                        <!-- Success message -->
                        @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                        @endif

                        <!-- Form -->
                        <form action="{{ route('form.store') }}" method="POST">
                            @csrf

                            <!-- Nama Lengkap -->
                            <div class="form-group mb-3">
                                <label for="fulname">Nama Lengkap :</label>
                                <input type="text" name="fulname" id="fulname" value="{{ old('fulname') }}"
                                    class="form-control @error('fulname') is-invalid @enderror">
                                @error('fulname')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Instansi and Dari -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="institutions_id">Instansi :</label>
                                        <select name="institutions_id" class="form-select @error('institutions_id') is-invalid @enderror">
                                            @foreach ($institutions as $item)
                                                <option value="{{ $item->id }}" @if(old('institutions_id') == $item->id) selected @endif>{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('institutions_id')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="form-group mb-3">
                                        <label for="from">Dari :</label>
                                        <input type="text" name="from" id="from" value="{{ old('from') }}"
                                            class="form-control @error('from') is-invalid @enderror">
                                        @error('from')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="form-group mb-3">
                                <label for="email">Email :</label>
                                <input type="email" name="email" id="email" value="{{ old('email') }}"
                                    class="form-control @error('email') is-invalid @enderror">
                                @error('email')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Nomor Telp/HP -->
                            <div class="form-group mb-3">
                                <label for="phonenumber">Nomor Telp/HP :</label>
                                <input type="text" name="phonenumber" id="phonenumber" value="{{ old('phonenumber') }}"
                                    class="form-control @error('phonenumber') is-invalid @enderror">
                                @error('phonenumber')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Alasan Kunjungan -->
                            <div class="form-group mb-3">
                                <label for="note">Alasan Kunjungan :</label>
                                <textarea name="note" id="note" class="form-control @error('note') is-invalid @enderror">{{ old('note') }}</textarea>
                                @error('note')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary">Submit
                                <span class="bi bi-send ms-2"></span>
                            </button>
                        </form>
                    </div>
                </div>

                <script src="{{ asset('/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
                <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
                <script src="{{ asset('/js/mazer.js') }}"></script>
            </div>
        </div>
    </div>
</body>

</html>
