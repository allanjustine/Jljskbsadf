<div>
    @include('livewire.update')
    <h3>{{ auth()->user()->name }} profile</h3>
    <hr>
    @if (session('message'))
        <div class="alert bg-success text-light text-center">
            <h6 class="text-center">{{ session('message') }}</h6>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="d-flex justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="box front text-white">
                    <img alt="{{ auth()->user()->name }} profile" src="{{ Storage::url(auth()->user()->profile_img) }}">
                    <h2>{{ auth()->user()->name }}</h2>
                    <h4>{{ auth()->user()->email }}</h4>
                    <p class="socials">
                        <i class="fa fa-facebook"></i>
                        <i class="fa fa-twitter"></i>
                        <i class="fa fa-linkedin"></i>
                        <i class="fa fa-youtube"></i>
                    </p>
                    <p>
                        <a href="#" class="btn btn-primary" data-toggle="modal"
                            data-target="#updateProfile">Update Profile</a>
                        <a href="#" class="btn btn-warning" data-toggle="modal"
                            data-target="#updatePic">Update Photo</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card {
        width: 100%;
        height: 300px;
        transform-style: preserve-3d;
        perspective: 500px;
        border: none;
        background-color: inherit;
    }

    .card .box {
        position: absolute;
        color: #262626;
        width: 100%;
        height: 100%;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        border-radius: 15px;
        background: #fff;
        transform-style: preserve-3d;
        transition: 0.5s;
        backface-visibility: hidden;
    }

    .card .box.front {
        background-image: url(images/background.png);
        background-repeat: repeat;
    }

    .card .box.front,
    .card .box.back {
        position: absolute;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .card .box.front img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        object-fit: cover;
        border: 5px solid #262626;
        margin-top: 20px;
    }

    .box.front h2 {
        font-family: 'Bebas Neue', cursive;
    }

    .box.front h4 {
        font-size: 18px;
        letter-spacing: 2px;
    }

    .socials i {
        margin: 0 15px;
    }

    .card .box.back {
        position: absolute;
        background: #fff;
        transform: rotateY(180deg);
        padding: 20px 30px;
        text-align: center;
        user-select: none;
    }

    .card .box.back .fa-quote-left {
        position: absolute;
        top: 25px;
        left: 180px;
        font-size: 3.2rem;
    }
</style>
