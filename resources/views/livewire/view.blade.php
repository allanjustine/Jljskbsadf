<div>
    <!-- Modal Profile -->
    <div wire:ignore.self class="modal fade" id="viewMusic" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="
          background-image:url('images/m.jpg');">
                <div class="modal-body">
                    <div class="container mt-5">
                        <div class="row justify-content-center">
                            <div class="col">
                                <div class="card border-0" style="background-color:transparent">
                                    <div class="card-body">
                                        <div class="text-center text-white">
                                            <img src="{{ Storage::url($musicView_image) }}"
                                                style="width: 400px; heigth: 800vh; border-radius: 5%; "
                                                alt="Profile picture">
                                            <h4 class="mb-3">{{ $musicView_author }}</h4>
                                            <hr>



                                            <p class="card-text text-warning"><i
                                                    class="fa fa-quote-left"></i>&nbsp;{{ $musicView_description }}&nbsp;<i
                                                    class="fa fa-quote-right"></i></p>
                                        </div>
                                        <ul class="list-group list-group-flush mt-3">
                                            <li class="list-group-item" style="background-color: transparent;">
                                                <div class="d-flex justify-content-between text-white">
                                                    <strong>Price Rate:</strong>
                                                    <span>{{ number_format($musicView_price, 2) }}</span>
                                                </div>
                                            </li>
                                            <li class="list-group-item" style="background-color: transparent;">
                                                <div class="d-flex justify-content-between text-white ">
                                                    <strong>Location:</strong>
                                                    <span>{{ $musicView_location }}</span>
                                                </div>
                                            </li>
                                            <li class="list-group-item" style="background-color:transparent;">
                                                <div class="d-flex justify-content-between text-white">
                                                    <strong>Genre:</strong>
                                                    <span>{{ $musicView_genre }}</span>
                                                </div>
                                            </li>
                                            <li class="list-group-item" style="background-color:transparent;">
                                                <div class="d-flex justify-content-between text-white">
                                                    <strong>Rating(s):</strong>
                                                    <span>
                                                        @for ($i = 0; $i < $musicView_rating; $i++)
                                                            <i class="fa fa-smile-o"
                                                                style="color: gold font-size: 7px;"></i>
                                                        @endfor
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="list-group-item" style="background-color:transparent;">
                                                <div class="d-flex justify-content-between text-white">
                                                    <strong>Total Transactions:</strong>
                                                    <span>
                                                        {{ $musicView_totalTransactions }}
                                                    </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="text-white">
                    <div class="container">
                        @if ($musicView_feedbacks)
                            <h2 class="text-white">Bookings History</h2>
                            @foreach ($musicView_feedbacks as $feedback)
                                <div class="card mt-5">
                                    <div class="card-body">
                                        <div class="container">
                                            <table class="table text-white">
                                                <thead>
                                                    <tr>
                                                        <th>TEST</th>
                                                        <th>{{ $feedback->created_at->format('d-m-Y') }}</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Feedbacks:</td>
                                                        <td>{{ $feedback->content }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rated:</td>
                                                        <td>
                                                            @for ($i = 0; $i < $feedback->user_rating; $i++)
                                                                <i class="fa fa-smile-o"
                                                                    style="color: orange; font-size: 20px;"></i>
                                                            @endfor
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rated By:</td>
                                                        <td>{{ $feedback->user->name }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>No feedbacks available.</p>
                        @endif
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark text-white" data-dismiss="modal"
                        wire:click="closeView()">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
