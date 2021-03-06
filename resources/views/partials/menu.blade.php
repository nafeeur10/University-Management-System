<div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="nav-item {{ request()->is('admin/home') || request()->is('admin/home/*') ? 'active' : '' }}">
            <a href="{{ route("admin.home") }}"><i class="feather icon-home"></i>
                <span class="menu-title" data-i18n="Dashboard">{{ trans('global.dashboard') }}</span>
            </a>
        </li>
        @can('users_manage')
        <li class=" navigation-header"><span>{{ trans('cruds.userManagement.title') }}</span></li>
        <li class="nav-item {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
            <a href="{{ route("admin.permissions.index") }}">
                <i class="feather icon-mail"></i>
                <span class="menu-title" data-i18n="Email">{{ trans('cruds.permission.title') }}</span>
            </a>
        </li>

        <li class="nav-item {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
            <a href="{{ route("admin.roles.index") }}">
                <i class="feather icon-mail"></i>
                <span class="menu-title" data-i18n="Email">{{ trans('cruds.role.title') }}</span>
            </a>
        </li>

        <li class="nav-item {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
            <a href="{{ route("admin.users.index") }}">
                <i class="feather icon-mail"></i>
                <span class="menu-title" data-i18n="Email">{{ trans('cruds.user.title') }}</span>
            </a>
        </li>

        <li class="nav-item {{ request()->is('admin/visitors') || request()->is('admin/visitors/*') ? 'active' : '' }}">
            <a href="{{ route("admin.visitors.index") }}">
                <i class="feather icon-mail"></i>
                <span class="menu-title" data-i18n="Email">{{ trans('cruds.visitors.title') }}</span>
            </a>
        </li>
        @endcan


        @can('editor_add_update')
        <li class=" navigation-header"><span>{{ trans('cruds.homepagecontent.title') }}</span></li>
        <li class="nav-item {{ request()->is('admin/slider') || request()->is('admin/slider/*') ? 'active' : '' }}">
            <a href="{{ route("admin.slider.index") }}">
                <i class="feather icon-mail"></i>
                <span class="menu-title" data-i18n="Email">{{ trans('cruds.homepagecontent.slider.title') }}</span>
            </a>
        </li>
        <li class="nav-item {{ request()->is('admin/breakingnews') || request()->is('admin/breakingnews/*') ? 'active' : '' }}">
            <a href="{{ route("admin.breakingnews.index") }}">
                <i class="feather icon-mail"></i>
                <span class="menu-title" data-i18n="Email">{{ trans('cruds.homepagecontent.breakingnews.title') }}</span>
            </a>
        </li>
        <li class="nav-item {{ request()->is('admin/welcomemessage') || request()->is('admin/welcomemessage/*') ? 'active' : '' }}">
            <a href="{{ route("admin.welcomemessage.index") }}">
                <i class="feather icon-mail"></i>
                <span class="menu-title" data-i18n="Email">{{ trans('cruds.homepagecontent.welcomemessage.title_singular') }}</span>
            </a>
        </li>

        <li class="nav-item {{ request()->is('admin/faculty') || request()->is('admin/faculty/*') || request()->is('admin/department') || request()->is('admin/department/*') || request()->is('admin/staff') || request()->is('admin/staff/*') ? 'active' : '' }}">
            <a href="javascript::void(0)">
                <i class="feather icon-shopping-cart"></i><span class="menu-title" data-i18n="{{ trans('cruds.faculty.title') }}">{{ trans('cruds.faculty.title') }}</span>
            </a>
            <ul class="menu-content">
                <li>
                    <a href="{{ route("admin.faculty.index") }}">
                        <i class="feather icon-circle"></i>
                        <span class="menu-item" data-i18n="{{ trans('cruds.faculty.title') }}">{{ trans('cruds.faculty.title') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route("admin.department.index") }}">
                        <i class="feather icon-circle"></i>
                        <span class="menu-item" data-i18n="{{ trans('cruds.faculty.dept.title') }}">{{ trans('cruds.faculty.dept.title') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.staff.index') }}">
                        <i class="feather icon-circle"></i>
                        <span class="menu-item" data-i18n="{{ trans('cruds.staff.title') }}">{{ trans('cruds.staff.title') }}</span>
                    </a>
                </li>
            </ul>
        </li>


        <li class="nav-item {{ request()->is('admin/events') || request()->is('admin/events/*') ? 'active' : '' }}">
            <a href="{{ route("admin.events.index") }}">
                <i class="feather icon-mail"></i>
                <span class="menu-title" data-i18n="Email">{{ trans('cruds.event.title') }}</span>
            </a>
        </li>
        <li class="nav-item {{ request()->is('admin/latest_news') || request()->is('admin/latest_news/*') ? 'active' : '' }}">
            <a href="{{ route("admin.latest_news.index") }}">
                <i class="feather icon-mail"></i>
                <span class="menu-title" data-i18n="Email">{{ trans('cruds.latest_news.title') }}</span>
            </a>
        </li>
        <li class="nav-item {{ request()->is('admin/partners') || request()->is('admin/partners/*') ? 'active' : '' }}">
            <a href="{{ route("admin.partners.index") }}">
                <i class="feather icon-mail"></i>
                <span class="menu-title" data-i18n="Email">{{ trans('cruds.partners.title') }}</span>
            </a>
        </li>
        <li class="nav-item {{ request()->is('admin/campuslife') || request()->is('admin/campuslife/*') ? 'active' : '' }}">
            <a href="{{ route("admin.campuslife.index") }}">
                <i class="feather icon-mail"></i>
                <span class="menu-title" data-i18n="Email">{{ trans('cruds.campuslife.title') }}</span>
            </a>
        </li>
        <li class="nav-item {{ request()->is('admin/multimedia') || request()->is('admin/multimedia/*') ? 'active' : '' }}">
            <a href="{{ route("admin.multimedia.index") }}">
                <i class="feather icon-mail"></i>
                <span class="menu-title" data-i18n="Email">{{ trans('cruds.multimedia.title') }}</span>
            </a>
        </li>
        <li class="nav-item {{ request()->is('admin/newsletter') || request()->is('admin/newsletter/*') ? 'active' : '' }}">
            <a href="{{ route("newsletter.index") }}">
                <i class="feather icon-mail"></i>
                <span class="menu-title" data-i18n="Email">{{ trans('cruds.newsletter.title') }}</span>
            </a>
        </li>
        <li class="nav-item {{ request()->is('admin/research') || request()->is('admin/research/*') || request()->is('admin/research') || request()->is('admin/research/*') || request()->is('admin/research') || request()->is('admin/research/*') ? 'active' : '' }}"">
            <a href="javascript::void(0)">
                <i class="feather icon-shopping-cart"></i><span class="menu-title" data-i18n="{{ trans('cruds.research.title') }}">{{ trans('cruds.research.title') }}</span>
            </a>
            <ul class="menu-content">
                <li>
                    <a href="{{ route('admin.research.index') }}">
                        <i class="feather icon-circle"></i>
                        <span class="menu-item" data-i18n="{{ trans('cruds.research.homepage_research') }}">{{ trans('cruds.research.homepage_research') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.research-link.index') }}">
                        <i class="feather icon-circle"></i>
                        <span class="menu-item" data-i18n="{{ trans('cruds.research.link.title') }}">{{ trans('cruds.research.link.title') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.research-individual.index') }}">
                        <i class="feather icon-circle"></i>
                        <span class="menu-item" data-i18n="{{ trans('cruds.research.individual.title') }}">{{ trans('cruds.research.individual.title') }}</span>
                    </a>
                </li>
            </ul>
        </li>
        @endcan

        @can('editor_add_update')
        <li class=" navigation-header"><span>{{ trans('cruds.contact.title') }}</span></li>
        <li class="nav-item {{ request()->is('admin/contact') || request()->is('admin/contact/*') ? 'active' : '' }}">
            <a href="{{ route("admin.contact.index") }}">
                <i class="feather icon-mail"></i>
                <span class="menu-title" data-i18n="Email">{{ trans('cruds.contact.title_singular') }}</span>
            </a>
        </li>
        <li class="nav-item {{ request()->is('admin/contact/social') || request()->is('admin/contact/social*') ? 'active' : '' }}">
            <a href="{{ route("admin.contact.social") }}">
                <i class="feather icon-mail"></i>
                <span class="menu-title">{{ trans('cruds.contact.fields.title_social') }}</span>
            </a>
        </li>
        <li class="nav-item {{ request()->is('admin/contact/form') || request()->is('admin/contact/form*') ? 'active' : '' }}">
            <a href="{{ route("admin.contactform.index") }}">
                <i class="feather icon-mail"></i>
                <span class="menu-title">{{ trans('cruds.contact.fields.title_form') }}</span>
            </a>
        </li>
        @endcan

        <li class=" navigation-header"><span>{{ trans('cruds.general.title') }}</span></li>
        <li class="nav-item {{ request()->is('change_password') ? 'active' : '' }}">
            <a href="{{ route('auth.change_password') }}">
                <i class="feather icon-mail"></i>
                <span class="menu-title" data-i18n="Email">Change password</span>
            </a>
        </li>

        <li class="nav-item">
            <a href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="feather icon-mail"></i>
                <span class="menu-title" data-i18n="Email">{{ trans('global.logout') }}</span>
            </a>
        </li>
    </ul>
</div>


<!-- <div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route("admin.home") }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            @can('users_manage')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
                        {{ trans('cruds.userManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-unlock-alt nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-briefcase nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-user nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    </ul>
                </li>
            @endcan
            <li class="nav-item">
                <a href="{{ route('auth.change_password') }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-key">

                    </i>
                    Change password
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div> -->