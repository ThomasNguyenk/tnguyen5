<x-app-layout>
    <div class="container mx-auto">
        <br />
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div><br />
        @endif
        <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
            <thead>
            <tr class="text-center font-bold">
                <td class="border px-6 py-4">ID</td>
                <td class="border px-6 py-4">Nom</td>
                <td class="border px-6 py-4">Prénom</td>
                <td class="border px-6 py-4">Email</td>
            </tr>
            </thead>
            <tbody>

            @foreach($listeEtudiant as $etudiant)
                <tr>
                    <td class="border px-6 py-4">{{$etudiant['id']}}</td>
                    <td class="border px-6 py-4">{{$etudiant['nomEtudiant']}}</td>
                    <td class="border px-6 py-4">{{$etudiant['prenomEtudiant']}}</td>
                    <td class="border px-6 py-4">{{$etudiant['email']}}</td>


                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>

