@props([
'maxWidth' => null,
'times' => true
])

{{--
@todo Confirm action button
@todo Cancel action button
@todo Times close button
@todo Default open modal
--}}

@php
switch ($maxWidth ?? '2xl') {
case 'sm':
$maxWidth = 'sm:max-w-sm';
break;
case 'md':
$maxWidth = 'sm:max-w-md';
break;
case 'lg':
$maxWidth = 'sm:max-w-lg';
break;
case 'xl':
$maxWidth = 'sm:max-w-xl';
break;
case '2xl':
default:
$maxWidth = 'sm:max-w-2xl';
break;
}
@endphp

<div x-data="{
    showModal: false
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
            x-transition:enter="ease-out duration-100"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <div x-show="showModal"
            class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full {{ $maxWidth }}"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">

            <div class="flex justify-between items-center pt-5 px-4">
                <h3 class="text-lg">
                    {{ $title }}
                </h3>
                @if ($time)
                    <x-hybrid-button-modal-times />
                @endif
            </div>

            <div class="bg-white px-4 py-4 sm:p-6 sm:pb-4 mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                {{ $content }}
            </div>

            <div class="px-6 py-4 bg-gray-100 text-right">
                {{ $footer }}
            </div>

        </div>
    </div>
</div>
