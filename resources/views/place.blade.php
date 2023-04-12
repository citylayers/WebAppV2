@extends('layouts.app')

@section('main')
    <div data-barba="container">
        @include('parts.navbar')
        <div class="flex flex-col mx-auto">
            <div class="pt-16">
                <div class="flex flex-row items-center pt-2">
                    <a href="/dashboard" class="prevent"> <i
                            class="mt-4 ml-4 text-2xl text-gray-900 lg:ml-16 fas fa-close"></i></a>
                </div>
                <div class="z-0 p-3 mx-4 space-y-4 lg:mx-16">
                    <h1 class="text-4xl font-semibold text-center text-gray-900">{{ $data->type }}</h1>

                    <legend class="pt-4 mb-1 text-xl font-medium text-center border-t">{{ __('messages.Feedback:') }}
                    </legend>
                    <div class="flex justify-center overflow-x-hidden text-sm md:w-4xl">
                        <div class="flex flex-row justify-center pb-4">
                            <div class="flex flex-col">
                                <img src="/img/1.png" class="w-8 h-8 mx-1">
                                <a class="px-4 mt-2 font-bold truncate rounded" target="_blank">{{ $data->likes }}</a>
                            </div>
                            <div class="flex flex-col">
                                <img src="/img/2.png" class="w-8 h-8 mx-1">
                                <a class="px-4 mt-2 font-bold truncate rounded" target="_blank">{{ $data->dislikes }}</a>
                            </div>
                            <div class="flex flex-col">
                                <img src="/img/3.png" class="w-8 h-8 mx-1">
                                <a class="px-4 mt-2 font-bold truncate rounded" target="_blank">{{ $data->stars }}</a>
                            </div>
                            <div class="flex flex-col">
                                <img src="/img/4.png" class="w-8 h-8 mx-1">
                                <a class="px-4 mt-2 font-bold truncate rounded" target="_blank">{{ $data->bof }}</a>
                            </div>
                            <div class="flex flex-col">
                                <img src="/img/5.png" class="w-8 h-8 mx-1">
                                <a class="px-4 mt-2 font-bold truncate rounded" target="_blank">{{ $data->weird }}</a>
                            </div>

                        </div>
                    </div>

                    <legend class="pt-4 mb-1 text-xl font-medium text-center border-t">{{ __('messages.Location') }}
                    </legend>
                    <div class="flex justify-center pb-4 text-sm md:w-4xl">
                        <a class="px-4 mx-1 text-white truncate bg-blue-800 rounded"
                            target="_blank">{{ $data->latitude }}</a>
                        <a class="px-4 mx-1 text-white truncate bg-blue-800 rounded"
                            target="_blank">{{ $data->longitude }}</a>

                    </div>

                    <legend class="pt-4 mb-1 text-xl font-medium text-center border-t">{{ __('messages.Tags:') }}</legend>
                    <div class="flex flex-wrap justify-center pb-4 overflow-x-hidden text-sm md:w-4xl">
                        @php $tags = explode(',', $data->tags); @endphp
                        @foreach ($tags as $tag)
                            <a class="px-4 mx-1 truncate bg-[#B8E7EB] rounded" target="_blank">{{ $tag }}</a>
                        @endforeach
                    </div>

                    <legend class="pt-4 mb-1 text-xl font-medium text-center border-t">{{ __('messages.My feeling:') }}
                    </legend>
                    <div class="flex flex-wrap justify-center overflow-x-hidden text-sm md:w-4xl">
                        @if ($data->feeling == 'happy')
                            <div class="flex flex-col">
                                <img src="{{ asset('img/happy.png') }}" alt="Just a flower"
                                    class="object-cover w-16 h-16 mx-auto rounded" onerror="this.src='/img/empty.png'">
                                <a class="px-4 mt-2 font-bold truncate rounded" target="_blank">{{ $data->feeling }}</a>
                            </div>
                        @elseif ($data->feeling == 'sad')
                            <div class="flex flex-col">
                                <img src="{{ asset('img/sad.png') }}" alt="Just a flower"
                                    class="object-cover w-16 h-16 mx-auto rounded" onerror="this.src='/img/empty.png'">
                                <a class="px-4 mt-2 font-bold truncate rounded" target="_blank">{{ $data->feeling }}</a>
                            </div>
                        @elseif ($data->feeling == 'stressed')
                            <div class="flex flex-col">
                                <img src="{{ asset('img/stressed.png') }}" alt="Just a flower"
                                    class="object-cover w-16 h-16 mx-auto rounded" onerror="this.src='/img/empty.png'">
                                <a class="px-4 mt-2 font-bold truncate rounded" target="_blank">{{ $data->feeling }}</a>
                            </div>
                        @elseif ($data->feeling == 'angry')
                            <div class="flex flex-col">
                                <img src="{{ asset('img/angry.png') }}" alt="Just a flower"
                                    class="object-cover w-16 h-16 mx-auto rounded" onerror="this.src='/img/empty.png'">
                                <a class="px-4 mt-2 font-bold truncate rounded" target="_blank">{{ $data->feeling }}</a>
                            </div>
                        @elseif ($data->feeling == 'worried')
                            <div class="flex flex-col">
                                <img src="{{ asset('img/worried.png') }}" alt="Just a flower"
                                    class="object-cover w-16 h-16 mx-auto rounded" onerror="this.src='/img/empty.png'">
                                <a class="px-4 mt-2 font-bold truncate rounded" target="_blank">{{ $data->feeling }}</a>
                            </div>
                        @elseif ($data->feeling == 'bored')
                            <div class="flex flex-col">
                                <img src="{{ asset('img/bored.png') }}" alt="Just a flower"
                                    class="object-cover w-16 h-16 mx-auto rounded" onerror="this.src='/img/empty.png'">
                                <a class="px-4 mt-2 font-bold truncate rounded" target="_blank">{{ $data->feeling }}</a>
                            </div>
                        @elseif ($data->feeling == 'cold')
                            <div class="flex flex-col">
                                <img src="{{ asset('img/cold.png') }}" alt="Just a flower"
                                    class="object-cover w-16 h-16 mx-auto rounded" onerror="this.src='/img/empty.png'">
                                <a class="px-4 mt-2 font-bold truncate rounded" target="_blank">{{ $data->feeling }}</a>
                            </div>
                        @elseif ($data->feeling == 'hot')
                            <div class="flex flex-col">
                                <img src="{{ asset('img/hot.png') }}" alt="Just a flower"
                                    class="object-cover w-16 h-16 mx-auto rounded" onerror="this.src='/img/empty.png'">
                                <a class="px-4 mt-2 font-bold truncate rounded" target="_blank">{{ $data->feeling }}</a>
                            </div>
                        @elseif ($data->feeling == 'comfortable')
                            <div class="flex flex-col">
                                <img src="{{ asset('img/comfortable.png') }}" alt="Just a flower"
                                    class="object-cover w-16 h-16 mx-auto rounded" onerror="this.src='/img/empty.png'">
                                <a class="px-4 mt-2 font-bold truncate rounded" target="_blank">{{ $data->feeling }}</a>
                            </div>
                        @elseif ($data->feeling == 'confused')
                            <div class="flex flex-col">
                                <img src="{{ asset('img/confused.png') }}" alt="Just a flower"
                                    class="object-cover w-16 h-16 mx-auto rounded" onerror="this.src='/img/empty.png'">
                                <a class="px-4 mt-2 font-bold truncate rounded" target="_blank">{{ $data->feeling }}</a>
                            </div>
                        @elseif ($data->feeling == 'curious')
                            <div class="flex flex-col">
                                <img src="{{ asset('img/curious.png') }}" alt="Just a flower"
                                    class="object-cover w-16 h-16 mx-auto rounded" onerror="this.src='/img/empty.png'">
                                <a class="px-4 mt-2 font-bold truncate rounded" target="_blank">{{ $data->feeling }}</a>
                            </div>
                        @elseif ($data->feeling == 'disgusted')
                            <div class="flex flex-col">
                                <img src="{{ asset('img/disgusted.png') }}" alt="Just a flower"
                                    class="object-cover w-16 h-16 mx-auto rounded" onerror="this.src='/img/empty.png'">
                                <a class="px-4 mt-2 font-bold truncate rounded" target="_blank">{{ $data->feeling }}</a>
                            </div>
                        @elseif ($data->feeling == 'excited')
                            <div class="flex flex-col">
                                <img src="{{ asset('img/excited.png') }}" alt="Just a flower"
                                    class="object-cover w-16 h-16 mx-auto rounded" onerror="this.src='/img/empty.png'">
                                <a class="px-4 mt-2 font-bold truncate rounded" target="_blank">{{ $data->feeling }}</a>
                            </div>
                        @elseif ($data->feeling == 'funny')
                            <div class="flex flex-col">
                                <img src="{{ asset('img/funny.png') }}" alt="Just a flower"
                                    class="object-cover w-16 h-16 mx-auto rounded" onerror="this.src='/img/empty.png'">
                                <a class="px-4 mt-2 font-bold truncate rounded" target="_blank">{{ $data->feeling }}</a>
                            </div>
                        @elseif ($data->feeling == 'playful')
                            <div class="flex flex-col">
                                <img src="{{ asset('img/playful.png') }}" alt="Just a flower"
                                    class="object-cover w-16 h-16 mx-auto rounded" onerror="this.src='/img/empty.png'">
                                <a class="px-4 mt-2 font-bold truncate rounded" target="_blank">{{ $data->feeling }}</a>
                            </div>
                        @elseif ($data->feeling == 'pleasant')
                            <div class="flex flex-col">
                                <img src="{{ asset('img/pleasant.png') }}" alt="Just a flower"
                                    class="object-cover w-16 h-16 mx-auto rounded" onerror="this.src='/img/empty.png'">
                                <a class="px-4 mt-2 font-bold truncate rounded" target="_blank">{{ $data->feeling }}</a>
                            </div>
                        @elseif ($data->feeling == 'scared')
                            <div class="flex flex-col">
                                <img src="{{ asset('img/scared.png') }}" alt="Just a flower"
                                    class="object-cover w-16 h-16 mx-auto rounded" onerror="this.src='/img/empty.png'">
                                <a class="px-4 mt-2 font-bold truncate rounded" target="_blank">{{ $data->feeling }}</a>
                            </div>
                        @elseif ($data->feeling == 'shocked')
                            <div class="flex flex-col">
                                <img src="{{ asset('img/shocked.png') }}" alt="Just a flower"
                                    class="object-cover w-16 h-16 mx-auto rounded" onerror="this.src='/img/empty.png'">
                                <a class="px-4 mt-2 font-bold truncate rounded" target="_blank">{{ $data->feeling }}</a>
                            </div>
                        @elseif ($data->feeling == 'unaffordable')
                            <div class="flex flex-col">
                                <img src="{{ asset('img/unaffordable.png') }}" alt="Just a flower"
                                    class="object-cover w-16 h-16 mx-auto rounded" onerror="this.src='/img/empty.png'">
                                <a class="px-4 mt-2 font-bold truncate rounded" target="_blank">{{ $data->feeling }}</a>
                            </div>
                        @elseif ($data->feeling == 'uncomfortable')
                            <div class="flex flex-col">
                                <img src="{{ asset('img/uncomfortable.png') }}" alt="Just a flower"
                                    class="object-cover w-16 h-16 mx-auto rounded" onerror="this.src='/img/empty.png'">
                                <a class="px-4 mt-2 font-bold truncate rounded" target="_blank">{{ $data->feeling }}</a>
                            </div>
                        @endif
                    </div>
{{-- FORM------------------------------- --}}
                    <from action="" method="POST">
                        @csrf

                        <legend class="pt-4 mb-1 text-xl font-medium text-center border-t">
                            {{ __('messages.Why this feeling:') }}</legend>
                        <div class="flex flex-wrap justify-center overflow-y-hidden text-sm md:w-4xl">
                            <textarea class="w-full px-4 py-2 border rounded md:w-2/3" target="_blank">{{ $data->description }}</textarea>

                        </div>

                        @php $image0 =  $data->image0 ?? null; @endphp
                        <img src="{{ asset('storage' . $image0) }}" alt="" class="w-auto pt-4 mx-auto max-h-96"
                            onerror="this.src='/img/empty.png'">

                        <legend class="pt-4 mb-1 text-xl font-medium text-center border-t">{{ __('messages.Opinions') }}:
                        </legend>
                        <div class="flex flex-wrap justify-center pb-4 overflow-x-hidden text-sm md:w-4xl">
                            @php $opinions = explode(',', $data->opinions); @endphp
                            @foreach ($opinions as $opinion)
                                <a class="px-4 mx-1 text-white truncate bg-green-800 rounded"
                                    target="_blank">{{ $opinion }}</a>
                            @endforeach
                        </div>

                        <legend class="pt-4 mb-1 text-xl font-medium text-center border-t">
                            {{ __('messages.Would you change something in this space:') }}
                        </legend>
                        <div x-data="{ total_value: 50 }" class="pt-4 pb-4 mx-auto max-w-screen">
                            <input name="change" id="change" class="hidden" type="input" x-model="total_value" />
                            <div class="flex justify-between">
                                <label for="default-range"
                                    class="block mb-2 text-xs font-medium text-gray-900 dark:text-white">{{ __('messages.nothing at all') }}</label>
                                <label for="default-range"
                                    class="block mb-2 text-xs font-medium text-gray-900 dark:text-white">{{ __('messages.many things') }}</label>
                            </div>
                            <div class="flex justify-between px-2 pb-2 text-xs">
                                <span>0</span>
                                <span>1</span>
                                <span>2</span>
                                <span>3</span>
                                <span>4</span>
                                <span>5</span>
                                <span>6</span>
                                <span>7</span>
                                <span>8</span>
                                <span>9</span>
                                <span>10</span>
                            </div>
                            <input id="range"
                                class="block w-full h-3 bg-gray-300 rounded-lg appearance-none cursor-pointer range-lg"
                                type="range" x-model="{{ $data->change }}" min="0" max="100"
                                step="5">


                        </div>

                        <legend class="pt-4 mb-1 text-xl font-medium text-center border-t">
                            {{ __('messages.What you would change:') }}</legend>
                        <div class="flex flex-wrap justify-center overflow-y-hidden text-sm md:w-4xl">
                            <textarea class="w-full px-4 py-2 border rounded md:w-2/3" target="_blank">{{ $data->description2 }}</textarea>
                        </div>

                        @php $image0 =  $data->image ?? null; @endphp
                        <img src="{{ asset('storage' . $image0) }}" alt="" class="w-auto pt-4 pb-8 mx-auto max-h-96"
                            onerror="this.src='/img/empty.png'">

                        <legend class="pt-8 mb-1 text-xl font-medium text-center border-t">
                            {{ __('messages.How confortable is this space:') }}
                        </legend>

                        <div x-data="{ total_value: 50 }" class="pt-4 pb-4 mx-auto max-w-screen">
                            <input name="confort" id="confort" class="hidden" type="input" x-model="total_value" />
                            <div class="flex justify-between">
                                <label for="default-range"
                                    class="block mb-2 text-xs font-medium text-gray-900 dark:text-white">{{ __('messages.uncomfortable') }}</label>
                                <label for="default-range"
                                    class="block mb-2 text-xs font-medium text-gray-900 dark:text-white">{{ __('messages.very comfortable') }}</label>
                            </div>
                            <div class="flex justify-between px-2 pb-2 text-xs">
                                <span>0</span>
                                <span>1</span>
                                <span>2</span>
                                <span>3</span>
                                <span>4</span>
                                <span>5</span>
                                <span>6</span>
                                <span>7</span>
                                <span>8</span>
                                <span>9</span>
                                <span>10</span>
                            </div>
                            <input id="range"
                                class="block w-full h-3 bg-gray-300 rounded-lg appearance-none cursor-pointer range-lg "
                                type="range" x-model="{{ $data->confort }}" min="0" max="100" step="5">
                        </div>


                        <legend class="pt-4 mb-1 text-xl font-medium text-center border-t">
                            {{ __('messages.Place to rest:') }}
                        </legend>
                        <div x-data="{ total_value: 50 }" class="pt-4 pb-4 mx-auto max-w-screen">
                            <input name="rest" id="rest" class="hidden" type="input" x-model="total_value" />
                            <div class="flex justify-between">
                                <label for="default-range"
                                    class="block mb-2 text-xs font-medium text-gray-900 dark:text-white">{{ __('messages.no benches or other!') }}</label>
                                <label for="default-range"
                                    class="block mb-2 text-xs font-medium text-gray-900 dark:text-white">{{ __('messages.great place to rest!') }}</label>
                            </div>
                            <div class="flex justify-between px-2 pb-2 text-xs">
                                <span>0</span>
                                <span>1</span>
                                <span>2</span>
                                <span>3</span>
                                <span>4</span>
                                <span>5</span>
                                <span>6</span>
                                <span>7</span>
                                <span>8</span>
                                <span>9</span>
                                <span>10</span>
                            </div>
                            <input id="range"
                                class="block w-full h-3 bg-gray-300 rounded-lg appearance-none cursor-pointer range-lg"
                                type="range" x-model="{{ $data->rest }}" min="0" max="100"
                                step="5">

                            </div>
                            
                             <div class="flex flex-wrap justify-center overflow-y-hidden text-sm md:w-4xl">
                            <textarea class="w-full h-24 px-4 py-2 border rounded md:w-2/3" target="_blank">{{ $data->rest_text }}</textarea>
                            </div>


                        {{-- -------------------------------- --}}
                        <legend class="pt-4 mb-1 text-xl font-medium text-center border-t">
                            {{ __('messages.Walk, roll, bike comfort:') }}</legend>
                        <div x-data="{ total_value: 50 }" class="pt-4 pb-4 mx-auto max-w-screen">
                            <input name="rest" id="rest" class="hidden" type="input" x-model="total_value" />
                            <div class="flex justify-between">
                                <label for="default-range"
                                    class="block mb-2 text-xs font-medium text-gray-900 dark:text-white">{{ __('messages.difficult movement!') }}</label>
                                <label for="default-range"
                                    class="block mb-2 text-xs font-medium text-gray-900 dark:text-white">{{ __('messages.simple intuitive movement!') }}</label>
                            </div>
                            <div class="flex justify-between px-2 pb-2 text-xs">
                                <span>0</span>
                                <span>1</span>
                                <span>2</span>
                                <span>3</span>
                                <span>4</span>
                                <span>5</span>
                                <span>6</span>
                                <span>7</span>
                                <span>8</span>
                                <span>9</span>
                                <span>10</span>
                            </div>
                            <input id="range"
                                class="block w-full h-3 bg-gray-300 rounded-lg appearance-none cursor-pointer range-lg"
                                type="range" x-model="{{ $data->movement }}" min="0" max="100"
                                step="5">
                        </div>

                        <div class="flex flex-wrap justify-center overflow-y-hidden text-sm md:w-4xl">
                            <textarea class="w-full h-24 px-4 py-2 border rounded md:w-2/3" target="_blank">{{ $data->movement_text }}</textarea>
                            </div>

                        {{-- -------------------------------- --}}
                        <legend class="pt-4 mb-1 text-xl font-medium text-center border-t">
                            {{ __('messages.Play, exercise, activities:') }}</legend>
                        <div x-data="{ total_value: 50 }" class="pt-4 pb-4 mx-auto max-w-screen">
                            <input name="rest" id="rest" class="hidden" type="input" x-model="total_value" />
                            <div class="flex justify-between">
                                <label for="default-range"
                                    class="block mb-2 text-xs font-medium text-gray-900 dark:text-white">{{ __('messages.no activities!') }}</label>
                                <label for="default-range"
                                    class="block mb-2 text-xs font-medium text-gray-900 dark:text-white">{{ __('messages.many great activities!') }}</label>
                            </div>
                            <div class="flex justify-between px-2 pb-2 text-xs">
                                <span>0</span>
                                <span>1</span>
                                <span>2</span>
                                <span>3</span>
                                <span>4</span>
                                <span>5</span>
                                <span>6</span>
                                <span>7</span>
                                <span>8</span>
                                <span>9</span>
                                <span>10</span>
                            </div>
                            <input id="range"
                                class="block w-full h-3 bg-gray-300 rounded-lg appearance-none cursor-pointer range-lg"
                                type="range" x-model="{{ $data->activities }}" min="0" max="100"
                                step="5">


                        </div>

                          <div class="flex flex-wrap justify-center overflow-y-hidden text-sm md:w-4xl">
                            <textarea class="w-full h-24 px-4 py-2 border rounded md:w-2/3" target="_blank">{{ $data->activities_text }}</textarea>
                            </div>

                        {{-- -------------------------------- --}}
                        <legend class="pt-4 mb-1 text-xl font-medium text-center border-t">
                            {{ __('messages.visibility & orientation:') }}</legend>
                        <div x-data="{ total_value: 50 }" class="pt-4 pb-4 mx-auto max-w-screen">
                            <input name="rest" id="rest" class="hidden" type="input" x-model="total_value" />
                            <div class="flex justify-between">
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.poor difficult!') }}</label>
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.great intuitive!') }}</label>
                            </div>
                            <div class="flex justify-between px-2 pb-2 text-xs">
                                <span>0</span>
                                <span>1</span>
                                <span>2</span>
                                <span>3</span>
                                <span>4</span>
                                <span>5</span>
                                <span>6</span>
                                <span>7</span>
                                <span>8</span>
                                <span>9</span>
                                <span>10</span>
                            </div>
                            <input id="range"
                                class="block w-full h-3 bg-gray-300 rounded-lg appearance-none cursor-pointer range-lg"
                                type="range" x-model="{{ $data->orientation }}" min="0" max="100"
                                step="5">


                        </div>

                            <div class="flex flex-wrap justify-center overflow-y-hidden text-sm md:w-4xl">
                            <textarea class="w-full h-24 px-4 py-2 border rounded md:w-2/3" target="_blank">{{ $data->orientation_text }}</textarea>
                            </div>

                        {{-- -------------------------------- --}}
                        <legend class="pt-4 mb-1 text-xl font-medium text-center border-t">
                            {{ __('messages.rain & wind protection:') }}</legend>
                        <div x-data="{ total_value: 50 }" class="pt-4 pb-4 mx-auto max-w-screen">
                            <input name="rest" id="rest" class="hidden" type="input" x-model="total_value" />
                            <div class="flex justify-between">
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.poor!') }}</label>
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.great!') }}</label>
                            </div>
                            <div class="flex justify-between px-2 pb-2 text-xs">
                                <span>0</span>
                                <span>1</span>
                                <span>2</span>
                                <span>3</span>
                                <span>4</span>
                                <span>5</span>
                                <span>6</span>
                                <span>7</span>
                                <span>8</span>
                                <span>9</span>
                                <span>10</span>
                            </div>
                            <input id="range"
                                class="block w-full h-3 bg-gray-300 rounded-lg appearance-none cursor-pointer range-lg"
                                type="range" x-model="{{ $data->weather }}" min="0" max="100"
                                step="5">
                        </div>

                                 <div class="flex flex-wrap justify-center overflow-y-hidden text-sm md:w-4xl">
                            <textarea class="w-full h-24 px-4 py-2 border rounded md:w-2/3" target="_blank">{{ $data->weather_text }}</textarea>
                            </div>

                        {{-- -------------------------------- --}}
                        <legend class="pt-4 mb-1 text-xl font-medium text-center border-t">
                            {{ __('messages.facilities:') }}
                        </legend>
                        <div x-data="{ total_value: 50 }" class="pt-4 pb-4 mx-auto max-w-screen">
                            <input name="rest" id="rest" class="hidden" type="input" x-model="total_value" />
                            <div class="flex justify-between">
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.none, poor facilities!') }}</label>
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.many, great facilities!') }}</label>
                            </div>
                            <div class="flex justify-between px-2 pb-2 text-xs">
                                <span>0</span>
                                <span>1</span>
                                <span>2</span>
                                <span>3</span>
                                <span>4</span>
                                <span>5</span>
                                <span>6</span>
                                <span>7</span>
                                <span>8</span>
                                <span>9</span>
                                <span>10</span>
                            </div>
                            <input id="range"
                                class="block w-full h-3 bg-gray-300 rounded-lg appearance-none cursor-pointer range-lg"
                                type="range" x-model="{{ $data->facilities }}" min="0" max="100"
                                step="5">
                        </div>

                            <div class="flex flex-wrap justify-center overflow-y-hidden text-sm md:w-4xl">
                            <textarea class="w-full h-24 px-4 py-2 border rounded md:w-2/3" target="_blank">{{ $data->facilities_text }}</textarea>
                            </div>

                        <legend class="pt-4 mb-1 text-xl font-medium text-center border-t">{{ __('messages.noise:') }}
                        </legend>
                        <div x-data="{ total_value: 50 }" class="pt-4 pb-4 mx-auto max-w-screen">
                            <input name="rest" id="rest" class="hidden" type="input" x-model="total_value" />
                            <div class="flex justify-between">
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.quiet and comfortable!') }}</label>
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.loud and iritating!') }}</label>
                            </div>
                            <div class="flex justify-between px-2 pb-2 text-xs">
                                <span>0</span>
                                <span>1</span>
                                <span>2</span>
                                <span>3</span>
                                <span>4</span>
                                <span>5</span>
                                <span>6</span>
                                <span>7</span>
                                <span>8</span>
                                <span>9</span>
                                <span>10</span>
                            </div>
                            <input id="range"
                                class="block w-full h-3 bg-gray-300 rounded-lg appearance-none cursor-pointer range-lg"
                                type="range" x-model="{{ $data->noise }}" min="0" max="100"
                                step="5">
                        </div>

                                    <div class="flex flex-wrap justify-center overflow-y-hidden text-sm md:w-4xl">
                            <textarea class="w-full h-24 px-4 py-2 border rounded md:w-2/3" target="_blank">{{ $data->noise_text }}</textarea>
                            </div>



                        {{-- ------------ENJOYABLE----------- --}}
                        <legend class="pt-4 mb-1 text-3xl font-medium text-center border-t">
                            {{ __('messages.How enjoyable is this space:') }}
                        </legend>
                        <div x-data="{ total_value: 50 }" class="pt-4 pb-4 mx-auto max-w-screen">
                            <input name="rest" id="rest" class="hidden" type="input" x-model="total_value" />
                            <div class="flex justify-between">
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.unpleasant') }}</label>
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.very pleasant') }}</label>
                            </div>
                            <div class="flex justify-between px-2 pb-2 text-xs">
                                <span>0</span>
                                <span>1</span>
                                <span>2</span>
                                <span>3</span>
                                <span>4</span>
                                <span>5</span>
                                <span>6</span>
                                <span>7</span>
                                <span>8</span>
                                <span>9</span>
                                <span>10</span>
                            </div>
                            <input id="range"
                                class="block w-full h-3 bg-gray-300 rounded-lg appearance-none cursor-pointer range-lg"
                                type="range" x-model="{{ $data->enjoyable }}" min="0" max="100"
                                step="5">


                        </div>



                        <legend class="pt-4 mb-1 text-xl font-medium text-center border-t">
                            {{ __('messages.seasonality:') }}
                        </legend>
                        <div x-data="{ total_value: 50 }" class="pt-4 pb-4 mx-auto max-w-screen">
                            <input name="rest" id="rest" class="hidden" type="input" x-model="total_value" />
                            <div class="flex justify-between">
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.poor in some season!') }}</label>
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.great year round!') }}</label>
                            </div>
                            <div class="flex justify-between px-2 pb-2 text-xs">
                                <span>0</span>
                                <span>1</span>
                                <span>2</span>
                                <span>3</span>
                                <span>4</span>
                                <span>5</span>
                                <span>6</span>
                                <span>7</span>
                                <span>8</span>
                                <span>9</span>
                                <span>10</span>
                            </div>
                            <input id="range"
                                class="block w-full h-3 bg-gray-300 rounded-lg appearance-none cursor-pointer range-lg"
                                type="range" x-model="{{ $data->seasonality }}" min="0" max="100"
                                step="5">


                        </div>

                                    <div class="flex flex-wrap justify-center overflow-y-hidden text-sm md:w-4xl">
                            <textarea class="w-full h-24 px-4 py-2 border rounded md:w-2/3" target="_blank">{{ $data->seasonality_text }}</textarea>
                            </div>


                        {{-- -------------------------------- --}}
                        <legend class="pt-4 mb-1 text-xl font-medium text-center border-t">
                            {{ __('messages.plants & trees:') }}</legend>
                        <div x-data="{ total_value: 50 }" class="pt-4 pb-4 mx-auto max-w-screen">
                            <input name="rest" id="rest" class="hidden" type="input" x-model="total_value" />
                            <div class="flex justify-between">
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.none!') }}</label>
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.many!') }}</label>
                            </div>
                            <div class="flex justify-between px-2 pb-2 text-xs">
                                <span>0</span>
                                <span>1</span>
                                <span>2</span>
                                <span>3</span>
                                <span>4</span>
                                <span>5</span>
                                <span>6</span>
                                <span>7</span>
                                <span>8</span>
                                <span>9</span>
                                <span>10</span>
                            </div>
                            <input id="range"
                                class="block w-full h-3 bg-gray-300 rounded-lg appearance-none cursor-pointer range-lg"
                                type="range" x-model="{{ $data->plants }}" min="0" max="100"
                                step="5">


                        </div>

                           <div class="flex flex-wrap justify-center overflow-y-hidden text-sm md:w-4xl">
                            <textarea class="w-full h-24 px-4 py-2 border rounded md:w-2/3" target="_blank">{{ $data->plants_text }}</textarea>
                            </div>

                        {{-- -------------------------------- --}}
                        <legend class="pt-4 mb-1 text-xl font-medium text-center border-t">{{ __('messages.Sunlight:') }}
                        </legend>
                        <div x-data="{ total_value: 50 }" class="pt-4 pb-4 mx-auto max-w-screen">
                            <input name="rest" id="rest" class="hidden" type="input" x-model="total_value" />
                            <div class="flex justify-between">
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.no direct sunlight!') }}</label>
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.a lot of sunlight') }}</label>
                            </div>
                            <div class="flex justify-between px-2 pb-2 text-xs">
                                <span>0</span>
                                <span>1</span>
                                <span>2</span>
                                <span>3</span>
                                <span>4</span>
                                <span>5</span>
                                <span>6</span>
                                <span>7</span>
                                <span>8</span>
                                <span>9</span>
                                <span>10</span>
                            </div>
                            <input id="range"
                                class="block w-full h-3 bg-gray-300 rounded-lg appearance-none cursor-pointer range-lg"
                                type="range" x-model="{{ $data->sunlight }}" min="0" max="100"
                                step="5">


                        </div>

                             <div class="flex flex-wrap justify-center overflow-y-hidden text-sm md:w-4xl">
                            <textarea class="w-full h-24 px-4 py-2 border rounded md:w-2/3" target="_blank">{{ $data->sunlight_text }}</textarea>
                            </div>

                        {{-- -------------------------------- --}}
                        <legend class="pt-4 mb-1 text-xl font-medium text-center border-t">{{ __('messages.shade:') }}
                        </legend>
                        <div x-data="{ total_value: 50 }" class="pt-4 pb-4 mx-auto max-w-screen">
                            <input name="rest" id="rest" class="hidden" type="input" x-model="total_value" />
                            <div class="flex justify-between">
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.none!') }}</label>
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.plenty shade!') }}</label>
                            </div>
                            <div class="flex justify-between px-2 pb-2 text-xs">
                                <span>0</span>
                                <span>1</span>
                                <span>2</span>
                                <span>3</span>
                                <span>4</span>
                                <span>5</span>
                                <span>6</span>
                                <span>7</span>
                                <span>8</span>
                                <span>9</span>
                                <span>10</span>
                            </div>
                            <input id="range"
                                class="block w-full h-3 bg-gray-300 rounded-lg appearance-none cursor-pointer range-lg"
                                type="range" x-model="{{ $data->shade }}" min="0" max="100"
                                step="5">


                        </div>


                            <div class="flex flex-wrap justify-center overflow-y-hidden text-sm md:w-4xl">
                            <textarea class="w-full h-24 px-4 py-2 border rounded md:w-2/3" target="_blank">{{ $data->shade_text }}</textarea>
                            </div>


                        {{-- -------------------------------- --}}
                        <legend class="pt-4 mb-1 text-xl font-medium text-center border-t">
                            {{ __('messages.talking & listening:') }}</legend>
                        <div x-data="{ total_value: 50 }" class="pt-4 pb-4 mx-auto max-w-screen">
                            <input name="rest" id="rest" class="hidden" type="input" x-model="total_value" />
                            <div class="flex justify-between">
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.very difficult!') }}</label>
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.simple & effortless!') }}</label>
                            </div>
                            <div class="flex justify-between px-2 pb-2 text-xs">
                                <span>0</span>
                                <span>1</span>
                                <span>2</span>
                                <span>3</span>
                                <span>4</span>
                                <span>5</span>
                                <span>6</span>
                                <span>7</span>
                                <span>8</span>
                                <span>9</span>
                                <span>10</span>
                            </div>
                            <input id="range"
                                class="block w-full h-3 bg-gray-300 rounded-lg appearance-none cursor-pointer range-lg"
                                type="range" x-model="{{ $data->talking }}" min="0" max="100"
                                step="5">


                        </div>


                             <div class="flex flex-wrap justify-center overflow-y-hidden text-sm md:w-4xl">
                            <textarea class="w-full h-24 px-4 py-2 border rounded md:w-2/3" target="_blank">{{ $data->talking_text }}</textarea>
                            </div>

                        {{-- -------------------------------- --}}
                        <legend class="pt-4 mb-1 text-xl font-medium text-center border-t">
                            {{ __('messages.interesting sights:') }}</legend>
                        <div x-data="{ total_value: 50 }" class="pt-4 pb-4 mx-auto max-w-screen">
                            <input name="rest" id="rest" class="hidden" type="input" x-model="total_value" />
                            <div class="flex justify-between">
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.none!') }}</label>
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.many!') }}</label>
                            </div>
                            <div class="flex justify-between px-2 pb-2 text-xs">
                                <span>0</span>
                                <span>1</span>
                                <span>2</span>
                                <span>3</span>
                                <span>4</span>
                                <span>5</span>
                                <span>6</span>
                                <span>7</span>
                                <span>8</span>
                                <span>9</span>
                                <span>10</span>
                            </div>
                            <input id="range"
                                class="block w-full h-3 bg-gray-300 rounded-lg appearance-none cursor-pointer range-lg"
                                type="range" x-model="{{ $data->interesting }}" min="0" max="100"
                                step="5">


                        </div>

                        <div class="flex flex-wrap justify-center overflow-y-hidden text-sm md:w-4xl">
                            <textarea class="w-full h-24 px-4 py-2 border rounded md:w-2/3" target="_blank">{{ $data->interesting_text }}</textarea>
                            </div>

                        <legend class="pt-4 mb-1 text-xl font-medium text-center border-t">{{ __('messages.beauty:') }}
                        </legend>
                        <div x-data="{ total_value: 50 }" class="pt-4 pb-4 mx-auto max-w-screen">
                            <input name="rest" id="rest" class="hidden" type="input" x-model="total_value" />
                            <div class="flex justify-between">
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.ugly!') }}</label>
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.beautiful!') }}</label>
                            </div>
                            <div class="flex justify-between px-2 pb-2 text-xs">
                                <span>0</span>
                                <span>1</span>
                                <span>2</span>
                                <span>3</span>
                                <span>4</span>
                                <span>5</span>
                                <span>6</span>
                                <span>7</span>
                                <span>8</span>
                                <span>9</span>
                                <span>10</span>
                            </div>
                            <input id="range"
                                class="block w-full h-3 bg-gray-300 rounded-lg appearance-none cursor-pointer range-lg"
                                type="range" x-model="{{ $data->beauty }}" min="0" max="100"
                                step="5">
                        </div>

                                                <div class="flex flex-wrap justify-center overflow-y-hidden text-sm md:w-4xl">
                            <textarea class="w-full h-24 px-4 py-2 border rounded md:w-2/3" target="_blank">{{ $data->beauty_text }}</textarea>
                            </div>

                        {{-- ------------PROTECTED----------- --}}
                        <legend class="pt-8 mb-1 text-3xl font-medium text-center border-t">
                            {{ __('messages.How protected is this space:') }}
                        </legend>
                        <div x-data="{ total_value: 50 }" class="pt-4 pb-4 mx-auto max-w-screen">
                            <input name="rest" id="rest" class="hidden" type="input" x-model="total_value" />
                            <div class="flex justify-between">
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.unpleasant') }}</label>
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.very pleasant') }}</label>
                            </div>
                            <div class="flex justify-between px-2 pb-2 text-xs">
                                <span>0</span>
                                <span>1</span>
                                <span>2</span>
                                <span>3</span>
                                <span>4</span>
                                <span>5</span>
                                <span>6</span>
                                <span>7</span>
                                <span>8</span>
                                <span>9</span>
                                <span>10</span>
                            </div>
                            <input id="range"
                                class="block w-full h-3 bg-gray-300 rounded-lg appearance-none cursor-pointer range-lg"
                                type="range" x-model="{{ $data->protected }}" min="0" max="100"
                                step="5">
                        </div>

                        

                        <legend class="pt-4 mb-1 text-xl font-medium text-center border-t">
                            {{ __('messages.traffic safety:') }}</legend>
                        <div x-data="{ total_value: 50 }" class="pt-4 pb-4 mx-auto max-w-screen">
                            <input name="rest" id="rest" class="hidden" type="input" x-model="total_value" />
                            <div class="flex justify-between">
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.poor!') }}</label>
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.great!') }}</label>
                            </div>
                            <div class="flex justify-between px-2 pb-2 text-xs">
                                <span>0</span>
                                <span>1</span>
                                <span>2</span>
                                <span>3</span>
                                <span>4</span>
                                <span>5</span>
                                <span>6</span>
                                <span>7</span>
                                <span>8</span>
                                <span>9</span>
                                <span>10</span>
                            </div>
                            <input id="range"
                                class="block w-full h-3 bg-gray-300 rounded-lg appearance-none cursor-pointer range-lg"
                                type="range" x-model="{{ $data->protection }}" min="0" max="100"
                                step="5">


                        </div>
                            <div class="flex flex-wrap justify-center overflow-y-hidden text-sm md:w-4xl">
                            <textarea class="w-full h-24 px-4 py-2 border rounded md:w-2/3" target="_blank">{{ $data->protection_text }}</textarea>
                            </div>


                        {{-- -------------------------------- --}}
                        <legend class="pt-4 mb-1 text-xl font-medium text-center border-t">
                            {{ __('messages.polluants:') }}
                        </legend>
                        <div x-data="{ total_value: 50 }" class="pt-4 pb-4 mx-auto max-w-screen">
                            <input name="rest" id="rest" class="hidden" type="input" x-model="total_value" />
                            <div class="flex justify-between">
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.poor!') }}</label>
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.great!') }}</label>
                            </div>
                            <div class="flex justify-between px-2 pb-2 text-xs">
                                <span>0</span>
                                <span>1</span>
                                <span>2</span>
                                <span>3</span>
                                <span>4</span>
                                <span>5</span>
                                <span>6</span>
                                <span>7</span>
                                <span>8</span>
                                <span>9</span>
                                <span>10</span>
                            </div>
                            <input id="range"
                                class="block w-full h-3 bg-gray-300 rounded-lg appearance-none cursor-pointer range-lg"
                                type="range" x-model="{{ $data->polluants }}" min="0" max="100"
                                step="5">


                        </div>

                           <div class="flex flex-wrap justify-center overflow-y-hidden text-sm md:w-4xl">
                            <textarea class="w-full h-24 px-4 py-2 border rounded md:w-2/3" target="_blank">{{ $data->polluants_text }}</textarea>
                            </div>

                        {{-- -------------------------------- --}}
                        <legend class="pt-4 mb-1 text-xl font-medium text-center border-t">
                            {{ __('messages.night lightning:') }}</legend>
                        <div x-data="{ total_value: 50 }" class="pt-4 pb-4 mx-auto max-w-screen">
                            <input name="rest" id="rest" class="hidden" type="input" x-model="total_value" />
                            <div class="flex justify-between">
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.no direct sunlight!') }}</label>
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.a lot of sunlight') }}</label>
                            </div>
                            <div class="flex justify-between px-2 pb-2 text-xs">
                                <span>0</span>
                                <span>1</span>
                                <span>2</span>
                                <span>3</span>
                                <span>4</span>
                                <span>5</span>
                                <span>6</span>
                                <span>7</span>
                                <span>8</span>
                                <span>9</span>
                                <span>10</span>
                            </div>
                            <input id="range"
                                class="block w-full h-3 bg-gray-300 rounded-lg appearance-none cursor-pointer range-lg"
                                type="range" x-model="{{ $data->night }}" min="0" max="100"
                                step="5">


                        </div>

                             <div class="flex flex-wrap justify-center overflow-y-hidden text-sm md:w-4xl">
                            <textarea class="w-full h-24 px-4 py-2 border rounded md:w-2/3" target="_blank">{{ $data->night_text }}</textarea>
                            </div>

                        {{-- -------------------------------- --}}
                        <legend class="pt-4 mb-1 text-xl font-medium text-center border-t">
                            {{ __('messages.other hazards:') }}</legend>

                                     <div class="flex flex-wrap justify-center overflow-y-hidden text-sm md:w-4xl">
                            <textarea class="w-full h-24 px-4 py-2 border rounded md:w-2/3" target="_blank">{{ $data->hazards }}</textarea>
                            </div>

                        {{-- -------------------------------- --}}
                        <legend class="pt-4 mb-1 text-xl font-medium text-center border-t">
                            {{ __('messages.dangerous objets:') }}</legend>
                        <div x-data="{ total_value: 50 }" class="pt-4 pb-4 mx-auto max-w-screen">
                            <input name="rest" id="rest" class="hidden" type="input" x-model="total_value" />
                            <div class="flex justify-between">
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.none!') }}</label>
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.many!') }}</label>
                            </div>
                            <div class="flex justify-between px-2 pb-2 text-xs">
                                <span>0</span>
                                <span>1</span>
                                <span>2</span>
                                <span>3</span>
                                <span>4</span>
                                <span>5</span>
                                <span>6</span>
                                <span>7</span>
                                <span>8</span>
                                <span>9</span>
                                <span>10</span>
                            </div>
                            <input id="range"
                                class="block w-full h-3 bg-gray-300 rounded-lg appearance-none cursor-pointer range-lg"
                                type="range" x-model="{{ $data->dangerous }}" min="0" max="100"
                                step="5">


                        </div>


                             <div class="flex flex-wrap justify-center overflow-y-hidden text-sm md:w-4xl">
                            <textarea class="w-full h-24 px-4 py-2 border rounded md:w-2/3" target="_blank">{{ $data->dangerous_text }}</textarea>
                            </div>

                        {{-- -------------------------------- --}}
                        <legend class="pt-4 mb-1 text-xl font-medium text-center border-t">
                            {{ __('messages.safety from harm:') }}</legend>
                        <div x-data="{ total_value: 50 }" class="pt-4 pb-4 mx-auto max-w-screen">
                            <input name="rest" id="rest" class="hidden" type="input" x-model="total_value" />
                            <div class="flex justify-between">
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.very unsafe!') }}</label>
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.very safe!') }}</label>
                            </div>
                            <div class="flex justify-between px-2 pb-2 text-xs">
                                <span>0</span>
                                <span>1</span>
                                <span>2</span>
                                <span>3</span>
                                <span>4</span>
                                <span>5</span>
                                <span>6</span>
                                <span>7</span>
                                <span>8</span>
                                <span>9</span>
                                <span>10</span>
                            </div>
                            <input id="range"
                                class="block w-full h-3 bg-gray-300 rounded-lg appearance-none cursor-pointer range-lg"
                                type="range" x-model="{{ $data->protection_harm }}" min="0" max="100"
                                step="5">


                        </div>



                             <div class="flex flex-wrap justify-center overflow-y-hidden text-sm md:w-4xl">
                            <textarea class="w-full h-24 px-4 py-2 border rounded md:w-2/3" target="_blank">{{ $data->protection_harm_text }}</textarea>
                            </div>

                        {{-- ----------SPENDING--------- --}}
                        <legend class="pt-4 mb-1 text-2xl font-medium text-center border-t">
                            {{ __('messages.Like spending time or passing through:') }}
                        </legend>
                        <div class="flex flex-wrap justify-center overflow-x-hidden text-sm md:w-4xl">
                            @if ($data->time_spending == 'yes')
                                <div class="flex flex-col">
                                    <img src="{{ asset('img/happy.png') }}" alt="Just a flower"
                                        class="object-cover w-16 h-16 mx-auto rounded"
                                        onerror="this.src='/img/empty.png'">
                                    <a class="px-4 mt-2 ml-1 font-bold truncate rounded"
                                        target="_blank">{{ $data->time_spending }}</a>
                                </div>
                            @elseif ($data->time_spending == 'no')
                                <div class="flex flex-col">
                                    <img src="{{ asset('img/sad.png') }}" alt="Just a flower"
                                        class="object-cover w-16 h-16 mx-auto rounded"
                                        onerror="this.src='/img/empty.png'">
                                    <a class="px-4 mt-2 ml-1 font-bold truncate rounded"
                                        target="_blank">{{ $data->time_spending }}</a>
                                </div>
                            @elseif ($data->time_spending == 'dontknow')
                                <div class="flex flex-col">
                                    <img src="{{ asset('img/stressed.png') }}" alt="Just a flower"
                                        class="object-cover w-16 h-16 mx-auto rounded"
                                        onerror="this.src='/img/empty.png'">
                                    <a class="px-4 mt-2 font-bold truncate rounded"
                                        target="_blank">{{ __('messages.i dont know') }}</a>
                                </div>
                            @endif
                        </div>

                        {{-- ------------space----------- --}}
                        <legend class="pt-8 mb-1 text-3xl font-medium text-center border-t">
                            {{ __('messages.How the space is used:') }}
                        </legend>
                        <div x-data="{ total_value: 50 }" class="pt-4 pb-4 mx-auto max-w-screen">
                            <input name="rest" id="rest" class="hidden" type="input" x-model="total_value" />
                            <div class="flex justify-between">
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.unfit or wrong!') }}</label>
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.great!') }}</label>
                            </div>
                            <div class="flex justify-between px-2 pb-2 text-xs">
                                <span>0</span>
                                <span>1</span>
                                <span>2</span>
                                <span>3</span>
                                <span>4</span>
                                <span>5</span>
                                <span>6</span>
                                <span>7</span>
                                <span>8</span>
                                <span>9</span>
                                <span>10</span>
                            </div>
                            <input id="range"
                                class="block w-full h-3 bg-gray-300 rounded-lg appearance-none cursor-pointer range-lg"
                                type="range" x-model="{{ $data->spaceusage }}" min="0" max="100"
                                step="5">


                        </div>



                        <legend class="pt-4 mb-1 text-xl font-medium text-center border-t">
                            {{ __('messages.fun to spend time:') }}</legend>
                        <div x-data="{ total_value: 50 }" class="pt-4 pb-4 mx-auto max-w-screen">
                            <input name="rest" id="rest" class="hidden" type="input" x-model="total_value" />
                            <div class="flex justify-between">
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.not at all!') }}</label>
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.very fun!') }}</label>
                            </div>
                            <div class="flex justify-between px-2 pb-2 text-xs">
                                <span>0</span>
                                <span>1</span>
                                <span>2</span>
                                <span>3</span>
                                <span>4</span>
                                <span>5</span>
                                <span>6</span>
                                <span>7</span>
                                <span>8</span>
                                <span>9</span>
                                <span>10</span>
                            </div>
                            <input id="range"
                                class="block w-full h-3 bg-gray-300 rounded-lg appearance-none cursor-pointer range-lg"
                                type="range" x-model="{{ $data->spend_time }}" min="0" max="100"
                                step="5">


                        </div>

 
                            <div class="flex flex-wrap justify-center overflow-y-hidden text-sm md:w-4xl">
                            <textarea class="w-full h-24 px-4 py-2 border rounded md:w-2/3" target="_blank">{{ $data->spend_time_text }}</textarea>
                            </div>


                        {{-- -------------------------------- --}}
                        <legend class="pt-4 mb-1 text-xl font-medium text-center border-t">
                            {{ __('messages.meeting with friends:') }}</legend>
                        <div x-data="{ total_value: 50 }" class="pt-4 pb-4 mx-auto max-w-screen">
                            <input name="rest" id="rest" class="hidden" type="input" x-model="total_value" />
                            <div class="flex justify-between">
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.bad meeting spot!') }}</label>
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.great meeting spot!') }}</label>
                            </div>
                            <div class="flex justify-between px-2 pb-2 text-xs">
                                <span>0</span>
                                <span>1</span>
                                <span>2</span>
                                <span>3</span>
                                <span>4</span>
                                <span>5</span>
                                <span>6</span>
                                <span>7</span>
                                <span>8</span>
                                <span>9</span>
                                <span>10</span>
                            </div>
                            <input id="range"
                                class="block w-full h-3 bg-gray-300 rounded-lg appearance-none cursor-pointer range-lg"
                                type="range" x-model="{{ $data->meeting }}" min="0" max="100"
                                step="5">


                        </div>

                            <div class="flex flex-wrap justify-center overflow-y-hidden text-sm md:w-4xl">
                            <textarea class="w-full h-24 px-4 py-2 border rounded md:w-2/3" target="_blank">{{ $data->meeting_text }}</textarea>
                            </div>

                        {{-- -------------------------------- --}}
                        <legend class="pt-4 mb-1 text-xl font-medium text-center border-t">
                            {{ __('messages.multifunctional:') }}</legend>
                        <div x-data="{ total_value: 50 }" class="pt-4 pb-4 mx-auto max-w-screen">
                            <input name="rest" id="rest" class="hidden" type="input" x-model="total_value" />
                            <div class="flex justify-between">
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.no direct sunlight!') }}</label>
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.a lot of sunlight') }}</label>
                            </div>
                            <div class="flex justify-between px-2 pb-2 text-xs">
                                <span>0</span>
                                <span>1</span>
                                <span>2</span>
                                <span>3</span>
                                <span>4</span>
                                <span>5</span>
                                <span>6</span>
                                <span>7</span>
                                <span>8</span>
                                <span>9</span>
                                <span>10</span>
                            </div>
                            <input id="range"
                                class="block w-full h-3 bg-gray-300 rounded-lg appearance-none cursor-pointer range-lg"
                                type="range" x-model="{{ $data->multifonctional }}" min="0" max="100"
                                step="5">


                        </div>



                            <div class="flex flex-wrap justify-center overflow-y-hidden text-sm md:w-4xl">
                            <textarea class="w-full h-24 px-4 py-2 border rounded md:w-2/3" target="_blank">{{ $data->multifunctional_text }}</textarea>
                            </div>


                        {{-- -------------------------------- --}}
                        <legend class="pt-4 mb-1 text-xl font-medium text-center border-t">
                            {{ __('messages.events in space:') }}</legend>
                        <div x-data="{ total_value: 50 }" class="pt-4 pb-4 mx-auto max-w-screen">
                            <input name="rest" id="rest" class="hidden" type="input" x-model="total_value" />
                            <div class="flex justify-between">
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.never!') }}</label>
                                <label for="default-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.often!') }}</label>
                            </div>
                            <div class="flex justify-between px-2 pb-2 text-xs">
                                <span>0</span>
                                <span>1</span>
                                <span>2</span>
                                <span>3</span>
                                <span>4</span>
                                <span>5</span>
                                <span>6</span>
                                <span>7</span>
                                <span>8</span>
                                <span>9</span>
                                <span>10</span>
                            </div>
                            <input id="range"
                                class="block w-full h-3 bg-gray-300 rounded-lg appearance-none cursor-pointer range-lg"
                                type="range" x-model="{{ $data->events }}" min="0" max="100"
                                step="5">


                        </div>

                                                <div class="flex flex-wrap justify-center overflow-y-hidden text-sm md:w-4xl">
                            <textarea class="w-full h-24 px-4 py-2 border rounded md:w-2/3" target="_blank">{{ $data->events_text }}</textarea>
                            </div>

                        <legend class="pt-4 mb-1 text-xl font-medium text-center border-t">
                            {{ __('messages.Who use the space the most:') }}</legend>
                        <div class="flex flex-wrap justify-center pb-8 overflow-x-hidden text-sm md:w-4xl">
                            @php $usages = explode(',', $data->usagedetail); @endphp
                            @foreach ($usages as $usage)
                                <a class="px-4 mx-1 truncate bg-[#FAC710] rounded"
                                    target="_blank">{{ $usage }}</a>
                            @endforeach
                        </div>


                        @if (backpack_user()->id == $data->user_id)
                            <legend class="pt-4 mb-1 text-xl font-medium text-center border-t">
                                {{ __('messages.modify:') }}
                            </legend>
                            <div class="flex flex-row justify-between pb-8 mx-auto">
                                <a class="w-1/2 mx-1">
                                    <button type="submit"
                                        class="w-full h-12 px-4 py-2 mx-1 text-sm font-medium text-white bg-green-800 rounded">{{ __('messages.Save') }}</button></a>

                                <a href="/delete?id={{ $placeid }}&type={{ $type }}" class="w-1/2 mx-1">
                                    <button
                                        class="w-full h-12 px-4 py-2 mx-1 text-sm font-medium text-white bg-red-800 rounded">{{ __('messages.Delete') }}</button></a>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
