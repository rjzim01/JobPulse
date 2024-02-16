<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Photo') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's Profile Photo.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div class="mt-4">
            <label for="photo" class="block text-sm font-medium text-gray-700">Choose Photo:</label>
            <div class="mt-1 flex items-center">
                <input type="file" id="photo" name="photo" class="hidden" onchange="previewPhoto(event)">
                <label for="photo" class="px-3 py-2 bg-white border border-gray-300 rounded-md cursor-pointer text-sm leading-4 font-medium text-blue-600 hover:text-blue-500 focus:outline-none focus:border-blue-700 focus:ring-blue active:bg-gray-50 active:text-blue-700">Select a file</label>
                <span id="photoFileName" class="ml-2 text-sm text-gray-500"></span>
            </div>
        </div>

        <div class="mt-4" id="photoPreview" style="display: none;">
            <label class="block text-sm font-medium text-gray-700">Preview:</label>
            <div class="mt-1">
                <img id="preview" style="height: 30px; width: 30px;" src="#" alt="Photo Preview">
            </div>
        </div>

        <br>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>

<script>
    function previewPhoto(event) {
        var input = event.target;
        var fileName = input.files[0].name;
        document.getElementById('photoFileName').textContent = fileName;

        var reader = new FileReader();
        reader.onload = function() {
            var preview = document.getElementById('preview');
            preview.src = reader.result;
            document.getElementById('photoPreview').style.display = 'block';
        };
        reader.readAsDataURL(input.files[0]);
    }
</script>
