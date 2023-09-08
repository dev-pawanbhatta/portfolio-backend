<aside class="sidebar active shadow-sm">
    <div class="sidebar-header">
        <a href="">{{ config('app.name') }}</a>
    </div>
    <div class="sidebar-body">
        <div class="side-item">
            <a href="{{ route('admin.dashboard') }}" class="side-link">
                <span>
                    <i class="fa-solid fa-dashboard"></i>
                    <span>Dashboard</span>
                </span>
            </a>
        </div>
        <div class="side-item">
            <a href="#" class="side-link">
                <span>
                    <i class="fa-solid fa-gear"></i>
                    <span>Settings</span>
                </span>
            </a>
        </div>
    </div>
</aside>
