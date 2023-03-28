<x-layout>
  <!-- TONER MONITORING TABS -->
  <div class="tab-content">
    {{-- <div id="reports" class="container tab-pane fade">
      <ul class="nav nav-tabs" id="tonerTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#tonerBalance" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Remaining Balance</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#transactionHistory" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Transaction History</button>
        </li>
      </ul>
    </div> --}}
    

    <div id="transactionHistory" class="container fade tab-pane"><br>
      <table class="table caption-top">
        <caption>Transaction History</caption>
        <thead class="table-success">
          <tr>
            <th scope="col">Date</th>
            <th scope="col">Reference #</th>
            <th scope="col">Cartridge Type</th>
            <th scope="col">Black</th>
            <th scope="col">Cyan</th>
            <th scope="col">Magenta</th>
            <th scope="col">Yellow</th>
            <th scope="col">Movement</th>
            <th scope="col">C/O</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>03/14/2023</td>
            <td>489283</td>
            <td>CF400A</td>
            <td>2</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>Outbound</td>
            <td><a href="./pages/detailedTransaction">Kimberly Renia</a></td>
          </tr>
          <tr>
            <td>03/14/2023</td>
            <td>489286</td>
            <td>CF400A</td>
            <td>5</td>
            <td>3</td>
            <td>3</td>
            <td>3</td>
            <td>Inbound</td>
            <td><a href="./pages/detailedTransaction">Rolly Castillo</a></td>
          </tr>
          <tr>
            <td>03/14/2023</td>
            <td>489289</td>
            <td>CF500A</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>Outbound</td>
            <td><a href="./pages/detailedTransaction">Angelyn Ramiterre</a></td>
          </tr>
        </tbody>
      </table>
    </div>

    <div id="tonerBalance" class="container tab-pane fade"><br>
      <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>New Transaction</a></button>
      <table class="table caption-top">
        <caption>Remaining Balance</caption>
        <thead class="table-success">
          <tr>
            <th scope="col">Printer Model</th>
            <th scope="col">Printer Type</th>
            <th scope="col">Cartridge Type</th>
            <th scope="col">Black</th>
            <th scope="col">Cyan</th>
            <th scope="col">Magenta</th>
            <th scope="col">Yellow</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>mfp 2280nw</td>
            <td>colored</td>
            <td>CF500A Series</td>
            <td>10</td>
            <td>8</td>
            <td>7</td>
            <td>7</td>
          </tr>
          <tr>
            <td>mf244</td>
            <td>black&white</td>
            <td>337</td>
            <td>5</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td>mf274</td>
            <td>colored</td>
            <td>CF400A Series</td>
            <td>5</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
          </tr>
          <tr>
            <td>mfp 130fn</td>
            <td>black&white</td>
            <td>CF217A</td>
            <td>4</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
          </tr>
        </tbody>
      </table>
    </div>


    <div id="departmentList" class="container tab-pane fade"><br>
      <table class="table caption-top">
        <caption>Department List</caption>
        <thead class="table-success">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Department Code</th>
            <th scope="col">Department Name</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>03/14/2023</td>
            <td>489283</td>
            <td>CF400A</td>
          </tr>
          <tr>
            <td>2</td>
            <td>03/14/2023</td>
            <td>489286</td>
            <td>CF400A</td>
          </tr>
          <tr>
            <td>3</td>
            <td>03/14/2023</td>
            <td>489289</td>
            <td>CF500A</td>
          </tr>
        </tbody>
      </table>
    </div>


    <div id="employeeList" class="container tab-pane fade"><br>
      <table class="table caption-top">
        <caption>Employee List</caption>
        <thead class="table-success">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Emp. ID</th>
            <th scope="col">Dept.</th>
            <th scope="col">Firstname</th>
            <th scope="col">Lastname</th>
            <th scope="col">Middle Name</th>
            <th scope="col">Ext. Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Position</th>
            <th scope="col">Email</th>
            <th scope="col">Update</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>B22-0169-T</td>
            <td>IT</td>
            <td>Rolly</td>
            <td>Castillo</td>
            <td>Agustin</td>
            <td>N/A</td>
            <td>Male</td>
            <td>IT Specialist</td>
            <td>rolly.castillo@agripacific-corp.com</td>
            <td><a href="#"><i class="bi bi-pencil-square"></i></a></td>
          </tr>
          <tr>
            <td>2</td>
            <td>B22-0169-T</td>
            <td>SCM</td>
            <td>Kimberly</td>
            <td>Renia</td>
            <td>Kurimao</td>
            <td>N/A</td>
            <td>Female</td>
            <td>Warehouse Encoder</td>
            <td>kim.renia@agripacific-corp.com</td>
            <td><a href="#"><i class="bi bi-pencil-square"></i></a></td>
          </tr>
          <tr>
            <td>3</td>
            <td>B22-0140-T</td>
            <td>Admin</td>
            <td>Angelyn</td>
            <td>Ramiterre</td>
            <td>Burdagul</td>
            <td>N/A</td>
            <td>Female</td>
            <td>Admin Specialist</td>
            <td>angelyn.ramiterre@agripacific-corp.com</td>
            <td><a href="#"><i class="bi bi-pencil-square"></i></a></td>
          </tr>
        </tbody>
      </table>
    </div>


    <div id="userList" class="container tab-pane fade"><br>
      <table class="table caption-top">
        <caption>User List</caption>
        <thead class="table-success">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">User Type</th>
            <th scope="col">Update</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Admin</td>
            <td>Admin</td>
            <td></td>
          </tr>
          <tr>
            <td>1</td>
            <td>Rolly Castillo</td>
            <td>Admin</td>
            <td>
              <a href="#"><i class="bi bi-arrow-repeat"></i></a>
              <a href="#"><i class="bi bi-trash-fill"></i></a>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Regie Austria</td>
            <td>Agent</td>
            <td>
              <a href="#"><i class="bi bi-arrow-repeat"></i></a>
              <a href="#"><i class="bi bi-trash-fill"></i></a>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>Kevin Herrera</td>
            <td>Agent</td>
            <td>
              <a href="#"><i class="bi bi-arrow-repeat"></i></a>
              <a href="#"><i class="bi bi-trash-fill"></i></a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>


    <div id="hardware" class="container tab-pane fade"><br>
      
      <ul class="nav nav-tabs mb-2" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="tab" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Laptop</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">System Unit</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Monitor</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false">Printer</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false">Projector</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false">UPS</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false">Router</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false">Firewall</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false">Switch</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false">Access Point</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false">Mobile Device</button>
        </li>
      </ul>

      <button type="button" class="btn btn-primary py-1" data-bs-toggle="modal" data-bs-target="#newHardware">New</button>
      <table class="table caption-top">
        <caption class="py-1">Hardware Assets</caption>
        <thead class="table-success">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Item</th>
            <th scope="col">Brand</th>
            <th scope="col">Model</th>
            <th scope="col">Asset Tag</th>
            <th scope="col">Current User</th>
            <th scope="col">Position</th>
            <th scope="col">Location</th>
            <th scope="col">Date Purchased</th>
            <th scope="col">Status</th>
            <th scope="col">History</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Laptop</td>
            <td>Lenovo</td>
            <td>ThinkPad</td>
            <td><a href="./pages/device-history" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View complete info.">APC-00603</a></td>
            <td>Rolly Castillo</td>
            <td>IT Specialist</td>
            <td>Parsolingan</td>
            <td>Oct. 9, 2021</td>
            <td>In-use</td>
            <td>
              <a href="./pages/movemetHistory" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View previous users."><i class="bi bi-person-workspace"></i></a>
              <a href="./pages/repairHistory" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View repair history."><i class="bi bi-tools"></i></a>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Laptop</td>
            <td>Lenovo</td>
            <td>ThinkPad</td>
            <td><a href="./pages/device-history" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View complete info.">APC-00420</a></td>
            <td>Marvin De Leon</td>
            <td>Engineer</td>
            <td>Parsolingan</td>
            <td>Oct. 9, 2024</td>
            <td>In-use</td>
            <td>
              <a href="./pages/movemetHistory" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View previous users."><i class="bi bi-person-workspace"></i></a>
              <a href="./pages/repairHistory" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View repair history."><i class="bi bi-tools"></i></a>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>Laptop</td>
            <td>Lenovo</td>
            <td>ThinkPad</td>
            <td><a href="./pages/device-history" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View complete info.">APC-00505</a></td>
            <td>Nelly Rose Celi</td>
            <td>Finance Specialist</td>
            <td>Parsolingan</td>
            <td>Oct. 9, 2021</td>
            <td>In-use</td>
            <td>
              <a href="./pages/movemetHistory" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View previous users."><i class="bi bi-person-workspace"></i></a>
              <a href="./pages/repairHistory" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View repair history."><i class="bi bi-tools"></i></a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>


    <div id="software" class="container tab-pane fade"><br>
      <table class="table caption-top">
        <caption>Software Assets</caption>
        <thead class="table-success">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Desc.</th>
            <th scope="col">Ver.</th>
            <th scope="col">Date Purch.</th>
            <th scope="col">Lic. Type</th>
            <th scope="col">Exp. Date</th>
            <th scope="col">User</th>
            <th scope="col">Position</th>
            <th scope="col">Loc.</th>
            <th scope="col">Asset Tag</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Microsoft Office 2019</td>
            <td>Microsoft Office</td>
            <td>2019 v.2.5</td>
            <td>Oct. 9, 2021</td>
            <td>Professional</td>
            <td>Never</td>
            <td>Rolly Castillo</td>
            <td>IT Specialist</td>
            <td>Parsolingan</td>
            <td><a href="./pages/software-info" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View complete software info.">APC-00603</a></td>
          </tr>
          <tr>
            <td>2</td>
            <td>Microsoft Office 2019</td>
            <td>Microsoft Office</td>
            <td>2019 v.2.5</td>
            <td>Oct. 9, 2021</td>
            <td>Professional</td>
            <td>Never</td>
            <td>Marvin De Leon</td>
            <td>Engineer</td>
            <td>Parsolingan</td>
            <td><a href="./pages/software-info" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View complete software info.">APC-00420</a></td>
          </tr>
          <tr>
            <td>1</td>
            <td>Microsoft Office 2019</td>
            <td>Microsoft Office</td>
            <td>2019 v.2.5</td>
            <td>Oct. 9, 2021</td>
            <td>Professional</td>
            <td>Never</td>
            <td>Nelly Rose Celi</td>
            <td>Finance Specialist</td>
            <td>Parsolingan</td>
            <td><a href="./pages/softwareinfo" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View complete software info.">APC-00505</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div> <!-- END OF TONER MONITORING TABS -->


  <div id="vendor" class="container tab-pane fade"><br>

    <button type="button" class="btn btn-primary py-1" data-bs-toggle="modal" data-bs-target="#newVendor">New</button>
    <table class="table caption-top">
      <caption class="py-1">Hardware Assets</caption>
      <thead class="table-success">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Item</th>
          <th scope="col">Brand</th>
          <th scope="col">Model</th>
          <th scope="col">Asset Tag</th>
          <th scope="col">Current User</th>
          <th scope="col">Position</th>
          <th scope="col">Location</th>
          <th scope="col">Date Purchased</th>
          <th scope="col">Status</th>
          <th scope="col">History</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Laptop</td>
          <td>Lenovo</td>
          <td>ThinkPad</td>
          <td><a href="./pages/device-history" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View complete info.">APC-00603</a></td>
          <td>Rolly Castillo</td>
          <td>IT Specialist</td>
          <td>Parsolingan</td>
          <td>Oct. 9, 2021</td>
          <td>In-use</td>
          <td>
            <a href="./pages/movemetHistory" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View previous users."><i class="bi bi-person-workspace"></i></a>
            <a href="./pages/repairHistory" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View repair history."><i class="bi bi-tools"></i></a>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Laptop</td>
          <td>Lenovo</td>
          <td>ThinkPad</td>
          <td><a href="./pages/device-history" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View complete info.">APC-00420</a></td>
          <td>Marvin De Leon</td>
          <td>Engineer</td>
          <td>Parsolingan</td>
          <td>Oct. 9, 2024</td>
          <td>In-use</td>
          <td>
            <a href="./pages/movemetHistory" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View previous users."><i class="bi bi-person-workspace"></i></a>
            <a href="./pages/repairHistory" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View repair history."><i class="bi bi-tools"></i></a>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Laptop</td>
          <td>Lenovo</td>
          <td>ThinkPad</td>
          <td><a href="./pages/device-history" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View complete info.">APC-00505</a></td>
          <td>Nelly Rose Celi</td>
          <td>Finance Specialist</td>
          <td>Parsolingan</td>
          <td>Oct. 9, 2021</td>
          <td>In-use</td>
          <td>
            <a href="./pages/movemetHistory" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View previous users."><i class="bi bi-person-workspace"></i></a>
            <a href="./pages/repairHistory" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View repair history."><i class="bi bi-tools"></i></a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</x-layout>