<div id="departmentList" class="container-fluid tab-pane fade"><br>
    <table class="table caption-top container-xl">
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
        @foreach($departments as $department)
        <tr>
          <td>{{ $department->id}}</td>
          <td>{{ $department->department_code }}</td>
          <td>{{ $department->department_name }}</td>
          <td>{{ $department->description }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>