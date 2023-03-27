@extends('.admin.layouts.app')

@section('admin-content')
<div class="container-scroller">
  <!-- partial:partials/_sidebar.html -->

  @include('admin.partials.navbar')

        <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Users table</h4>
                  @if(session()->has('delete'))
                    <p class="alert alert-danger text-center">{{session('delete')}}</p>
                  @endif
                  <div class="table-responsive">
                    <table class="table table-dark">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Type</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($users as $key => $user)
                        <tr>
                          <td>{{++$key}}</td>
                          <td>{{$user->name}}@if(Auth::user()->id == $user->id) <span class="text-warning">(current)</span> @endif</td>
                          <td><a href="mailto:{{$user->email}}">{{$user->email}}</a></td>
                          <td>@if($user->is_admin)Admin @else User @endif</td>
                          <td class="d-flex align-items-center">
                            <a href="#" class="btn btn-behance me-1">Edit</a>
                          <form action="{{route('user.delete',$user)}}" method="POST">
                            @csrf
                            @method('DELETE')
                               <button type="submit" class="btn btn-google show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
                          </form>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <div class="mb-2"></div>
                  {{$users->links('pagination::bootstrap-5')}}
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- main-panel ends -->

</div>
@endsection
    

