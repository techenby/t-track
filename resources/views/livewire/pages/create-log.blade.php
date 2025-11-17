<div>
    <form wire:submit="save" class="space-y-2">
        <flux:field>
            <flux:label>Record Voice</flux:label>
            <div>
                <flux:button icon="microphone" wire:click="recordVoice"></flux:button>
            </div>

            <flux:error name="voice" />
        </flux:field>
        <flux:field>
            <flux:label>Take Photo</flux:label>
            <div>
                <flux:button icon="camera" wire:click="takePhoto"></flux:button>
            </div>
            <flux:error name="image" />
        </flux:field>
    </form>

    <div class="fixed bottom-0 left-0 w-full z-1 pb-[var(--inset-bottom)] pl-6 pr-6">
        <div class="flex items-center justify-center gap-8">
            <flux:button :href="route('logs')" icon="chevron-left">Cancel</flux:button>
            <flux:button variant="primary" wire:click="save">Save</flux:button>
        </div>
    </div>
</div>
