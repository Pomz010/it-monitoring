    
    <div class="modal fade" data-bs-backdrop="static" id="newSoftware" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header py-1">
            <h1 class="modal-title fs-5" id="exampleModalLabel">New Software</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body py-1">
                <form action="/create-software" method="POST">
                    @csrf
                    <div>
                        <h5>Software Info</h5>
                        <div class="mb-2 d-flex justify-content-between">
                            <label for="name">Name: </label>
                            <input class="w-50" type="text" id="name" name="name">
                        </div>

                        <div class="mb-2 d-flex justify-content-between">
                            <label for="description">Description: </label>
                            <input class="w-50" type="text" id="description" name="description">
                        </div>

                        <div class="mb-2 d-flex justify-content-between">
                            <label for="version">Version: </label>
                            <input class="w-50" type="text" id="version" name="version">
                        </div>

                        

                        <div class="mb-2 d-flex justify-content-between">
                            <label for="license">Lic. Type: </label>
                            <input class="w-50" type="text" id="license" name="license">
                        </div>

                        <div class="mb-2 d-flex justify-content-between">
                            <label for="exp_date">Exp. Date: </label>
                            <input class="w-50" type="date" id="exp_date" name="exp_date">
                        </div>

                        <div class="mb-2 d-flex justify-content-between">
                            <label for="developer">Developer: </label>
                            <input class="w-50" type="text" id="developer" name="developer">
                        </div>

                        <div class="mb-2 d-flex justify-content-between">
                            <label for="category">Category: </label>
                            <input class="w-50" type="text" id="category" name="category">
                        </div>

                        <div class="mb-2 d-flex justify-content-between">
                            <label for="date_installed">Date Installed: </label>
                            <input class="w-50" type="date" id="date_installed" name="date_installed">
                        </div>

                        <div class="mb-2 d-flex justify-content-between">
                            <label for="serial_#">Serial #: </label>
                            <input class="w-50" type="text" id="serial_#" name="serial_#">
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
                            <input class="w-50" type="text" id="vendor" name="vendor">
                        </div>

                        <div class="mb-2 d-flex justify-content-between">
                            <label for="product_key">Product Key: </label>
                            <input class="w-50" type="text" id="product_key" name="product_key">
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