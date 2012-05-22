var fb_json = new Array();
var fb_http_request = new Array();

//MsgKlasse
function fb_Msg(title, likes, comments, link) {
    this.title = title;
    this.likes = likes;
    this.comments = comments;
    this.link = link;
    this.weight = parseFloat(likes) + (parseFloat(comments) * 2);

    fb_Msg.prototype.getTitle = function () {
        return this.title;
    }
    fb_Msg.prototype.getLikes = function () {
        return this.likes;
    }
    fb_Msg.prototype.getComments = function () {
        return this.comments;
    }
    fb_Msg.prototype.getWeight = function () {
        return this.weight;
    }
    fb_Msg.prototype.getLink = function () {
        return this.link;
    }
}

// Hilfsfunktionen
function fb_makeRequest(id, attribute, count) {
    fb_http_request[count] = new XMLHttpRequest();
    var url = "data/fb2json_politiker.php?id=" + id + "&attribute=" + attribute;
    fb_http_request[count].open("GET", url, true);
    fb_http_request[count].onreadystatechange = function () {
        var done = 4, ok = 200;
        if (fb_http_request[count].readyState == done
            && fb_http_request[count].status == ok) {
            fb_json[count] = JSON.parse(fb_http_request[count].responseText);
            fb_handleRequest(count);
        }
    };
    fb_http_request[count].send(null);
}

function fb_handleRequest(count) {
    switch (count) {
        case 0:
            document.getElementById("SeiteUndLikes").innerHTML = "Die Seite von "
                + fb_json[count].name
                + " gef&auml;llt "
                + fb_json[count].likes
                + " Personen.";
            break;
        case 1:
            var msgs = new Array();
            for (var i in fb_json[count].data) {
                if (fb_json[count].data[i].message != undefined) {
                    msgs.push(new fb_Msg(fb_json[count].data[i].message,
                        fb_json[count].data[i].likes.count,
                        fb_json[count].data[i].comments.count,
                        fb_json[count].data[i].actions[0].link));
                }
            }
            msgs = msgs.sort(function (a, b) {
                return +b.getWeight() - +a.getWeight();
            });
            for (var i = 0; i <= 2; i++) {
                document.getElementById("M" + (i + 1)).innerHTML = "<a href='"
                    + msgs[i].getLink()
                    + "'>"
                    + msgs[i].getTitle()
                    + "</a>";
                document.getElementById("M" + (i + 1) + "Likes").innerHTML += msgs[i]
                    .getLikes();
                document.getElementById("M" + (i + 1) + "Comments").innerHTML += msgs[i]
                    .getComments();
            }
            break;
    }
}

// Requestfunktion
function fb_request(id, attribute, count) {
    fb_makeRequest(id, attribute, count++);
}

var fb_counter = 0;
// Counter 0: Seite und Likes
fb_request('HorstSeehofer', '', fb_counter);
fb_counter++;
// Counter 1: Events
fb_request('HorstSeehofer', 'posts', fb_counter);