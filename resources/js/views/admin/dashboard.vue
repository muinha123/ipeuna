<template>
    <div>
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-xs-12 align-self-center">
                    <h5 class="font-medium text-uppercase mb-0">Dashboard</h5>
                </div>
                <div class="col-lg-9 col-md-8 col-xs-12 align-self-center">
                    <nav aria-label="breadcrumb" class="mt-2 float-md-right float-left">
                        <ol class="breadcrumb mb-0 justify-content-end p-0">
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase">Vendas Diárias</h5>
                        <div class="text-right">
                            <span class="text-muted">Renda Hoje</span>
                            <h2 class="mt-2 display-7"><sup><i class="ti-arrow-up text-success"></i></sup>$12,000</h2>
                        </div>
                        <span class="text-success">25%</span>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase">Vendas Semanais</h5>
                        <div class="text-right">
                            <span class="text-muted">Renda Mensal</span>
                            <h2 class="mt-2 display-7"><sup><i class="ti-arrow-down text-danger"></i></sup>$5,000</h2>
                        </div>
                        <span class="text-success">30%</span>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase">Vendas Mensais</h5>
                        <div class="text-right">
                            <span class="text-muted">Renda Mensal</span>
                            <h2 class="mt-2 display-7"><sup><i class="ti-arrow-up text-info"></i></sup>$10,000</h2>
                        </div>
                        <span class="text-info">60%</span>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase">Vendas Anuais</h5>
                        <div class="text-right">
                            <span class="text-muted">Renda Anual</span>
                            <h2 class="mt-2 display-7"><sup><i class="ti-arrow-up text-inverse"></i></sup>$9,000</h2>
                        </div>
                        <span class="text-inverse">20%</span>
                        <div class="progress">
                            <div class="progress-bar bg-inverse" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs manage-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#dashboardProductsLow" role="tab" aria-selected="true">
                                <span class="d-md-block">Produtos com estoque baixo</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="dashboardProductsLow" role="tabpanel">
                            <div class="bg-light">
                                <div class="table-responsive border-top manage-table px-4 py-3">
                                    <a href="" class="btn btn-primary btn-rounded btn-sm"><i class="far fa-file-excel mr-2"></i>Relatório</a>
                                    <table class="table no-wrap">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="border-0"></th>
                                                <th scope="col" class="border-0">Produto</th>
                                                <th scope="col" class="border-0">Total Vendido</th>
                                                <th scope="col" class="border-0">Total Comprado</th>
                                                <th scope="col" class="border-0">Quantidade Atual</th>
                                                <th scope="col" class="border-0">Preço</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="advanced-table active">
                                                <td>
                                                    <img src="/imagens/notfound.png" class="rounded-circle" width="30">
                                                </td>
                                                <td>Produto</td>
                                                <td>250</td>
                                                <td>260</td>
                                                <td>10</td>
                                                <td>R$ 11,50</td>
                                            </tr>
                                            <tr class="advanced-table active">
                                                <td>
                                                    <img src="/imagens/notfound.png" class="rounded-circle" width="30">
                                                </td>
                                                <td>Produto</td>
                                                <td>250</td>
                                                <td>260</td>
                                                <td>10</td>
                                                <td>R$ 11,50</td>
                                            </tr>
                                            <tr class="advanced-table active">
                                                <td>
                                                    <img src="/imagens/notfound.png" class="rounded-circle" width="30">
                                                </td>
                                                <td>Produto</td>
                                                <td>250</td>
                                                <td>260</td>
                                                <td>10</td>
                                                <td>R$ 11,50</td>
                                            </tr>
                                            <tr class="advanced-table active">
                                                <td>
                                                    <img src="/imagens/notfound.png" class="rounded-circle" width="30">
                                                </td>
                                                <td>Produto</td>
                                                <td>250</td>
                                                <td>260</td>
                                                <td>10</td>
                                                <td>R$ 11,50</td>
                                            </tr>
                                            <tr class="advanced-table active">
                                                <td>
                                                    <img src="/imagens/notfound.png" class="rounded-circle" width="30">
                                                </td>
                                                <td>Produto</td>
                                                <td>250</td>
                                                <td>260</td>
                                                <td>10</td>
                                                <td>R$ 11,50</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase text-success">Produtos Mais Vendidos</h5>
                        <ul class="list-style-none country-state mt-4">
                            <li class="mb-4">
                                <h2 class="mb-0">6350</h2>
                                <small>Produto 1</small>
                                <div class="float-right">48% <i class="fas fa-level-up-alt text-success"></i></div>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 48%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="mb-4">
                                <h2 class="mb-0">6350</h2>
                                <small>Produto 1</small>
                                <div class="float-right">48% <i class="fas fa-level-up-alt text-success"></i></div>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 48%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase text-danger">Produtos Menos Vendidos</h5>
                        <ul class="list-style-none country-state mt-4">
                            <li class="mb-4">
                                <h2 class="mb-0">1250</h2>
                                <small>Produto 5</small>
                                <div class="float-right">75% <i class="fas fa-level-down-alt text-danger"></i></div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 48%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="mb-4">
                                <h2 class="mb-0">1250</h2>
                                <small>Produto 5</small>
                                <div class="float-right">75% <i class="fas fa-level-down-alt text-danger"></i></div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 48%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

    }
</script>

<style scoped>

</style>
