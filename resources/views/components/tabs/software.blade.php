<x-slot name="tabContent">
  <div id="software" class="container-fluid tab-pane fade"><br>
      <button type="button" class="btn btn-primary py-1" data-bs-toggle="modal" data-bs-target="#newSoftware">New</button>
      <table class="table caption-top container-xl">
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
          @foreach($softwares as $software)
          <tr>
            <td>{{ $software->id }}</td>
            <td>{{ $software->name }}</td>
            <td>{{ $software->description }}</td>
            <td>{{ $software->version }}</td>
            <td>{{ $software->purchase_date }}</td>
            <td>{{ $software->license }}</td>
            <td>{{ $software->exp_date }}</td>
            <td>Rolly Castillo</td>
            <td>IT Specialist</td>
            <td>Parsolingan</td>
            <td><a href="./pages/software-info" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View complete software info.">APC-00603</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
  </div>
</x-slot>