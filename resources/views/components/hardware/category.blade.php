@php
// Will remove spaces between words to use as html id attribute
    $string = lcfirst($hardwareCategories->category);
    $target = preg_replace('/\s+/', '', $string);
@endphp

<button {{ 
    $attributes->merge([
        'class' => 'nav-link mx-1',
        'id' => "pills-" . $target . "-tab",
        'data-bs-toggle' => "tab",
        'data-bs-target' => "#" . $target . "List",
        'type' => "button",
        'role' => "tab",
        'aria-controls' => "pills-" . $target,
        'aria-selected' => "false"
    ])
}}>{{ $hardwareCategories->category }}</button>