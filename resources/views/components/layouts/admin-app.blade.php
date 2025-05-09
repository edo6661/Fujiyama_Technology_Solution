<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <x-partials.head :title="$title"/>
        <style>
            @media (max-width: 768px) {
                .sidebar-menu {
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background-color: #1f2937; 
                    z-index: 50;
                    transform: translateX(-100%);
                    transition: transform 0.3s ease-in-out;
                    display: block;
                }

                .sidebar-menu.open {
                    transform: translateX(0%);
                }

                .sidebar-overlay {
                    display: none;
                }

                .sidebar-overlay.active {
                    display: block;
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background-color: rgba(0, 0, 0, 0.5);
                    z-index: 40;
                }
            }
        </style>
    </head>
    <body class="bg-gray-100 font-sans">
        <div class="flex h-screen overflow-hidden">
            <div id="sidebar" class="sidebar-menu bg-gray-800 text-white w-64 flex-shrink-0">
                <div class="p-4 flex items-center justify-between border-b border-gray-700">
                    <span class="text-xl font-bold">Admin Panel</span>
                    <button id="close-sidebar" class="md:hidden text-white">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <nav class="p-2">
                    <x-features.admin.sidebar-menu />
                </nav>
            </div>

            <div id="sidebar-overlay" class="sidebar-overlay md:hidden"></div>

            <div class="flex-1 flex flex-col overflow-hidden">
                <header class="bg-white shadow-sm md:hidden">
                    <div class="px-4 py-3 flex items-center justify-between">
                        <button id="toggle-sidebar" class="text-gray-800">
                            <i class="fas fa-bars"></i>
                        </button>
                        <span class="text-lg font-semibold">Admin Panel</span>
                    </div>
                </header>

                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
                    
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        {{ $slot }}
                    </div>
                </main>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const sidebar = document.getElementById('sidebar');
                const toggleBtn = document.getElementById('toggle-sidebar');
                const closeBtn = document.getElementById('close-sidebar');
                const overlay = document.getElementById('sidebar-overlay');

                function openSidebar() {
                    sidebar.classList.add('open');
                    overlay.classList.add('active');
                }

                function closeSidebar() {
                    sidebar.classList.remove('open');
                    overlay.classList.remove('active');
                }

                toggleBtn?.addEventListener('click', openSidebar);
                closeBtn?.addEventListener('click', closeSidebar);
                overlay?.addEventListener('click', closeSidebar);

                window.addEventListener('resize', function () {
                    if (window.innerWidth >= 768) {
                        closeSidebar();
                    }
                });
            });
        </script>
    </body>
</html>
