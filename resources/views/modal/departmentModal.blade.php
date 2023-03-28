{{-- @extends('layout') --}}
    <!-- NEW DEPARTMENT MODAL -->
{{-- @section('departmentModal') --}}
    <div class="modal fade" id="newDepartment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content mw-25">
                <div class="modal-header py-1">
                <h1 class="modal-title fs-5" id="exampleModalLabel">New Department</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body py-1">
                    <form class="mt-3" action="/new-department/create" method="POST">
                        @csrf
                    <div class="mb-2 d-flex justify-content-between">
                        <label for="department_code">Department Code: </label>
                        <input class="w-50" type="text" id="department_code" name="department_code">
                    </div>

                    <div class="mb-2 d-flex justify-content-between">
                        <label for="department_name">Department Name: </label>
                        <input class="w-50" type="text" id="department_name" name="department_name">
                    </div>

                    <div class="mb-2 d-flex justify-content-between">
                        <label for="description">Description: </label>
                        <textarea class="w-50" rows="1" cols="29" id="description" name="description">
                        </textarea>
                    </div>

                    <div class="modal-footer py-1">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div><!-- END OF NEW DEPARTMENT MODAL -->
{{-- @endsection --}}