<div data-role="content">

    <select name="map-select" id="map-select" data-mini="true">
        <option value="1">Raucherschutzgesetz</option>
        <option value="2">Datenschutz</option>
        <option value="3">Autobahnmaut</option>
        <option value="4">Finanzpolitik</option>
        <option value="5">Umweltpolitik</option>
    </select>

    <script type="text/javascript">
        $('#map-select').change(function()
        {
            $('#mapbild').attr('src', 'imgs/map/'+$(this).attr('value')+'.png');
        });
    </script>

    <br /><br />
    <a href="#landtag_berichte_map_trends" data-transition="fade"><img id="mapbild" src="imgs/map/1.png" width="100%"></a>
</div>