<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @if(session()->has('status'))
            <div>{{ session('status')}}</div>
        @endif
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                <table class="pack-table">
                    <tr>
                        <th width="29%">Name</th>
                        <th width="29%">Title</th>
                        <th width="29%">Content</th>
                        <th width="29%">Actions</th>
                    </tr>
                    
                    <!-- <tr>
                        <td colspan="3" align="left"></td>
                    </tr> -->
                    @foreach ($posts as $post)
                    <tr>
                        <td> {{$post->user->name}}</td>
                        <td> {{$post->title}}</td>
                        <td>{{$post->body}}</td>
                        <td>
                            <a href="{{url('/post/edit', $post->id) }}" class="btn btn-secondary">Edit</a> 
                            <a href="{{url('/post/delete', $post->id) }}" class="btn btn-secondary">Delete</a> 
                    </td>
                    </tr>
                    @endforeach
                   
                </table>
                   
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
