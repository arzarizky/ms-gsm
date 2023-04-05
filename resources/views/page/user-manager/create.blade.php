<!-- Modal -->
<div class="modal fade" id="CreateUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="CreateUserLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="CreateUserLabel">Create User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
<<<<<<< Updated upstream
                <form class="needs-validation" action="{{ route('user-manager.store') }}" method="POST" novalidate=""
                    enctype="multipart/form-data">
=======
                <form class="needs-validation" action="{{ route('user-manager.store') }}" method="POST" novalidate="" enctype="multipart/form-data">
>>>>>>> Stashed changes
                    @csrf
                    <div class="row ">
                        <div class="col-md-4 d-flex align-items-center justify-content-center">
                            <div class="profile-img-edit position-relative align-self-center">
<<<<<<< Updated upstream
                                <input type="file" hidden name="avatar" id="image-input-0" required="">
=======
                                <input type="file" name="avatar" id="image-input-0" required="" hidden>
>>>>>>> Stashed changes
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
                                <input type="text" name="name" class="form-control" id="name"
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
                                <input type="email" name="email" class="form-control" id="Email"
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
                                <input type="text" name="no_tlp" class="form-control" id="no_tlp"
                                    placeholder="Input No Telepon"
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
                        <select class="form-select" name="role_id" id="role" required="">
                            <option selected="" disabled="" value="">Choose Role</option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
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
                        <input type="text" class="form-control" name="password" id="password"
                            placeholder="Input No Password" required="">
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
                    onclick="event.preventDefault(); document.getElementById('create-user').click();"
                    class="btn btn-primary">
                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M21.4274 2.5783C20.9274 2.0673 20.1874 1.8783 19.4974 2.0783L3.40742 6.7273C2.67942 6.9293 2.16342 7.5063 2.02442 8.2383C1.88242 8.9843 2.37842 9.9323 3.02642 10.3283L8.05742 13.4003C8.57342 13.7163 9.23942 13.6373 9.66642 13.2093L15.4274 7.4483C15.7174 7.1473 16.1974 7.1473 16.4874 7.4483C16.7774 7.7373 16.7774 8.2083 16.4874 8.5083L10.7164 14.2693C10.2884 14.6973 10.2084 15.3613 10.5234 15.8783L13.5974 20.9283C13.9574 21.5273 14.5774 21.8683 15.2574 21.8683C15.3374 21.8683 15.4274 21.8683 15.5074 21.8573C16.2874 21.7583 16.9074 21.2273 17.1374 20.4773L21.9074 4.5083C22.1174 3.8283 21.9274 3.0883 21.4274 2.5783Z"
                            fill="currentColor"></path>
                        <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                            d="M3.01049 16.8079C2.81849 16.8079 2.62649 16.7349 2.48049 16.5879C2.18749 16.2949 2.18749 15.8209 2.48049 15.5279L3.84549 14.1619C4.13849 13.8699 4.61349 13.8699 4.90649 14.1619C5.19849 14.4549 5.19849 14.9299 4.90649 15.2229L3.54049 16.5879C3.39449 16.7349 3.20249 16.8079 3.01049 16.8079ZM6.77169 18.0003C6.57969 18.0003 6.38769 17.9273 6.24169 17.7803C5.94869 17.4873 5.94869 17.0133 6.24169 16.7203L7.60669 15.3543C7.89969 15.0623 8.37469 15.0623 8.66769 15.3543C8.95969 15.6473 8.95969 16.1223 8.66769 16.4153L7.30169 17.7803C7.15569 17.9273 6.96369 18.0003 6.77169 18.0003ZM7.02539 21.5683C7.17139 21.7153 7.36339 21.7883 7.55539 21.7883C7.74739 21.7883 7.93939 21.7153 8.08539 21.5683L9.45139 20.2033C9.74339 19.9103 9.74339 19.4353 9.45139 19.1423C9.15839 18.8503 8.68339 18.8503 8.39039 19.1423L7.02539 20.5083C6.73239 20.8013 6.73239 21.2753 7.02539 21.5683Z"
                            fill="currentColor"></path>
                    </svg>
                    Create User
                </button>
            </div>
        </div>
    </div>
</div>
