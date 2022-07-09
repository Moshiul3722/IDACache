@extends('backend.layouts.master')

@section('title', 'IDA | User')
@section('page', 'User')

@section('content')
    <div class="py-4 flex items-center justify-between">
        <p class="text-lg font-medium">{{ count($usersInformation) }} records found</p>
        <a href="{{ route('users.create') }}" class="btn btn_secondary">Add New</a>
    </div>
    <!-- table -->
    <div class="bg-white border-gray-200">
        <table class="w-full border border-collapse">
            <thead>
                <tr>
                    <th class="border py-2 w-20">#</th>
                    <th class="border py-2">Info</th>
                    <th class="border py-2">Email</th>
                    <th class="border py-2">Phone</th>
                    <th class="border py-2">Role</th>
                    <th class="border py-2">Status</th>
                    <th class="border py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- {{ dd($usersInformation) }} --}}
                @forelse ($usersInformation as $usersInfo)
                    <tr>
                        <td class="p-2 text-center border">
                           @if (!empty($usersInfo->image))
                                <img src="{{ $usersInfo->image }}" alt="Image">
                            @else
                                <img src="https://picsum.photos/id/1/200/300" alt="Image">
                            @endif
                        </td>
                        <td class="p-2 border">
                            <span><b>Name: </b><a
                                    href="{{ route('users.edit', $usersInfo->id) }}">{{ $usersInfo->name }}</a></span><br>
                            <span><b>Father's Name: </b>{{ $usersInfo->fatherName }}</span><br>
                            @if (!empty($usersInfo->lonerInformation->address))
                                <span><b>Address: </b>{{ $usersInfo->lonerInformation->address }}</span>
                            @endif

                        </td>
                        <td class="py-2 text-sm text-center border">{{ $usersInfo->email }}</td>
                        <td class="py-2 text-center border">{{ $usersInfo->phone }}</td>
                        <td class="py-2 px-1 text-center border">{{ $usersInfo->role }}</td>

                        <td class="py-2 text-center border">{{ $usersInfo->status }}</td>

                        <td class="py-2 border">
                            <div class="flex text-center space-x-1">
                                <a href="{{ route('users.edit', $usersInfo->id) }}"
                                    class="text-green-400 mx-3 border-2 border-green-400 p-1 rounded-md"><i
                                        class="fa fa-edit"></i></a>
                                <form action="{{ route('users.destroy', $usersInfo->id) }}"
                                    class="border-2 border-red-500 rounded-md p-1" method="POST"
                                    onsubmit="confirm('Do You Want To Delete this User!')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"><i class="fa fa-trash text-red-500"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <tr>
                    @empty
                        <td class="text-center" colspan="6">No User Record Found!</td>
                    </tr>
                @endforelse
            </tbody>

        </table>
        <div class="mt-6">
            {{ $usersInformation->links() }}
        </div>
    </div>

@endsection
