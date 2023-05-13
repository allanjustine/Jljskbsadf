
<div>
    <div class="container">
        <div class="col-md-6 offset-md-4 mt-5">
            <div class="card-img-top d-flex justify-content-center align-items-center mb-3">
                {{-- <div class="rounded-circle overflow-hidden" style="width: 200px; height: 200px;">
                    <img src="images/logo.png" class="w-100 h-100" alt="Login Image">
                </div> --}}
            </div>
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="text-center">Register</h3>
                    <hr>
                    <form wire:submit.prevent="register">
                        @if ($profile_img)
                        <img src="{{ $profile_img->temporaryUrl() }}" style="width: 120px;" class="mt-1">
                        @endif
                        <div class="form-floating">
                            <input type="file" id="profile_img" name="name" wire:model.defer="profile_img" class="form-control">
                            <label for="profile_img">Select Your Profile Image:</label>
                        </div>
                        @error('profile_img')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-floating mt-3">
                            <input type="text" id="name" name="name" wire:model.defer="name" class="form-control">
                            <label for="name">Name:</label>
                        </div>
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-floating mt-3">
                            <input type="email" id="email" name="email" wire:model.defer="email" class="form-control">
                            <label for="email">Email:</label>
                        </div>
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-floating mt-3">
                            <input type="password" id="password" name="password" wire:model.defer="password" class="form-control">
                            <label for="password">Password:</label>
                        </div>
                        @error('password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-floating mt-3">
                            <input type="password" id="password_confirmation" name="password_confirmation" wire:model.defer="password_confirmation" class="form-control">
                            <label for="password_confirmation">Confirm Password:</label>
                        </div>
                        @error('password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        {{-- <div class="form-floating mt-3">
                            <select name="gender" id="" class="form-control" wire:model.defer="gender">
                                <option hidden="true">Gender</option>
                                <option selected disabled>Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <label for="password_confirmation">Select Gender:</label>
                            @error('gender')
                                <p class="text-danger" id="messagee">{{ $message }}</p>
                        @enderror
                </div> --}}
                <div class="d-flex mt-3">
                    <div class="flex-grow-1 text-light">
                        <p class="signin" href="/register"><span>Already have an account?</span><a href="/">&nbsp;Sign in</a>
                            </p>
                        </div>
                    <button type="submit" class="mt-3 btn btn-primary">Register</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<style>

    body
{
     /* background-image:url('https://i.gifer.com/LxAb.gif'); */
     background-image:url('images/background.png');
      background-repeat: no-repeat;

        background-size: 100%;

        background-attachment: fixed;
     }
    .card {
      padding: 20px;
      background: #008b8b87;
      }
      .form-group {
      input {
         margin-bottom: 30px;
      }
    }

    h1 {
      margin-bottom: 1.5rem;
    }
    .error {
    animation-name: errorShake;
    animation-duration: 0.3s;
    }
    @keyframes errorShake {
    0% {
      transform: translateX(-25px);
    }
    25% {
      transform: translateX(25px);
    }
    50% {
      transform: translateX(-25px);
    }
    75% {
      transform: translateX(25px);
    }
    100% {
      transform: translateX(0);
    }
    }
    a {
      color: hsl(0, 0%, 7%);
      }
      p.signin a {
        background:cornflowerblue;
        padding: 5px 20px;
        margin: 4px;
        border-radius: 12px;
        cursor: pointer;
        position: relative;
        display: inline-block;
       }
      p.signin {
        font-size: 1.1rem;
        margin: 10px;
      }
      p.signin * {
      white-space: pre;

      }
    </style>
