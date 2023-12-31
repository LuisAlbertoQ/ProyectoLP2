<div class="py-5" style="background-image: url('https://img.freepik.com/fotos-premium/escritura-manual-sobre-lista-planes-2023-cocepto-lista-tareas-pendientes_121826-2253.jpg?w=2000')">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Lista de planes
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-transparent overflow-hidden shadow-xl sm:rounded-lg px-4 py-4 dark:bg-gray-800/50 dark:bg-gradient-to-bl rounded-40" style="border: 2px solid rgba(255, 255, 255, 0.2); backdrop-filter: blur(15px);">
        <div class="flex items-center justify-between dark:text-gray-400">
            <!--Input de busqueda   -->
            <div class="mb-2 w-full">
                <x-input icon="search" placeholder="Buscar registro" wire:model.live="search"/>
            </div>
        </div>
        <!--Tabla lista de items   -->
        <div class="shadow overflow-x-auto border-b border-gray-200 sm:rounded-lg">
            <table class="w-full divide-y divide-gray-200 table-auto">
              <thead class="bg-indigo-500 text-white">
                <tr class="text-left text-xs font-bold uppercase">
                  <td scope="col" class="px-6 py-3">ID</td>
                  <td scope="col" class="px-6 py-3">Nombre</td>
                  <td scope="col" class="px-6 py-3">Apellido</td>
                  <td scope="col" class="px-6 py-3">DNI</td>
                  <td scope="col" class="px-6 py-3">Fecha-Inicio</td>
                  <td scope="col" class="px-6 py-3">Fecha-Fin</td>
                  <td scope="col" class="px-6 py-3">Descripción</td>
                  <td scope="col" class="px-6 py-3">Empresa</td>
                  <td scope="col" class="px-6 py-3">Fecha-Creacion</td>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-200 dark:text-gray-400">
                @foreach($plans as $item)
                <tr class="text-sm font-medium text-gray-900">
                  <td class="px-6 py-4">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-500 text-white">
                      {{$item->id}}
                    </span>
                  </td>
                  <td class="px-6 py-4 dark:text-gray-400">{{$item->firstname}}</td>
                  <td class="px-6 py-4 dark:text-gray-400">{{$item->lastname}}</td>
                  <td class="px-6 py-4 dark:text-gray-400">{{$item->dni}}</td>
                  <td class="px-6 py-4 dark:text-gray-400">{{$item->startdate}}</td>
                  <td class="px-6 py-4 dark:text-gray-400">{{$item->enddate}}</td>
                  <td class="px-6 py-4 dark:text-gray-400">{{$item->description}}</td>
                  <td class="px-6 py-4 dark:text-gray-400">{{$item->company_id}}</td>
                  <td class="px-6 py-4 dark:text-gray-400">{{$item->created_at}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
        @if(!$plans->count())
            No existe ningun registro coincidente
        @endif
        <div class="px-6 py-3">
            {{$plans->links()}}
        </div>
        </div>
      </div>
</div>
