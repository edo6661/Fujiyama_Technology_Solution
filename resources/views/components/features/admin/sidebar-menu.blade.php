<!-- resources/views/components/features/admin/sidebar-menu.blade.php -->
<ul class="space-y-2">
    <li>
        <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md transition-colors {{ request()->routeIs('dashboard') ? 'bg-gray-700 text-white' : '' }}">
            <i class="fas fa-tachometer-alt w-5 h-5 mr-3"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li>
        <a href="{{ route('blogs.index') }}" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md transition-colors {{ request()->routeIs('blogs.index') ? 'bg-gray-700 text-white' : '' }}">
            <i class="fas fa-newspaper w-5 h-5 mr-3"></i>
            <span>Blogs</span>
        </a>
    </li>
    <li class="pt-4 mt-4 border-t border-gray-700">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="flex w-full items-center px-4 py-3 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md transition-colors">
                <i class="fas fa-sign-out-alt w-5 h-5 mr-3"></i>
                <span>Logout</span>
            </button>
        </form>
    </li>
</ul>