<x-app-layout>
    <x-slot name="header">

        {{ __('User Roles') }}

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
                                href="{{ route('users.roles.create') }}"><span class="fas fa-plus me-1"
                                    data-fa-transform="shrink-3"></span>{{ __('Add Role') }}</span></a></div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    @if (session('status'))
                        <div class="alert alert-success border-2 d-flex align-items-center" role="alert">
                            <div class="bg-success me-3 icon-item"><span
                                    class="fas fa-check-circle text-white fs-3"></span></div>
                            <p class="mb-0 flex-1">{{ session('status') }}</p>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="table-responsive scrollbar">
                        <table class="table table-hover table-striped overflow-hidden">
                            <thead>
                                <tr>

                                    <th scope="col">{{ __('Role') }}</th>
                                    <th scope="col">{{ __('Action') }}</th>



                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($roles as $role)
                                    <tr>
                                        <td>{{ $role->title }}</td>




                                        <td class="text-end">
                                            <div>
                                                {{-- <a class="btn p-0" type="button" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="View"
                                                    href="{{ route('users.roles.show', $role->id) }}"><span
                                                        class="text-500 fas fa-eye col"></span></a> --}}
                                                <a class="btn p-0" type="button" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Edit"
                                                    href="{{ route('users.roles.edit', $role->id) }}"><span
                                                        class="text-500 fas fa-edit col"></span></a>


                                                <form class="w-auto btn p-0"
                                                    action="{{ route('users.roles.destroy', $role->id) }}"
                                                    method="POST" onsubmit="return confirm('Are you sure?');">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <button class="btn p-0 " type="submit" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Delete"><span
                                                            class="text-500 fas fa-trash-alt"></span></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
