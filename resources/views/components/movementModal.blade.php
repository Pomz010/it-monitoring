@extends('layout')
<!-- MOVEMENT MODAL -->
@section('movementModal')
    <div class="modal fade" id="assetMovement" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content mw-25">
            <div class="modal-header py-1">
            <h1 class="modal-title fs-5" id="exampleModalLabel">New Movement</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body py-1">
                <form action="#" method="POST">

                <div class="mb-2 d-flex justify-content-between">
                    <div>
                        <label class="form-check-label me-5" for="inboundAsset">Inbound:</label>
                        <input class="form-check-input" type="radio" id="inboundAsset" name="movementType" value="1">
                    </div>
                    <div>
                        <label class="me-5 form-check-label" for="outboundAsset">Outbound:</label>
                        <input class="form-check-input" type="radio" id="outboundAsset" name="movementType" value="2">
                    </div>
                </div>

                <div class="mb-2 d-flex justify-content-between">
                    <label for="date">Date:</label>
                    <input class="w-50" type="date" id="date" name="date">
                </div>

                <div class="mb-2 d-flex justify-content-between">
                    <label for="cartridge">Item: </label>
                    <select class="w-50" name="cartridge_type" id="cartridge_type">
                        <option value="1">Laptop</option>
                        <option value="2">Monitor</option>
                        <option value="3">System Unit</option>
                        <option value="4">UPS</option>
                        <option value="5">Projector</option>
                        <option value="5">Access Point</option>
                        <option value="5">Router</option>
                        <option value="5">Switch</option>
                        <option value="5">Printer</option>
                        <option value="5">Tablet</option>
                        <option value="5">Cellphone</option>
                        <option value="5">Mouse</option>
                        <option value="5">Keyboard</option>
                    </select>
                </div>

                <div class="mb-2 d-flex justify-content-between">
                    <label for="black">Asset Tag: </label>
                    <input class="w-50" type="text" id="black" name="black_qty">
                </div>

                <div class="mb-2 d-flex justify-content-between">
                    <label for="cyan">Description: </label>
                    <textarea class="w-50" name="message" rows="1" cols="29" id="Cyan" name="cyan_qty">
                    </textarea>
                </div>

                <div class="mb-2 d-flex justify-content-between">
                    <label for="purpose">Purpose: </label>
                    <textarea class="w-50" name="message" rows="1" cols="29" id="purpose" name="purpose">
                    </textarea>
                </div>

                <div class="mb-2 d-flex justify-content-between">
                    <label for="yellow">Qty: </label>
                    <input class="w-50" type="number" id="yellow" name="yellow_qty">
                </div>

                <div class="mb-2 d-flex justify-content-between">
                    <label for="receiver">C/O: </label>
                    <select class="w-50" name="receiver" id="receiver">
                        <option value="1">Receiver 1</option>
                        <option value="2">Receiver 2</option>
                        <option value="3">Receiver 3</option>
                    </select>
                </div>

                <div class="mb-2 d-flex justify-content-between">
                    <label for="destination">From: </label>
                    <select class="w-50" name="destination" id="destination">
                        <option value="1">Parsolingan</option>
                        <option value="2">San Agustin</option>
                        <option value="3">Tanza</option>
                    </select>
                </div>

                <div class="mb-2 d-flex justify-content-between">
                    <label for="source">To: </label>
                    <select class="w-50" name="source" id="source">
                        <option value="1">Parsolingan</option>
                        <option value="2">San Agustin</option>
                        <option value="3">Tanza</option>
                    </select>
                </div>
                <div class="mb-2 d-flex justify-content-between">
                    <label for="source">Condition: </label>
                    <select class="w-50" name="source" id="source">
                    <option value="3">Good</option>
                        <option value="1">For repair/upgrade</option>
                        <option value="2">For disposal</option>
                        <option value="3">Warranty claim</option>
                    </select>
                </div>

                <div class="modal-footer py-1">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div><!-- END OF MOVEMENT MODAL -->
@endsection