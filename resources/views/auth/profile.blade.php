<x-guest-layout>
    <div class=" text-center font-bold text-xl mb-10">
        Choose your profile
    </div>
    <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <div
                class=" bg-white mx-auto relative w-[200px] h-[200px] rounded-full  shadow-md border border-dashed border-gray-500">
                <div id="preview_img" class=" w-full h-full rounded-full overflow-hidden">

                </div>

                <div id="cancel_btn" class="absolute hidden -top-6 right-0 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </div>

                <button type="button" id="upload_btn"
                    class=" absolute  top-0 left-0 bottom-0 right-0 font-bold text-3xl">
                    +
                </button>

            </div>
            @error('image')
                <span class="text-red-500 text-xs  block ">{{ $message }}</span>
            @enderror

            <input type="file" id="default_btn" name="image" accept="image/*" hidden>
        </div>

        <div class=" flex gap-3 justify-end mt-5">
            <a href="{{ route('home') }}"
                class='inline-flex items-center px-4 py-2 border border-gray-800 rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest hover:bg-gray-100 focus:bg-gray-100 active:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150'>Skip</a>

            <button type="submit"
                class='inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150'>Save</button>
        </div>
    </form>


    @section('js')
        <script>
            $(document).ready(function() {
                const upload_btn = $('#upload_btn');
                const default_btn = $('#default_btn');
                const cancel_btn = $('#cancel_btn');



                upload_btn.click(function() {
                    default_btn.click();
                })

                cancel_btn.click(function() {
                    default_btn.val('').change();
                    $('#preview_img').empty();

                });

                default_btn.on('change', function() {
                    var file_length = document.getElementById('default_btn').files.length;
                    if (file_length > 0) {
                        $('#upload_btn').hide();
                        cancel_btn.removeClass('hidden')
                    } else {
                        cancel_btn.addClass('hidden')
                        $('#upload_btn').show();
                    }
                    for (var i = 0; i < file_length; i++) {
                        $('#preview_img').append(
                            `<img class=" w-full imgHide h-full" src="${URL.createObjectURL(event.target.files[i])}"/>`
                        )
                    }
                })
            })
        </script>
    @endsection
</x-guest-layout>
