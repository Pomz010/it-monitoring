<div id="userList" class="container-fluid tab-pane fade"><br>
    <table class="table caption-top container-xl">
      <caption>User List</caption>
      <thead class="table-success">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">User Type</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->name }}</td>
          <td>Admin</td>
          <td>
            <a href="#"><i class="bi bi-arrow-repeat"></i></a>
            <a href="#"><i class="bi bi-trash-fill"></i></a>
          </td>
        </tr>            
        @endforeach
      </tbody>
    </table>
  </div>