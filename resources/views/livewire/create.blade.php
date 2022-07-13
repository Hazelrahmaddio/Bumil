
<div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">

<div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

  <div class="fixed z-10 inset-0 overflow-y-auto">
    <div class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0">

    <div class="relative bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-lg sm:w-full">
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
            <form>
          <div class="sm:block sm:items-start">
            
                <div>
                    <h1 class="font-bold text-center mb-4">Create Post</h1>
                </div>
                <div>
                    <div class="mb-2">
                        <label for="title" class="block">Title</label>
                        <input type="text" name="title" class="shadow apperance-none w-full border rounded py-2 px-3 text-blue-900" placeholder="input post">
                    </div>
                    <div class="mb-2">
                        <label for="title" class="block">Description</label>
                        <textarea name="description" class="shadow apperance-none w-full border rounded py-2 px-3 text-blue-900" placeholder="input post"></textarea>
                    </div>
                </div>
            
            </div>
            </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm">
                    Submit</button>
                <button wire:click="hideModal()" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    Cancel</button>
                </div>
            </form>
             </div>
        </div>
  </div>
</div>
