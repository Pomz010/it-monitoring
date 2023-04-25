@switch($button)
    @case('laptop')
        <button type="button" class="btn btn-primary py-1" data-bs-toggle="modal" data-bs-target="#newLaptop">New Laptop</button>
        @break
 
    @case(2)
        Second case...
        @break
 
    @default
        Default case...
@endswitch
