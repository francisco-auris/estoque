<template>
    <div>
        <form>
            <div class="row">
                <div class="col-md-12 col-12">
                    <label>Marca</label>
                    <input type="text" class="form-control" maxlength="50">
                </div>
                <div class="col-md-4 col-6">
                    <label>Sabor</label>
                    <input type="text" class="form-control" maxlength="30">
                </div>
                <div class="col-md-4 col-6">
                    <label>Tipo</label>
                    <select class="form-control">
                        <option>Lata</option>
                        <option>Pet</option>
                        <option>Garrafa</option>
                    </select>
                </div>
                <div class="col-md-4 col-6">
                    <label>Litragem (mL)</label>
                    <input type="number" class="form-control" min="0" step="10">
                </div>
                <div class="col-md-4 col-6">
                    <label>Quantidade</label>
                    <input type="number" class="form-control" min="0" step="1">
                </div>
                <div class="col-md-4 col-6">
                    <label>Valor (R$)</label>
                    <input type="number" class="form-control" min="0" step="0.05" value="0">
                </div>
                <div class="col-12">
                    <button class="btn btn-primary mt-3">Salvar</button>
                </div>
            </div>
        </form>
    </div>
</template>