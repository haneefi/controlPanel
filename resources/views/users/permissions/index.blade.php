<x-app-layout>
    <x-slot name="header">

        {{ __('User Permissions') }}

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
                                href="{{ route('users.permissions.create') }}"><span class="fas fa-plus me-1"
                                    data-fa-transform="shrink-3"></span>{{ __('Add Permission') }}</span></a></div>
                    </div>
                </div>
                <div class="card-body pt-0">


                    <div class="table-responsive scrollbar">
                        <table class="table table-hover table-striped overflow-hidden">
                            <thead>
                                <tr>
                               
                                    <th scope="col">{{ __('Permissions') }}</th>
                                    <th scope="col">{{ __('Action') }}</th>
                         
                            
                                 
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($permissions as $permission)
                                    <tr>
                                        <td>{{ $permission->title }}</td>
                                  
                                        


                                        <td class="text-end">
                                            <div>
                                             


                                                <form class="w-auto btn p-0"
                                                    action="{{ route('users.permissions.destroy', $permission->id) }}" method="POST"
                                                    onsubmit="return confirm('Are you sure?');">
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
