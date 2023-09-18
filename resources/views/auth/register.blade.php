<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Nume -->

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

          <!--Prenume -->

          <div>
            <x-input-label for="name" :value="__('Prenume')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
         </div>

        <!-- Email Address -->

        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Telefon -->

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="tel" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Tip -->

        <div  class="mt-4">
            <x-input-label for="judet" :value="__('Tip')" />
            <select id="tip" class="mt-1 text-sl">
	            <option value="elev">Elev</option>
	            <option value="student">Student</option>
	            <option value="absolvent">Absolvent</option>
	            <option value="reprezentat">Reprezentat Firma</option>
                <option value="vizitator">Vizitator</option>
            </select>
        </div>

        <!-- Judet-->

        <div  class="mt-4">
            <x-input-label for="judet" :value="__('Judet')" />
            <select id="judet" class="mt-1 text-sl">
	            <option value="AB">Alba</option>
	            <option value="AG">Arges</option>
	            <option value="AR">Arad</option>
	            <option value="B" >Bucuresti</option>
                <option value="BC">Bacau</option>
	            <option value="BH">Bihor</option>
	            <option value="BN">Bistrita</option>
	            <option value="BR">Braila</option>
	            <option value="BT">Botosani</option>
	            <option value="BV">Brasov</option>
	            <option value="BZ">Buzau</option>
	            <option value="CJ">Cluj</option>
	            <option value="CL">Calarasi</option>
	            <option value="CS">Caras-Severin</option>
	            <option value="CT">Constanta</option>
	            <option value="CV">Covasna</option>
	            <option value="DB">Dambovita</option>
	            <option value="DJ">Dolj</option>
	            <option value="GJ">Gorj</option>
	            <option value="GL">Galati</option>
	            <option value="GR">Giurgiu</option>
	            <option value="HD">Hunedoara</option>
	            <option value="HG">Harghita</option>
	            <option value="IF">Ilfov</option>
	            <option value="IL">Ialomita</option>
	            <option value="IS">Iasi</option>
	            <option value="MH">Mehedinti</option>
	            <option value="MM">Maramures</option>
	            <option value="MS">Mures</option>
	            <option value="NT">Neamt</option>
	            <option value="OT">Olt</option>
	            <option value="PH">Prahova</option>
	            <option value="SB">Sibiu</option>
	            <option value="SJ">Salaj</option>
	            <option value="SM">Satu-Mare</option>
	            <option value="SV">Suceava</option>
	            <option value="TL">Tulcea</option>
	            <option value="TM">Timis</option>
	            <option value="TR">Teleorman</option>
	            <option value="VL">Valcea</option>
	            <option value="VN">Vrancea</option>
	            <option value="VS">Vaslui</option>
            </select>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
