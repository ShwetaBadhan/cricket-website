<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">

            {{-- -----------------------------------------------------------------------------------------------------
            SIDEBAR VERTICAL NAVBAR
            ------------------------------------------------------------------------------------------------------- --}}
            <ul class="sidebar-vertical">
                <!-- leads -->
                <li class="menu-title"><span>Main</span></li>
                <li>
                    <a href="{{ route('dashboard') }}" class="active"><i class="fe fe-home"></i> <span>
                            Dashboard</span>
                    </a>

                </li>
                @canany([
                'view booking leads',
                'view contact leads',
                'view influencer leads',
                'view membership leads',
                'view nodal registration',
                'view player registration',
                'view sponsor leads'
                ])
                <li clas s="submenu">
                    <a h ref="javascript:void(0)">
                        <i class="fe fe-grid"></i> <span>Leads</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul style="display: none">

                        @can('view booking leads')
                        <li><a href="{{ route('admin-booking') }}">Booking Leads</a></li>
                        @endcan

                        @can('view contact leads')
                        <li><a href="{{ route('admin-leads') }}">Contact Leads</a></li>
                        @endcan

                        @can('view influencer leads')
                        <li><a href="{{ route('admin-influencer') }}">Influencer Leads</a></li>
                        @endcan

                        @can('view membership leads')
                        <li><a href="{{ route('admin-membership-access') }}">Membership Leads</a></li>
                        @endcan

                        @can('view nodal registration')
                        <li><a href="{{ route('admin-nodal-registration') }}">Nodal Registration</a></li>
                        @endcan

                        @can('view player registration')
                        <li><a href="{{ route('admin-player-registration') }}">Player Registration</a></li>
                        @endcan

                        @can('view sponsor leads')
                        <li><a href="{{ route('admin-sponsor') }}">Sponsor Leads</a></li>
                        @endcan

                    </ul>
                </li>
                @endcanany
                <!-- /leads -->



                <!-- management -->
                <li class="menu-title"><span>Management</span></li>
                <li>
                    @can('view auction')
                    <a href="{{ route('admin-event-categories') }}">
                        <i class="fe fe-image"></i> <span>Auction</span>
                    </a>
                    @endcan
                </li>
                @can('view blogs')
                <li class="submenu">
                    <a href="#">
                        <i class="fe fe-book"></i> <span>Blog</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul style="display: none">
                        <li><a href="{{ route('admin-blogs') }}">All Blogs</a></li>
                    </ul>
                </li>
                @endcan

                <li>
                    @can('view event categories')
                    <a href="{{ route('admin-event-categories') }}">
                        <i class="fe fe-image"></i> <span>Event Categories</span>
                    </a>
                    @endcan
                </li>

                <li>
                    @can('view gallery')
                    <a href="{{ route('admin-gallery') }}">
                        <i class="fe fe-image"></i> <span>Gallery</span>
                    </a>
                    @endcan
                </li>

                <li>
                    @can('view match result')
                    <a href="{{ route('admin-game-match.index') }}">
                        <i class="fe fe-award"></i> <span>Match Result</span>
                    </a>
                    @endcan
                </li>

                <li>
                    @can('view organizers')
                    <a href="{{ route('admin-organizers') }}">
                        <i class="fe fe-users"></i> <span>Organizers</span>
                    </a>
                    @endcan
                </li>

                <li>
                    @can('view partners')
                    <a href="{{ route('admin-partners') }}">
                        <i class="fe fe-briefcase"></i> <span>Partners</span>
                    </a>
                    @endcan
                </li>

                <li>
                    @can('view reviews')
                    <a href="{{ route('admin-reviews') }}">
                        <i class="fe fe-star"></i> <span>Review</span>
                    </a>
                    @endcan
                </li>

                <li>
                    @can('view sports')
                    <a href="{{ route('admin-sports') }}">
                        <i class="fe fe-activity"></i> <span>Sports</span>
                    </a>
                    @endcan
                </li>

                <li>
                    @can('view team')
                    <a href="{{ route('admin-team') }}">
                        <i class="fe fe-users"></i> <span>Team</span>
                    </a>
                    @endcan
                </li>

                <li>
                    @can('view videos')
                    <a href="{{ route('admin-videos') }}">
                        <i class="fe fe-video"></i> <span>Videos</span>
                    </a>
                    @endcan
                </li>
                <!-- /management -->

                <!-- CMS -->
                <li class="menu-title"><span>CMS</span></li>

                @canany(['view home slider', 'view home about', 'view how we work', 'view home benefit'])
                <li clas s="submenu">
                    <a h ref="javascript:void(0)">
                        <i class="fe fe-home"></i>
                        <span> Home Page</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul style="display: none">

                        @can('view home slider')
                        <li><a href="{{ route('admin-home-slider') }}">Slider</a></li>
                        @endcan

                        @can('view home about')
                        <li><a href="{{ route('admin-home-about.index') }}">About Section</a></li>
                        @endcan

                        @can('view how we work')
                        <li><a href="{{ route('admin-how-we-work.index') }}">How We Work Section</a></li>
                        @endcan

                        @can('view home benefit')
                        <li><a href="{{ route('admin-home-benefit.index') }}">Benefits Section</a></li>
                        @endcan

                    </ul>
                </li>
                @endcanany


                @canany(['view about section', 'view about values'])
                <li class="submenu">
                    <a href="javascript:void(0)">
                        <i class="fe fe-info"></i>
                        <span> About Page</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul style="display: none">

                        @can('view about section')
                        <li><a href="{{ route('admin-about-section.index') }}">About Section</a></li>
                        @endcan

                        @can('view about values')
                        <li><a href="{{ route('admin-about-values.index') }}">Values Section</a></li>
                        @endcan

                    </ul>
                </li>
                @endcanany


                @can('view organizer about')
                <li class="submenu">
                    <a href="javascript:void(0)">
                        <i class="fe fe-user"></i>
                        <span> Organizer About</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul style="display: none">
                        <li><a href="{{ route('admin-organizer-about.index') }}">Organizer About Section</a></li>
                    </ul>
                </li>
                @endcan


                @can('view required documents')
                <li>
                    <a href="{{ route('admin-required-documents.index') }}">
                        <i class="fe fe-folder"></i>
                        <span> Required Documents</span>
                    </a>
                </li>
                @endcan


                @can('view selection process')
                <li>
                    <a href="{{ route('admin-selection-process.index') }}">
                        <i class="fe fe-check-circle"></i>
                        <span> Selection Process</span>
                    </a>
                </li>
                @endcan


                @can('view privacy policy')
                <li>
                    <a href="{{ route('admin-privacy-policy.index') }}">
                        <i class="fe fe-shield"></i>
                        <span> Privacy Policy</span>
                    </a>
                </li>
                @endcan


                @can('view terms conditions')
                <li>
                    <a href="{{ route('admin-terms-condition.index') }}">
                        <i class="fe fe-file-text"></i>
                        <span> Terms & Conditions</span>
                    </a>
                </li>
                @endcan

                <!-- /CMS -->



                <!-- User Management -->
                <li class="menu-title"><span>User Management</span></li>

                @can('view users')
                <li>
                    <a href="{{ route('admin-users.index') }}">
                        <i class="fe fe-user"></i> <span>Users</span>
                    </a>
                </li>
                @endcan

                @can('view roles permissions')
                <li>
                    <a href="{{ route('roles.index') }}">
                        <i class="fe fe-clipboard"></i>
                        <span>Roles & Permission</span>
                    </a>
                </li>
                @endcan

                <!-- /User Management -->






                <!-- /Support -->

                <!-- Pages -->
                @can('view profile')
                <li class="menu-title"><span>Pages</span></li>

                <li>
                    <a href="{{ route('profile.edit') }}">
                        <i class="fe fe-user"></i> <span>Profile</span>
                    </a>
                </li>
                @endcan
                <!-- /Pages -->


                <!-- Settings -->
                @can('view settings')
                <li class="menu-title"><span>Settings</span></li>

                <li>
                    <a href="{{ route('admin-settings.index') }}">
                        <i class="fe fe-settings"></i> <span>Settings</span>
                    </a>
                </li>
                @endcan
                <!-- /Settings -->
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fe fe-power"></i> <span>Logout</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>


            </ul>
        </div>
    </div>
</div>