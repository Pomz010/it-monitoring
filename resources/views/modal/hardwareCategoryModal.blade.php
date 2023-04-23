
    <div class="modal fade" id="newCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content mw-25">
                <div class="modal-header py-1">
                <h1 class="modal-title fs-5" id="exampleModalLabel">New Category</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body py-1">
                    <form class="mt-3" action="/create-hardware-category" method="POST">
                        @csrf
                        <div class="mb-2 d-flex justify-content-between">
                            <label for="category">Category Name: </label>
                            <input class="w-50" type="text" id="category" name="category">
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