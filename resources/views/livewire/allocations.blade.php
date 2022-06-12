<div>
    <h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">HOD /</span> Field Allocations</h5>
    <div class="card mb-2">
      <div class="card-body d-flex justify-content-between align-items-center">
        <div class="">
          <select id="smallSelect" class="form-select form-select-sm">
            <option>Display..</option>
            <option value="10">10</option>
            <option value="50">50</option>
            <option value="100">100</option>
            <option value="150">150</option>
            <option value="200">200</option>
            <option value="*">All</option>
          </select>
        </div>
        <div class="d-flex ">
          <select id="" class="form-select form-select-sm mx-1">
            <option>Filter by..</option>
            <option value="1">Region</option>
            <option value="2">Course</option>
          </select>
          <select id="" class="form-select form-select-sm mx-1">
            <option>Filter by..</option>
            <option value="1">Level</option>
            <option value="2">Course</option>
          </select>
        </div>
      </div>
    </div>
    
    <div class="card">
      <div class="table-responsive text-nowrap">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>RegNumber</th>
              <th>Student Name</th>
              <th>Company Name</th>
              <th>Region</th>
              <th>District</th>
              <th>Ward</th>
              <th>View</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @foreach ($data as $std)
                <tr>
                  <td><i class="mdi mdi-account-box-outline text-danger me-3"></i> <strong>{{$std->student->IDNumber}}</strong></td>
                  <td>{{$std->student->firstname." ".$std->student->middlename." ".$std->student->lastname}}</td>
                  <td>{{$std->company}}</td>
                  <td>{{$std->region->region}}</td>
                  <td>{{$std->district->district}}</td>
                  <td>{{$std->ward->ward}}</td>
                  <td>
                    <a href="/profile/{{$std->student_id}}"><span class="badge bg-label-primary me-1"><i class="mdi mdi-eye"></i></span></a>
                  </td> 
                </tr>
            @endforeach

            {{-- <tr>
              
            </tr> --}}
          </tbody>
        </table>
            @if ($data->isEmpty())
                <div class="d-flex justify-content-center flex-column align-items-center">
                    <img src="{{asset('images/no.gif')}}" height="200px" width="200px" alt="">
                    <p class="text-muted">No Data To Display!!</p>
                </div>
            @endif
      </div>
    </div>
    

    <div class="d-flex justify-content-center">
      <div class="demo-inline-spacing">
        {{ $data->links() }}
      </div>
    </div>
    
</div>
