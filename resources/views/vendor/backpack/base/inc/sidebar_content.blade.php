{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
@include('backpack-database-notifications::sidebarMenuItem')

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i>{{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i><span>Users</span></a></li>

<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-cog"></i> Settings</a>
    <ul class="nav-dropdown-items">
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('setting') }}'><i class='nav-icon la la-paypal'></i> <span>Advanced</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('elfinder') }}"><i class="nav-icon la la-files-o"></i> <span>Files</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('pages') }}"><i class="nav-icon la la-file"></i>Pages</a></li>
    </ul>
</li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('street') }}"><i class="nav-icon la la-th-list"></i> Streets</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('openspace') }}"><i class="nav-icon la la-th-list"></i> Openspaces</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('building') }}"><i class="nav-icon la la-th-list"></i> Buildings</a></li>