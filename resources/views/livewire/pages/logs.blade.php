<div class="space-y-2">
    @if ($this->logs->isEmpty())
        <flux:callout icon="bell" color="sky" inline>
            <flux:callout.heading>Welcome, let's create your first log!</flux:callout.heading>
            <x-slot name="controls">
                <flux:button :href="route('logs.create')" icon="arrow-right" variant="ghost" />
            </x-slot>
        </flux:callout>
    @elseif ($this->logs->first()->created_at->diffInDays() > 6.75)
        <flux:callout icon="bell" color="sky" inline>
            <flux:callout.heading>Time to Track!</flux:callout.heading>
            <x-slot name="controls">
                <flux:button :href="route('logs.create')" icon="arrow-right" variant="ghost" />
            </x-slot>
        </flux:callout>
    @endif
    @foreach ($this->logs as $log)
        <flux:card size="sm" class="space-y-2">
            <flux:heading level="2" size="lg">{{ $log->created_at->timezone('America/Chicago')->format('D M j, Y @ g:ia') }}</flux:heading>
            <div class="flex space-x-2">
                <flux:icon.microphone @class([
                    'text-gray-400 dark:text-gray-500' => ! $log->voice_path
                ])/>

                <flux:icon.camera @class([
                    'text-gray-400 dark:text-gray-500' => ! $log->image_path
                ])/>
            </div>
        </flux:card>
    @endforeach
</div>

<x-slot:footer>
    <flux:button :href="route('logs.create')" icon="plus">Add</flux:button>
</x-slot:footer>
