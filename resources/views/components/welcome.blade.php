<div class="p-6 lg:p-8">
    <h2 class="mt-8 text-2xl font-medium text-gray-900">
        Description
    </h2>
    <p class="mt-6 text-gray-500 leading-relaxed">
        L'application est un gestionnaire de tâches simple qui permet aux utilisateurs de créer, afficher, mettre à jour et supprimer des tâches. Chaque tâche aura un titre, une description, une date d'échéance et un statut (en cours, terminée, en attente).
    </p>
</div>

<div class="bg-gray-200 bg-opacity-25 p-8">
    <h2 class="mt-8 text-2xl font-medium text-gray-900">
        Fonctionnalités de base
    </h2>
    <div class="mt-6">
        <ol class="list-outside list-decimal space-y-3 text-gray-500 text-sm leading-relaxed">
            <li>
                Affichage de la liste des tâches : Les utilisateurs peuvent voir la liste de toutes les tâches existantes, avec leurs informations principales.
            </li>
            <li>
                Ajout de tâches : Les utilisateurs peuvent ajouter de nouvelles tâches en spécifiant le titre, la description, la date d'échéance et le statut.
            </li>
            <li>
                Mise à jour de tâches : Les utilisateurs peuvent modifier les informations d'une tâche existante, y compris son titre, sa description, sa date d'échéance et son statut.
            </li>
            <li>
                Suppression de tâches : Les utilisateurs peuvent supprimer des tâches existantes de la liste.
            </li>
        </ol>
    </div>
</div>

<div class="p-6 lg:p-8">
    <h2 class="mt-8 text-2xl font-medium text-gray-900">
        Screenshots
    </h2>
    <div class="grid grid-cols-3 gap-4 mt-4">
        @for ($i = 1; $i < 4; $i++)
            <x-modal-img url="{{ asset('screenshots/' . $i . '.png') }}" callback="openImage{{ $i }}" alt="app screenshot #{{ $i }}" />
        @endfor
    </div>
</div>
