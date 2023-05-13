<div>
    <div wire:ignore.self class="modal fade" id="cancelBookingModal" tabindex="-1" role="dialog"
        aria-labelledby="cancelBookingModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title text-white" id="cancelBookingModalLabel">Cancel Booking?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-muted">Event Performer</p>
                    <div class="card shadow-md">
                        <div class="card-body">
                            <h3 class="text-center">{{ $musicTitle }}</h3>
                            <p class="text-center text-muted"><i class="fas fa-music"></i> {{ $musicGenre }}, <i class="fas fa-location-dot"></i> {{ $musicLocation }}</p>
                        </div>
                    </div>
                    <p class="text-muted mt-2">Booking Details</p>
                    <div class="card shadow-md">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <span class="text-muted">Event Name</span><br>
                                    <span><strong>{{ $eventName }}</strong></span>
                                </div>
                                <div class="col-12 col-md-6">
                                    <span class="text-muted">Location</span><br>
                                    <span><strong>{{ $eventLocation }}</strong></span>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12 col-md-6">
                                    <span class="text-muted">Date</span><br>
                                    <span><strong>{{ $eventDate }}</strong></span>
                                </div>
                                <div class="col-12 col-md-3">
                                    <span class="text-muted">Start</span><br>
                                    <span><strong>{{ $eventStart }}</strong></span>
                                </div>
                                <div class="col-12 col-md-3">
                                    <span class="text-muted">Finish</span><br>
                                    <span><strong>{{ $eventEnd }}</strong></span>
                                </div>
                            </div>
                            <hr>
                            <span class="text-muted">Description</span><br>
                            <span class="text-muted">{{ $eventDetails }}</span>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" wire:click="cancelBooking">Cancel Booking</button>
                </div>
            </div>
        </div>
    </div>
</div>
