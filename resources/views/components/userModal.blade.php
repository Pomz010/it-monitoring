{{-- @extends('layout') --}}
<!-- NEW USER MODAL -->
{{-- @section('userModal') --}}
  <div class="modal fade" id="newUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content mw-25">
              <div class="modal-header py-1">
                <h1 class="modal-title fs-5" id="exampleModalLabel">New User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body py-1">
                  <form class="mt-3" action="/new-user" method="POST">
                    @csrf
                    <div class="mb-2 d-flex justify-content-between">
                      <label for="cartridge">Role: </label>
                      <select class="w-50" name="cartridge_type" id="cartridge_type">
                          <option value="1">Admin</option>
                          <option value="2">Agent</option>
                          <option value="3">CSR</option>
                          <option value="4">Customer</option>
                      </select>
                    </div>

                    <div class="mb-2 d-flex justify-content-between">
                      <label for="cartridge">Select User: </label>
                      <select class="w-50" name="cartridge_type" id="cartridge_type">
                          <option value="1">Rolly Castillo</option>
                          <option value="2">Regie Austria</option>
                          <option value="3">Kevin Herrera</option>
                          <option value="4">Jeric Geronimo</option>
                      </select>
                    </div>

                    <div class="mb-2 d-flex justify-content-between">
                      <label for="black">Username: </label>
                      <input class="w-50" type="text" id="black" name="black_qty">
                    </div>

                    <div class="mb-2 d-flex justify-content-between">
                      <label for="black">Password: </label>
                      <input class="w-50" type="password" id="black" name="black_qty">
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
{{-- @endsection --}}