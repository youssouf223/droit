<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>NOM</td>
                                <td>EMAIL</td>
                                <td>Roles</td>
                                <td>Actions</td>
                            </tr>
                        </thead>
                        @foreach($users as $user)
                        <tbody>
                            <tr>
                                <th>{{ $user->id }}</th>
                                <th>{{ $user->name }}</th>
                                <th>{{ $user->email }}</th>
                                <th>{{ $user->roles }}</th>
                                @can('edit-users')
                                <th class="d-flex">
                                    <a href="{{ route('users.edit', $user) }}" class="btn btn-warning btn-block">Modifier</a>
                                    <form action="{{route('users.destroy', $user)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Supprimer" class="btn btn-danger btn-block">
                                    </form>
                                </th>
                                @endcan
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>