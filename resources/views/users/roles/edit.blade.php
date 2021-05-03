<x-app-layout>
    <x-slot name="header">
        {{ __('   Edit Role') }}
    </x-slot>
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('users.roles.index') }}">{{ __('Users Roles') }}</a></li>
    </x-slot>
    <div class="row g-3 mb-3">
        <div class="col-lg-12">
            <div class="card">



                <div class="card-header">

                </div>
                <div class="card-body pt-0">
                    <form method="post" action="{{ route('users.roles.update', $role->id) }}">
                        @csrf
                        @method('put')

                        <div class="mb-3">
                            <label for="title" class="form-label"> {{ __('Role') }}</label>
                            <input type="text" name="title" id="title" class="form-control"
                                value="{{ old('title', $role->title) }}" />
                            @error('title')
                             <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        

                        

                        <div class="mb-3">
                            <label for="permission" class="form-label">{{ __('Permissions') }}</label>
                            <select name="permissions[]" id="permissions" class="form-select js-choice" multiple="multiple" size="1" data-options='{"removeItemButton":true,"placeholder":true}'>
                                @foreach ($permissions as $id => $permissions)
                                    <option value="{{ $id }}"
                                        {{ in_array($id, old('roles', $role->permissions->pluck('id')->toArray())) ? ' selected' : '' }}>
                                        {{ $permissions }}
                                    </option>
                                @endforeach
                            </select>
                            @error('roles')
                             <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="flex items-center ">
                            <x-jet-button>
                                {{ __('Edit') }}
                            </x-jet-button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
</x-app-layout>
