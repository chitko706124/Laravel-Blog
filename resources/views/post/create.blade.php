@section('title', '| Create')


<x-app-layout>

    <div class=" cContainer">
        <form action="{{ route('post.store') }}" method="POST" class=" mt-6 max-w-2xl mx-auto space-y-6"
            enctype="multipart/form-data">
            @csrf
            <div>
                <label for="" class="block font-medium text-sm text-gray-700">Image</label>
                <div
                    class=" bg-white relative w-full h-[250px] rounded-md shadow-md border border-dashed border-gray-500">
                    <div id="preview_img" class=" w-full h-full">

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


            <div>
                <label class="block font-medium text-sm text-gray-700">Category</label>
                <select name="categories[]" class=" shadow-md" id="selectpicker" style="width: 100%"
                    data-placeholder="Select a city..." data-allow-clear="false" title="Select city..."
                    multiple="multiple">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category }}</option>
                    @endforeach
                </select>
                @error('blogCategories')
                    <span class="text-red-500 text-xs block">{{ $message }}</span>
                @enderror
            </div>



            <div>
                <label for="" class="block font-medium text-sm text-gray-700">Title</label>
                <input type="text" name="title"
                    class='border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-md block mt-1 w-full '
                    autocomplete="off">
                @error('title')
                    <span class="text-red-500 text-xs  block ">{{ $message }}</span>
                @enderror
            </div>


            <div>
                <label for="description" class="block font-medium text-sm text-gray-700 ">Description</label>
                <textarea name="description" id="description" cols="30" rows="10"></textarea>
                @error('description')
                    <span class="text-red-500 text-xs  block ">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit">create</button>
        </form>
    </div>

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

                tinymce.init({
                    selector: 'textarea#description', // Replace this CSS selector to match the placeholder element for TinyMCE
                    // plugins: 'code table lists',
                    toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
                });



                // default_btn.change(function() {
                //     console.log('hello')
                //     $('#selectpicker').select2();
                // })

                $('#selectpicker').select2();

                $('#selectpicker').change(function() {
                    var selectedCount = $(this).find('option:selected').length;
                    if (selectedCount >= 3) {
                        $(this).find('option:not(:selected)').prop('disabled', true);
                    } else {
                        $(this).find('option:not(:selected)').prop('disabled', false);
                    }
                });



                // $('#description').tinymce({
                //     height: 500,
                //     menubar: false,
                //     plugins: [
                //         'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                //         'anchor', 'searchreplace', 'visualblocks', 'fullscreen',
                //         'insertdatetime', 'media', 'table', 'code', 'help', 'wordcount'
                //     ],
                //     toolbar: 'undo redo | blocks | bold italic backcolor | ' +
                //         'alignleft aligncenter alignright alignjustify | ' +
                //         'bullist numlist outdent indent | removeformat | help'
                // });


                // document.addEventListener('livewire:load', function() {
                //     Livewire.on('postCreated', function() {
                //         // Redirect to the dashboard page using JavaScript
                //         window.location.href = '/dashboard';
                //     });
                // });
                // alert('hello');
                // })


            })
        </script>
    @endsection
</x-app-layout>

{{-- @endsection --}}
