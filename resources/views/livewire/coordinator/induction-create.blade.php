<x-modal.card title="Registro nuevo Plann" blur wire:model.defer="isOpen">
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="asuntos" icon="user" wire:model="form.asunto"/>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="archivos" icon="location-marker" wire:model="form.archivo"/>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="asistencias" icon="location-marker" wire:model="form.asistencias"/>
    </div>


    </div>
    <x-slot name="footer">
        <div class="flex justify-end gap-x-2">
            <x-button flat label="Cancel" x-on:click="close()" />
            <x-button primary label="Save" wire:click="store()" />
        </div>
    </x-slot>
</x-modal.card>
