<x-slot name="tabContent">
    @php
        $display = '';
        if(true) {
            $display = 'd-none';
        }
    @endphp
    <div class="modal fade" data-bs-backdrop="static" id="newHardware" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header py-1">
            <h1 class="modal-title fs-5" id="exampleModalLabel">New Laptop</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body py-1">
                <form action="/create-hardware" method="POST">
                    @csrf
                    <div>
                        <h5>Laptop Info</h5>
                        <div class="mb-2 d-flex justify-content-between">
                            <label for="asset_tag">Asset Tag: </label>
                            <input class="w-50" type="text" id="asset_tag" name="asset_tag">
                        </div>

                        <div class="mb-2 d-flex justify-content-between">
                            <label for="brand">Brand: </label>
                            <input class="w-50" type="text" id="brand" name="brand">
                        </div>

                        <div class="mb-2 d-flex justify-content-between">
                            <label for="model">Model: </label>
                            <input class="w-50" type="text" id="model" name="model">
                        </div>

                        <div class="mb-2 d-flex justify-content-between {{ $display }}">
                            <label for="processor">Processor: </label>
                            <input class="w-50" type="text" id="processor" name="processor">
                        </div>

                        <div class="mb-2 d-flex justify-content-between {{ $display }}">
                            <label for="memory">Memory: </label>
                            <input class="w-50" type="text" id="memory" name="memory">
                        </div>

                        <div class="mb-2 d-flex justify-content-between {{ $display }}">
                            <label for="storage">Storage: </label>
                            <input class="w-50" type="text" id="storage" name="storage">
                        </div>

                        <div class="mb-2 d-flex justify-content-between">
                            <label for="serial_#">Serial #: </label>
                            <input class="w-50" type="text" id="serial_#" name="serial_#">
                        </div>

                        <div class="mb-2 d-flex justify-content-between {{ $display }}">
                            <label for="imei_#1">IMEI #1: </label>
                            <input class="w-50" type="text" id="imei_#1" name="imei_#1">
                        </div>

                        <div class="mb-2 d-flex justify-content-between {{ $display }}">
                            <label for="imei_#2">IMEI #2: </label>
                            <input class="w-50" type="text" id="imei_#2" name="imei_#2">
                        </div>

                        <div class="mb-2 d-flex justify-content-between {{ $display }}">
                            <label for="hostname">Hostname: </label>
                            <input class="w-50" type="text" id="hostname" name="hostname">
                        </div>

                        <div class="mb-2 d-flex justify-content-between {{ $display }}">
                            <label for="sim_#">Sim #: </label>
                            <input class="w-50" type="text" id="sim_#" name="sim_#">
                        </div>
                    </div>

                    <div>
                    <h5>Purchase Info</h5>
                    <div class="mb-2 d-flex justify-content-between">
                        <label for="purchase_date">Date Purchased: </label>
                        <input class="w-50" type="date" id="purchase_date" name="purchase_date">
                    </div>

                    <div class="mb-2 d-flex justify-content-between">
                        <label for="vendor">Vendor: </label>
                        <select class="w-50" name="vendor" id="vendor">
                            <option value="Cimetrix">Cimetrix</option>
                            <option value="Computer Zone">Computer Zone</option>
                            <option value="Benerson">Benerson</option>
                            <option value="AceCom">AceCom</option>
                        </select>
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
    </div>
</x-slot>