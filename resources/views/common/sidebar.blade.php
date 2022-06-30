<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">

            <span class="demo text-ifm fw-bolder ms-2">IFM Field Management</span>

        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

        <li class="menu-item active">
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon mdi mdi-av-timer"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        @if (session()->get('user')['status'] == 'student' || session()->get('user')['status'] == 'hod')

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon mdi mdi-map-marker-radius"></i>
                    <div data-i18n="Layouts">Field Details</div>
                </a>

                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="/welcome_letter" class="menu-link">
                            <div data-i18n="Without menu">Field Letters</div>
                        </a>
                    </li>

                    @if (session()->get('user')['status'] == 'student')
                        <li class="menu-item">
                            <a href="/self_allocate" class="menu-link">
                                <div data-i18n="Without navbar">Self Allocate</div>
                            </a>
                        </li>
                    @endif

                    @if (session()->get('user')['status'] == 'hod')
                        <li class="menu-item">
                            <a href="/allocations" class="menu-link">
                                <div data-i18n="Without navbar">Field Arrivals</div>
                            </a>
                        </li>
                    @endif

                </ul>
            </li>
        @endif
        @if (session()->get('user')['status'] == 'supervisor')
            <li class="menu-item">
                <a href="/all_students" class="menu-link">
                    <i class="menu-icon mdi mdi-account-multiple-outline"></i>
                    <div data-i18n="Basic">My Students</div>
                </a>
            </li>

            <li class="menu-item">
                <a href="/allocations" class="menu-link">
                    <i class="menu-icon mdi mdi-map-marker-radius"></i>
                    <div data-i18n="Basic">Allocations</div>
                </a>
            </li>
        @endif


        @if (session()->get('user')['status'] == 'hod')
            <li class="menu-item">
                <a href="/all_supervisors" class="menu-link">
                    <i class="menu-icon mdi mdi-account-network"></i>
                    <div data-i18n="Basic">Supervisors</div>
                </a>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon mdi mdi-account-multiple-outline"></i>
                    <div data-i18n="Layouts">students</div>
                </a>

                <ul class="menu-sub">

                    <li class="menu-item">
                        <a href="/all_students" class="menu-link">
                            <div data-i18n="Without navbar">All Students</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="/supervision" class="menu-link">
                            <div data-i18n="Without navbar">Supervision</div>
                        </a>
                    </li>
                </ul>
            </li>
        @endif

        @if (session()->get('user')['status'] == 'student' || session()->get('user')['status'] == 'hod')
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon mdi mdi-garage"></i>
                    <div data-i18n="Layouts">Companies</div>
                </a>

                <ul class="menu-sub">
                    @if (session()->get('user')['status'] == 'hod')
                        <li class="menu-item">
                            <a href="/add_company" class="menu-link">
                                <div data-i18n="Container">Add New</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="/add_company" class="menu-link">
                                <div data-i18n="Container">Manage </div>
                            </a>
                        </li>
                    @endif
                    <li class="menu-item">
                        <a href="/browse_companies" class="menu-link">
                            <div data-i18n="Without menu">Browse</div>
                        </a>
                    </li>
                </ul>
            </li>
        @endif

        @if (session()->get('user')['status'] == 'student' || session()->get('user')['status'] == 'supervisor')
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon mdi mdi-comment-multiple-outline"></i>
                    <div data-i18n="Layouts">Comments</div>
                </a>

                <ul class="menu-sub">
                    @if (session()->get('user')['status'] == 'student')
                        <li class="menu-item">
                            <a href="/comment" class="menu-link">
                                <div data-i18n="Container">Create Comment</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="/comments_list" class="menu-link">
                                <div data-i18n="Without menu">My Comments</div>
                            </a>
                        </li>
                    @endif
                    @if (session()->get('user')['status'] == 'supervisor')
                        <li class="menu-item">
                            <a href="/comments_list" class="menu-link">
                                <div data-i18n="Without menu">All Comments</div>
                            </a>
                        </li>
                    @endif
                </ul>
            </li>
        @endif

        <li class="menu-item">
            <a href="cards-basic.html" class="menu-link">
                <i class="menu-icon mdi mdi-message-video"></i>
                <div data-i18n="Basic">Assessment</div>
            </a>
        </li>
        @if (session()->get('user')['status'] == 'student' || session()->get('user')['status'] == 'supervisor')
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon mdi mdi-book-open-page-variant"></i>
                    <div data-i18n="Layouts">Log Book</div>
                </a>

                <ul class="menu-sub">
                    @if (session()->get('user')['status'] == 'student')
                        <li class="menu-item">
                            <a href="/fill_logbook" class="menu-link">
                                <div data-i18n="Without menu">Fill logbook</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="/logbook_preview" class="menu-link">
                                <div data-i18n="Without navbar">Full Preview</div>
                            </a>
                        </li>
                    @endif
                    @if (session()->get('user')['status'] == 'supervisor')
                        <li class="menu-item">
                            <a href="/logbook_preview" class="menu-link">
                                <div data-i18n="Without navbar">All Logbooks</div>
                            </a>
                        </li>
                    @endif
                </ul>
            </li>
        @endif


        @if (session()->get('user')['status'] == 'student' || session()->get('user')['status'] == 'hod')
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon mdi mdi-format-line-spacing"></i>
                    <div data-i18n="Layouts">Tasks</div>
                </a>

                <ul class="menu-sub">
                    @if (session()->get('user')['status'] == 'hod')
                        <li class="menu-item">
                            <a href="#" class="menu-link">
                                <div data-i18n="Container">Assign Tasks</div>
                            </a>
                        </li>
                    @endif
                    <li class="menu-item">
                        <a href="#" class="menu-link">
                            <div data-i18n="Without menu">All Tasks</div>
                        </a>
                    </li>
                </ul>
            </li>
        @endif

        <li class="menu-item">
            <a href="#" class="menu-link">
                <i class="menu-icon mdi mdi-bell-ring-outline"></i>
                <div data-i18n="Basic">Notifications</div>
            </a>
        </li>

    </ul>
</aside>
