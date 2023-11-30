<x-modal.card title="Registro nuevo Plann" blur wire:model.defer="isOpen">
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="codigo" icon="user" wire:model="form.codigo"/>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="nombre" icon="location-marker" wire:model="form.nombre"/>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="apellido" icon="location-marker" wire:model="form.apellido"/>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="ciclo" icon="location-marker" wire:model="form.ciclo"/>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="email" icon="location-marker" wire:model="form.email"/>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="celular" icon="location-marker" wire:model="form.celular"/>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="usuario_id" icon="location-marker" wire:model="form.usuario_id"/>
    </div>

    </div>
    <x-slot name="footer">
        <div class="flex justify-end gap-x-2">
            <x-button flat label="Cancel" x-on:click="close()" />
            <x-button primary label="Save" wire:click="store()" />
        </div>
    </x-slot>
</x-modal.card>
