<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   
                    <div class="container mt-4">
                    <div class="card">
                        <div class="card-header text-center font-weight-bold">
                            Add Blog Post 
                        </div>
                        <div class="card-body">
                            <form name="add-blog-post-form" id="add-blog-post-form" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" id="title" name="title" value="{{$post->title}}" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description</label>
                                    <textarea name="body" class="form-control" required="">{{$post->body}}</textarea>
                                </div>
                                <input type="submit" value="Update" class="">
                            </form>
                            @if(session()->has('status'))
                                <h5>{{session('status')}}</h5>
                            @endif
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    
</x-app-layout>
