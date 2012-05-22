function tm_dataRow(key, value) {
    this.key = key;
    this.value = value;
}

function tm_Punkt(x, y) {
    this.x = x;
    this.y = y;
    tm_Punkt.prototype.getX = tm_getX;
    tm_Punkt.prototype.getY = tm_getY;
    tm_Punkt.prototype.newX = tm_newX;
    tm_Punkt.prototype.newY = tm_newY;
}
function tm_getX() {
    return this.x;
}
function tm_getY() {
    return this.y;
}
function tm_newX(x) {
    this.x += x;
}
function tm_newY(y) {
    this.y += y;
}

function tm_getData(statement) {
    var querystatement = "data/berlin_open_data2xml.php?statement=" + statement;

    var data = new Array(); // dataarray;

    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        var xmlhttp = new XMLHttpRequest();
    } else {// code for IE6, IE5
        var xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.open("GET", querystatement, false);
    xmlhttp.send();
    var xmlDoc = xmlhttp.responseXML;

    var x = xmlDoc.getElementsByTagName('dataRow');
    // = 0; i < x.length; i++
    for (var i = 0; i < x.length; i++) {
        data.push(new tm_dataRow(x[i].firstChild.textContent,
            x[i].lastChild.textContent));
    }
    return data;
}

function tm_getSize(data) {

    var size = 0;
    for (var i = 0; i < data.length; i++) {
        size = size + parseFloat(data[i].value);
    }
    return size;
}

function tm_getPercentage(data, size) {

    var percentage = new Array();
    for (var i = 0; i < data.length; i++) {
        percentage[i] = data[i].value / size * 100;
    }
    return percentage;
}

function tm_doIt(canvasId, tooltipId, statement, padding, txtCount, colortheme) {

    // Canvas erfassen
    var canvas = document.getElementById(canvasId);
    // Hoehe und Breite erfassen
    if (canvas == null) {
        setTimeout("tm_doIt('canvas1', 'tooltipId', '', 40, 6, 'eitco')",100);
    } else {
        var width = canvas.width;
        var height = canvas.height;

        // Tooltipcontainer erfassen
        var tooltip = document.getElementById(tooltipId);

        // sortierten Datensatz erfassen
        var data = tm_getData(statement).sort(function (a, b) {
            return +b.value - +a.value;
        });

        // prozentuale Werte ermitteln
        var percentage = tm_getPercentage(data, tm_getSize(data));

        // Canvas erstellen
        canvasContext = canvas.getContext('2d');

        // Array mit moeglichen Farben
        var color = new Array();
        color['orange'] = new Array('#FF7F00', '#CD6600', '#EE9A00', '#FF7F50');
        color['green'] = new Array('#006400', '#32CD32', '#3CB371', '#698B22');
        color['blue'] = new Array('#00008B', '#483D8B', '#104E8B', '#008B8B');
        color['red'] = new Array('#8B0000', '#8B0A50', '#CD0000', '#EE5C42');
        color['colorful'] = new Array('#8B0000', '#104E8B', '#008B8B', '#EE7600');
        color['corp'] = new Array('#083064', '#2A5086', '#4C72A8', '#6E94CA');
        color['eitco'] = new Array('#7E196B', '#03478E', '#00B9E0', '#8C8C8C');

        function tm_fillCanvas() {
            // Startort
            var standpunkt = new tm_Punkt(0, padding);
            // noch verf�gbare Fl�che
            var flaeche = new tm_Punkt(width, (height - (2 * padding)));

            // Rechtecke zeichnen

            // Festlegung der Rahmendicke und Rahmenfarbe
            canvasContext.strokeStyle = '#fff';
            canvasContext.lineWidth = 3;

            // H�he und Breite der zu bemalenden Fl�che
            var picHoehe = flaeche.getY();
            var picBreite = flaeche.getX();
            // Schleife f�r Rechtecke
            for (var i = 0; i < data.length; i++) {
                // Farbe fuer Rechteck und Rahmen Festlegen
                canvasContext.fillStyle = color[colortheme][i
                    % (color[colortheme].length)];

                // Rechteckstartpunkte
                var xRect = standpunkt.getX();
                var yRect = standpunkt.getY();

                // Flaeche ist breiter als hoch:
                if (parseFloat(flaeche.getX()) >= parseFloat(flaeche.getY())) {
                    var hoehe = flaeche.getY();
                    var breite = (picHoehe * picBreite * (percentage[i] / 100))
                        / hoehe;
                    canvasContext.fillRect(xRect, yRect, breite, hoehe);
                    canvasContext.strokeRect(xRect, yRect, breite, hoehe);
                    standpunkt.newX(breite);
                    flaeche.newX(-breite);
                } else { // Flaeche ist hoeher als breit
                    var breite = flaeche.getX();
                    var hoehe = (picHoehe * picBreite * (percentage[i] / 100))
                        / breite;
                    canvasContext.fillRect(xRect, yRect, breite, hoehe);
                    canvasContext.strokeRect(xRect, yRect, breite, hoehe);
                    standpunkt.newY(hoehe);
                    flaeche.newY(-hoehe);
                }

            }

            // Text drueberlegen
            // Stand wieder zur�ck setzen
            standpunkt = new tm_Punkt(0, padding);
            flaeche = new tm_Punkt(width, (height - (2 * padding)));
            // Textformatierungen
            canvasContext.font = "12px 'tahoma'";
            canvasContext.fillStyle = 'white';
            canvasContext.textAlign = 'start';
            canvasContext.textBaseline = 'top';
            // Schleife um Text dr�berzulegen
            for (var i = 0; i < data.length; i++) {
                // Textposition bestimmen
                var xText = (standpunkt.getX() + 3);
                var yText = (standpunkt.getY() + 3);
                // Text schreiben
                canvasContext.fillText(data[i].key, xText, yText);
                // neuen Standpunkt bestimmen
                if (parseFloat(flaeche.getX()) >= parseFloat(flaeche.getY())) {
                    var hoehe = flaeche.getY();
                    var breite = (picHoehe * picBreite * (percentage[i] / 100))
                        / hoehe;
                    standpunkt.newX(breite);
                    flaeche.newX(-breite);
                } else { // Flaeche ist hoeher als breit
                    var breite = flaeche.getX();
                    var hoehe = (picHoehe * picBreite * (percentage[i] / 100))
                        / breite;
                    standpunkt.newY(hoehe);
                    flaeche.newY(-hoehe);
                }
            }
            // Ueberschrift
            canvasContext.font = "15px 'tahoma'";
            canvasContext.textAlign = 'center';
            canvasContext.textBaseline = 'middle';
            canvasContext.fillStyle = '#000';
            var xText = width / 2;
            var yText = padding / 2;
            canvasContext.fillText("Vorhandene KiTa- Plaetze pro PLZ", xText, yText);
        }

        tm_fillCanvas();
    }
}