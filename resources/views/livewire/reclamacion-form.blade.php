<div>
    <div>
        <style>
            .grupo-form label {
                color: gray;
            }

            .grupo-form .grupo-contenedor {
                display: flex;
                margin-bottom: 20px;
            }

            .grupo-form .grupo-item {
                width: 100%;
                margin-left: 10px;

            }
        </style>

        <form wire:submit.prevent="submitForm">

            <h5 style="    margin-top: 10%;">1. Identificación del Consumidor Reclamante</h5>
            <div class="grupo-form">
                <div class="grupo-contenedor">
                    <div class="grupo-item">
                        <label for="nombreCompleto">Nombre Completo</label>
                        <input wire:model.defer="nombre" type="text" id="nombreCompleto" name="nombreCompleto">
                        @error('nombre')
                            <span style="color: #ff00009e;font-size: 13px;">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <div class="grupo-contenedor">
                    <div class="grupo-item">
                        <label for="DNI">DNI / CE</label>
                        <input wire:model.defer="dni" type="text" id="DNI" name="DNI">
                        @error('dni')
                            <span style="color: #ff00009e;font-size: 13px;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grupo-item">
                        <label for="Teléfono">Teléfono</label>
                        <input wire:model.defer="telefono" type="text" id="Teléfono" name="Teléfono">
                        @error('telefono')
                            <span style="color: #ff00009e;font-size: 13px;">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <div class="grupo-contenedor">
                    <div class="grupo-item">
                        <label for="Correo">Correo Electrónico</label>
                        <input wire:model.defer="correo" type="email" id="Correo" name="Correo">
                        @error('correo')
                            <span style="color: #ff00009e;font-size: 13px;">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="grupo-contenedor">
                    <div class="grupo-item">
                        <label for="Dirección">Dirección</label>
                        <input wire:model.defer="direccion" type="text" id="Dirección" name="Dirección">
                        @error('direccion')
                            <span style="color: #ff00009e;font-size: 13px;">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="grupo-contenedor">
                    <div class="grupo-item">
                        <label for="Tutor">Tutor (Menores de Edad)</label>
                        <input wire:model.defer="tutor" type="text" id="Tutor" name="Tutor">

                    </div>
                </div>

            </div>


            <h5>2. Identificación del Producto o Servicio</h5>
            <div class="grupo-form">
                <div class="grupo-contenedor">
                    <div class="grupo-item">

                        <label for="opciones">Tipo</label>
                        <select wire:model.defer="tipo_producto_servicio" id="opciones"
                            style=" border: 0.5px solid #ccc; opacity: 0.5; border-radius: 5px;">
                            <option style="color: #9e9c9c;" value="1">Producto</option>
                            <option selected style="color: #9e9c9c;" value="2">Servicio
                            </option>
                        </select>

                    </div>
                    <div class="grupo-item">
                        <label for="Monto">Monto</label>
                        <input wire:model.defer="monto" type="number" id="Monto" name="Monto">
                        @error('monto')
                            <span style="color: #ff00009e;font-size: 13px;">{{ $message }}</span>
                        @enderror
                    </div>

                </div>
                <div class="grupo-contenedor">
                    <div class="grupo-item">
                        <label for="Descripción">Descripción</label>
                        <input wire:model.defer="descripcion_producto_servicio" type="text" id="Descripción"
                            name="Descripción">
                        @error('descripcion_producto_servicio')
                            <span style="color: #ff00009e;font-size: 13px;">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>


            <h5 style="    margin-top: 10%;">3. Detalle de Reclamación</h5>

            <div class="grupo-form">
                <div class="grupo-contenedor">
                    <div class="grupo-item">

                        <label for="opciones">Tipo</label>
                        <select wire:model.defer="tipo_reclamo_queja" id="opciones"
                            style=" border: 0.5px solid #ccc; opacity: 0.5; border-radius: 5px;">
                            <option style="color: #9e9c9c;" value="1">Reclamo</option>
                            <option selected style="color: #9e9c9c;" value="2">Queja
                            </option>
                        </select>

                    </div>
                </div>

                <div class="grupo-contenedor">
                    <div class="grupo-item">
                        <label for="Detalle">Detalle</label>
                        <textarea wire:model.defer="detalle_reclamo_queja" id="Detalle" name="Detalle"></textarea>
                        @error('detalle_reclamo_queja')
                            <span style="color: #ff00009e;font-size: 13px;">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="grupo-contenedor">
                    <div class="grupo-item">
                        <label for="Pedido">Pedido</label>
                        <textarea wire:model.defer="pedido" id="Pedido" name="Pedido"></textarea>
                        @error('pedido')
                            <span style="color: #ff00009e;font-size: 13px;">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <style>
                .alert {
                    position: relative;
                    padding: 15px;
                    background-color: #d4edda;
                    /* Cambiar el color de fondo a verde claro */
                    border: 1px solid #c3e6cb;
                    /* Cambiar el color del borde */
                    border-radius: 5px;
                    margin: 20px;
                }

                .alert-warning {
                    position: relative;
                    padding: 15px;
                    background-color: #edd4d4;
                    /* Cambiar el color de fondo a verde claro */
                    border: 1px solid #edd4d4;
                    /* Cambiar el color del borde */
                    border-radius: 5px;
                    margin: 20px;
                }

                .close-btn {
                    position: absolute;
                    top: 5px;
                    margin-top: 5px;
                    right: 10px;
                    cursor: pointer;
                    font-weight: bold;
                }
            </style>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
            @if ($success_message)
                <div class="alert">
                    <a href="#" onclick="return false" wire:click="$set('success_message', null)"> <i
                            class=" close-btn fa-solid fa-circle-xmark"></i></a>

                    <br>
                    <p>{{ $success_message }}</p>
                </div>
            @endif


            <button type="submit" wire:loading.attr="disabled" wire:target="submitForm">Enviar</button>







        </form>
    </div>
</div>
