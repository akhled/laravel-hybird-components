@php
$textColor = $attributes->get('text-color');
$modalColor = $attributes->get('modal-color');
if (!$textColor && $modalColor) {
    if (strpos($modalColor, '-') > -1) {
        $textColor = (explode('-', $modalColor)[1] > 500) ? 'white' : 'black';
    } else {
        $textColor = $modalColor == 'black' ? 'white' : 'black';
    }
} else {
    $textColor = 'black';
}
@endphp

<div class="cursor-pointer z-50"
    x-on:click="showModal = false">
    <svg class="fill-current text-{{ $textColor }}"
        xmlns="http://www.w3.org/2000/svg"
        width="18"
        height="18"
        viewBox="0 0 18 18">
        <path
            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
        </path>
    </svg>
</div>
