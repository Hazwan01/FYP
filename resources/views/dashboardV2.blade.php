@extends('layouts.app', ['activePage' => 'dashboardV2', 'titlePage' => __('DashboardV2')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 col-md-12">
          <div class="card">
            <div class="card-header card-header-danger">
              <h4 class="card-title">Prioritized Subjects</h4>
              <p class="card-category">Please set the group for each subject below</p>
            </div>
            <div class="card-body table-responsive">
                <form method="post" action="/dashboard">
                    {{ csrf_field() }}
                  <table class="table table-hover">
                      <thead class="text-warning" align="left">
                      <th>No.</th>
                      <th>Subject Name</th>
                      {{-- <th>Subject Code</th> --}}
                      <th>Subject Group</th>
                      </thead>
                      <tbody>
                        @foreach ($subject as $index => $sub)
                        <tr align="left">
                          <td>{{$index+1}}</td>
                          <td>{{$sub->sub_name}}</td>
                          {{-- <td>{{$sub->sub_code}}</td> --}}
                          <td>
                            <div class="col">
                              <select class="form-control" name="sub_group_{{ $sub->id }}">
                                <option disabled{{ !($sub->sub_group) ? ' selected' : ''}}>Assign Group...</option>
                                <option value="group1"{{ ($sub->sub_group) == 'group1' ? ' selected' : '' }}>
                                  Group 1
                                </option>
                                <option value="group2"{{ ($sub->sub_group) == 'group2' ? ' selected' : '' }}>
                                  Group 2
                                </option>
                                <option value="group3"{{ ($sub->sub_group) == 'group3' ? ' selected' : '' }}>
                                  Group 3
                                </option>
                              </select>
                            </div>
                          </td>
                        </tr>   
                        @endforeach
                      </tbody>
                  </table>
                  <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="row">
              <div class="card">
                <div class="card-header card-header-text card-header-primary">
                  <div class="card-text">
                    <h4 class="card-title">Group 1</h4>
                  </div>
                </div>
                <div class="card-body">
                  <div class="card-body table-responsive">
                    <table class="table table-hover">
                        <thead class="text-warning" align="left">
                          <th>No.</th>
                          <th>Subject Name</th>
                          <th>Subject Code</th>
                        </thead>
                        <tbody>
                          @foreach ($group1 as $index => $g1)
                            <tr align="left">
                              <td>{{$index+1}}</td>
                              <td>{{$g1->sub_name}}</td>
                              <td>{{$g1->sub_code}}</td>
                            </tr>   
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                </div>
              </div>
            </div>
          <div class="row">
            <div class="card">
              <div class="card-header card-header-text card-header-primary">
                <div class="card-text">
                  <h4 class="card-title">Group 2</h4>
                </div>
              </div>
              <div class="card-body">
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning" align="center">
                      <th>No.</th>
                      <th>Subject Name</th>
                      <th>Subject Code</th>
                    </thead>
                    <tbody>
                      @foreach ($group2 as $index => $g2)
                        <tr align="center">
                          <td>{{$index+1}}</td>
                          <td>{{$g2->sub_name}}</td>
                          <td>{{$g2->sub_code}}</td>
                        </tr>   
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="card">
              <div class="card-header card-header-text card-header-primary">
                <div class="card-text">
                  <h4 class="card-title">Group 3</h4>
                </div>
              </div>
              <div class="card-body">
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning" align="center">
                      <th>No.</th>
                      <th>Subject Name</th>
                      <th>Subject Code</th>
                    </thead>
                    <tbody>
                      @foreach ($group3 as $index => $g3)
                        <tr align="center">
                          <td>{{$index+1}}</td>
                          <td>{{$g3->sub_name}}</td>
                          <td>{{$g3->sub_code}}</td>
                        </tr>   
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush