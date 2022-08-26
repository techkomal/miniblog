<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                <table class="pack-table">
                    <tr>
                        <th width="30%">Name</th>
                        <th width="30%">Title</th>
                        <th width="30%">Content</th>
                        <th width="30%">Actions</th>
                    </tr>
                    
                    <!-- <tr>
                        <td colspan="3" align="left"></td>
                    </tr> -->
                    @foreach ($posts as $post)
                    <tr>
                        <td> {{$post->user->name}}</td>
                        <td> {{$post->title}}</td>
                        <td>{{$post->body}}</td>
                        <td><button type="button" class="btn">Edit</button> <button type="button" class="btn">Delete</button></td>
                    </tr>
                    @endforeach
                   
                </table>
                   
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
