@extends('layout')
<!-- NEW EMPLOYEE MODAL -->
@section('employeeModal')
    <div class="modal fade" id="newEmployee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content mw-25">
            <div class="modal-header py-1">
            <h1 class="modal-title fs-5" id="exampleModalLabel">New Employee</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body py-1">
                <form class="mt-3" action="#" method="POST">

                <div class="mb-2 d-flex justify-content-between">
                    <label for="black">Employee ID: </label>
                    <input class="w-50" type="text" id="black" name="black_qty">
                </div>

                <div class="mb-2 d-flex justify-content-between">
                    <label for="black">Department: </label>
                    <input class="w-50" type="text" id="black" name="black_qty">
                </div>

                <div class="mb-2 d-flex justify-content-between">
                    <label for="black">Firstname: </label>
                    <input class="w-50" type="text" id="black" name="black_qty">
                </div>

                <div class="mb-2 d-flex justify-content-between">
                    <label for="black">Lastname: </label>
                    <input class="w-50" type="text" id="black" name="black_qty">
                </div>

                <div class="mb-2 d-flex justify-content-between">
                    <label for="black">Middle Name: </label>
                    <input class="w-50" type="text" id="black" name="black_qty">
                </div>

                <div class="mb-2 d-flex justify-content-between">
                    <label for="black">Extension Name: </label>
                    <input class="w-50" type="text" id="black" name="black_qty">
                </div>

                <div class="mb-2 d-flex justify-content-between">
                    <label for="black">Gender: </label>
                    <input class="w-50" type="text" id="black" name="black_qty">
                </div>

                <div class="mb-2 d-flex justify-content-between">
                    <label for="black">Position: </label>
                    <input class="w-50" type="text" id="black" name="black_qty">
                </div>

                <div class="mb-2 d-flex justify-content-between">
                    <label for="black">Email: </label>
                    <input class="w-50" type="email" id="black" name="black_qty">
                </div>

                <div class="modal-footer py-1">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div><!-- END OF NEW EMPLOYEE MODAL -->
@endsection