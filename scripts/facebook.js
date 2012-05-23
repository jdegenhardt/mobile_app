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
function fb_request(id, attribute) {
    apiUrl = 'https://graph.facebook.com/'
    if (attribute != ''){
        attribute = '/'+ attribute;
    }
    token = 'AAACZCEZAB3PGkBALunsPJTKatfNov6KQgPbcwZBhk6UCn95OEurBfPk4KQowA3g7K8MLZBLQOutnLYKvDHFXShOX8JCRVuPnhhkux7vQ8gZDZD';
    url = apiUrl + id + attribute + '?access_token=' + token;
    $.getJSON(url, function (data){
        if (data.name){
            document.getElementById("SeiteUndLikes").innerHTML = "Die Seite von "
                + data.name
                + " gef&auml;llt "
                + data.likes
                + " Personen.";
        } else {
            var msgs = new Array();
            for (var i in data.data) {
                if (data.data[i].message != undefined) {
                    msgs.push(new fb_Msg(data.data[i].message,
                        data.data[i].likes.count,
                        data.data[i].comments.count,
                        data.data[i].actions[0].link));
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
        }
    })

}


fb_request('HorstSeehofer', '');
fb_request('HorstSeehofer', 'posts');