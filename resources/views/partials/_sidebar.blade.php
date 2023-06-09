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
          <li class="accordion-body list-group-item ps-4 fs-6"><a href="{{ route('hardwareAssets') }}" class="nav-link"><i class="bi bi-motherboard-fill me-2"></i>Hardware</a></li>
          <li class="accordion-body list-group-item ps-4 fs-6"><a href="#software" class="nav-link" data-bs-toggle="tab"><i class="bi bi-window-stack me-2"></i>Software</a></li>
          <li class="accordion-body list-group-item ps-4 fs-6"><i class="bi bi-wrench-adjustable-circle-fill me-2"></i>Service Support</li>
          <li class="accordion-body list-group-item ps-4 fs-6"><a href="/new-vendor" data-bs-toggle="tab" data-bs-target="#vendor"><i class="bi bi-shop me-2"></i>Vendor</li>
          <li class="accordion-body list-group-item ps-4 fs-6"><a href="#toner" class="nav-link" data-bs-toggle="tab"><i class="bi bi-droplet-fill"></i>Toner</a></li>
          <li class="accordion-body list-group-item ps-4 fs-6"><i class="bi bi-box-seam-fill me-2"></i>Others</li>
        </ul>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            <i class="bi bi-building-fill-add me-2"></i>Department
          </button>
        </h2>
        <ul id="flush-collapseTwo" class="accordion-collapse collapse list-group list-group-flush" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
          <li class="accordion-body list-group-item ps-4 fs-6"><a href="/new-department" data-bs-toggle="modal" data-bs-target="#newDepartment"><i class="bi bi-plus-circle-fill me-2"></i>New</a></li>
          <li class="accordion-body list-group-item ps-4 fs-6 nav-item"><a href="#departmentList" class="nav-link" data-bs-toggle="tab"><i class="bi bi-list-columns-reverse me-2"></i>List</a></li>
        </ul>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingThree">
          <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            <i class="bi bi-person-badge-fill me-2"></i>Employee List
          </button>
        </h2>
        <ul id="flush-collapseThree" class="accordion-collapse collapse list-group list-group-flush" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
          <li class="accordion-body list-group-item ps-4 fs-6"><a href="/create-employee" data-bs-toggle="modal" data-bs-target="#newEmployee"><i class="bi bi-person-fill-add me-2"></i>New</a></li>
          <li class="accordion-body list-group-item ps-4 fs-6"><a href="#employeeList" class="nav-link" data-bs-toggle="tab"><i class="bi bi-person-vcard-fill me-2"></i>List</a></li>
        </ul>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingFour">
          <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
            <i class="bi bi-person-workspace me-2"></i>Users
          </button>
        </h2>
        <ul id="flush-collapseFour" class="accordion-collapse collapse list-group list-group-flush" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
          <li class="accordion-body list-group-item ps-4 fs-6"><a href="#" data-bs-toggle="modal" data-bs-target="#newUser"><i class="bi bi-person-check-fill me-2"></i>New</a></li>
          <li class="accordion-body list-group-item ps-4 fs-6"><a href="#userList" class="nav-link" data-bs-toggle="tab"><i class="bi bi-person-lines-fill me-2"></i>List</a></li>
        </ul>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingFive">
          <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="tab" data-bs-target="#transactionHistory" aria-expanded="false" aria-controls="flush-collapseFive">
            <a href="#transactionHistory" class="nav-link" data-bs-toggle="tab"><i class="bi bi-bar-chart-line-fill me-2"></i>Reports</a>
          </button>
        </h2>
      </div>
      
    </div>
  </nav><!-- END OF SIDE NAV -->