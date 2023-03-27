@extends('.admin.layouts.app')

@section('admin-content')
<div class="container-scroller">
  <!-- partial:partials/_sidebar.html -->

  @include('admin.partials.navbar')

            <div class="container d-flex align-items-center justify-content-center" style="height:100vh;background-color:azure">
            <div class="col-6 mx-auto">
            <div class="px-4 py-4 rounded bg-secondary">
                <h2 class="text-center py-3">Update Food</h2>
                <form action="{{route('update.store',$foods)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title">Title :</label>
                        <input type="text" name="title" class="form-control text-white" id="title" placeholder="Food Title" value="{{$foods->title}}">
                    </div>
                    @error('title')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                    <div class="mb-3">
                        <label for="description">Description :</label>
                        <textarea name="description" id="description" class="form-control text-white" placeholder="Food Description">{{$foods->description}}</textarea>
                    </div>
                    @error('description')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                    <div class="mb-3">
                        <label for="price">Price :</label>
                        <input type="number" name="price" class="form-control text-white" id="price" placeholder="Food Price" value="{{$foods->price}}">
                    </div>
                    @error('price')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                    
                    <div class="mb-3">
                        <label for="price">Image :</label>
                        <input type="file" name="image" class="form-control" id="image" value="{{$foods->image}}">
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
    

