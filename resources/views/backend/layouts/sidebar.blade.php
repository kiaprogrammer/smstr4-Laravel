<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link " href="index.html">
            <i class="bi bi-house"></i>
            <span>Dashboard</span>
        </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
            <i class="bi bi-person"></i>
            <span>Profile</span>
        </a>
    </li><!-- End Profile Page Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>Riwayat Hidup</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="{{ url('pendidikan') }}">
                <i class="bi bi-journal-richtext"></i><span>Pendidikan</span>
            </a>
        </li>
        <li>
        <a href="{{ url('pengalaman_kerja') }}">
                <i class="bi bi-person-workspace"></i><span>Pengalaman Kerja</span>
            </a>
        </li>
        </ul>
    </li><!-- End Components Nav -->

    </ul>

</aside><!-- End Sidebar-->
