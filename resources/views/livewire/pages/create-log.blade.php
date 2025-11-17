<form wire:submit="save" class="space-y-2">
    <flux:field>
        <flux:label>Record Voice</flux:label>
        <div>
            <flux:button icon="microphone" wire:click="recordVoice"></flux:button>
        </div>
    </flux:field>
    <flux:field>
        <flux:label>Take Photo</flux:label>
        <div>
            <flux:button icon="camera" wire:click="takePhoto"></flux:button>
        </div>
    </flux:field>

    <flux:button variant="primary" wire:click="save">Save</flux:button>
</form>
