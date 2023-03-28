<!-- {{-- @extends('layout') --}} -->
<!-- NEW EMPLOYEE MODAL -->
<!-- {{-- @section('employeeModal') --}} -->
    <div class="modal fade" id="newEmployee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content mw-25">
            <div class="modal-header py-1">
            <h1 class="modal-title fs-5" id="exampleModalLabel">New Employee</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body py-1">
                <form class="mt-3" action="/new-employee/create" method="POST">
                    @csrf
                <div class="mb-2 d-flex justify-content-between">
                    <label for="employee_id">Employee ID: </label>
                    <input class="w-50" type="text" id="employee_id" name="employee_id">
                </div>

                <div class="mb-2 d-flex justify-content-between">
                    <label for="department_id">Department ID: </label>
                    <input class="w-50" type="number" id="department_id" name="department_id">
                </div>

                <div class="mb-2 d-flex justify-content-between">
                    <label for="firstname">Firstname: </label>
                    <input class="w-50" type="text" id="firstname" name="firstname">
                </div>

                <div class="mb-2 d-flex justify-content-between">
                    <label for="lastname">Lastname: </label>
                    <input class="w-50" type="text" id="lastname" name="lastname">
                </div>

                <div class="mb-2 d-flex justify-content-between">
                    <label for="middle_name">Middle Name: </label>
                    <input class="w-50" type="text" id="middle_name" name="middle_name">
                </div>

                <div class="mb-2 d-flex justify-content-between">
                    <label for="ext_name">Extension Name: </label>
                    <input class="w-50" type="text" id="ext_name" name="ext_name">
                </div>

                <div class="mb-2 d-flex justify-content-between">
                    <label for="gender">Gender: </label>
                    <select class="w-50" name="gender" id="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                  </div>

                <div class="mb-2 d-flex justify-content-between">
                    <label for="position">Position: </label>
                    <input class="w-50" type="text" id="position" name="position">
                </div>

                <div class="mb-2 d-flex justify-content-between">
                    <label for="role">Role: </label>
                    <select class="w-50" name="role" id="role">
                        <option value="admin">Admin</option>
                        <option value="agent">Agent</option>
                        <option value="csr">CSR</option>
                        <option value="customer" selected>Customer</option>
                    </select>
                  </div>

                <div class="mb-2 d-flex justify-content-between">
                    <label for="email">Email: </label>
                    <input class="w-50" type="email" id="email" name="email">
                </div>

                <div class="modal-footer py-1">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
                </div>
            </form>
            </div>
        </div>


            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


        </div>
    </div><!-- END OF NEW EMPLOYEE MODAL -->
<!-- {{-- @endsection --}} -->