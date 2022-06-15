<div>
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
              <option value="1">Supervsor</option>
              <option value="2">Course</option>
              <option value="2">Not assigned</option>
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
                <th>Supervisor Name</th>
                <th>Level</th>
                <th>Year</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($supervision as $supervise)
                <tr>
                    <td><i class="mdi mdi-account-box-outline fa-lg text-danger me-3"></i> <strong>{{$supervise->student->user->IDNumber}}</strong></td>
                    <td>{{$supervise->student->firstname." ".$supervise->student->middlename." ".$supervise->student->lastname}}</td>
                    <td>Mr/Mrs. {{$supervise->staff->firstname." ".$supervise->staff->middlename." ".$supervise->staff->lastname}}</td>
                    <td>{{$supervise->student->level}}</td>
                    <td>Year <span class="text-danger">{{$supervise->student->year}}</span></td>
                    {{-- <td>
                      <a href="#"><span class="badge bg-label-primary me-1"><i class="mdi mdi-eye"></i></span></a>
                    </td> --}}
                  </tr>
                @endforeach
            </tbody>
          </table>
          
        </div>
      </div>
      <div class=" d-flex justify-content-end">
        {{$supervision->links()}}
      </div>
</div>
