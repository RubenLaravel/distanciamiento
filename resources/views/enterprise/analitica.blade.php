<x-plantilla>
    
    
    <div class="bg-gray-800 mt-2 pt-3">
        <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-5 text-xl text-white">
            <h3 class="font-bold text-2xl pl-6">Analitica</h3>
        </div>
    </div>

    <div class="flex flex-row flex-wrap flex-grow my-1">

        <div id="incidenciastotaleschart" class="w-full h-96 md:h-64 p-1 my-2 bg-gray-200">
            <script>
                const incidenciastotaleschart = new Chartisan({
                el: '#incidenciastotaleschart',
                url: "@chart('incidencias_totales_chart')",
                hooks: new ChartisanHooks()
                        // .colors(['blue'])
                        // .borderColors(['blue'])
                        .beginAtZero()
                        // .options({scales:{grid:{display:false}}})
                        
                        // .options({scales:{xAxes:{display:false, gridLines:{display:false}}}})
                        .datasets([{type:'line', fill:true, borderWidth:'2', borderColor:'Crimson', backgroundColor:'LightCoral', pointBackgroundColor:'Crimson', lineTension:'0.4'}])
                        // .labels([{borderColor:'Crimson'}])
                        .title({text:'INCIDENCIAS TOTALES POR DIA', fontSize: '14', fontColor:'black'})
                        .legend({ display: false, position: 'bottom', fontColor:'blue',labels:{fontColor:'Crimson'}})
                        .tooltip({titleAlign:'center', displayColors:false})
                        
                });
            </script>
        </div>

        <div id="incidenciasareaschart" class="w-full md:w-1/2 h-48 p-1 my-2 bg-gray-200">
            <script>
                const incidenciasareaschart = new Chartisan({
                el: '#incidenciasareaschart',
                url: "@chart('incidencias_areas_chart')",
                hooks: new ChartisanHooks()
                        .beginAtZero()
                        .datasets([{type:'bar', fill:true, borderWidth:'2', borderColor:'Crimson', backgroundColor:'LightCoral', pointBackgroundColor:'Crimson', lineTension:'0.4'}])
                        .title({text:'INCIDENCIAS TOTALES POR AREAS', fontSize: '14', fontColor:'black'})
                        .legend({ display: false, position: 'bottom', fontColor:'blue',labels:{fontColor:'Crimson'}})
                        .tooltip({titleAlign:'center', displayColors:false})
                        
                });
            </script>
        </div>
        
        <div id="incidenciaspersonaschart" class="w-full md:w-1/2 h-48 p-1 my-2 bg-gray-200">
            <script>
                const incidenciaspersonaschart = new Chartisan({
                el: '#incidenciaspersonaschart',
                url: "@chart('incidencias_personas_chart')",
                hooks: new ChartisanHooks()
                        .beginAtZero()
                        .datasets([{type:'bar', fill:true, borderWidth:'2', borderColor:'Crimson', backgroundColor:'LightCoral', pointBackgroundColor:'Crimson', lineTension:'0.4'}])
                        .title({text:'INCIDENCIAS TOTALES POR PERSONAS', fontSize: '14', fontColor:'black'})
                        .legend({ display: false, position: 'bottom', fontColor:'blue',labels:{fontColor:'Crimson'}})
                        .tooltip({titleAlign:'center', displayColors:false})
                        
                });
            </script>
        </div>
    </div>
</x-plantilla>