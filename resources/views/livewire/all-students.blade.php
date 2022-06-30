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
                    <option value="1">Level</option>
                    <option value="2">Course</option>
                    <option value="3">Year</option>
                </select>
                <select id="" class="form-select form-select-sm mx-1">
                    <option>Filter by..</option>
                    <option value="1">Level</option>
                    <option value="2">Course</option>
                    <option value="3">Year</option>
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
                        <th>Full Name</th>
                        <th>Course</th>
                        <th>Phone</th>
                        <th>Year</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">

                    @if (session()->get('user')['status'] == 'hod')
                        @foreach ($students as $student)
                            <tr>
                                <td><i class="mdi mdi-account-box-outline fa-lg text-danger me-3"></i>
                                    <strong>{{ $student->user->IDNumber }}</strong>
                                </td>
                                <td>{{ $student->firstname . ' ' . $student->middlename . ' ' . $student->lastname }}
                                </td>
                                <td>{{ $student->course->course }}</td>
                                <td>{{ $student->phone }}</td>
                                <td class="text-primary">{{ $student->year }}</td>
                                {{-- <td>
                      <a href="/profile/{{$student->user_id}}"><span class="badge bg-label-primary me-1"><i class="mdi mdi-eye"></i></span></a>
                    </td> --}}
                            </tr>
                        @endforeach
                    @endif

                    @if (session()->get('user')['status'] == 'supervisor')
                        @foreach ($superviside as $student)
                            <tr>
                                <td><i class="mdi mdi-account-box-outline fa-lg text-danger me-3"></i>
                                    <strong>{{ $student->student->IDNumber }}</strong>
                                </td>
                                <td>{{ $student->student->firstname . ' ' . $student->student->middlename . ' ' . $student->student->lastname }}
                                </td>
                                <td>{{ $student->student->course->course }}</td>
                                <td>{{ $student->student->phone }}</td>
                                <td class="text-primary">{{ $student->student->year }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>

        </div>
    </div>
    @if (session()->get('user')['status'] == 'hod')
    <div class=" d-flex justify-content-center mt-4">
        {{ $students->links() }}
    </div>
    @endif

    @if (session()->get('user')['status'] == 'supervisor')
    <div class=" d-flex justify-content-center mt-4">
        {{ $superviside->links() }}
    </div>
    @endif
</div>
