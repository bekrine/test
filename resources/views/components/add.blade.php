

<div>
    <div onclick="toggleModal('addUserModal')" class="flex items-center justify-center rounded-md bg-button-color px-4 py-2 ">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white"
            class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
        </svg>

        <span class="text-white ">Ajouter</span>
    </div>
</div>

<script>
    function toggleModal(modalID) {
        document.getElementById(modalID).classList.toggle("hidden");
        document.getElementById(modalID).classList.toggle("flex");
    }

  
  

    </script>