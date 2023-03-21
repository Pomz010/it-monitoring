<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  </head>
  <body>
    <div class="container-fluid p-0">
      
      <!-- HEADER NAV -->
      <nav class="navbar bg-dark py-0">
        <div class="container-xxl">
          <a class="navbar-brand"><img src="./img/navlogo.png" alt="Company logo" width="100" height="45"></a>
          
          <div class="dropstart">
            <a class="btn btn-secondary dropdown-toggle fs-5 py-1" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-person-circle"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><a class="dropdown-item" href="#">Update credentials</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Signout</a></li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- START BODY CONTAINER -->
      <div class="container-xxl gx-0">
        <!-- MAIN BODY -->
        <div class="d-flex">
          <!-- SIDE BAR -->
          <nav class="col-auto d-flex" >
            <div class="accordion accordion-flush" id="accordionFlushExample" role="tablist">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  
                  <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <i class="bi bi-list-check me-2"></i>Asset Monitoring
                  </button>
                </h2>
                
                <ul id="flush-collapseOne" class="accordion-collapse collapse list-group list-group-flush" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <li class="accordion-body list-group-item ps-4 fs-6"><a href="/new-movement" data-bs-toggle="modal" data-bs-target="#assetMovement"><i class="bi bi-node-plus-fill me-2"></i>New Movement</a></li>
                  <li class="accordion-body list-group-item ps-4 fs-6"><a href="#hardware" class="nav-link" data-bs-toggle="tab"><i class="bi bi-motherboard-fill me-2"></i>Hardware</a></li>
                  <li class="accordion-body list-group-item ps-4 fs-6"><a href="#software" class="nav-link" data-bs-toggle="tab"><i class="bi bi-window-stack me-2"></i>Software</a></li>
                  <li class="accordion-body list-group-item ps-4 fs-6"><i class="bi bi-wrench-adjustable-circle-fill me-2"></i>Service Support</li>
                  <li class="accordion-body list-group-item ps-4 fs-6"><i class="bi bi-shop me-2"></i>Vendor</li>
                  <li class="accordion-body list-group-item ps-4 fs-6"><a href="#home-tab" class="nav-link" data-bs-toggle="tab"><i class="bi bi-droplet-fill"></i>Toner</a></li>
                  <li class="accordion-body list-group-item ps-4 fs-6"><i class="bi bi-box-seam-fill me-2"></i>Others</li>
                </ul>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    <i class="bi bi-building-fill-add me-2"></i>Department
                  </button>
                </h2>
                <ul id="flush-collapseThree" class="accordion-collapse collapse list-group list-group-flush" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <li class="accordion-body list-group-item ps-4 fs-6"><a href="#" data-bs-toggle="modal" data-bs-target="#newDepartment"><i class="bi bi-plus-circle-fill me-2"></i>New</a></li>
                  <li class="accordion-body list-group-item ps-4 fs-6 nav-item"><a href="#departmentList" class="nav-link" data-bs-toggle="tab"><i class="bi bi-list-columns-reverse me-2"></i>List</a></li>
                </ul>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#employee" aria-expanded="false" aria-controls="flush-collapseThree">
                    <i class="bi bi-person-badge-fill me-2"></i>Employee List
                  </button>
                </h2>
                <ul id="employee" class="accordion-collapse collapse list-group list-group-flush" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <li class="accordion-body list-group-item ps-4 fs-6"><a href="#" data-bs-toggle="modal" data-bs-target="#newEmployee"><i class="bi bi-person-fill-add me-2"></i>New</a></li>
                  <li class="accordion-body list-group-item ps-4 fs-6"><a href="#employeeList" class="nav-link" data-bs-toggle="tab"><i class="bi bi-person-vcard-fill me-2"></i>List</a></li>
                </ul>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#users" aria-expanded="false" aria-controls="flush-collapseThree">
                    <i class="bi bi-person-workspace me-2"></i>Users
                  </button>
                </h2>
                <ul id="users" class="accordion-collapse collapse list-group list-group-flush" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <li class="accordion-body list-group-item ps-4 fs-6"><a href="#" data-bs-toggle="modal" data-bs-target="#newUser"><i class="bi bi-person-check-fill me-2"></i>New</a></li>
                  <li class="accordion-body list-group-item ps-4 fs-6"><a href="#userList" class="nav-link" data-bs-toggle="tab"><i class="bi bi-person-lines-fill me-2"></i>List</a></li>
                </ul>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="tab" data-bs-target="#transactionHistory" aria-expanded="false" aria-controls="flush-collapseThree">
                    
                    <a href="#reports" class="nav-link" data-bs-toggle="tab"><i class="bi bi-bar-chart-line-fill me-2"></i>Reports</a>
                  </button>
                </h2>
              </div>
            </div>
          </nav><!-- END OF SIDE NAV -->
          

          <!-- MAIN SECTION -->
          <div class="px-1 col">
            {{ $slot }}
          </div><!-- END OF MAIN SECTION-->

          

        </div><!-- END OF MAIN BODY -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          @yield('tonerModal')
        </div>

        @yield('movementModal')

        @yield('hardwareModal')

        @yield('departmentModal')

        @yield('employeeModal')

        @yield('userModal')

        
      
      </div><!-- END BODY CONTAINER -->
      
    </div><!-- END OF CONTAINER FLUID -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script>
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
      var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
      })
      </script>      
  </body>
</html>