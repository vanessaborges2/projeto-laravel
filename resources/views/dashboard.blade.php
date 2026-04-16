@extends('layout')

@section('conteudo')

    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Vendas</h5>
                    <canvas id="chartVendas"></canvas>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Usuários</h5>
                    <canvas id="chartUsuarios"></canvas>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Receita</h5>
                    <canvas id="chartReceita"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Linha inferior -->
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Crescimento</h5>
                    <canvas id="chartLinha"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Distribuição</h5>
                    <canvas id="chartPizza"></canvas>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Gráfico de barras - Vendas
    new Chart(document.getElementById('chartVendas'), {
        type: 'bar',
        data: {
            labels: ['Jan', 'Fev', 'Mar', 'Abr'],
            datasets: [{
                label: 'Vendas',
                data: [12, 19, 8, 15],
                backgroundColor: '#0d6efd'
            }]
        }
    });

    // Gráfico de barras - Usuários
    new Chart(document.getElementById('chartUsuarios'), {
        type: 'bar',
        data: {
            labels: ['Jan', 'Fev', 'Mar', 'Abr'],
            datasets: [{
                label: 'Usuários',
                data: [5, 10, 7, 14],
                backgroundColor: '#198754'
            }]
        }
    });

    // Gráfico de barras - Receita
    new Chart(document.getElementById('chartReceita'), {
        type: 'bar',
        data: {
            labels: ['Jan', 'Fev', 'Mar', 'Abr'],
            datasets: [{
                label: 'Receita',
                data: [1000, 2000, 1500, 2500],
                backgroundColor: '#ffc107'
            }]
        }
    });

    // Gráfico de linha
    new Chart(document.getElementById('chartLinha'), {
        type: 'line',
        data: {
            labels: ['Jan', 'Fev', 'Mar', 'Abr'],
            datasets: [{
                label: 'Crescimento',
                data: [3, 7, 4, 9],
                borderColor: '#dc3545',
                fill: false
            }]
        }
    });

    // Gráfico de pizza
    new Chart(document.getElementById('chartPizza'), {
        type: 'pie',
        data: {
            labels: ['Produto A', 'Produto B', 'Produto C'],
            datasets: [{
                data: [30, 50, 20],
                backgroundColor: ['#0d6efd', '#198754', '#dc3545']
            }]
        }
    });
</script>

@endsection