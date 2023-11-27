<x-modal.card title="Registro nuevo Plann" blur wire:model.defer="isOpen">
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Nombres" icon="user" wire:model="form.firstname"/>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Apellidos" icon="user" wire:model="form.lastname"/>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="DNI" icon="identification" wire:model="form.dni"/>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Fecha-Inicio" icon="calendar" wire:model="form.startdate"/>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Fecha-Fin" icon="calendar" wire:model="form.enddate"/>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-textarea label="Descripcion" wire:model="form.description"/>
    </div>
    {{--<div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-textarea label="Descripccion" icon="archive" wire:model="from.description" placeholder="Ingrese su Descripcion"/>   
     </div>--}}
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Empresa" wire:model="form.company_id"/>
    </div>

    </div>
    <x-slot name="footer">
        <div class="flex justify-end gap-x-2">
            <x-button flat label="Cancel" x-on:click="close()" />
            <x-button primary label="Save" wire:click="store()" />
        </div>
    </x-slot>
</x-modal.card>