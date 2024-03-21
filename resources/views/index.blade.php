<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <title>Monitoring</title>
    <link rel="icon" href="assets/icon.png" type="image/png">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div class="shadow-box top-bar d-flex justify-content-between align-items-center">
        <img src="assets/logo-small.png" alt="Logo PDU">
        <div class="d-flex">
            <div class="tab-active d-flex align-items-center">
                <img src="assets/ic_monitor.svg" alt="ic_monitor">
                <span>Monitoring</span>
            </div>
            <div class="tab-inactive d-flex align-items-center">
                <img src="assets/ic_history.svg" alt="ic_history">
                <span>History</span>
            </div>
        </div>
        <div class="d-flex align-items-center gap-3">
            <img src="assets/ic_admin.svg" alt="ic_admin">
            <div class="d-flex flex-column">
                <span class="title">Budi Bambang</span>
                <span class="bodytext gray">Admin</span>
            </div>
            <div class="d-flex justify-content-center align-items-center" style="height: 36px; width: 36px;">
                <a href="{{ route('login') }}">
                    <img src="assets/ic_logout.svg" alt="ic_logout">
                </a>
            </div>
        </div>
    </div>

    <div class="d-flex gap-3 px-3 ">
        <!-- Legenda chart 1 -->
        <div class="w-100 shadow-box px-3 py-2">
            <div class="mb-2">
                <div class="d-flex align-items-center gap-3">
                    <span class="bodytext">Air Rate (scfm)</span>
                    <div class="tag">512</div>
                </div>
                <div style="height: 2px; background-color: rgba(255, 99, 132, 1);"></div>
                <div class="d-flex align-items-center justify-content-between">
                    <span class="bodytext gray">0</span>
                    <span class="bodytext gray">2000</span>
                </div>
            </div>
            <div class="mb-2">
                <div class="d-flex align-items-center gap-3">
                    <span class="bodytext">Mud Conduct. In</span>
                    <div class="tag">512</div>
                </div>
                <div style="height: 2px; background-color: rgba(54, 162, 235, 1);"></div>
                <div class="d-flex align-items-center justify-content-between">
                    <span class="bodytext gray">0</span>
                    <span class="bodytext gray">m m h o</span>
                    <span class="bodytext gray">10000</span>
                </div>
            </div>
            <div class="mb-2">
                <div class="d-flex align-items-center gap-3">
                    <span class="bodytext">Block Position</span>
                    <div class="tag">2479</div>
                </div>
                <div style="height: 2px; background-color: rgba(255, 206, 86, 1);"></div>
                <div class="d-flex align-items-center justify-content-between">
                    <span class="bodytext gray">0</span>
                    <span class="bodytext gray">m</span>
                    <span class="bodytext gray">150</span>
                </div>
            </div>
            <div class="mb-2">
                <div class="d-flex align-items-center gap-3">
                    <span class="bodytext">WOB</span>
                    <div class="tag">27</div>
                </div>
                <div style="height: 2px; background-color: rgba(75, 192, 192, 1);"></div>
                <div class="d-flex align-items-center justify-content-between">
                    <span class="bodytext gray">0</span>
                    <span class="bodytext gray">klb</span>
                    <span class="bodytext gray">50</span>
                </div>
            </div>
            <div>
                <div class="d-flex align-items-center gap-3">
                    <span class="bodytext">ROP</span>
                    <div class="tag">1381</div>
                </div>
                <div style="height: 2px; background-color: rgba(153, 102, 255, 1);"></div>
                <div class="d-flex align-items-center justify-content-between">
                    <span class="bodytext gray">0</span>
                    <span class="bodytext gray">m/hr</span>
                    <span class="bodytext gray">2000</span>
                </div>
            </div>
        </div>

        <!-- Legenda chart 2 -->
        <div class="w-100 shadow-box px-3 py-2">
            <div class="mb-2">
                <div class="d-flex align-items-center gap-3">
                    <span class="bodytext">Torque</span>
                    <div class="tag">512</div>
                </div>
                <div style="height: 2px; background-color: rgba(255, 99, 132, 1);"></div>
                <div class="d-flex align-items-center justify-content-between">
                    <span class="bodytext gray">0</span>
                    <span class="bodytext gray">klb.ft</span>
                    <span class="bodytext gray">2000</span>
                </div>
            </div>
            <div class="mb-2">
                <div class="d-flex align-items-center gap-3">
                    <span class="bodytext">Mud Conduct. Out</span>
                    <div class="tag">512</div>
                </div>
                <div style="height: 2px; background-color: rgba(54, 162, 235, 1);"></div>
                <div class="d-flex align-items-center justify-content-between">
                    <span class="bodytext gray">0</span>
                    <span class="bodytext gray">m m h o</span>
                    <span class="bodytext gray">10000</span>
                </div>
            </div>
            <div class="mb-2">
                <div class="d-flex align-items-center gap-3">
                    <span class="bodytext">RPM Total</span>
                    <div class="tag">2479</div>
                </div>
                <div style="height: 2px; background-color: rgba(255, 206, 86, 1);"></div>
                <div class="d-flex align-items-center justify-content-between">
                    <span class="bodytext gray">0</span>
                    <span class="bodytext gray">150</span>
                </div>
            </div>
            <div class="mb-2">
                <div class="d-flex align-items-center gap-3">
                    <span class="bodytext">Hookload</span>
                    <div class="tag">27</div>
                </div>
                <div style="height: 2px; background-color: rgba(75, 192, 192, 1);"></div>
                <div class="d-flex align-items-center justify-content-between">
                    <span class="bodytext gray">0</span>
                    <span class="bodytext gray">klb</span>
                    <span class="bodytext gray">50</span>
                </div>
            </div>
        </div>

        <!-- Legenda chart 3 -->
        <div class="w-100 shadow-box px-3 py-2">
            <div class="mb-2">
                <div class="d-flex align-items-center gap-3">
                    <span class="bodytext">Air Rate (scfm)</span>
                    <div class="tag">512</div>
                </div>
                <div style="height: 2px; background-color: rgba(255, 99, 132, 1);"></div>
                <div class="d-flex align-items-center justify-content-between">
                    <span class="bodytext gray">0</span>
                    <span class="bodytext gray">2000</span>
                </div>
            </div>
            <div class="mb-2">
                <div class="d-flex align-items-center gap-3">
                    <span class="bodytext">Mud Conduct. In</span>
                    <div class="tag">512</div>
                </div>
                <div style="height: 2px; background-color: rgba(54, 162, 235, 1);"></div>
                <div class="d-flex align-items-center justify-content-between">
                    <span class="bodytext gray">0</span>
                    <span class="bodytext gray">10000</span>
                </div>
            </div>
            <div class="mb-2">
                <div class="d-flex align-items-center gap-3">
                    <span class="bodytext">Block Position</span>
                    <div class="tag">2479</div>
                </div>
                <div style="height: 2px; background-color: rgba(255, 206, 86, 1);"></div>
                <div class="d-flex align-items-center justify-content-between">
                    <span class="bodytext gray">0</span>
                    <span class="bodytext gray">150</span>
                </div>
            </div>
            <div class="mb-2">
                <div class="d-flex align-items-center gap-3">
                    <span class="bodytext">WOB</span>
                    <div class="tag">27</div>
                </div>
                <div style="height: 2px; background-color: rgba(75, 192, 192, 1);"></div>
                <div class="d-flex align-items-center justify-content-between">
                    <span class="bodytext gray">0</span>
                    <span class="bodytext gray">50</span>
                </div>
            </div>
            <div>
                <div class="d-flex align-items-center gap-3">
                    <span class="bodytext">ROP</span>
                    <div class="tag">1381</div>
                </div>
                <div style="height: 2px; background-color: rgba(153, 102, 255, 1);"></div>
                <div class="d-flex align-items-center justify-content-between">
                    <span class="bodytext gray">0</span>
                    <span class="bodytext gray">2000</span>
                </div>
            </div>
        </div>

        <!-- Legenda chart 4 -->
        <div class="w-100 shadow-box px-3 py-2">
            <div class="mb-2">
                <div class="d-flex align-items-center gap-3">
                    <span class="bodytext">Air Rate (scfm)</span>
                    <div class="tag">512</div>
                </div>
                <div style="height: 2px; background-color: rgba(255, 99, 132, 1);"></div>
                <div class="d-flex align-items-center justify-content-between">
                    <span class="bodytext gray">0</span>
                    <span class="bodytext gray">2000</span>
                </div>
            </div>
            <div class="mb-2">
                <div class="d-flex align-items-center gap-3">
                    <span class="bodytext">Mud Conduct. In</span>
                    <div class="tag">512</div>
                </div>
                <div style="height: 2px; background-color: rgba(54, 162, 235, 1);"></div>
                <div class="d-flex align-items-center justify-content-between">
                    <span class="bodytext gray">0</span>
                    <span class="bodytext gray">10000</span>
                </div>
            </div>
            <div class="mb-2">
                <div class="d-flex align-items-center gap-3">
                    <span class="bodytext">Block Position</span>
                    <div class="tag">2479</div>
                </div>
                <div style="height: 2px; background-color: rgba(255, 206, 86, 1);"></div>
                <div class="d-flex align-items-center justify-content-between">
                    <span class="bodytext gray">0</span>
                    <span class="bodytext gray">150</span>
                </div>
            </div>
            <div class="mb-2">
                <div class="d-flex align-items-center gap-3">
                    <span class="bodytext">WOB</span>
                    <div class="tag">27</div>
                </div>
                <div style="height: 2px; background-color: rgba(75, 192, 192, 1);"></div>
                <div class="d-flex align-items-center justify-content-between">
                    <span class="bodytext gray">0</span>
                    <span class="bodytext gray">50</span>
                </div>
            </div>
            <div>
                <div class="d-flex align-items-center gap-3">
                    <span class="bodytext">ROP</span>
                    <div class="tag">1381</div>
                </div>
                <div style="height: 2px; background-color: rgba(153, 102, 255, 1);"></div>
                <div class="d-flex align-items-center justify-content-between">
                    <span class="bodytext gray">0</span>
                    <span class="bodytext gray">2000</span>
                </div>
            </div>
        </div>

    </div>

    <div class="d-flex gap-3 p-3" style="height: 70vh;">
        <div class="shadow-box p-2 flex-grow-1">
            <canvas class="chart" id="myChart1"></canvas>
        </div>
        <div class="shadow-box p-2 flex-grow-1">
            <canvas class="chart" id="myChart2"></canvas>
        </div>
        <div class="shadow-box p-2 flex-grow-1">
            <canvas class="chart" id="myChart3"></canvas>
        </div>
        <div class="shadow-box p-2 flex-grow-1">
            <canvas class="chart" id="myChart4"></canvas>
        </div>
    </div>    
    
    <script>
        var dataVar1 = @json($data->pluck('BitDepth (m)')->toArray());
        var dataVar2 = @json($data->pluck('Scfm')->toArray());
        var dataVar3 = @json($data->pluck('MudCondIn (mmho)')->toArray());
        var dataVar4 = @json($data->pluck('BlockPos (m)')->toArray());
        var dataVar5 = @json($data->pluck('WOB (klb)')->toArray());
        var dataVar6 = @json($data->pluck('ROPi (m/hr)')->toArray());
        var dataVar7 = @json($data->pluck('BVDepth (m)')->toArray());
        var dataVar8 = @json($data->pluck('MudCondOut (mmho)')->toArray());
        var dataVar9 = @json($data->pluck('Torque (klb.ft)')->toArray());
        var dataVar10 = @json($data->pluck('RPM')->toArray());
        var dataVar11 = @json($data->pluck('Hkld (klb)')->toArray());
        var dataVar12 = @json($data->pluck('LogDepth(m)')->toArray());
        var dataVar13 = @json($data->pluck('H2S_1 (ppm)')->toArray());
        var dataVar14 = @json($data->pluck('MudFlowOutp')->toArray());
        var dataVar15 = @json($data->pluck('TotSPM')->toArray());
        var dataVar16 = @json($data->pluck('SpPress (Psi)')->toArray());
        var dataVar17 = @json($data->pluck('MudFlowIn (gpm)')->toArray());
        var dataVar18 = @json($data->pluck('CO2_1 (%)')->toArray());
        var dataVar19 = @json($data->pluck('Gas (%)')->toArray());
        var dataVar20 = @json($data->pluck('MudTempIn (°C)')->toArray());
        var dataVar21 = @json($data->pluck('MudTempOut (°C)')->toArray());
        var dataVar22 = @json($data->pluck('TankVolTot (bbl)')->toArray());

        var waktu = {!! $waktu !!};
        console.log(waktu);
    </script>    
    
    <script src="js/script.js"></script>
</body>

</html>