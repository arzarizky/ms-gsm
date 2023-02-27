<nav class="nav navbar navbar-expand-lg navbar-light iq-navbar">
    <div class="container-fluid navbar-inner p-2">
        <div class="mr-auto"></div>
        <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
            <i class="icon">
                <svg width="20px" height="20px" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                </svg>
            </i>
        </div>
        <ul class="mb-2 navbar-nav ms-auto align-items-center navbar-list mb-lg-0">
            <li class="nav-item dropdown me-3">
                <a class="py-0 nav-link d-flex align-items-center" href="#" id="navbarDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('template') }}/assets/images/avatars/01.png" alt="User-Profile"
                        class="theme-color-default-img img-fluid avatar avatar-50 avatar-rounded">




                    <div class="caption ms-3 d-none d-md-block ">
                        <h6 class="mb-0 caption-title">{{ auth()->user()->name }}</h6>
                        <p class="mb-0 caption-sub-title">{{ auth()->user()->role }}</p>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end rounded-3" aria-labelledby="navbarDropdown">
                    <li>
                        <a class="dropdown-item" href="{{ asset('template') }}/dashboard/app/user-profile.html"
                            style="cursor: pointer;">
                            <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.997 15.1746C7.684 15.1746 4 15.8546 4 18.5746C4 21.2956 7.661 21.9996 11.997 21.9996C16.31 21.9996 19.994 21.3206 19.994 18.5996C19.994 15.8786 16.334 15.1746 11.997 15.1746Z"
                                    fill="currentColor"></path>
                                <path opacity="0.4"
                                    d="M11.9971 12.5838C14.9351 12.5838 17.2891 10.2288 17.2891 7.29176C17.2891 4.35476 14.9351 1.99976 11.9971 1.99976C9.06008 1.99976 6.70508 4.35476 6.70508 7.29176C6.70508 10.2288 9.06008 12.5838 11.9971 12.5838Z"
                                    fill="currentColor"></path>
                            </svg>
                            <span class="ms-2 "> Profile</span>
                        </a>
                    </li>
                    <hr class="dropdown-divider">
            </li>
            <li>
                <a class="dropdown-item" data-setting="color-mode" data-name="color" data-value="auto"
                    style="cursor: pointer;">
                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill="currentColor" d="M7,2V13H10V22L17,10H13L17,2H7Z" />
                    </svg>
                    <span class="ms-2 "> Auto </span>
                </a>
            </li>
            <li>
                <a class="dropdown-item" data-setting="color-mode" data-name="color" data-value="dark"
                    style="cursor: pointer;">
                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill="currentColor"
                            d="M9,2C7.95,2 6.95,2.16 6,2.46C10.06,3.73 13,7.5 13,12C13,16.5 10.06,20.27 6,21.54C6.95,21.84 7.95,22 9,22A10,10 0 0,0 19,12A10,10 0 0,0 9,2Z" />
                    </svg>
                    <span class="ms-2 "> Dark </span>
                </a>
            </li>
            <li>
                <a class="dropdown-item" data-setting="color-mode" data-name="color" data-value="light"
                    style="cursor: pointer;">
                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill="currentColor"
                            d="M12,8A4,4 0 0,0 8,12A4,4 0 0,0 12,16A4,4 0 0,0 16,12A4,4 0 0,0 12,8M12,18A6,6 0 0,1 6,12A6,6 0 0,1 12,6A6,6 0 0,1 18,12A6,6 0 0,1 12,18M20,8.69V4H15.31L12,0.69L8.69,4H4V8.69L0.69,12L4,15.31V20H8.69L12,23.31L15.31,20H20V15.31L23.31,12L20,8.69Z" />
                    </svg>
                    <span class="ms-2 "> Light</span>
                </a>
            </li>
            </li>
            <hr class="dropdown-divider">
            </li>
            <li>
                <a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout').click();"
                    style="cursor: pointer;">
                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.4"
                            d="M2 6.447C2 3.996 4.03024 2 6.52453 2H11.4856C13.9748 2 16 3.99 16 6.437V17.553C16 20.005 13.9698 22 11.4744 22H6.51537C4.02515 22 2 20.01 2 17.563V16.623V6.447Z"
                            fill="currentColor"></path>
                        <path
                            d="M21.7787 11.4548L18.9329 8.5458C18.6388 8.2458 18.1655 8.2458 17.8723 8.5478C17.5802 8.8498 17.5811 9.3368 17.8743 9.6368L19.4335 11.2298H17.9386H9.54826C9.13434 11.2298 8.79834 11.5748 8.79834 11.9998C8.79834 12.4258 9.13434 12.7698 9.54826 12.7698H19.4335L17.8743 14.3628C17.5811 14.6628 17.5802 15.1498 17.8723 15.4518C18.0194 15.6028 18.2113 15.6788 18.4041 15.6788C18.595 15.6788 18.7868 15.6028 18.9329 15.4538L21.7787 12.5458C21.9199 12.4008 21.9998 12.2048 21.9998 11.9998C21.9998 11.7958 21.9199 11.5998 21.7787 11.4548Z"
                            fill="currentColor"></path>
                    </svg>
                    <span class="ms-2 "> Logout</span>
                </a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button id="logout" type="submit" hidden></button>
                </form>
            </li>
        </ul>
        </li>
        </ul>
    </div>
</nav>
