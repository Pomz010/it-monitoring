<x-slot name="tabContent">
  <div id="hardware" class="container-xl tab-pane fade"><br>
    <ul class="nav nav-tabs mb-3" role="tablist">
        <li class="nav-item d-flex" role="presentation">
          <a class="nav-link mx-1 active" aria-current="page" href="{{ route('showLaptop') }}">Laptop</a>
          <button class="nav-link mx-1" id="pills-systemUnit-tab" data-bs-toggle="tab" data-bs-target="#systemUnitList" type="button" role="tab" aria-controls="pills-systemUnit" aria-selected="false">System Unit</button>
          <button class="nav-link mx-1" id="pills-monitor-tab" data-bs-toggle="tab" data-bs-target="#monitorList" type="button" role="tab" aria-controls="pills-monitor" aria-selected="false">Monitor</button>
          <button class="nav-link mx-1" id="pills-printer-tab" data-bs-toggle="tab" data-bs-target="#printerList" type="button" role="tab" aria-controls="pills-printer" aria-selected="false">Printer</button>
          <button class="nav-link mx-1" id="pills-projector-tab" data-bs-toggle="tab" data-bs-target="#projectorList" type="button" role="tab" aria-controls="pills-projector" aria-selected="false">Projector</button>
          <button class="nav-link mx-1" id="pills-ups-tab" data-bs-toggle="tab" data-bs-target="#upsList" type="button" role="tab" aria-controls="pills-ups" aria-selected="false">UPS</button>
          <button class="nav-link mx-1" id="pills-router-tab" data-bs-toggle="tab" data-bs-target="#routerList" type="button" role="tab" aria-controls="pills-router" aria-selected="false">Router</button>
          <button class="nav-link mx-1" id="pills-firewall-tab" data-bs-toggle="tab" data-bs-target="#firewallList" type="button" role="tab" aria-controls="pills-firewall" aria-selected="false">Firewall</button>
          <button class="nav-link mx-1" id="pills-switch-tab" data-bs-toggle="tab" data-bs-target="#switchList" type="button" role="tab" aria-controls="pills-switch" aria-selected="false">Switch</button>
          <button class="nav-link mx-1" id="pills-accessPoint-tab" data-bs-toggle="tab" data-bs-target="#accessPointList" type="button" role="tab" aria-controls="pills-accessPoint" aria-selected="false">Access Point</button>
          <button class="nav-link mx-1" id="pills-mobileDevice-tab" data-bs-toggle="tab" data-bs-target="#mobileDeviceList" type="button" role="tab" aria-controls="pills-mobileDevice" aria-selected="false">Mobile Device</button>
        </li>
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
</x-slot>