@extends('layouts.app', [
    'title' => 'Dashboard',
])

@section('header-konten')
    <div class="iq-navbar-header" style="height: 215px;">
        <div class="container-fluid iq-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flex-wrap d-flex justify-content-between align-items-center">
                        <div>
                            <h1>User Manager</h1>
                            <p>Super Admin</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="iq-header-img">
            <img src="{{ asset('template') }}/assets/images/dashboard/top-header.png" alt="header"
                class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX">
        </div>
    </div>
@endsection

@section('body-konten')
    <div class="conatiner-fluid content-inner mt-n5 py-0" data-aos="fade-up" data-aos-delay="800">
        <form class="needs-validation" action="{{ route('user-manager.store') }}" method="POST" novalidate=""
            enctype="multipart/form-data">
            @csrf
            <div class="row ">
                <div class="col-md-4 d-flex align-items-center justify-content-center">
                    <div class="profile-img-edit position-relative align-self-center">
                        <input type="file" hidden name="avatar" id="image-input-{{ $user->id }}" required="">
                        <div class="valid-feedback mb-3">
                            Looks good!
                        </div>
                        <div class="invalid-feedback mb-3">
                            Please Input Picture
                        </div>
                        @if ($user->avatar == null)
                            <img id="image-preview-{{ $user->id }}" style="height: 140px; width: 140px;"
                                src="{{ asset('template') }}/assets/images/avatars/01.png" alt="profile-pic"
                                class="theme-color-default-img profile-pic rounded avatar-100" alt="profile">
                        @else
                            <img id="image-preview-{{ $user->id }}" src="{{ $user->avatar }}"
                                style="height: 140px; width: 140px;" alt="profile-pic"
                                class="theme-color-default-img profile-pic rounded avatar-100">
                        @endif
                        <div class="upload-icone bg-primary" style="left: 110px;"
                            onclick="event.preventDefault(); document.getElementById('image-input-{{ $user->id }}').click();">
                            <svg class="upload-button" width="14" height="14" viewBox="0 0 24 24">
                                <path fill="#ffffff"
                                    d="M14.06,9L15,9.94L5.92,19H5V18.08L14.06,9M17.66,3C17.41,3 17.15,3.1 16.96,3.29L15.13,5.12L18.88,8.87L20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18.17,3.09 17.92,3 17.66,3M14.06,6.19L3,17.25V21H6.75L17.81,9.94L14.06,6.19Z">
                                </path>
                            </svg>
                        </div>
                    </div>

                </div>

                <div class="col-md-8">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" value="{{ $user->name }}" name="name" class="form-control" id="name"
                            placeholder="Input Name" required="" autofocus>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please Input Name
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="Email" class="form-label">Email</label>
                        <input type="email" name="email" value="{{ $user->email }}" class="form-control" id="Email"
                            placeholder="Input Email" required="">
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please Input Email
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="no_tlp" class="form-label">Telepon</label>
                        <input type="text" name="no_tlp" value="{{ $user->no_tlp }}" class="form-control"
                            id="no_tlp" placeholder="Input No Telepon"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                            required="">
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please Input Telepon
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select class="form-select" name="role" id="role" required="">
                    <option selected="" disabled="" value="">Choose Role</option>
                    @foreach ($roles as $role)
                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                    @endforeach
                </select>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Please Select Role
                </div>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="text" value="{{ $user->password }}" class="form-control" name="password"
                    id="password" placeholder="Input No Password" required="">
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Please Input Password
                </div>
            </div>
            <button id="create-user" type="submit" hidden></button>
            <button id="create-user" type="submit" hidden></button>
        </form>
    </div>
@endsection

@push('konten')
    <script>
        const input = document.getElementById('image-input-0');
        const preview = document.getElementById('image-preview-0');

        input.addEventListener('change', () => {
            const file = input.files[0];
            const reader = new FileReader();

            reader.addEventListener('load', () => {
                preview.src = reader.result;
            }, false);

            if (file) {
                reader.readAsDataURL(file);
            }
        });
    </script>



    @if ($errors->any())
        <script>
            iziToast.error({
                title: 'Error',
                message: ' {!! implode('', $errors->all('<div>:message</div>')) !!}',
                position: 'topRight',
            });
        </script>
    @endif

    @if ($message = Session::get('error'))
        <script>
            iziToast.error({
                title: 'Error',
                position: 'topRight', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
                message: '{{ $message }}',
            });
        </script>
    @endif

    @if ($message = Session::get('success'))
        <script>
            iziToast.success({
                title: 'Sukses',
                position: 'topRight', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
                message: '{{ $message }}',
            });
        </script>
    @endif
@endpush
