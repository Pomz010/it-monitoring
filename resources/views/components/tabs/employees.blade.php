<div id="employeeList" class="container-fluid tab-pane fade"><br>
    <table class="table caption-top container-xl">
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
        @foreach ($employees as $employee)
        <tr>
        <td>{{ $employee->id }}</td>
        <td>{{ $employee->employee_id }}</td>
        <td>{{ $employee->department_id }}</td>
        <td>{{ $employee->firstname }}</td>
        <td>{{ $employee->lastname }}</td>
        <td>{{ $employee->middle_name }}</td>
        <td>{{ $employee->ext_name }}</td>
        <td>{{ $employee->gender }}</td>
        <td>{{ $employee->position }}</td>
        <td>{{ $employee->email }}</td>
        <td><a href="#"><i class="bi bi-pencil-square"></i></a></td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>