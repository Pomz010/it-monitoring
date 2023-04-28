@include('partials._header')
  
@include('partials._header-nav')

<!-- START BODY CONTAINER -->
<div class="container-fluid gx-0">
  <!-- MAIN BODY -->
  <div class="d-flex">
          <!-- SIDE BAR -->
      @include('partials._sidebar')
          
        <!-- MAIN SECTION -->
        <div class="px-1 col">
          {{ $tabContent }}
        </div><!-- END OF MAIN SECTION-->          

  </div><!-- END OF MAIN BODY -->


      @include('modal.tonerModal')

      @include('modal.movementModal')

      @include('modal.hardwareModal')

      @include('modal.softwareModal')

      @include('modal.vendorModal')

      @include('modal.departmentModal')

      @include('modal.employeeModal')

      @include('modal.userModal')

  

</div><!-- END BODY CONTAINER -->
      
      
@include('partials._footer')