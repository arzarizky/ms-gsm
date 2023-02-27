<div class="card" data-aos="fade" data-aos-delay="2400">
    <div class="card-header d-flex justify-content-between">
        <div class="header-title">
            <h4 class="card-title">Table Users</h4>
        </div>
    </div>
    <div class="card-body p-0">
        <div id="users" class="table-responsive mt-4">
            <table class="table table-striped table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th class="text-center">Picture</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>No Tlp</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td class="text-center">
                                @if ($user->avatar == null)
                                    <img class="theme-color-default-img img-fluid avatar avatar-50 avatar-rounded" src="{{ asset('template') }}/assets/images/avatars/01.png" alt="profile">
                                @else
                                 <img class="theme-color-default-img img-fluid avatar avatar-50 avatar-rounded" src="{{ $user->avatar }}" alt="profile">
                                @endif

                            </td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->no_tlp }}</td>
                            <td>
                                @if ($user->isSuperAdmin())
                                    Super Admin
                                @elseif ($user->isPelanggan())
                                    Pelanggan
                                @elseif ($user->isSales())
                                    Sales
                                @elseif ($user->isTeknisi())
                                    Teknisi
                                @endif
                            </td>
                            <td>
                                <div class="flex align-items-center list-user-action">
                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Edit" href="#"><i
                                            class="ri-pencil-line"></i></a>
                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Delete" href="#"><i
                                            class="ri-delete-bin-line"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
