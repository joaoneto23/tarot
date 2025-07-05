<!-- Modal -->
<div id="confirmationModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50">
  <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md">
    <h2 id="modalTitle" class="text-lg font-semibold mb-4">Tem a certeza?</h2>
    <p id="modalMessage" class="mb-6">Tem a certeza que pretende continuar com esta ação?</p>
    <div class="flex justify-end space-x-4">
      <button id="modalCancel" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">Cancelar</button>
      <form id="modalForm" method="post">
        <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">Confirmar</button>
      </form>
    </div>
  </div>
</div>
