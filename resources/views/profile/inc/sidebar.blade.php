<aside class="col-xl-3 flex-grow-xl-1 flex-shrink-1 flex-grow-0 sticky-top pb-xl-0 pb-3" data-aos="fade-up" data-aos-delay="100">
    <div class="bg-light border rounded-3 p-1 h-100 sticky-top">
        <ul class="nav nav-pills navmenu flex-xl-column flex-row mb-auto justify-content-between text-truncate">
            <li>    
                <a href="{{ url('/dashboard') }}" class="nav-link px-2 text-truncate {{ Request::is('dashboard') ? 'active' : '' }}">
                    <i class="bi bi-speedometer fs-5"></i>
                    <span class="d-none d-xl-inline">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link px-2 text-truncate">
                    <i class="bi bi-person fs-5"></i>
                    <span class="d-none d-xl-inline">Enrollment Info</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link px-2 text-truncate">
                    <i class="bi bi-person fs-5"></i>
                    <span class="d-none d-xl-inline">Admission Info</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link px-2 text-truncate">
                    <i class="bi bi-person fs-5"></i>
                    <span class="d-none d-xl-inline">Study Load</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link px-2 text-truncate">
                    <i class="bi bi-person fs-5"></i>
                    <span class="d-none d-xl-inline">Profile</span>
                </a>
            </li>
        </ul>
    </div>
</aside>