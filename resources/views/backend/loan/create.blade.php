@extends('backend.layouts.master')

@section('title', 'IDA | Add New Loan')
@section('page', 'Add New Loan')

@section('content')

    <div class="bg-white p-8 rounded-md"></div>

        @if ($errors->any())
            {!! implode('', $errors->all('<div>:message</div>')) !!}
        @endif


        <form action="{{ route('loan.store') }}" method="POST" enctype="multipart/form-data" id="memberForm">
            @csrf
            <div class="flex items-center" id="clientType">
                <label for="fathersName" class="w-[18%]">Client Type</label>

                <div class="pl-1">
                    <input type="radio" id="newClient" name="clientType" value="new"
                        {{ old('clientType') == 'new' ? 'checked' : '' }} />
                    <label for="newClient" class="ml-2 mr-4 cursor-pointer">New Client</label>

                    <input type="radio" id="oldClient" name="clientType" value="old"
                        {{ old('clientType') == 'old' ? 'checked' : '' }} />
                    <label for="oldClient" class="ml-2 mr-4 cursor-pointer">Old Client</label>

                    <input type="radio" id="member" name="clientType" value="member"
                        {{ old('clientType') == 'member' ? 'checked' : '' }} />
                    <label for="member" class="ml-2 mr-4 cursor-pointer">Member</label>
                </div>
            </div>

            <div class="flex justify-between">
                <div class="flex-2 w-3/4">
                    <div class="flex items-center mt-3" id="clientName">
                        <label for="name" class="w-1/3">Client Name</label>
                        <input type="text" name="name" id="name"
                            class="w-full border-gray-300 rounded-lg shadow-sm" />
                    </div>
                    <div class="flex items-center mt-3" id="memberInput">
                        <label for="member" class="w-1/3">Member</label>
                        <select name="member" id="select_member" class="w-full border-gray-300 rounded-lg shadow-sm">
                            <option value="none">Select Member</option>
                            @foreach ($members as $member)
                                <option value="{{ $member->id }}">
                                    {{ $member->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex items-center mt-3" id="clientSelect">
                        <label for="oldClient" class="w-1/3">Client Name</label>
                        <select name="oldClient" id="old_client" class="w-full border-gray-300 rounded-lg shadow-sm">
                            <option value="none">Select Client</option>
                            @foreach ($clients as $client)
                                <option value="{{ $client->id }}">
                                    {{ $client->name }}
                                </option>
                            @endforeach

                        </select>
                    </div>

                    <div class="flex items-center mt-3">
                        <label for="fathersName" class="w-1/3">Father's Name</label>
                        <input type="text" name="fathersName" id="fathersName"
                            class="w-full border-gray-300 rounded-lg shadow-sm" />
                    </div>
                    <div class="flex mt-3 items-center">
                        <label for="nid" class="w-1/3">NID</label>
                        <input type="number" name="nid" id="nid"
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
                        <img id="previewImg" src="https://api.lorem.space/image/movie?w=150&h=220" alt="Placeholder"
                            class="w-48 max-h-52 rounded-md" />
                        <label for="thumbnail"
                            class="cursor-pointer border-2 border-dashed border-sky-700 rounded-md py-1 px-10 mt-4 text-center">Upload
                            Image</label>
                        <input type="file" id="thumbnail" name="thumbnail" class="hidden" onchange="previewFile(this)" />
                    </div>
                </div>
            </div>

            <div class="flex mt-3">
                <label for="address" class="w-[23%]">Address</label>
                <textarea name="address" id="address" rows="4" cols="50"
                    class="w-full border-gray-300 rounded-lg shadow-sm"></textarea>
            </div>

            <div class="" id="businessTypeArea">
                <div class="w-full border-2 bottom-1 mt-6"></div>
                <div class="flex mt-4">
                    <div class="flex flex-1 mt-3 items-center">
                        <label for="businessType" class="w-1/2">Business Type</label>
                        <select name="businessType" id="businessType"
                            class="w-full border-gray-300 rounded-lg shadow-sm">
                            <option value="none">Select Type</option>
                            <option value="Cow Business">Cow Business</option>
                            <option value="Marrige">Marrige</option>
                            <option value="Devorce">Devorce</option>
                        </select>
                    </div>

                    <div class="flex flex-1 mt-3 items-center ml-4"></div>
                </div>
                <div class="flex">
                    <div class="flex flex-1 mt-3 items-center">
                        <label for="loanAmount" class="w-1/2">Loan Amount</label>
                        <input type="number" name="loanAmount" id="loanAmount" autocomplete="email"
                            class="w-full border-gray-300 rounded-lg shadow-sm" />
                    </div>

                    <div class="flex flex-1 mt-3 items-center ml-4">
                        <label for="loanDate" class="w-1/2">Loan Date</label>
                        <input type="date" name="loanDate" id="loanDate" autocomplete="email"
                            class="w-full border-gray-300 rounded-lg shadow-sm" />
                    </div>
                </div>
                <div class="flex">
                    <div class="flex flex-1 mt-3 items-center">
                        <label for="returnAmount" class="w-1/2">Return Amount</label>
                        <input type="number" name="returnAmount" id="returnAmount" autocomplete="email"
                            class="w-full border-gray-300 rounded-lg shadow-sm" />
                    </div>

                    <div class="flex flex-1 mt-3 items-center ml-4">
                        <label for="returnDate" class="w-1/2">Return Date</label>
                        <input type="date" name="returnDate" id="returnDate" autocomplete="email"
                            class="w-full border-gray-300 rounded-lg shadow-sm" />
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center mt-6 py-6">
                <button type="button" class="btn btn_primary" id="formClear">
                    Clear
                </button>
                <button type="submit" class="btn btn_secondary">Save</button>
            </div>
        </form>
    </div>

    <style>
        span.select2.select2-container {
            width: 100% !important;
        }

        .select2-container--default .select2-selection--single {
    border-radius: 8px;
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
    line-height: 40px !important;
}
.select2-container .select2-selection--single {

    height: auto;
}

.select2-container--default .select2-selection--single .select2-selection__arrow b {
    top: 73%;
}
    </style>
@endsection

@section('scripts')
    <script>
        $('#select_member').select2();
        $('#old_client').select2();

        //Ajax Setup
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr("content")
            }
        });

        // get clients via ajax
        $("#old_client").on('change', function(e) {
            e.preventDefault();

            let data = {
                client_id: $('#old_client').find(":selected").val(),
            }
            let url = "{{ route('clientsInfo') }}";
            // alert(url);

            $.ajax({
                type: 'GET',
                url: url,
                data: data,
                success: function(response) {
                    console.log(response);
                    // console.log(response.clients[0].fatherName);
                    // console.log(response[0].fatherName);
                    // let fathersName = ;
                    $('#fathersName').val(response.clients[0].fatherName);
                    $('#email').val(response.clients[0].email).prop('readonly', true).css('user-select',
                        'none').css('background-color', '#ededed');
                    $('#phone').val(response.clients[0].phone);
                    $('#nid').val(response.loner_info[0].nid);
                    $('#address').val(response.loner_info[0].address);
                    $('#previewImg').attr("src", response.clients[0].image);
                }
            });

        });

        $("#select_member").on('change', function(e){
            e.preventDefault();

            let data = {
                member_id: $('#select_member').find(":selected").val(),
            }
            let url = "{{ route('membersInfo') }}";

             $.ajax({
                type: 'GET',
                url: url,
                data: data,
                success: function(response) {
                    console.log(response);
                    $('#fathersName').val(response.members[0].fatherName);
                    $('#email').val(response.members[0].email).prop('readonly', true).css('user-select',
                        'none').css('background-color', '#ededed');
                    $('#phone').val(response.members[0].phone);
                    $('#nid').val(response.loner_info[0].nid);
                    $('#address').val(response.loner_info[0].address);
                    $('#previewImg').attr("src", response.members[0].image);
                }
             });
        })
    </script>
@endsection
