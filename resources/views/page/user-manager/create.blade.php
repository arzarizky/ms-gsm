<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form class="needs-validation" action="{{ route('user-manager.store') }}" method="POST" novalidate="">
                    @csrf
                    <div class="row ">
                        <div class="col-md-4 d-flex align-items-center justify-content-center">
                            <div class="profile-img-edit position-relative align-self-center">
                                <input type="file" name="avatar" id="image-input-0" required="">
                                <div class="valid-feedback mb-3">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback mb-3">
                                    Please Input Picture
                                </div>
                                <img id="image-preview-0" src="{{ asset('template') }}/assets/images/avatars/01.png"
                                    style="height: 140px; width: 140px;" alt="profile-pic"
                                    class="theme-color-default-img profile-pic rounded avatar-100">
                                <div class="upload-icone bg-primary" style="left: 110px;"
                                    onclick="event.preventDefault(); document.getElementById('image-input-0').click();">
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
                                <input type="text" name="name" class="form-control" id="name" placeholder="Input Name"
                                    required="" autofocus>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please Input Name
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="Email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="Email" placeholder="Input Email"
                                    required="">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please Input Email
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="no_tlp" class="form-label">Telepon</label>
                                <input type="text" name="no_tlp" class="form-control" id="no_tlp" placeholder="Input No Telepon"
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
                        <input type="text" class="form-control" name="password" id="password" placeholder="Input No Password"
                            required="">
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
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary"
                    onclick="event.preventDefault(); document.getElementById('create-user').click();">Understood</button>
            </div>
        </div>
    </div>
</div>
