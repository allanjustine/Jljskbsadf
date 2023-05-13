<body>
<div>


    <div class="container">
        <div class="col-sm-6 offset-sm-4 mt-5">
            @if (session('message'))
                <div class="alert bg-success text-center text-white"><small>{{ session('message') }}</small></div>
            @endif
            @if (session('error'))
                <div class="alert bg-danger text-center text-white"><small>{{ session('error') }}</small></div>
            @endif
            <div class="card-img-top d-flex justify-content-center align-items-center mb-3">
                {{-- <div class="rounded-circle overflow-hidden shadow" style="width: 200px; height: 200px;">
                    <img src="images/logo.png" class="w-100 h-100" alt="Login Image">
                </div> --}}
            </div>
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="text-center">Sign in</h3>
                    <hr>
                    <form wire:submit.prevent="login">
                        @error('error')
                            <div class="text-white p-2 text-center bg-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-floating mt-3">
                            <input type="email" id="email" name="email" wire:model.defer="email"
                                class="form-control">
                            <label for="email">Email:</label>
                        </div>

                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-floating mt-3">
                            <input type="password" id="password" name="password" wire:model.defer="password"
                                class="form-control">
                            <label for="password">Password:</label>
                        </div>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="d-flex mt-3">
                            <div class="flex-grow-1 text-light">
                                <p class="ifaccount" href="/register"><span>Don't have an account?</span><a href="/register">&nbsp;Sign up</a></p>
                            </div>
                            <button type="submit" class="mt-3 btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<style lang="scss" scoped>

    body
    {
             /* background-image:url('https://media1.giphy.com/media/RN8WqcyO5Prm1e9mjW/giphy.gif'); */
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
        p.ifaccount a {
          background: cornflowerblue;
          padding: 5px 20px;
          margin: 4px;
          border-radius: 12px;
          cursor: pointer;
          position: relative;
          display: inline-block;
         }
        p.ifaccount {
          font-size: 1.1rem;
          margin: 10px;
        }
        p.ifaccount * {
        white-space: pre;

        }
        span.orPhoneEmail{
         color: blanchedalmond;
          font-weight: 700;
          background: cadetblue;
          padding: 3px;
          border-radius: 10px;
          position: relative;
          display: inline-block;
          float: right;
          cursor: pointer;
        }
        span.orPhoneEmail.submitCode {
          float: none;
          top: -17px;
          left: 25%;
          background: blueviolet;
        }

        </style>
