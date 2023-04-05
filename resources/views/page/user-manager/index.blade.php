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
        <div class="card border-bottom border-4 border-0 border-primary pe-3 ps-3 pt-3">
            @include('page.user-manager.fitur')
        </div>

        <div class="mt-3">
            @include('page.user-manager.statistik')
        </div>

        <div class="mt-1">
            @include('page.user-manager.table-user')
        </div>
    </div>

    @include('page.user-manager.create')
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
