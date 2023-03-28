{{-- @extends('layout') --}}
<!-- TONER MODAL SECTION -->

{{-- @section('content') --}}
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> --}}
        {{-- <div class="modal-dialog modal-dialog-centered"> --}}
        <div class="modal-content mw-25">
            <div class="modal-header py-1">
            <h1 class="modal-title fs-5" id="exampleModalLabel">New Transaction</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body py-1">
                <form class="mt-3" action="#" method="POST">

                <div class="mb-2 d-flex justify-content-between">
                    <div>
                        <label class="form-check-label me-5" for="inboundToner">Inbound:</label>
                        <input class="form-check-input" type="radio" id="inboundToner" name="transactionType" value="1">
                    </div>
                    <div>
                        <label class="me-5 form-check-label" for="outboundToner">Outbound:</label>
                        <input class="form-check-input" type="radio" id="outboundToner" name="transactionType" value="2">
                    </div>
                </div>

                <div class="mb-2 d-flex justify-content-between">
                    <label for="date">Date:</label>
                    <input class="w-50" type="date" id="date" name="date">
                </div>

                <div class="mb-2 d-flex justify-content-between">
                    <label for="cartridge">Cartridge Type: </label>
                    <select class="w-50" name="cartridge_type" id="cartridge_type">
                        <option value="1">CF500A Series</option>
                        <option value="2">CANON 337</option>
                        <option value="3">CF400A Series</option>
                        <option value="4">CE285A</option>
                        <option value="5">CF217A</option>
                    </select>
                </div>

                <div class="mb-2 d-flex justify-content-between">
                    <label for="black">Black: </label>
                    <input class="w-50" type="number" id="black" name="black_qty">
                </div>

                <div class="mb-2 d-flex justify-content-between">
                    <label for="cyan">Cyan: </label>
                    <input class="w-50" type="number" id="Cyan" name="cyan_qty">
                </div>

                <div class="mb-2 d-flex justify-content-between">
                    <label for="magenta">Magenta: </label>
                    <input class="w-50" type="number" id="magenta" name="magenta_qty">
                </div>

                <div class="mb-2 d-flex justify-content-between">
                    <label for="yellow">Yellow: </label>
                    <input class="w-50" type="number" id="yellow" name="yellow_qty">
                </div>

                <div class="mb-2 d-flex justify-content-between">
                    <label for="employeeId">C/O: </label>
                </div>

                <div class="modal-footer py-1">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
                </div>
            </form>
            </div>
        </div>
        {{-- </div> --}}
    {{-- </div> --}}
{{-- @endsection --}}
<!-- END OF TONER MODAL -->