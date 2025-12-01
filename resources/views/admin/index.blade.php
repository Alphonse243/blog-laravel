<x-layouts.app>
   

<div class="p-4 bg-gray-50 min-h-screen">

  <h2 class="text-2xl font-bold mb-6 text-gray-800">📊 Tableau de Bord des Projets (Design Expert)</h2>

  <div class="hidden sm:block shadow-xl rounded-lg overflow-hidden">
    <table class="min-w-full divide-y divide-gray-200">
      <thead class="bg-indigo-600 text-white">
        <tr>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
            Nom 
          </th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
            Statut
          </th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
            email
          </th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
            Date Limite
          </th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-200">

            @forelse ($Users as $item)
                <tr class="hover:bg-indigo-50 transition duration-300 ease-in-out transform hover:scale-[1.005] cursor-pointer">
                    <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">
                        {{ $item->name }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                        Terminé
                    </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ $item->email }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ $item->created_at }}
                    </td>
                </tr>
            @empty
                <p> AUcun utilisateur  </p>
            @endforelse
            {{-- <tr class="hover:bg-indigo-50 transition duration-300 ease-in-out transform hover:scale-[1.005] cursor-pointer">
                <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">
                Landing Page V3
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    Terminé
                </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                Design & Marketing
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                2025-01-15
                </td>
            </tr>
            <tr class="hover:bg-indigo-50 transition duration-300 ease-in-out transform hover:scale-[1.005] cursor-pointer">
                <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">
                Refonte du Dashboard
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                    En Cours
                </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                Développement
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                2025-03-01
                </td>
            </tr>
            <tr class="hover:bg-indigo-50 transition duration-300 ease-in-out transform hover:scale-[1.005] cursor-pointer opacity-0" id="project-3">
                <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">
                Audit Sécurité
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                    Bloqué
                </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                Sécurité
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                2025-02-20
                </td>
            </tr> --}}
            
      </tbody>
      {{ $Users->links()  }}
    </table>
  </div>

  <div class="sm:hidden space-y-4">

    <div class="bg-white shadow-md rounded-lg p-4 border-l-4 border-green-500 transition duration-300 ease-in-out hover:shadow-lg">
        <div class="flex justify-between items-center mb-2">
            <p class="text-lg font-bold text-gray-900">Landing Page V3</p>
            <span class="px-2 py-1 text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Terminé</span>
        </div>
        <p class="text-sm text-gray-600">
            <span class="font-medium text-gray-700">Équipe:</span> Design & Marketing
        </p>
        <p class="text-sm text-gray-600">
            <span class="font-medium text-gray-700">Date Limite:</span> 2025-01-15
        </p>
    </div>

    <div class="bg-white shadow-md rounded-lg p-4 border-l-4 border-yellow-500 transition duration-300 ease-in-out hover:shadow-lg">
        <div class="flex justify-between items-center mb-2">
            <p class="text-lg font-bold text-gray-900">Refonte du Dashboard</p>
            <span class="px-2 py-1 text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">En Cours</span>
        </div>
        <p class="text-sm text-gray-600">
            <span class="font-medium text-gray-700">Équipe:</span> Développement
        </p>
        <p class="text-sm text-gray-600">
            <span class="font-medium text-gray-700">Date Limite:</span> 2025-03-01
        </p>
    </div>
    
    <div class="bg-white shadow-md rounded-lg p-4 border-l-4 border-red-500 transition duration-300 ease-in-out hover:shadow-lg opacity-0" id="card-3">
        <div class="flex justify-between items-center mb-2">
            <p class="text-lg font-bold text-gray-900">Audit Sécurité</p>
            <span class="px-2 py-1 text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Bloqué</span>
        </div>
        <p class="text-sm text-gray-600">
            <span class="font-medium text-gray-700">Équipe:</span> Sécurité
        </p>
        <p class="text-sm text-gray-600">
            <span class="font-medium text-gray-700">Date Limite:</span> 2025-02-20
        </p>
    </div>
  </div>
</div>
    <script>
        // // Script pour l'animation d'apparition progressive (Fade In)

        // document.addEventListener('DOMContentLoaded', () => {
        // // Cibler la ligne et la carte à animer
        // const rowToAnimate = document.getElementById('project-3');
        // const cardToAnimate = document.getElementById('card-3');

        // // Ajouter la classe d'opacité après un court délai (100ms)
        // // Cela donne l'impression que les données se chargent progressivement.
        // setTimeout(() => {
        //     if (rowToAnimate) {
        //         // Utiliser une transition CSS pour une apparition douce
        //         rowToAnimate.classList.remove('opacity-0');
        //         rowToAnimate.classList.add('opacity-100', 'transition', 'duration-500', 'ease-out');
        //     }
        //     if (cardToAnimate) {
        //         cardToAnimate.classList.remove('opacity-0');
        //         cardToAnimate.classList.add('opacity-100', 'transition', 'duration-500', 'ease-out');
        //     }
        // }, 100); 
        // // La première ligne/carte pourrait être animée à 0ms, la seconde à 50ms, la troisième à 100ms, etc.
        // });
    </script>
</x-layouts.app> 