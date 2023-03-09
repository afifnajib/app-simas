<x-app-layout>
    <x-slot name="header">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="min-w-0 flex-1">
              <h3 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-2xl sm:tracking-tight">{{ __('Create Student') }}</h3>
              <div class="mt-2 flex items-center text-sm text-gray-500">
                <div class="bg-white flex items-center flex-wrap tracking-[.030rem]">
                    <ul class="flex items-center">
                        <li class="inline-flex items-center">
                        <a href="{{ route('dashboard') }}" class="text-gray-600 hover:text-blue-500">
                            <svg class="w-5 h-auto fill-current mx-1 text-gray-400 hover:fill-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10 19v-5h4v5c0 .55.45 1 1 1h3c.55 0 1-.45 1-1v-7h1.7c.46 0 .68-.57.33-.87L12.67 3.6c-.38-.34-.96-.34-1.34 0l-8.36 7.53c-.34.3-.13.87.33.87H5v7c0 .55.45 1 1 1h3c.55 0 1-.45 1-1z"/></svg>
                        </a>
                        <svg class="w-5 h-auto fill-current mx-1 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z"/></svg>
                        </li>
                        <li class="inline-flex items-center">
                        <a href="{{ route('students.student') }}" class="text-gray-600 hover:text-blue-500">
                            Student
                        </a>
                        <svg class="w-5 h-auto fill-current mx-1 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z"/></svg>
                        </li>
                        <li class="inline-flex items-center text-blue-500">
                        Create
                        </li>
                    </ul>
                </div>
              </div>
            </div>
        </div>
    </x-slot>
    <div class="py-12 px-12">
        <div class="max-w-7xl mx-auto sm:px-10 lg:px-12">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-10 text-gray-900">
                    <span class="mt-3">
                        <svg width="24" height="24" class="absolute min-[320px]:hidden lg:right-[23.7rem] md:right-28 lg:block md:block sm:hidden" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 276.167 276.167' fill='#d6d6d6'>
                            <path d='M33.144,2.471C15.336,2.471,0.85,16.958,0.85,34.765s14.48,32.293,32.294,32.293s32.294-14.486,32.294-32.293 S50.951,2.471,33.144,2.471z'/>
                            <path d='M137.663,2.471c-17.807,0-32.294,14.487-32.294,32.294s14.487,32.293,32.294,32.293c17.808,0,32.297-14.486,32.297-32.293 S155.477,2.471,137.663,2.471z'/>
                            <path d='M243.873,67.059c17.804,0,32.294-14.486,32.294-32.293S261.689,2.471,243.873,2.471s-32.294,14.487-32.294,32.294 S226.068,67.059,243.873,67.059z'/>
                            <path d='M243.038,170.539c17.811,0,32.294-14.483,32.294-32.293c0-17.811-14.483-32.297-32.294-32.297 s-32.306,14.486-32.306,32.297C210.732,156.056,225.222,170.539,243.038,170.539z'/>
                            <path d='M136.819,170.539c17.804,0,32.294-14.483,32.294-32.293c0-17.811-14.478-32.297-32.294-32.297 c-17.813,0-32.294,14.486-32.294,32.297C104.525,156.056,119.012,170.539,136.819,170.539z'/>
                            <path d='M243.771,209.108c-17.804,0-32.294,14.483-32.294,32.294c0,17.804,14.49,32.293,32.294,32.293 c17.811,0,32.294-14.482,32.294-32.293S261.575,209.108,243.771,209.108z'/>
                        </svg>
                    </span>
                    <form method="POST" action="{{ route('students.store') }}">
                        @csrf
                        @method("POST")
                    
                        <!-- Name -->
                        <div class="mt-8">
                            <x-input-label for="name" :value="__('Nama')" />
                            <x-text-input id="name" class="block mt-1 w-full capitalize" type="text" name="name" required autofocus autocomplete="name"  placeholder="Nama Lengkap"/>
                        </div>

                        <!-- NIPD -->
                        <div class="mt-4">
                            <x-input-label for="nipd" :value="__('NIPD/S')" />
                            <x-text-input id="nipd" class="block mt-1 w-full" type="number" name="nipd" :value="old('nipd')" required autofocus autocomplete="nipd"  placeholder="Nomor Induk Peserta Didik/Siswa"/>
                            <x-input-error :messages="$errors->get('nipd')" class="mt-2" />
                        </div>

                        {{-- Gender --}}
                        <div class="mt-4 space-y-4">
                            <x-input-label for="nipd" :value="__('Jenis Kelamin')" />
                            <div class="flex items-center">
                                {{-- Male --}}
                                <input id="laki-laki" name="gender" value="L" type="radio" {{ old('gender')=='L' ? 'checked': '' }} 
                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" />
                                <label for="laki-laki" class="ml-3 block text-md font-medium text-gray-700">Laki - Laki</label>
                                {{-- Female --}}
                                <input id="perempuan" name="gender" value="P" type="radio" {{ old('gender')=='P' ? 'checked': '' }} 
                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500 ml-5" />
                              <label for="perempuan" class="ml-3 block text-md font-medium text-gray-700">Perempuan</label>
                            </div>
                        </div>

                        {{-- NISN --}}
                        <div class="mt-4">
                            <x-input-label for="nisn" :value="__('NISN')" />
                            <x-text-input id="nisn" class="block mt-1 w-full" type="number" name="nisn" :value="old('nisn')" required autocomplete="nisn" placeholder="Nomor Induk Siswa Nasional"/>
                            <x-input-error :messages="$errors->get('nisn')" class="mt-2" />
                        </div>

                        {{-- Birth Place --}}
                        <div class="mt-4">
                            <x-input-label for="birthplace" :value="__('Tempat Lahir')" />
                            <x-text-input id="birthplace" class="block mt-1 w-full" type="text" name="birthplace" required autocomplete="birthplace" placeholder="Contohnya: Tanjung Jati"/>
                        </div>

                        {{-- Birth Date --}}
                        <div class="mt-4">
                            <x-input-label for="birthdate" :value="__('Tanggal Lahir')" />
                            <x-text-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" required autocomplete="birthdate" placeholder="Tanggal Lahir Anda"/>
                        </div>

                        {{-- Religion --}}
                        <div class="mt-4">
                            <x-input-label for="religion" :value="__('Agama')" />
                            <select id="religion" name="religion" autocomplete="religion" class="mt-1 w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm select-custom">
                                <option value="Islam" {{ old('religion')=='Islam' ? 'selected': '' }}>Islam</option>
                                <option value="Kristen" {{ old('religion')=='Kristen' ? 'selected': '' }}>Kristen</option>
                                <option value="Hindu" {{ old('religion')=='Hindu' ? 'selected': '' }}>Hindu</option>
                                <option value="Buddha" {{ old('religion')=='Buddha' ? 'selected': '' }}>Buddha</option>
                                <option value="Konghucu" {{ old('religion')=='Konghucu' ? 'selected': '' }}>Konghucu</option>
                                <option value="select-lainnya">Lainnya</option>
                            </select>
                            <x-text-input id="religion" class="mt-1 w-full select-custom-input hidden" type="text" name="religion" autocomplete="religion" placeholder="Agama Anda"/>
                        </div>
                        
                        {{-- Address --}}
                        <div class="mt-4">
                            <x-input-label for="address" :value="__('Alamat')" />
                            <x-text-input-area id="address" class="block mt-1 w-full" type="textarea" name="address" required autocomplete="address" placeholder="Alamat Lengkap Anda"/>
                        </div>

                        {{-- Grid --}}
                        <div class="grid grid-cols-6 gap-6 mt-4">
                            {{-- RT --}}
                            <div class="col-span-3 sm:col-span-3">
                                <x-input-label-optional for="rt" :value="__('RT')" />
                                <x-text-input id="rt" class="block mt-1 w-full" type="text" name="rt" autocomplete="rt" placeholder="RT" />
                            </div>
                              {{-- RW --}}
                            <div class="col-span-3 sm:col-span-3">
                                <x-input-label-optional for="rw" :value="__('RW')" />
                                <x-text-input id="rw" class="block mt-1 w-full" type="text" name="rw" autocomplete="rw" placeholder="RW" />
                             </div>
                        </div>

                        {{-- Grid 2 --}}
                        <div class="lg:grid lg:grid-cols-9 lg:gap-6 lg:mt-4">
                            {{-- Hamlet --}}
                            <div class="col-span-3 min-[320px]:mt-4">
                                <x-input-label for="hamlet" :value="__('Dusun')" />
                                <x-text-input id="hamlet" class="block mt-1 w-full" type="text" name="hamlet" required autocomplete="hamlet" placeholder="Dusun" />
                            </div>
                            {{-- Urban village --}}
                            <div class="col-span-3 min-[320px]:mt-4">
                                <x-input-label for="urban_village" :value="__('Kelurahan')" />
                                <x-text-input id="urban_village" class="block mt-1 w-full" type="text" name="urban_village" required autocomplete="urban_village" placeholder="Kelurahan" />
                            </div>
                            {{-- Sub disrict --}}
                            <div class="col-span-3 min-[320px]:mt-4">
                                <x-input-label for="sub_disrict" :value="__('Kecamatan')" />
                                <x-text-input id="sub_disrict" class="block mt-1 w-full" type="text" name="sub_disrict" required autocomplete="sub_disrict" placeholder="Kecamatan" />
                            </div>
                        </div>

                        {{-- Grid 3 --}}
                        <div class="lg:grid lg:grid-cols-6 lg:gap-6 lg:mt-4 mt-4">
                            {{-- Postal Code --}}
                            <div class="col-span-3 min-[320px]:mt-4">
                                <x-input-label for="postal_code" :value="__('Kode Pos')" />
                                <x-text-input id="postal_code" class="block mt-1 w-full" type="text" name="postal_code" required autocomplete="postal_code" placeholder="kode pos" />
                            </div>
                            {{-- Type Stay --}}
                            <div class="col-span-3 min-[320px]:mt-4">
                                <x-input-label-optional for="type_stay" :value="__('Tinggal Bersama')" />
                                <select id="type_stay" name="type_stay" autocomplete="type_stay" class="mt-1 w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm select-custom">
                                    <option value="Bersama Orang Tua" {{ old('type_stay')=='Bersama Orang Tua' ? 'selected': '' }}>Bersama Orang Tua</option>
                                    <option value="Bersama Saudara" {{ old('type_stay')=='Bersama Saudara' ? 'selected': '' }}>Bersama Saudara</option>
                                    <option value="Bersama Kerabat" {{ old('type_stay')=='Bersama Kerabat' ? 'selected': '' }}>Bersama Kerabat</option>
                                    <option value="Bersama Nenek/Kakek" {{ old('type_stay')=='Bersama Nenek/Kakek' ? 'selected': '' }}>Bersama Nenek/Kakek</option>
                                    <option value="select_lainnya_2">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        
                        {{-- Transport --}}
                        <div class="col-span-3 min-[320px]:mt-4">
                            <x-input-label-optional for="transport" :value="__('Alat Transportasi')" />
                            <x-text-input id="transport" class="block mt-1 w-full" type="text" name="transport" autocomplete="transport" placeholder="Contoh: Sepeda Motor/Jalan Kaki" />
                        </div>

                        {{-- Grid 4 --}}
                        <div class="grid grid-cols-6 gap-6 mt-4">
                            {{-- Telp --}}
                            <div class="col-span-3 sm:col-span-3">
                                <x-input-label-optional for="telp" :value="__('Nomor Telp')" />
                                <x-text-input id="telp" class="block mt-1 w-full" type="text" name="telp" autocomplete="telp" placeholder="Contoh: 08976" />
                            </div>
                              {{-- HP --}}
                            <div class="col-span-3 sm:col-span-3">
                                <x-input-label for="hp" :value="__('Nomor Hp')" />
                                <x-text-input id="hp" class="block mt-1 w-full" type="text" name="hp" :value="old('hp')" required autocomplete="hp" placeholder="Contoh: 089787" />
                             </div>
                        </div>
                    
                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder=""/>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        {{-- Skhun --}}
                        <div class="mt-4">
                            <x-input-label-optional for="skhun" :value="__('SKHUN')" />
                            <x-text-input id="skhun" class="block mt-1 w-full" type="text" name="skhun" autocomplete="skhun" placeholder="asd"/>
                        </div>

                        {{-- Receiver kps --}}
                        <div class="mt-4">
                            <x-input-label-optional for="receiver_kps" :value="__('Penerima KPS')" />
                            <x-text-input id="receiver_kps" class="block mt-1 w-full" type="text" name="receiver_kps" autocomplete="receiver_kps" placeholder="asd"/>
                        </div>

                        {{-- No. KPS --}}
                        <div class="mt-4">
                            <x-input-label-optional for="no_kps" :value="__('Nomor KPS')" />
                            <x-text-input id="rno_kps" class="block mt-1 w-full" type="text" name="no_kps" autocomplete="no_kps" placeholder="asd"/>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a> --}}
                            <x-danger-button class="ml-4" type="reset">Clear</x-danger-button>
                    
                            <x-custom-button class="ml-4 bg-blue-500 text-gray-200" type="submit">
                                {{ __('Submit') }}
                            </x-custom-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    const selectCustom = document.querySelector('.select-custom')
    const selectCustomInput = document.querySelector('.select-custom-input')
    selectCustom.addEventListener("change", () => {
        selectCustom.value == 'select-lainnya' ? selectCustomInput.classList.remove("hidden") : selectCustomInput.classList.add("block");
        selectCustom.value == 'select-lainnya' ? selectCustom.classList.add('hidden') : selectCustom.classList.add('block');
    });
</script>