<!-- NEW USER MODAL -->
<div class="modal fade" id="newVendor" tabindex="-1" aria-labelledby="newVendorModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content mw-25">
        <div class="modal-header py-1">
          <h1 class="modal-title fs-5" id="exampleModalLabel">New Vendor</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body py-1">
            <form class="mt-3" action="/new-vendor/create" method="POST">
              @csrf
              <div class="mb-2 d-flex justify-content-between">
                <label for="vendor_name">Name: </label>
                <input class="w-50" type="text" id="vendor_name" name="vendor_name">
              </div>

              <div class="mb-2 d-flex justify-content-between">
                <label for="vendor_address">Address: </label>
                <input class="w-50" type="text" id="vendor_address" name="vendor_address">
              </div>

              <div class="mb-2 d-flex justify-content-between">
                <label for="cellphone_#">Cellphone #: </label>
                <input class="w-50" type="text" id="cellphone_#" name="cellphone_#">
              </div>

              <div class="mb-2 d-flex justify-content-between">
                <label for="telephone_#">Telephone #: </label>
                <input class="w-50" type="text" id="telephone_#" name="telephone_#">
              </div>

              <div class="mb-2 d-flex justify-content-between">
                <label for="vendor_email">Email: </label>
                <input class="w-50" type="email" id="vendor_email" name="vendor_email">
              </div>

              <div class="modal-footer py-1">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div><!-- END OF NEW USER MODAL -->