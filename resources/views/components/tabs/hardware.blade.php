@php
  $hardwareTabs = count($hardwareCategories);
  $tab = '';
@endphp
<div id="hardware" class="container-xl tab-pane fade"><br>
  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    @foreach($hardwareCategories as $category)
      <li class="nav-item d-flex" role="presentation">
        <x-hardware.category :hardwareCategories="$category"/>
      </li>
    @endforeach
  </ul>

<div class="tab-content">
  @include('components.tabs.laptops')
  @include('components.tabs.system-unit')
  @include('components.tabs.monitor')
  @include('components.tabs.printer')
  @include('components.tabs.projector')
  @include('components.tabs.ups')
  @include('components.tabs.router')
  @include('components.tabs.firewall')
  @include('components.tabs.switch')
  @include('components.tabs.access-point')
  @include('components.tabs.mobile-device')
</div>
  


</div>