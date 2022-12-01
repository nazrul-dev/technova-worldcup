<div>
    <div class="relative">
        
        <div class="min-h-screen bg-white relative min-w-screen">
            <div class="md:block hidden">
                <div class="absolute -top-6 -left-10">
                    <img alt="shape" src="{{ asset('shape/shape-color.png') }}" />
                </div>
                <div class="absolute left-7 -top-6">
                    <img alt="shape" src="{{ asset('shape/shape-white.png') }}" />
                </div>
                <div class="absolute left-[100px] -top-6">
                    <img alt="shape" src="{{ asset('shape/shape-white.png') }}" />
                </div>
                <div class="absolute top-8 left-[64px]">
                    <img alt="shape" src="{{ asset('shape/shape-color.png') }}" />
                </div>
                <div class="absolute -left-2 top-8">
                    <img alt="shape" src="{{ asset('shape/shape-white.png') }}" />
                </div>
                <div class="absolute top-[87px] -left-[44px]">
                    <img alt="shape" src="{{ asset('shape/shape-color.png') }}" />
                </div>
                <div class="absolute top-[87px] left-[25px]">
                    <img alt="shape" src="{{ asset('shape/shape-white.png') }}" />
                </div>
            </div>
            <div class="md:hidden block z-0">
                <div class="fixed -bottom-5  right-10">
                    <img class="w-10" alt="shape" src="{{ asset('shape/shape-color.png') }}" />
                </div>
                <div class="fixed -bottom-5  right-0">
                    <img class="w-10" alt="shape" src="{{ asset('shape/shape-white.png') }}" />
                </div>
                <div class="fixed bottom-3  right-5">
                    <img class="w-10" alt="shape" src="{{ asset('shape/shape-white.png') }}" />
                </div>
                <div class="fixed bottom-3  -right-5">
                    <img class="w-10" alt="shape" src="{{ asset('shape/shape-color.png') }}" />
                </div>
                <div class="fixed bottom-3  right-[60px]">
                    <img class="w-10" alt="shape" src="{{ asset('shape/shape-white.png') }}" />
                </div>
                <div class="fixed bottom-[40px]  right-[40px]">
                    <img class="w-10" alt="shape" src="{{ asset('shape/shape-color.png') }}" />
                </div>
                <div class="fixed bottom-[40px]  right-[0px]">
                    <img class="w-10" alt="shape" src="{{ asset('shape/shape-white.png') }}" />
                </div>
            </div>
            <div class="absolute top-[200px]  md:top-[170px]  md:w-2/3 w-full ">
                <div class="md:mx-20 mx-5 md:text-left text-center">
                    <h1 class="font-bold md:text-[55px] text-[14px] text-left pl-10 md:pl-0">
                        Predict
                    </h1>
                    <h1
                        class="font-bold md:ml-10 md:text-[80px] text-[25px]  md:-mt-7 -mt-2  text-transparent  bg-clip-text bg-gradient-to-b from-[#86113E] to-[#503400]">
                        the Champion
                    </h1>

                    <div class="md:mr-10">
                        <h5 class="text-[12px] md:text-[30px]">
                            Put your Prediction down below!
                        </h5>
                        <div class="text-base mt-5">

                            <div class="flex relative">
                                @if ($flag && $teamSelected)
                                    <div class="w-8 h-full absolute top-0 left-3">
                                        <div class="flex flex-col items-center justify-center h-full">
                                            <img class="w-full h-8" src="{{ $flag }}" alt="">
                                        </div>
                                    </div>
                                @endif


                                <select wire:model="teamSelected"
                                    class="bg-gray-50 font-semibold border  pl-14 focus-within:ring-0 border-gray-300 text-gray-900 text-sm rounded-lg  w-full p-2.5 ">
                                    <option class=" font-semibold" selected>Choose a country</option>
                                    @foreach ($teams as $item)
                                        <option class=" font-semibold" value="{{ $item->value }}">
                                            {{ $item->label }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="flex items-center mt-4">
                                <input id="checked-checkbox" type="checkbox" wire:model="term"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checked-checkbox"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> <button
                                        type="button" data-modal-toggle="modalTerm"
                                        class="text-[#86113E] md:text-base text-xs">
                                        term & Condition
                                    </button>is apply</label>


                            </div>
                        </div>
                    </div>
                    <div class="md:mr-10">


                        <button wire:click="submit"
                            class="w-full bg-[#86113E] {{ $term && $teamSelected ? 'block' : 'hidden' }}  text-base  text-white font-semibold block mt-5 rounded-lg  py-2 md:py-2.5 px-4">
                            Submit
                        </button>

                        <button
                            class="w-full {{ $term && $teamSelected ? 'hidden' : 'block' }}  bg-gray-400 cursor-not-allowed text-base  text-white font-semibold block mt-5 rounded-lg  py-2 md:py-2.5 px-4">
                            Submit
                        </button>


                    </div>
                </div>
            </div>
            <div class="absolute top-[30px] md:top-[50px] right-0 md:w-auto w-full">
                <div class="flex justify-center w-full">
                    <img alt="shape" class="md:h-[500px] md:w-[550px] w-auto h-36"
                        src={{ asset('shape/groupplayer.png') }} />
                </div>
            </div>
        </div>

        <!-- Term modal -->
        <div id="modalTerm" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
            <div class="relative w-full h-full  md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 md:w-1/2 mx-auto">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Term & Conditional
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="modalTerm">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6 md:h-auto h-56 overflow-y-auto">
                        <p>
                            Rules: <br>
                            1. Scan QRCode yang tersedia untuk mengikuti game Predict the Champion <br>
                            2. Setiap orang hanya dapat mengikuti Predict the Champion satu kalibr <br>
                            3. Total hadiah utama adalah Voucher senilai Rp. 500.000 <br>
                            4. Setiap orang yang mengikuti game diharapkan untuk menyertakan informasi kontak (Email dan
                            Nomor Telepon) yang dapat dihubungi <br> <br> <br>

                            Term and Condition: <br>
                            1. Pemenang dari game ini akan dihubungi langsung oleh Pihak Technova untuk proses
                            pengiriman
                            hadiah <br>
                            2. Semua keputusan Team Technova adalah mutlak dan tidak bisa diganggu gugat <br>

                        </p>
                    </div>
                    <!-- Modal footer -->
                    <div
                        class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-toggle="modalTerm" type="button"
                            class="text-white bg-[#86113E] hover:bg-[#86113E]focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-[#86113E]dark:focus:ring-bg-[#86113E]">
                            OK</button>

                    </div>
                </div>
            </div>
        </div>


        <div class="fixed inset-0 bg-black opacity-75 z-10 {{ $modalSubmit ? '' : 'hidden' }}">
        </div>
        <div
            class="fixed top-0 left-0 right-0 z-50  w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0  {{ $modalSubmit ? '' : 'hidden' }}  md:h-full">
            <div class="relative w-full h-full  md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 mx-auto md:w-1/2">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Complete your personal detail to continue
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            wire:click.prevent="handleModalSubmit">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <!-- Modal body -->

                    <div class="p-6 space-y-3">


                        <div>
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                            <input type="text" wire:model.defer="name" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                            @error('name')
                                <span class="text-sm text-rose-600 mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" wire:model.defer="email" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                            @error('email')
                                <span class="text-sm text-rose-600 mt-1">{{ $message }}</span>
                            @enderror

                        </div>
                        <div>
                            <label for="phone"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mobile
                                Phone</label>
                            <input type="number" wire:model.defer="phone" name="phone" id="phone"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                            @error('phone')
                                <span class="text-sm text-rose-600 mt-1">{{ $message }}</span>
                            @enderror

                        </div>
                        <div>
                            <label for="organization"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Oraganization</label>
                            <input type="text" wire:model.defer="organization" name="organization"
                                id="organization"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">

                            @error('organization')
                                <span class="text-sm text-rose-600 mt-1">{{ $message }}</span>
                            @enderror
                        </div>


                    </div>
                    <!-- Modal footer -->
                    <div
                        class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button wire:click.prevent="handleModalSubmit" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                        <button wire:click.prevent="store"
                            class="text-white bg-[#86113E] hover:bg-[#86113E]focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-[#86113E]dark:focus:ring-bg-[#86113E]">
                            Submit</button>
                    </div>

                </div>
            </div>
        </div>


    </div>

</div>
