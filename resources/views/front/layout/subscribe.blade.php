<!-- Subsribe area start here -->
<div class="subsribe-area ">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="subsribe-wrap text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <h2>Interested To <br /> Get Our Featured Service</h2>
                    <form action="{{route('subscriber')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="email" class="form-control" id="subsribe" name="email" placeholder="Enter Your Email" />
                            <button type="submit" class="subsribe-btn">Subsribe Now</button>
                        </div>
                    </form>

                    @if(Session::has('success'))
                    <p>{{Session::get('success')}}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Subsribe area end here -->