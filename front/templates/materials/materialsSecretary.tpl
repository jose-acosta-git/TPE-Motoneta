<div class="container my-5">
    <h1 class="my-5 text-center">Modificar materiales aceptados</h3>
    <div class="d-flex justify-content-center my-5">
        <a href="formulario-insertar-material" class="btn btn-primary text-center custom-button">Agregar nuevo</a>
    </div>
    <div class="secretary-materials-table">
        <div class="row d-flex">
            <div class="col-3 col-md-2">Título</div>
            <div class="col-3 col-md-6">Descripción</div>
            <div class="col-3 col-md-2">Imagen</div>
            <div class="col-3 col-md-2">Acciones</div>
        </div>
        {if $materials|count == 0}
            <p class="mt-5">No se encontraron materiales</p>
        {else if}
            {foreach from=$materials item=material}
                <div class="row d-block d-md-flex">
                    <div class="col-md-2">
                        {$material->nombre_material}
                    </div>
                    <div class="col-md-6">
                        {$material->condicion_entrega}
                    </div>
                    <div class="col-md-2">
                        {if $material->imagen_material !== ''}
                            <img src="{$material->imagen_material}" class="card-img" alt="...">
                        {else if}
                            <img src=./back/images/imageEmpty.jpeg class="card-img" alt="...">
                        {/if}
                    </div>
                    <div class="col-md-2">
                        <a href="formulario-editar-material/{$material->id_material}">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <a href="eliminar-material/{$material->id_material}">
                            <i class="fas fa-trash"></i>
                        </a>
                    </div>
                </div>
            {/foreach}
        {/if}
    </div>
</div>