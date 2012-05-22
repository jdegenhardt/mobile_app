new TWTR.Widget({
    version:2,
    type:'search',
    search:'SZ_Politik',
    interval:30000,
    title:'Bayrischer Landtag',
    subject:'Aktuelle Geschehnisse',
    width:'auto',
    height:"100%",
    theme:{
        shell:{
            background:'#0063C6',
            color:'#FFFFFF'
        },
        tweets:{
            background:'#F1F1F1',
            color:'#000000',
            links:'#0063C6'
        }
    },
    features:{
        hashtags: true,
        timestamp: true,
        avatars: true,
        scrollbar:true,
        loop:true,
        live:false,
        behavior:'all'
    }
}).render().start();