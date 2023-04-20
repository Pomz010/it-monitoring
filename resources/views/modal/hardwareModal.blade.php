{{-- @extends('layout') --}}
<!-- NEW HARDWARE MODAL -->
{{-- @section('hardwareModal') --}}
    <div class="modal fade" data-bs-backdrop="static" id="newHardware" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header py-1">
            <h1 class="modal-title fs-5" id="exampleModalLabel">New Hardware</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body py-1">
                <form action="#" method="POST">
                    @csrf
                    <div>
                    <h5>Hardware Info</h5>
                    <div class="mb-2 d-flex justify-content-between">
                        <label for="asset_tag">Asset Tag: </label>
                        <input class="w-50" type="text" id="asset_tag" name="asset_tag">
                    </div>

                    <div class="mb-2 d-flex justify-content-between">
                        <label for="item">Item: </label>
                        <select class="w-50" name="item" id="item">
                            <option value="Laptop">Laptop</option>
                            <option value="System Unit">System Unit</option>
                            <option value="Monitor">Monitor</option>
                            <option value="Printer">Printer</option>
                            <option value="Projector">Projector</option>
                            <option value="Smartphone">Smartphone</option>
                            <option value="UPS">UPS</option>
                        </select>
                    </div>

                    <div class="mb-2 d-flex justify-content-between">
                        <label for="brand">Brand: </label>
                        <input class="w-50" type="text" id="brand" name="brand">
                    </div>

                    <div class="mb-2 d-flex justify-content-between">
                        <label for="model">Model: </label>
                        <input class="w-50" type="text" id="model" name="model">
                    </div>

                    <div class="mb-2 d-flex justify-content-between">
                        <label for="processor">Processor: </label>
                        <input class="w-50" type="text" id="processor" name="processor">
                    </div>

                    <div class="mb-2 d-flex justify-content-between">
                        <label for="memory">Memory: </label>
                        <input class="w-50" type="text" id="memory" name="memory">
                    </div>

                    <div class="mb-2 d-flex justify-content-between">
                        <label for="storage">Storage: </label>
                        <input class="w-50" type="text" id="storage" name="storage">
                    </div>

                    <div class="mb-2 d-flex justify-content-between">
                        <label for="serial_#">Serial #: </label>
                        <input class="w-50" type="text" id="serial_#" name="serial_#">
                    </div>
                    </div>

                    <div>
                    <h5>Purchase Info</h5>
                    <div class="mb-2 d-flex justify-content-between">
                        <label for="date_purchased">Date Purchased: </label>
                        <input class="w-50" type="date" id="date_purchased" name="date_purchased">
                    </div>

                    <div class="mb-2 d-flex justify-content-between">
                        <label for="vendor">Vendor: </label>
                        <input class="w-50" type="Text" id="vendor" name="vendor">
                    </div>

                    <div class="mb-2 d-flex justify-content-between">
                        <label for="warranty">Warranty(Mos.): </label>
                        <input class="w-50" type="number" id="warranty" name="warranty">
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
{{-- @endsection --}}