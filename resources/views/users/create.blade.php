<x-app-layout>
    <x-slot name="header">
        {{ __('Create User') }}
    </x-slot>
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('users.index') }}">{{ __('Users') }}</a></li>
    </x-slot>

    <div class="row g-3 mb-3">
        <div class="col-lg-12">
            <div class="card">



                <div class="card-header">

                </div>
                <div class="card-body pt-0">
                    <form method="post" action="{{ route('users.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">{{ __('Name') }}</label>
                            <input type="text" name="name" id="name" class="form-control"
                                value="{{ old('name', '') }}" />
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email') }}</label>
                            <input type="email" name="email" id="email" class="form-control"
                                value="{{ old('email', '') }}" />
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="username" class="form-label">{{ __('Username') }}</label>
                            <input type="text" name="username" id="username" class="form-control"
                                value="{{ old('username', '') }}" />
                            @error('username')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input type="password" name="password" id="password" class="form-control" />
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="roles" class="form-label">{{ __('Roles') }}</label>
                            <select name="roles[]" id="roles" class="form-control" multiple="multiple">
                                @foreach ($roles as $id => $role)
                                    <option value="{{ $id }}"
                                        {{ in_array($id, old('roles', [])) ? ' selected' : '' }}>
                                        {{ $role }}
                                    </option>
                                @endforeach
                            </select>
                            @error('roles')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="photo">{{ __('Profile Picture') }}</label>
                            <input class="form-control" id="photo" type="file" name="profile_photo_path" />
                            @error('profile_photo_path')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="flex items-center ">
                            <x-jet-button>
                                {{ __('Create') }}
                            </x-jet-button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
