<x-layout>
    @switch($tabs = '')
        @case('hardware')
            @include('components.tabs.hardware')
            @break
    
        @case('software')
            @include('components.tabs.software')
            @break
    
        @default
            @include('components.tabs.hardware')
    @endswitch
</x-layout>