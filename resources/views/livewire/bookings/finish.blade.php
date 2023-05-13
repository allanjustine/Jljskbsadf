<div>
    <!-- Modal Update Music-->
    <div wire:ignore.self class="modal fade" id="finishBookingModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLongTitle">Booking Ended</h5>
                </div>
                <div class="modal-body">
                    <p class="text-muted">Event Performer</p>
                    <div class="card shadow-md">
                        <div class="card-body">
                            <h3 class="text-center">{{ $musicTitle }}</h3>
                            <p class="text-center text-muted"><i class="fas fa-music"></i> {{ $musicGenre }}, <i
                                    class="fas fa-location-dot"></i> {{ $musicLocation }}</p>
                        </div>
                    </div>
                    <form>
                        <p class="text-muted mt-2">Rate and Feedback</p>
                        <div class="card shadow-md p-1">
                            <div class="card-body">
                                <span class="text-muted">Rate Booking</span>
                                <br>
                                <fieldset class="rating ml-3">
                                    <input type="radio" id="star5" name="rating" value="5"
                                        wire:model.defer="rating">
                                    <label for="star5" title="5 stars"><i class="fa fa-smile-o"></i></label>
                                    <input type="radio" id="star4" name="rating" value="4"
                                        wire:model.defer="rating">
                                    <label for="star4" title="4 stars"><i class="fa fa-smile-o"></i></label>
                                    <input type="radio" id="star3" name="rating" value="3"
                                        wire:model.defer="rating">
                                    <label for="star3" title="3 stars"><i class="fa fa-smile-o"></i></label>
                                    <input type="radio" id="star2" name="rating" value="2"
                                        wire:model.defer="rating">
                                    <label for="star2" title="2 stars"><i class="fa fa-smile-o"></i></label>
                                    <input type="radio" id="star1" name="rating" value="1"
                                        wire:model.defer="rating">
                                    <label for="star1" title="1 star"><i class="fa fa-smile-o"></i></label>

                                    <div class="rating-label">
                                        0 out of 5
                                    </div>
                                </fieldset>
                                @error('rating')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <hr>

                            <div class="p-2">
                                <span class="text-muted">Give Feedback</span><br>
                                <textarea name="" id="" cols="30" rows="3" class="form-control"
                                    placeholder="Write your feedback here..." wire:model.defer="content"></textarea>
                            </div>
                            @error('content')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary text-white" wire:click="submit()">Submit</button>
                    <button type="button" class="btn btn-secondary text-white" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    const ratingFieldset = document.querySelector('.rating');
    const ratingLabel = ratingFieldset.querySelector('.rating-label');

    ratingFieldset.addEventListener('change', (event) => {
        const ratingValue = event.target.value;
        ratingLabel.textContent = `${ratingValue} out of 5`;
    });
</script>


<style>
    .rating {
        float: left;
    }

    .rating input[type="radio"] {
        display: none;
    }

    .rating label {
        font-size: 20px;
        color: rgb(158, 154, 154);
        float: right;
        cursor: pointer;
        margin-right: 10px;
    }

    .rating label:hover,
    .rating label:hover~label,
    .rating input[type="radio"]:checked~label {
        color: orange;
        opacity: 1;
        scale: 1.5;
    }
</style>
