@props([
    'hasLabel' => true,
    'labelText' => '',
    'name' => '',
    'placeholder' => '',
    'options' => []
])

<div class="block">
    @if ($hasLabel)
        <x-form.label>
            {{ $labelText }}
            @if (!empty($labelTextBrackets))
                <span class="text-lab-sc">({{ $labelTextBrackets }})</span>
            @endif
        </x-form.label>
    @endif
    <div class="relative">
        <div 
            x-data="{ 
                isOpen: false, 
                selected: @entangle($attributes->wire('model')),
                options: {{ json_encode($options) }},
                get selectedLabel() {
                    if (!this.selected) return '{{ $placeholder }}';
                    const option = this.options.find(opt => opt.key == this.selected);
                    return option ? option.value : '{{ $placeholder }}';
                }
            }" 
            class="cursor-pointer relative {{ (count($options) < 1) ? 'opacity-60 cursor-default' : '' }}"
        >
            <div 
                @click="isOpen = !isOpen" 
                @click.away="isOpen = false" 
                class="w-full bg-input-pr border-none py-4 rounded-xl flex items-center px-5"
            >
                <span class="truncate text-lab-sc text-par-m" x-text="selectedLabel"></span>
                <span class="size-4 text-lab-sc shrink-0 ml-auto">
                    <x-ui-icon name="chevron-selector-vertical" type="solid"></x-ui-icon>
                </span>
            </div>
            
            @if(count($options))
                <div 
                    x-show="isOpen" 
                    x-transition
                    class="absolute shadow-md py-2 rounded-2xl top-full left-auto bg-bg-pr/80 backdrop-blur-xs w-60 overflow-y-auto max-h-96 z-10"
                >
                    @foreach($options as $option)
                        <div @click="selected = '{{ $option['key'] }}'; isOpen = false" class="border-b border-bord-tr px-4 py-2 text-par-m text-lab-sc hover:bg-fill-qt smoothing cursor-pointer">
                            {{ $option['value'] }}
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>

    @if (isset($feedbackInfo))
        <x-form.helper-text>
            {{ $feedbackInfo }}
        </x-form.helper-text>
    @endif
</div>