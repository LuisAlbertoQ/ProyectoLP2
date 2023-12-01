
<button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
 </button>

 <aside id="sidebar-multi-level-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-violet-100 dark:bg-yellow-800">
       <ul class="space-y-2 font-medium">
        <li>
            <img src="https://upeu.edu.pe/wp-content/uploads/2022/03/04.png" />
          </li>
            <li >

                @can('ver dashboard')
                <div class=" hidden space-x-8 sm:-my-px sm:ms-20 sm:flex py-10">
                    <x-button outline label="Dashboard" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')"/>



                </div>
                @endcan

            </li>
          <li>
            @can(['ver dashboard','ver planes'])
            <div class="hidden space-x-8 sm:-my-px sm:ms-20 sm:flex py-10 text-black-500">
                <x-button outline label="Crear Plan" href="{{ route('estudent.plans') }}" :active="request()->routeIs('estuden.plans')"/>

            </div>
            @endcan

          </li>
          <li>
            @can('ver dashboard')
            <div class="hidden space-x-8 sm:-my-px sm:ms-20 sm:flex py-10">
                <x-button outline label="Empresas" href="{{ route('coordinator.companies') }}" :active="request()->routeIs('coordinator.companies')"/>


            </div>
            @endcan
          </li>
          <li>
            @can(['ver dashboard','ver usuarios','ver convocatorias'])
            <div class="hidden space-x-8 sm:-my-px sm:ms-20 sm:flex py-10">
                <x-button  outline label="Usuarios" href="{{ route('admin.users') }}" :active="request()->routeIs('admin.users')"/>


            </div>
            @endcan
          </li>
          <li>
            @can(['ver dashboard','ver empresas','ver convocatorias','ver cartapresentacion'])
                <div class="hidden space-x-8 sm:-my-px sm:ms-20 sm:flex py-10">
                    <x-button outline label="Carta de presentacion" href="{{ route('coordinator.carta') }}" :active="request()->routeIs('coordinator.carta')"/>

                </div>
                @endcan
          </li>
          <li>
            @can('ver dashboard')
            <div class="hidden space-x-8 sm:-my-px sm:ms-20 sm:flex py-10">
                <x-button outline label="Convocatorias" href="{{ route('admin.convocatories') }}" :active="request()->routeIs('admin.convocatories')"/>

            </div>
            @endcan
          </li>
          <li>
            @can(['ver dashboard','ver empresas','ver convocatorias','ver estudiantes'])

            <div class="hidden space-x-8 sm:-my-px sm:ms-20 sm:flex py-10">
                <x-button outline label="Estudiantes" href="{{ route('coordinator.estudiantes') }}" :active="request()->routeIs('coordinator.estudiantes')"/>

            </div>
            @endcan
          </li>

       </ul>
    </div>
 </aside>

 <div class="p-4 sm:ml-64">

 </div>
