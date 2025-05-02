<?php

class Producto {
    public string $descripcion;
    public float $valor;
    public float $porc_descuento;

    public function __construct(string $descripcion, float $valor, float $porc_descuento) {
        $this->descripcion = $descripcion;
        $this->valor = $valor;
        $this->porc_descuento = $porc_descuento;
    }

    public function calcular_total(): float {
        $descuento = $this->valor * ($this->porc_descuento / 100);
        return $this->valor - $descuento;
    }
}

$productos = [
    new Producto("Macbook Pro Touch Bar 16 Pulgadas Core I9 64gb Ram 512gb Ssd", 1639.99, 0),
    new Producto("Monitor LG UltraWide 34\" FHD IPS 75Hz", 349.99, 10),
    new Producto("Teclado Mecánico Redragon K552 RGB Switch Blue", 49.99, 5),
];

?>

<html>
<head>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
<?php include "../common/header.php"; ?>
<main class="pt-16">
    <div class="relative h-full overflow-hidden before:absolute before:top-0 before:start-1/2 before:bg-[url('https://preline.co/assets/svg/examples/polygon-bg-element.svg')] dark:before:bg-[url('https://preline.co/assets/svg/examples-dark/polygon-bg-element.svg')] before:bg-no-repeat before:bg-top before:bg-cover before:size-full before:-z-1 before:transform before:-translate-x-1/2">
        <div class="text-gray-900 bg-gray-200">
            <div class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white shadow-md rounded-xl bg-clip-border">
                <div class="w-full justify-items-end my-5">
                    <a href="/productos/add.php" class="flex items-center justify-center text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:ring-slate-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-slate-600 dark:hover:bg-slate-700 focus:outline-none dark:focus:ring-slate-800">
                        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                        </svg>
                        Add product
                    </a>
                </div>

                <table class="w-full text-left table-auto min-w-max">
                    <thead class="p-4">
                        <tr class="p-4">
                            <th class="border-b border-slate-300 bg-blue-gray-50 p-4" style="width: 25%;">
                                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Nombre</p>
                            </th>
                            <th class="border-b border-slate-300 bg-blue-gray-50" style="width: 35%;">
                                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Descripción</p>
                            </th>
                            <th class="border-b border-slate-300 bg-blue-gray-50" style="width: 20%;">
                                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Precio</p>
                            </th>
                            <th class="border-b border-slate-300 bg-blue-gray-50 justify-items-center" style="width: 20%;">
                                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Acciones</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($productos as $producto): ?>
                        <tr>
                            <td class="border-b border-slate-200 px-4">
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                    <?= htmlspecialchars($producto->descripcion) ?>
                                </p>
                            </td>
                            <td class="border-b border-slate-200 px-4">
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                    Producto tecnológico
                                </p>
                            </td>
                            <td class="border-b border-slate-200 px-4">
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                    US$<?= number_format($producto->calcular_total(), 2) ?>
                                </p>
                            </td>
                            <td class="border-b border-slate-200 justify-items-center text-right">
                                <a href="/productos/show.php" class="text-slate-800 hover:text-blue-600 text-sm bg-white hover:bg-slate-100 border border-slate-200 rounded-l-lg font-medium px-4 py-2 inline-flex space-x-1 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <span class="hidden md:inline-block">View</span>
                                </a>
                                <a href="/productos/edit.php" class="text-slate-800 hover:text-blue-600 text-sm bg-white hover:bg-slate-100 border-y border-slate-200 font-medium px-4 py-2 inline-flex space-x-1 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                    <span class="hidden md:inline-block">Edit</span>
                                </a>
                                <a href="/productos/delete.php" class="text-slate-800 hover:text-blue-600 text-sm bg-white hover:bg-slate-100 border border-slate-200 rounded-r-lg font-medium px-4 py-2 inline-flex space-x-1 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21a48.108 48.108 0 00-3.478-.397m-12 .562a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916" />
                                    </svg>
                                    <span class="hidden md:inline-block">Delete</span>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<?php include "../common/footer.php"; ?>
</body>
</html>