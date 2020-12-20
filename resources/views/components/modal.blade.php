@props([
'maxWidth' => null,
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

            {{--Title--}}
            <div class="flex justify-between items-center pb-3">
                <p class="text-2xl font-bold">Simple Modal!</p>
                <div class="cursor-pointer z-50"
                    x-on:click="showModal = false">
                    <svg class="fill-current text-black"
                        xmlns="http://www.w3.org/2000/svg"
                        width="18"
                        height="18"
                        viewBox="0 0 18 18">
                        <path
                            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                        </path>
                    </svg>
                </div>
            </div>

            {{-- content --}}
            <div>
                {{ $content }}
            </div>

            {{--Footer--}}
            <div class="flex justify-end pt-2">
                <button
                    class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2"
                    x-on:click="alert('Additional Action');">Action</button>
                <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400"
                    x-on:click="showModal = false">Close</button>
            </div>

        </div>
    </div>
</div>
