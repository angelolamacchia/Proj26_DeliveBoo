@extends('layouts.dashboard')

@section('content')

    <div style="height: 100%" class="admin_plates_container restaurants_list_container plates_list">
        <h1 style="text-align: center">LE STATISTICHE</h1>
        <div class="container ms_container">
            <div class="col-12">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>

    <script>
        var orders = <?php echo json_encode($order_details); ?>;
        var month = [];

        orders.forEach(order => {
            month.push(order.data.slice(5, 7));
        });

        var gennaio = [];
        var febbraio = [];
        var marzo = [];
        var aprile = [];
        var maggio = [];
        var giugno = [];
        var luglio = [];
        var agosto = [];
        var settembre = [];
        var ottobre = [];
        var novembre = [];
        var dicembre = [];

        month.forEach(element => {

            switch (element) {
                case '01':
                    gennaio.push(element);
                    break;
                case '02':
                    febbraio.push(element);
                    break;
                case '03':
                    marzo.push(element);
                    break;
                case '04':
                    aprile.push(element);
                    break;
                case '05':
                    maggio.push(element);
                    break;
                case '06':
                    giugno.push(element);
                    break;
                case '07':
                    luglio.push(element);
                    break;
                case '08':
                    agosto.push(element);
                    break;
                case '09':
                    settembre.push(element);
                    break;
                case '10':
                    ottobre.push(element);
                    break;
                case '11':
                    novembre.push(element);
                    break;
                case '12':
                    dicembre.push(element);
                    break;
            }
        });

        let myChart = document.getElementById('myChart').getContext('2d');

        let massPopChart = new Chart(myChart, {
            type: 'line',
            data: {
                labels: ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto',
                    'Settembre', 'Ottobre', 'Novembre', 'Dicembre'
                ],
                datasets: [{
                    label: 'Ordini',
                    data: [gennaio.length, febbraio.length, marzo.length, aprile.length, maggio.length,
                        giugno.length, luglio.length, agosto.length, settembre.length, ottobre.length,
                        novembre.length, dicembre.length
                    ],
                    borderColor: 'rgb(1, 83, 90)',
                    tension: 0.1,
                }]
            },
            // options:{}
        });

        console.log(month);
    </script>
@endsection
