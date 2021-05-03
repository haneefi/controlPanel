<x-app-layout>
    <x-slot name="header">
        {{ __('Show User') }}
    </x-slot>
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('users.index') }}">{{ __('Users') }}</a></li>
    </x-slot>


    <div class="row g-3 mb-3">
        <div class="col-lg-12">
            <div class="card">



                <div class="card-header">


                  
                    <div class="row align-items-center">
                        <div class="col d-flex align-items-center">

                            <button class="btn btn-falcon-default btn-sm ms-sm-1" type="button"
                                onclick="location.reload()"><span class="fas fa-redo"></span></button>


                        </div>
                        <div class="col-auto"><a class="btn btn-falcon-primary btn-sm"
                                href="{{ route('users.index') }}"><span class="fas fa-chevron-left me-1"
                                    data-fa-transform="shrink-3"></span> {{ __('Back to list') }}</span></a></div>
                    </div>

                </div>
                <div class="card-body pt-0">
                    <table class="table table-hover table-striped overflow-hidden">
                        <tr class="border-b">
                            <th scope="col" class="">

                                {{ __('ID') }}
                            </th>
                            <td class="">
                                {{ $user->id }}
                            </td>
                        </tr>
                        <tr class="border-b">
                            <th scope="col" class="">

                                {{ __('Name') }}
                            </th>
                            <td class="">
                                {{ $user->name }}
                            </td>
                        </tr>
                        <tr class="border-b">
                            <th scope="col" class="">

                                {{ __('Email') }}
                            </th>
                            <td class="">
                                {{ $user->email }}
                            </td>
                        </tr>
                        <tr class="border-b">
                            <th scope="col" class="">
                                Username
                                {{ __('Username') }}
                            </th>
                            <td class="">
                                {{ $user->username }}
                            </td>
                        </tr>
                        <tr class="border-b">
                            <th scope="col" class="">

                                {{ __('Roles') }}
                            </th>
                            <td class="">
                                @foreach ($user->roles as $role)
                                    <span class="badge badge rounded-pill d-block p-2 badge-soft-primary">
                                        {{ $role->title }}
                                    </span>
                                @endforeach
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
