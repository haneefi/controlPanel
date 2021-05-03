<x-app-layout>
    <x-slot name="header">
        {{ __('Create Permission') }}
    </x-slot>
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('users.permissions.index') }}">{{ __('Permission') }}</a></li>
    </x-slot>

    <div class="row g-3 mb-3">
        <div class="col-lg-12">
            <div class="card">



                <div class="card-header">

                </div>
                <div class="card-body pt-0">
                    <form method="post" action="{{ route('users.permissions.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="title" class="form-label">{{ __('Permission') }}</label>
                            <input type="text" name="title" id="title" class="form-control"
                                value="{{ old('title', '') }}" />
                            @error('title')
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
