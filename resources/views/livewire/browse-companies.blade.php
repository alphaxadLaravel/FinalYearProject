<div>
    <div class="row">
      
        @foreach ($companies as $company)
        <div class="col-md-4 mb-3">
            <div class="card h-100">
                <img class="card-img-top" src="{{asset($company->photo)}}" height="250px" alt="Card image cap img-fluid">
                <div class="card-body">
                  <h5 class="card-title">{{$company->company}}</h5>
                  <p class="card-text">
                   {{$company->bio}}
                  </p>
                  <p>Email: {{$company->email}}</p>
                  <a href="{{$company->link}}" target="_blank" class="btn btn-outline-primary w-100 ">Visit Company</a>
                </div>
            </div>
        </div>
        @endforeach

        @if ($companies->isEmpty())
                <div class="d-flex justify-content-center flex-column align-items-center">
                    <img src="{{asset('images/no.gif')}}" height="300px" width="300px" alt="">
                    <p class="text-muted">No Companies To Display!!</p>
                </div>
            @endif
    </div>
    
    <div class="d-flex justify-content-center">
      <div class="demo-inline-spacing">
        {{$companies->links()}}
      </div>
    </div>
</div>
