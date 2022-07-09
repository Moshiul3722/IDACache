@extends('backend.layouts.master')

@section('title', 'IDA | Add New Loan')
@section('page', 'Add New User')

@section('content')

    <div class="bg-white p-8 rounded-md">


        @if ($errors->any())
            {!! implode('', $errors->all('<div>:message</div>')) !!}
        @endif

        <form action="{{ route('loan.store') }}" method="POST" enctype="multipart/form-data" id="memberForm">
            @csrf
                    <div class="flex justify-between">
                        <div class="flex-2 w-3/4">
                            <div class="flex items-center mt-3" id="userName">
                                <label for="userName" class="w-1/3">User Name</label>
                                <input type="text" name="userName" id="userName"
                                    class="w-full border-gray-300 rounded-lg shadow-sm" />
                            </div>
                            <div class="flex items-center mt-3">
                                <label for="fathersName" class="w-1/3">Father's Name</label>
                                <input type="text" name="fathersName" id="fathersName"
                                    class="w-full border-gray-300 rounded-lg shadow-sm" />
                            </div>
                            <div class="flex mt-3 items-center">
                                <label for="nid" class="w-1/3">NID</label>
                                <input type="text" name="nid" id="nid"
                                    class="w-full border-gray-300 rounded-lg shadow-sm" />
                            </div>
                            <div class="flex mt-3 items-center">
                                <label for="email" class="w-1/3">Email</label>
                                <input type="email" name="email" id="email" autocomplete="email" required
                                    class="w-full border-gray-300 rounded-lg shadow-sm" />
                            </div>

                            <div class="flex mt-3 items-center">
                                <label for="phone" class="w-1/3">Phone</label>
                                <input type="number" name="phone" id="phone" required
                                    class="w-full border-gray-300 rounded-lg shadow-sm" />
                            </div>
                        </div>
                        <!-- src="http://via.placeholder.com/240x200" -->
                        <div class="pl-8 flex items-center">
                            <div class="flex flex-col justify-center items-center">
                                <img id="previewImg" src="https://via.placeholder.com/150" alt="Placeholder"
                                    class="w-48 max-h-52 rounded-md" />
                                <label for="thumbnail"
                                    class="cursor-pointer border-2 border-dashed border-sky-700 rounded-md py-1 px-10 mt-4 text-center">Upload
                                    Image</label>
                                <input type="file" id="thumbnail" name="thumbnail" class="hidden"
                                    onchange="previewFile(this)" />
                            </div>
                        </div>
                    </div>

                    <div class="flex mt-3">
                        <label for="address" class="w-[22%]">Address</label>
                        <textarea name="address" id="address" rows="4" cols="50"
                            class="w-full border-gray-300 rounded-lg shadow-sm"></textarea>
                    </div>


                    <div class="flex justify-center items-center mt-6 py-6">
                        <button type="button" class="btn btn_primary" id="formClear">
                            Clear
                        </button>
                        <button type="submit" class="btn btn_secondary">Save</button>
                    </div>

        </form>
    </div>

@endsection
