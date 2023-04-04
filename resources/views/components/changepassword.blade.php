
<x-layout>
      <!-- START BODY CONTAINER -->
      <div class="container-fluid gx-0">
        <div class="container w-auto position-absolute top-50 start-50 translate-middle">
            <h1>Change default password</h1>
            <p>Your new password must be different from your previous passwords.</p>
            <form action="{{ route('createPassword') }}" method="POST">
              @csrf
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control rounded-pill"  id="password" name="password">
                    <p>Must be atleast 8 characters.</p>
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control rounded-pill" name="password_confirmation" id="password_confirmation">
                    <p>Both passwords must match.</p>
                </div>
                <button type="submit" class="btn btn-dark rounded-pill w-100">Submit</button>
            </form>
        </div>
      </div>
</x-layout>
    