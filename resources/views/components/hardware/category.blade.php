
<button {{ 
    $attributes->merge([
        'class' => "nav-link",
        'id' => "pills-" . lcfirst($hardwareCategories->category) . "-tab",
        'data-bs-toggle' => "tab",
        'data-bs-target' => "#pills-" . lcfirst($hardwareCategories->category),
        'type' => "button",
        'role' => "tab",
        'aria-controls' => "pills-" . lcfirst($hardwareCategories->category),
        'aria-selected' => "false"
    ])
}}>{{ $hardwareCategories->category }}</button>