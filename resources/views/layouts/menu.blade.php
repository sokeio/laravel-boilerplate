@php
$isUserActive = Request::is(config('fast.admin_prefix').'*users*');
$isRoleActive = Request::is(config('fast.admin_prefix').'*roles*');
$isPermissionActive = Request::is(config('fast.admin_prefix').'*permissions*');
@endphp
<li class="nav-item {{($isUserActive||$isRoleActive||$isPermissionActive)?'menu-open':''}} ">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-shield-virus"></i>
        <p>
            @lang('menu.user.title')
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('users.index') }}" class="nav-link {{ $isUserActive ? 'active' : '' }}">
                <p><i class="fas fa-users"></i>
                    @lang('menu.user.users')
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('roles.index') }}" class="nav-link {{ $isRoleActive ? 'active' : '' }}">
                <p><i class="fas fa-user-shield"></i>
                    @lang('menu.user.roles')
                </p>
            </a>
        </li>
        <li class="nav-item ">
            <a href="{{ route('permissions.index') }}" class="nav-link {{ $isPermissionActive ? 'active' : '' }}">
                <p><i class="fas fa-shield-alt"></i>
                    @lang('menu.user.perrmissions')
                </p>
            </a>
        </li>
    </ul>
</li>
