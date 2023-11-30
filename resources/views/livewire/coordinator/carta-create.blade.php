<x-modal.card title="Registro nuevo Plann" blur wire:model.defer="isOpen">
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="fecha_solicitud" icon="user" wire:model="form.fecha_solicitud"/>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="estado" icon="location-marker" wire:model="form.estado"/>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="company_id" icon="location-marker" wire:model="form.company_id"/>
    </div>

    </div>
    <x-slot name="footer">
        <div class="flex justify-end gap-x-2">
            <x-button flat label="Cancel" x-on:click="close()" />
            <x-button primary label="Save" wire:click="store()" />
        </div>
    </x-slot>
</x-modal.card>