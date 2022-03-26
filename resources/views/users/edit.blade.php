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
                    <form action="{{route('users.update', $user)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name" class="form-label">Nom</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Veuillez saisir le nom..." value="{{old('name') ?? $user->name }} ">
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Veuillez saisir l'email..." value="{{old('email') ?? $user->email }} ">
                        </div>
                        <div class="form-group">
                            <label for="roles" class="form-label">Role</label>
                            <input type="text" name="roles" id="roles" class="form-control" placeholder="Veuillez saisir le role..." value="{{old('roles') ?? $user->roles }} ">
                            <br>
                        </div>
                        <input type="submit" value="Modifier" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
