<div class="container-fluid tab-pane fade" id="firewallList">
    <button type="button" class="btn btn-primary py-1" data-bs-toggle="modal" data-bs-target="#newHardware">New Firewall</button>

    <table class="table caption-top container-xl">
      <caption class="py-1">Firewall</caption>
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
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($hardwares as $hardware)
        <tr>
          <td>{{ $hardware->id }}</td>
          <td>{{ $hardware->item }}</td>
          <td>{{ $hardware->brand }}</td>
          <td>{{ $hardware->model }}</td>
          <td><a href="./pages/device-history" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View complete info.">{{ $hardware->asset_tag }}</a></td>
          <td>Rolly Castillo</td>
          <td>IT Specialist</td>
          <td>Parsolingan</td>
          <td>{{ $hardware->purchase_date}}</td>
          <td>In-use</td>
          <td>
            <a href="./pages/movemetHistory" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View previous users."><i class="bi bi-person-workspace"></i></a>
            <a href="./pages/repairHistory" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View repair history."><i class="bi bi-tools"></i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>