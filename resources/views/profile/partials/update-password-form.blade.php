<section>
    <!--    
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>
-->
    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <table width="100%">
            <tr>
                <td width='40'><x-input-label for="current_password" :value="__('Contraseña Actual')" /></td>
                <td width='60'>
                    <x-text-input id="current_password" name="current_password" type="password" style="width: 70%;" class="mt-1 block w-full" autocomplete="current-password" />
                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                </td>
            </tr>
            <tr>
                <td>
                    <x-input-label for="password" :value="__('Nueva Contraseña')" />
                </td>
                <td>
                    <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" style="width: 70%;margin-right: 170px" autocomplete="new-password" />
                    <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                </td>
            </tr>
            <tr>
                <td>
                    <x-input-label for="password_confirmation" :value="__('Confirme su nueva contraseña')" />
                </td>
                <td>
                    <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" style="width: 70%;" autocomplete="new-password" />
                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                </td>
            </tr>
        </table>


        <div class="flex items-center gap-4">
            <x-primary-button><b>{{ __('Guardar') }}</b></x-primary-button>

            @if (session('status') === 'password-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>