<div>
    <div class="row">

        @foreach ($comments as $comment)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                  <h5 class="card-title">
                      <img src="{{asset('images/alpha.jpg')}}" alt="Avatar" class="w-px-40 rounded"> 
                      {{$comment->student->firstname." ".$comment->student->middlename." ".$comment->student->lastname}}</h5>
                  <div class="card-subtitle text-muted mb-3">{{$comment->reason}}</div>
                  <p class="card-text">
                    {{$comment->comment}}
                  </p>
                  <footer class="blockquote-footer mt-1">
                    2 Days Ago
                  </footer>
                </div>
            </div>
        </div>
        @endforeach
    
    </div>
    
    <div class="row d-flex justify-content-end">
      {{$comments->links()}}
    </div>
</div>