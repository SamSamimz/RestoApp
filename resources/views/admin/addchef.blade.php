@extends('.admin.layouts.app')

@section('admin-content')
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->

    @include('admin.partials.navbar')

    <div class="container d-flex align-items-center justify-content-center" style="height:100vh;background-color:azure">
        <div class="col-6 mx-auto h-100">
            <div class="px-4 py-3 rounded bg-secondary">
                <h2 class="text-center py-1">Add Chef</h2>
                @if(session()->has('success'))
                <p x-data={open:true} x-show="open" x-on:click.away="open = !open" class="alert alert-success text-center">{{session('success')}}</p>
                @endif


                <form action="{{route('chef.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name">Name :</label>
                        <input type="text" name="name" class="form-control text-white @error('name') border border-danger @enderror" id="name" placeholder="Name...">
                    </div>

                    <div class="mb-3">
                        <label for="post">Post :</label>
                        <input type="text" name="post" class="form-control text-white @error('post') border border-danger @enderror" id="post" placeholder="Post...">
                    </div>

                    <div class="mb-3">
                        <label for="name">Facebook :</label>
                        <input type="text" name="facebook" class="form-control text-white" id="facebook"
                            placeholder="Facebook...">
                    </div>

                    <div class="mb-3">
                        <label for="twitter">Twitter :</label>
                        <input type="text" name="twitter" class="form-control text-white" id="twitter"
                            placeholder="Twitter...">
                    </div>
   
                    <div class="mb-3">
                        <label for="instagram">Instagram :</label>
                        <input type="text" name="instagram" class="form-control text-white" id="instagram"
                            placeholder="Instagram...">
                    </div>

                    <div class="mb-3">
                        <label for="price">Image :</label>
                        <input type="file" name="image" class="form-control" id="image">
                    </div>
                    @error('image')
                    <p class="text-danger">{{$message}}</p>
                    @enderror

                    <button type="submit" class="btn bg-primary text-white">Add</button>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection