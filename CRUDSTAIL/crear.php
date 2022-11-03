<script src="https://cdn.tailwindcss.com"></script>
<?php
 include("../EstructuraCuerpo/header.php");
?>
<br>

<div class="hidden sm:block"  aria-hidden="true">
  <div class="py-5">
    <div class="border-t border-gray-200"></div>
  </div>
</div>

<div class="mt-10 sm:mt-0;" >
<div class="md:grid md:grid-cols-3 md:gap-6">
    </div>
    <div class="mt-5 md:col-span-2 md:mt-0">
      <form action="#" method="POST" id="formulario">
        <div class="overflow-hidden shadow sm:rounded-md">
        <div class="bg-gray px-4 py-5 sm:p-6">
            <div class="grid grid-cols-6 gap-6">
            
            <div class="col-span-6 sm:col-span-3">
                <label for="first-name" class="block text-sm font-medium text-gray-700">Nombre del Producto</label>
                <input type="text" name="nombreProducto" id="nombreProducto" autocomplete="given-name" class="mt-1 block w-full rounded-md border border-purple-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="last-name" class="block text-sm font-medium text-gray-700">Cantidad</label>
                <input type="number" name="cantidad" id="last-name" autocomplete="family-name" class="mt-1 block w-full rounded-md border border-purple-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="email-address" class="block text-sm font-medium text-gray-700">Precio</label>
                <input type="number" name="precio" id="number" autocomplete="email" class="mt-1 block w-full rounded-md border border-purple-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
              </div>

              
              <div class="col-span-6 sm:col-span-3">
                <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripcion</label>
                <input type="text" name="descripcion" id="descripcion" class="mt-1 block w-full rounded-md border border-purple-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="country" class="block text-sm font-medium text-gray-700">Laboratorio</label>
                <select id="country" name="laboratorio" autocomplete="country-name" class="mt-1 block w-full rounded-md border border-purple-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                  <option>Inti</option>
                  <option>Technolab</option>
                  <option>LabQuimed</option>
                </select>
              </div>
              
            </div>
          </div>
          <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Guardar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
  <script src="../CRUDSTAIL/Constantes.js"></script>
<br><br><br>

<?php
 include("../EstructuraCuerpo/footer.php");
?>