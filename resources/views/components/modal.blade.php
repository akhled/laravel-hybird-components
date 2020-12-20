@props([
'size' => '3xl',
'bgColor' => 'white',
'times' => true,
'openOnInit' => false,
'cancel' => false,
'confirm' => false,
])

{{--
@todo Confirm color and text button
@todo Cancel color and text button
@todo What to do with confirm button ?
@todo Transition usage
--}}

<div x-data="{
    showModal: {{ $openOnInit ? 'true' : 'false' }}
}">

    {{ $slot }}

    <div x-on:close.stop="showModal = false"
        x-on:keydown.escape.window="showModal = false"
        x-show="showModal"
        class="fixed top-0 inset-x-0 px-4 pt-6 z-50 sm:px-0 sm:flex sm:items-top sm:justify-center"
        style="display: none;">

        <div x-show="showModal"
            class="fixed inset-0 transform transition-all"
            x-on:click="showModal = false"
            {{--
            x-transition:enter="ease-out duration-100"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            --}}>
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <div x-show="showModal"
            class="bg-{{ $bgColor }} rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:max-w-{{ $size }}"
            {{--
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            --}}>

            <div class="flex justify-between items-center pt-5 px-4">
                <h3 class="text-lg">
                    @isset($title)
                        {{ $title }}
                    @endisset
                </h3>

                @if ($times)
                    <x-hybrid-button-modal-times modal-color="{{ $bgColor }}"/>
                @endif
            </div>

            @isset($content)
                <div class="px-4 py-4 sm:p-6 sm:pb-4 mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                    {{ $content }}
                </div>
            @endisset

            @if (isset($footer) || $cancel || $confirm)
                <div class="px-6 py-4 bg-gray-100 text-right">
                    @isset($footer)
                        {{ $footer }}
                    @endisset

                    @if ($confirm)
                        <x-hybrid-button bg-color="blue">Confirm</x-hybrid-button>
                    @endif

                    @if ($cancel)
                        <x-hybrid-button bg-color="red"
                            x-on:click="showModal = false">Cancel</x-hybrid-button>
                    @endif
                </div>
            @endif

        </div>
    </div>
</div>
