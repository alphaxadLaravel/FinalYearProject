<div>
    @if (Session::has('gotField'))
        <div class="alert alert-success alert-dismissible" role="alert">
        Allocation made Successfully!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="card mb-2">
        <div class="card-body ">
          <div class="row">
              <div class="col-md-6 d-flex justify-content-center">
               <img src="{{asset('images/fill.gif')}}"  height="350px" alt="">
              </div>
              <div class="col-md-6">
                
                @if ($data)
                   
                    @if ($allocated)
                        <h4 class="text-muted text-center">My Allocation Details</h4>
                        <span class=" fw-bold"> {{$data->company}}</span>
                        <p class="text-muted">Company: </p>

                        <span class=" fw-bold"> {{$data->department}}</span>
                        <p class="text-muted">Department: </p>

                        <span class=" fw-bold">{{$data->region->region}}</span>
                        <p class="text-muted">Region: </p>

                        <span class=" fw-bold">{{$data->district->district}}</span>
                        <p class="text-muted">District: </p>
                        
                        <span class=" fw-bold">{{$data->ward->ward}}</span>
                        <p class="text-muted">Ward: </p>

                        <button class="btn btn-outline-primary w-100" wire:click="movetoUpdate">Update Details</button>
                    @elseif ($gotoUpdate)
                        {{$data->company}}
                        <form action="" wire:submit.prevent="updateAllocation" enctype="multipart/form-data" method="POST">
                            @csrf
                            <span class=""><span class="text-danger">*</span class="fw-bold"> Update Details of your Field Area!</span>
                            <div class="row mb-3 mt-3">
                                <div class="col-md-6 mb-2">
                                    <label for="" class="text-muted mb-2">Company Name<span class="text-muted"><span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" wire:model="company"  placeholder="Enter Company name...">
                                    <small class="text-danger">
                                        @error('company')
                                            {{$message}}
                                        @enderror
                                    </small>
                                </div>
                                <div class="col-md-6">
                                <label for="" class="text-muted mb-2">Department Name<span class="text-muted"><span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" wire:model="department" id="" aria-describedby="helpId" placeholder="Enter Company name...">
                                    <small class="text-danger">
                                        @error('department')
                                            {{$message}}
                                        @enderror
                                    </small>
                                </div>
                                
                            </div>
                            <div class="row mb-3">
                            <div class="col-md-6 mb-2">
                                <label for="" class="text-muted mb-2">Upload Signed Welcome Letter <span class="text-danger">* </span> </label>
                                <input type="file" class="form-control" wire:model="file" id="" aria-describedby="helpId" placeholder="Enter Company name...">
                                <small class="text-danger">
                                    @error('file')
                                        {{$message}}
                                    @enderror
                                </small>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="text-muted mb-2">Region<span class="text-muted"><span class="text-danger">*</span></label>
                                <select id="smallSelect" wire:model="region" class="form-select ">
                                    <option value="">Select Region..</option>
                                    @foreach ($getRegion as $mkoa)
                                    <option value="{{$mkoa->id}}">{{$mkoa->region}}</option>
                                    @endforeach
                                </select>
                                <small class="text-danger">
                                    @error('region')
                                        {{$message}}
                                    @enderror
                                </small>
                            </div>
                            </div>
                            <div class="row mb-3">
                            <div class="col-md-6 ">
                                <label for="" class="text-muted mb-2">District<span class="text-muted"><span class="text-danger">*</span></label>
                                <select id="smallSelect" wire:model="district" class="form-select ">
                                    <option value="">Select District..</option>
                                    @if (!is_null($region))
                                        @foreach ($getDistrict as $wilaya)
                                        <option value="{{$wilaya->id}}">{{$wilaya->district}}</option>
                                        @endforeach
                                    @endif
        
                                    
                                    
                                </select>
                                <small class="text-danger">
                                    @error('district')
                                        {{$message}}
                                    @enderror
                                </small>
                            </div>
                            <div class="col-md-6">
        
                                <label for="" class="text-muted mb-2">Ward<span class="text-muted"><span class="text-danger">*</span></label>
                                <select id="smallSelect" wire:model="ward" class="form-select">
                                    <option value="">Select Ward..</option>
                                        @if (!is_null($district))
                                        @foreach ($getWard as $mtaa)
                                        <option value="{{$mtaa->id}}">{{$mtaa->ward}}</option>
                                        @endforeach
                                        @endif
                                </select>
                                <small class="text-danger">
                                    @error('ward')
                                        {{$message}}
                                    @enderror
                                </small>
                            </div>
                                
                            </div>
                            <div class="row justify-content-center mb-3 mt-4 px-3">
                                <button class="btn btn-outline-primary" type="submit"><i class="mdi mdi-clear"></i> Upadate Now</button>
                            </div>
            
                        </form>
                    @endif
                @else 
                    <form action="" wire:submit.prevent="selfAllocate" enctype="multipart/form-data" method="POST">
                        @csrf
                        <span class=""><span class="text-danger">*</span class="fw-bold"> Provide the Details of your Field Area!</span>
                        <div class="row mb-3 mt-3">
                            <div class="col-md-6 mb-2">
                                <label for="" class="text-muted mb-2">Company Name<span class="text-muted"><span class="text-danger">*</span></label>
                                <input type="text" class="form-control" wire:model="company" id="" aria-describedby="helpId" placeholder="Enter Company name...">
                                <small class="text-danger">
                                    @error('company')
                                        {{$message}}
                                    @enderror
                                </small>
                            </div>
                            <div class="col-md-6">
                            <label for="" class="text-muted mb-2">Department Name<span class="text-muted"><span class="text-danger">*</span></label>
                                <input type="text" class="form-control" wire:model="department" id="" aria-describedby="helpId" placeholder="Enter Department name...">
                                <small class="text-danger">
                                    @error('department')
                                        {{$message}}
                                    @enderror
                                </small>
                            </div>
                            
                        </div>
                        <div class="row mb-3">
                        <div class="col-md-6 mb-2">
                            <label for="" class="text-muted mb-2">Upload Signed Welcome Letter <span class="text-danger">* </span> </label>
                            <input type="file" class="form-control" wire:model="letter" id="" aria-describedby="helpId" placeholder="Enter Company name...">
                            <small class="text-danger">
                                @error('letter')
                                    {{$message}}
                                @enderror
                            </small>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="text-muted mb-2">Region<span class="text-muted"><span class="text-danger">*</span></label>
                            <select id="smallSelect" wire:model="region" class="form-select ">
                                <option value="">Select Region..</option>
                                @foreach ($getRegion as $mkoa)
                                <option value="{{$mkoa->id}}">{{$mkoa->region}}</option>
                                @endforeach
                            </select>
                            <small class="text-danger">
                                @error('region')
                                    {{$message}}
                                @enderror
                            </small>
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-md-6 ">
                            <label for="" class="text-muted mb-2">District<span class="text-muted"><span class="text-danger">*</span></label>
                            <select id="smallSelect" wire:model="district" class="form-select ">
                                <option value="">Select District..</option>
                                @if (!is_null($region))
                                    @foreach ($getDistrict as $wilaya)
                                    <option value="{{$wilaya->id}}">{{$wilaya->district}}</option>
                                    @endforeach
                                @endif

                                
                                
                            </select>
                            <small class="text-danger">
                                @error('district')
                                    {{$message}}
                                @enderror
                            </small>
                        </div>
                        <div class="col-md-6">

                            <label for="" class="text-muted mb-2">Ward<span class="text-muted"><span class="text-danger">*</span></label>
                            <select id="smallSelect" wire:model="ward" class="form-select">
                                <option value="">Select Ward..</option>
                                    @if (!is_null($district))
                                    @foreach ($getWard as $mtaa)
                                    <option value="{{$mtaa->id}}">{{$mtaa->ward}}</option>
                                    @endforeach
                                    @endif
                            </select>
                            <small class="text-danger">
                                @error('ward')
                                    {{$message}}
                                @enderror
                            </small>
                        </div>
                            
                        </div>
                        <div class="row justify-content-center mb-3 mt-4 px-3">
                            <button class="btn btn-outline-primary" type="submit"><i class="mdi mdi-clear"></i> Self Allocate</button>
                        </div>
        
                    </form>
                @endif
                


               

              </div>
          </div>
        </div>
      </div>
</div>
