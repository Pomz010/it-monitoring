@extends('layout')
<!-- NEW HARDWARE MODAL -->
@section('hardwareModal')
    <div class="modal fade" data-bs-backdrop="static" id="newHardware" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header py-1">
            <h1 class="modal-title fs-5" id="exampleModalLabel">New Hardware</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body py-1">
                <form action="#" method="POST">

                    <div>
                    <h5>Hardware Info</h5>
                    <div class="mb-2 d-flex justify-content-between">
                        <label for="yellow">Asset Tag: </label>
                        <input class="w-50" type="text" id="yellow" name="yellow_qty">
                    </div>

                    <div class="mb-2 d-flex justify-content-between">
                        <label for="source">Item: </label>
                        <select class="w-50" name="source" id="source">
                            <option value="1">Laptop</option>
                            <option value="2">System Unit</option>
                            <option value="3">Monitor</option>
                            <option value="3">Printer</option>
                            <option value="3">Projector</option>
                            <option value="3">Smartphone</option>
                            <option value="3">UPS</option>
                        </select>
                    </div>

                    <div class="mb-2 d-flex justify-content-between">
                        <label for="yellow">Brand: </label>
                        <input class="w-50" type="text" id="yellow" name="yellow_qty">
                    </div>

                    <div class="mb-2 d-flex justify-content-between">
                        <label for="yellow">Model: </label>
                        <input class="w-50" type="text" id="yellow" name="yellow_qty">
                    </div>

                    <div class="mb-2 d-flex justify-content-between">
                        <label for="yellow">Processor: </label>
                        <input class="w-50" type="text" id="yellow" name="yellow_qty">
                    </div>

                    <div class="mb-2 d-flex justify-content-between">
                        <label for="yellow">Memory: </label>
                        <input class="w-50" type="text" id="yellow" name="yellow_qty">
                    </div>

                    <div class="mb-2 d-flex justify-content-between">
                        <label for="yellow">Storage: </label>
                        <input class="w-50" type="text" id="yellow" name="yellow_qty">
                    </div>

                    <div class="mb-2 d-flex justify-content-between">
                        <label for="yellow">Serial #: </label>
                        <input class="w-50" type="text" id="yellow" name="yellow_qty">
                    </div>
                    </div>

                    <div>
                    <h5>Purchase Info</h5>
                    <div class="mb-2 d-flex justify-content-between">
                        <label for="yellow">Date Purchased: </label>
                        <input class="w-50" type="date" id="yellow" name="yellow_qty">
                    </div>

                    <div class="mb-2 d-flex justify-content-between">
                        <label for="yellow">Vendor: </label>
                        <input class="w-50" type="Text" id="yellow" name="yellow_qty">
                    </div>

                    <div class="mb-2 d-flex justify-content-between">
                        <label for="yellow">Warranty(Mos.): </label>
                        <input class="w-50" type="number" id="yellow" name="yellow_qty">
                    </div>
                    </div>

                <div class="modal-footer py-1">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div><!-- END OF NEW HARDWARE MODAL -->
@endsection