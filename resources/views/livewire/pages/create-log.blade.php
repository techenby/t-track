<div>
    <form wire:submit="save" class="space-y-2">
        <flux:field>
            <flux:label class="sr-only">Record Voice</flux:label>
            <div>
                <flux:button icon="microphone" wire:click="recordVoice">Record Voice</flux:button>
            </div>

            <flux:error name="voice" />
        </flux:field>
        <flux:field>
            <flux:label class="sr-only">Take Photo</flux:label>
            <div>
                <flux:button icon="camera" wire:click="takePhoto">Take Photo</flux:button>
            </div>

            <div class="mt-3 flex flex-col gap-2">
                @if ($photo)
                    <flux:file-item
                        :image="$photoDataUrl"
                    >
                        <x-slot name="actions">
                            <flux:file-item.remove wire:click="removePhoto" aria-label="Remove photo" />
                        </x-slot>
                    </flux:file-item>
                @endif
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
