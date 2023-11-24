<x-modal.card title="Registro nuevo Plann" blur wire:model.defer="isOpen">
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Nombres" wire:model="form.firstname"/>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Apellidos" wire:model="form.lastname"/>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="DNI" wire:model="form.dni"/>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Fecha-Inicio" wire:model="form.startdate"/>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Fecha-Fin" wire:model="form.enddate"/>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-textarea label="Annotations" placeholder="write your annotations" />   
     </div>
     <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-select
        label="Buscar Empresa"
        wire:model.defer="model"
        placeholder="Seleccione su Empresa"
        :async-data="route('api.users.index')"
        option-label="name"
        option-value="id"
    />    
    </div>
    <x-slot name="footer">
        <div class="flex justify-end gap-x-2">
            <x-button flat label="Cancel" x-on:click="close()" />
            <x-button primary label="Save" wire:click="store()" />
        </div>
    </x-slot>
</x-modal.card>