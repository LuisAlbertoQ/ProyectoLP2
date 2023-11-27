<x-modal.card title="Registro nuevo Plann" blur wire:model.defer="isOpen">
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Nombre" icon="user" wire:model="form.name"/>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Direccion" icon="location-marker" wire:model="form.address"/>
    </div>
    </div>
    <x-slot name="footer">
        <div class="flex justify-end gap-x-2">
            <x-button flat label="Cancel" x-on:click="close()" />
            <x-button primary label="Save" wire:click="store()" />
        </div>
    </x-slot>
</x-modal.card>