<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="sm:px-4 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- <x-input-error :messages="$errors->get('image','mines','max')" class="mt-2" / --}}

                    <form method="POST" action="{{ route('owner.products.store')}}">
                        @csrf
                        <div class="m-6" >
                            <div class="mx-auto">
                                <div class="relative">
                                <select name="category">
                                    @foreach ($categories as $category )
                                    <optgroup label="{{ $category->name }}">
                                        @foreach($category->secondary as $secondary)
                                            <option value="{{ $secondary->id}}">
                                                {{ $secondary->name }}
                                            </option>
                                        @endforeach
                                    @endforeach
                                </select>  
                                </div>
                            </div>
                            <x-select-image :images="$images" name="image1" />
                            <x-select-image :images="$images" name="image2" />
                            <x-select-image :images="$images" name="image3" />
                            <x-select-image :images="$images" name="image4" />
                            <div class="p-2 w-full mt-4 flex justify-around" >
                                <button type="submit" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">登録する</button>
                                <button type="button" onclick="location.href='{{ route('owner.products.index') }}'"class=" text-white bg-gray-400 border-0 py-2 px-8 focus:outline-none hover:bg-gray-600 rounded text-lg">戻る</button>
                            </div>                          
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        'use strict'
        const images = document.querySelectorAll('.image')
        
        images.forEach( image =>  {
          image.addEventListener('click', function(e){
            const imageName = e.target.dataset.id.substr(0, 6)
            const imageId = e.target.dataset.id.replace(imageName + '_', '')
            const imageFile = e.target.dataset.file
            const imagePath = e.target.dataset.path
            const modal = e.target.dataset.modal
            document.getElementById(imageName + '_thumbnail').src = imagePath + '/' + imageFile
            document.getElementById(imageName + '_hidden').value = imageId
            MicroModal.close(modal);
        }, )
        })  
      </script>
    
</x-app-layout>
