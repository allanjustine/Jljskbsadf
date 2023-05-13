<div>
    <!-- Modal Update Music-->
    <div wire:ignore.self class="modal fade" id="bookMusic" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="
                 background-image:url('images/m.jpg');">
                <div class="modal-header">
                    <h5 class="modal-title text-white text-center" id="exampleModalLongTitle">Booking Request</h5>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group d-flex justify-content-between">

                            <div class="form-group mb-3 text-white">
                                <label for="title">Band Name:</label>
                                <input type="text" class="form-control" id="Band Name" wire:model="title" readonly>

                            </div>
                            <div class="col-md-5 text-white">
                                <label for="title">Talent Fee:</label>
                                <input type="text" class="form-control" id="Talent Fee" wire:model="price" readonly>
                            </div>
                        </div>
                        <div class="form-group mb-3 text-white">

                            <div class="row">
                                <div class="col-md-4 text-white">
                                    <label for="event_name">Event Name:</label>
                                    <input type="text" class="form-control" placeholder="Event Name" id="event_name"
                                        wire:model="event_name" required>
                                    @error('event_name')
                                        <span class="text-danger">*{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4 text-white">
                                    <label for="event_location">Event Location:</label>
                                    <input type="text" class="form-control" placeholder="Event Location"
                                        id="event_location" wire:model="event_location" required>
                                    @error('event_location')
                                        <span class="text-danger">*{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4 text-white">
                                    <label for="event_date">Event Date:</label>
                                    <input type="date" class="form-control" placeholder="Date" id="event_date"
                                        wire:model="event_date" required>
                                    @error('event_date')
                                        <span class="text-danger">*{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group d-flex justify-content-between">
                            <div class="col-md-5 text-white">
                                <label for="event_time_start">Time Start:</label>
                                <input type="time" class="form-control" placeholder="Time Start"
                                    id="event_time_start" wire:model="event_time_start" required>
                                @error('event_time_start')
                                    <span class="text-danger">*{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 text-white">
                                <label for="event_time_end">Time End:</label>
                                <input type="time" class="form-control" placeholder="Time End" id="event_time_end"
                                    wire:model="event_time_end" required>
                                @error('event_time_end')
                                    <span class="text-danger">*{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mb-3 text-white">
                            <label for="event_details">Event Details:</label>
                            <textarea class="form-control" id="event_details" placeholder="Event Details" rows="3"
                                wire:model="event_details" required></textarea>
                            @error('event_details')
                                <span class="text-danger">*{{ $message }}</span>
                            @enderror
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary text-white" wire:click="bookNow()">Book Now</button>
                    <button type="button" class="btn btn-secondary text-white" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
