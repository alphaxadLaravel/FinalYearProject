<div>
    <div class="card mb-2">
        <div class="card-body ">
          <div class="row">
              <div class="col-md-6 d-flex justify-content-center">
               <img src="{{asset('images/fill.gif')}}"  height="350px" alt="">
              </div>
              <div class="col-md-6">
                  
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
                          <button class="btn btn-outline-primary" type="submit"><i class="mdi mdi-clear"></i> Self Allocate</button>
                      </div>
      
                  </form>
              </div>
          </div>
        </div>
      </div>
</div>
